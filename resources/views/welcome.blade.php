<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br><br>
		<div class="row">
		@foreach($movies as $movie)
			<div class="col-md-3">
				<a href="/movie/{{ $movie->id }}">
					<span>{{ $movie->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>