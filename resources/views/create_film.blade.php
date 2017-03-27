<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoldFilms</title>
</head>
<body>
<h1>Nueva Película</h1>
<form action="create" method="post">
    <ul>
        <li> Nombre: <input type="text" name="name" required> </li>
        <li> Año: <input type="text" name="soundcloud"> </li>
        <li> Género: 
            <select name="genero" id="genre" class="form-control">
                @foreach ($genres as $genre)
                    <option value="{{ $genre['id'] }}">{{ $genre['genre']}}</option>
                @endforeach
            </select>
        </li>
        <li> País: <input type="text" name="country"> </li>

    </ul>
    <input type="submit" value="Crear">
    <input type="button" onclick="location.href='/films';" value="Cancelar">
    {{ csrf_field() }}
</form>
