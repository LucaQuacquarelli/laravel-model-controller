<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Laravel Movie</title>
    </head>
    <body>
        <div class="container">
            <h1>{{$title}}</h1>
            <div class="movie-card-container">
                @foreach ($movies as $movie)
                <div class="movie-card">
                    <h2>{{$movie->title}}</h2>
                    <h3>{{$movie->original_title}}</h3>
                    <h4>{{$movie->nationality}}</h4>
                    <h5>{{$movie->date}}</h5>
                    <h5>{{$movie->vote}}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>