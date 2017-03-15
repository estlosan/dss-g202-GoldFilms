<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genres</title>
    </head>
    <body>
        <?php
            $genre = DB::table('genres')->where('id',$id_genre)->first();
            $peliculas = DB::table('films')->where('genre_id',$id_genre)->get();
        ?>
   
   <h2>Genero: {{$genre->genre}}</h2>
    <ul>
        <li>Id del genero: {{$genre->id}}</li>
    </ul>
        <h3>Peliculas del genero:</h3>
        @foreach ($peliculas as $pelicula)
            <ul>
            <li>{{$pelicula->name}}</li>
            </ul>
        @endforeach
        
    </body>
</html>