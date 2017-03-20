<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actors</title>

            </head>
    <body>
        <p>Nombre:{{$actor->name}}</br>Edad:{{$actor->age}}</br>Nacionalidad:{{$actor->nacionality}}</br>Sexo:{{$actor->gender}}</p>
        </br></br>
        <p>Peliculas</p>
        </br>
        @foreach ($actor->films as $pelicula)
            <li><a href="/films/{{$pelicula->id}}">{{$pelicula->name}}</a></li>
        @endforeach
        
    </body>
</html>
