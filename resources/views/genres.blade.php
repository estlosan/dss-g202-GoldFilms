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
            $genres = DB::table('genres')->get();
        ?>
        <h2>Generos:</h2>
        @foreach ($genres as $genre)
            <ul>
            <li><a href="genres/{{$genre->id}}">{{$genre->genre}}</a></li>
            </ul>
        @endforeach

        
    </body>
</html>
