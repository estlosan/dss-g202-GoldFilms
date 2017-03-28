<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoldFilms</title>
</head>
<body>
<h1>Nueva Pelicula</h1>
La nueva pelicula <a href="/films/{{$film->id}}">{{$film->name}}</a> se ha creado correctamente
<p>
    <a href="/films/">Peliculas</a>
    <a href="/">Inicio</a>
</p>
</body>
</html>