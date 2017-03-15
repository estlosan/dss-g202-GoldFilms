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

        @foreach ($genres as $genre)
            <li><a href="genres/{{$genre->id}}">{{$genre->genre}}</a></li>
        @endforeach

        
    </body>
</html>
