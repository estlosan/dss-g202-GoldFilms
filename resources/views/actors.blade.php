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
            $actors = DB::table('actors')->get();
        ?>

        @foreach ($actors as $actor)
            <a href="actors/{{$actor->id}}">{{$actor->name}}</a>
        @endforeach

        
    </body>
</html>
