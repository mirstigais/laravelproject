<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
    body {
        background-image: url("https://pro2-bar-s3-cdn-cf6.myportfolio.com/735da3b1cc36648e9a678ede2aa24c34/0990d195-6d3b-4e06-89a0-69f2afb0fca8_car_16x9.jpg?h=0eddf4d9f49c39ee9986cb9ff2524db2");

    }

    .col-md-1 {
        padding: 40px;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding-top: 0;
        overflow: hidden;
        height: 225px;
        width: auto;
        border: 1px solid white;
        padding: 0;
    }

    img:hover {
        opacity: 0.5;
    }

    span {
        color: white;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
        padding-top: 0;
        padding-bottom: 50px;
    }

    .title {
        font-family: 'Roboto';
        font-size: 30px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 30px;
        padding-bottom: 40px;
    }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="title"></div>
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-md-2">

                <a href="/movie/{{ $movie->id }}">
                    <img src="{{$movie->poster_url}}" alt="movie_poster">
                </a>
                <span>{{ $movie->title }}</span>


            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
