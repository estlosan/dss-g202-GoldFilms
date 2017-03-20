<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoldFilms</title>

    </head>
    <body>
    <ul>
        <li>Titulo: {{$film->name}}</li>
        <li>Año: {{$film->year}}</li>
        <li>Descripción: {{$film->description}}</li>
        <li>País: {{$film->country}}</li>
        <li>Director: {{$film->director}}</li>
        <li>Puntuación: {{$film->rating}}</li>
        <li>Género: <a href="/genres/{{$film->genre_id}}">{{$film->genre->genre}}</a></li>
    </ul>
        <p>Actores</p>
        <ul>
            @foreach ($film->actors as $actor)
                <li><a href="/actors/{{$actor->id}}">{{$actor->name}}</a></li>
            @endforeach
        </ul>
    </body>
</html>