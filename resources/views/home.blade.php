@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div>
                <div class="container">
                    <br><br>
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-3">
                            <a href="/post/{{ $post->slug }}">
                                <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                                <span>{{ $post->title }}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
