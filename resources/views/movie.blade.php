<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body {
        font-family: Helvetica, Sans-Serif;
        background: url("https://pro2-bar-s3-cdn-cf6.myportfolio.com/735da3b1cc36648e9a678ede2aa24c34/0990d195-6d3b-4e06-89a0-69f2afb0fca8_car_16x9.jpg?h=0eddf4d9f49c39ee9986cb9ff2524db2") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .title {

        font-size: 34px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 30px;
    }

    iframe {
        display: flex;
        align-items: center;
        justify-content: center;
        /* positions out of the flow, but according to the nearest parent */
        top: 0;
        right: 0;
        /* confuse it i guess */
        bottom: 0;
        left: 0;
        margin: auto;
        border: 1px solid #696969;
        /* make em equal */
    }

    .navbar .navbar-brand,
    .navbar .navbar-brand:hover {
        color: white;
        font-size: 16px;
    }

    .navbar {
        background-color: #0F1115;
        border-bottom: 1px solid #696969;
        width: 100% !important;
    }

    .description {
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
        padding-bottom: 20px;
        text-align: center !important;
    }
    </style>
</head>

<body>
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
</body>

</html>