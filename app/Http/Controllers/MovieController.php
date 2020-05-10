<?php

namespace App\Http\Controllers;

use App\Movie;
use App\WatchLater;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    //PParada filmu sarakstu
    public function list()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    //Parada konkreto filmu
    public function show(string $id)
    {
        $movie = Movie::all()->where('id', '=', $id);
        return view('movie', ['movie' => $movie, 'watch-later' => $this->watchLater($id)]);
    }

    //Pievieno watch later
    public function setWatchLater(int $id): void
    {
        $watchLater = new WatchLater();
        $watchLater->setAttribute('movie_id', $id);
        $watchLater->setAttribute('user_id', (int)Auth::id());

        //TODO: checkout saveOrFail
        try {
            $watchLater->save();
        } catch (QueryException $exception) {
            // querry exception happend here
        }
    }

    //Izdzes watch later
    public function deleteWatchLater(int $id): void
    {
        $watchLater = WatchLater::query()->select(['*'])->where('movie_id', '=', $id)->where('user_id', '=', (int)Auth::id());
        try {
            $watchLater->delete();
        } catch (QueryException $exception) {
            // querry exception happend here
        }
    }

    //Kad lietotats atver konkretu filmu, tad uz movie.blade tiks padota filma un sis true/false indikators, lai zinatu kada
    //dizaina radit pogu, tas ir "add to watch later" vai "remove from watch later"
    public function watchLater(int $id): bool
    {
        $dbWatchlater = WatchLater::all()->where('movie_id', '=', $id)->where('user_id', '=', (int)Auth::id());
        if ($dbWatchlater->isEmpty()) {
            $isAddedToWatchLater = false;
        } else {
            $isAddedToWatchLater = true;
        }
        return $isAddedToWatchLater;
    }

    //konkreta lietotaja visas filmas, kuras ir pievienotas pie watch later
    public function watchLaterList()
    {
        $movies = DB::table('movies')
            ->join('watch_laters', 'movies.id', '=', 'watch_laters.movie_id')
            ->select(['movies.*'])
            ->where('watch_laters.user_id', (int)Auth::id())->orderBy('movies.id')->get();

//        TODO: return view('IMPLEMENT NEW VIEW FOR WATCH LATER LIST FOR USER', ['watch-later-list' => $movies]);
    }
}
