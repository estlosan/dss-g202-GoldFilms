<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoldFilms</title>

    </head>
    <body>
        <?php
            $film = DB::table('films')->where('id',$id_film)->first();
            $actores = DB::table('actor_film') 
            ->join('actors', 'actor_film.actor_id', '=','actors.id')
            ->where('film_id',$id_film)
            ->get();
        ?>
    <ul>
        <li>Titulo: {{$film->name}}</li>
        <li>Año: {{$film->year}}</li>
        <li>Descripción: {{$film->description}}</li>
        <li>País: {{$film->country}}</li>
        <li>Director: {{$film->director}}</li>
        <li>Puntuación: {{$film->rating}}</li>
        <li>Género: {{$film->genre_id}}</li>
    </ul>
        <p>Actores</p>
        <ul>
            @foreach ($actores as $actor)
                <li><a href="/actors/{{$actor->id}}">{{$actor->name}}</a></li>
            @endforeach
        </ul>
    </body>
</html>