@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<form>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Movie name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Year">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
@endsection
