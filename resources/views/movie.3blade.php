@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">



<!-- As a link -->
<nav class="navbar">
    <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
</nav>

<div class="container-fluid">


    @foreach($movie as $key => $data)
    <div class="row">
        <div class="col-md-12">
            <p class="title">{{$data->title}}</p>
            <p class='description'>{{$data->description}}</p>
        </div>
    </div>
    <iframe src="{{$data->movie_url}}" width="700px" height="500px" scrolling="no" marginwidth="0" marginheight="0"
        frameborder="1" allowfullscreen></iframe>



    @endforeach
</div>
@endsection