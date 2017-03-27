@extends('layout')

@section('content')

<h1>Actor</h1>

<p>Nombre:{{$actor->name}}</br>Edad:{{$actor->age}}</br>Nacionalidad:{{$actor->nacionality}}</br>Sexo:{{$actor->gender}}</p>
</br></br>
<p>Peliculas</p>
</br>
@foreach ($actor->films as $pelicula)
    <li><a href="/films/{{$pelicula->id}}">{{$pelicula->name}}</a></li>
@endforeach
        
@endsection
