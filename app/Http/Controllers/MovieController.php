<?php

namespace App\Http\Controllers;

use App\Movie;
use function foo\func;

class MovieController extends Controller
{

    public function list()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function show(string $id)
    {
//        $movies = Movie::all();
//        foreach ($movies as $movie){
//            echo $movie->title;
//        }

        $movie = Movie::all()->where('id', '=', 1);
        return $movie;

    }

}
