<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actors</title>

            </head>
    <body>
        <?php
            $actor = DB::table('actors')->where('id',$id_actor)->first();
            $peliculas = DB::table('actor_film') 
            ->join('films', 'actor_film.film_id', '=','films.id')
            ->where('actor_id',$id_actor)
            ->get();
        ?>
        <p>Nombre:{{$actor->name}}</br>Edad:{{$actor->age}}</br>Nacionalidad:{{$actor->nacionality}}</br>Sexo:{{$actor->gender}}</p>
        </br></br>
        <p>Peliculas</p>
        </br>
        @foreach ($peliculas as $pelicula)
            <p>{{$pelicula->name}}</p>
        @endforeach
        
    </body>
</html>
