<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Films</title>
        <input type="button" onclick="location.href='/film/new';" value="Crear">

    </head>
    <body>

        <h1>Cartelera</h1>
        <ul>
            @foreach ($films as $film)
                <li><a href="films/{{$film->id}}">{{$film->name}}</a></li>
            @endforeach
        </ul>

        
    </body>
</html>