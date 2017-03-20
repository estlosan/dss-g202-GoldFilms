<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genres</title>
    </head>
    <body>
   
   <h2>Genero: {{$genre->genre}}</h2>
    <ul>
        <li>Id del genero: {{$genre->id}}</li>
    </ul>
        <h3>Peliculas del genero:</h3>
        @foreach ($genre->film as $film)
            <ul>
            <li><a href="/films/{{$film->id}}">{{$film->name}}</a></li>
            </ul>
        @endforeach
        
    </body>
</html>