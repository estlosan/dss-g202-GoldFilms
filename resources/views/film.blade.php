@extends('layout')

@section('content')

    <h1>Film</h1>

    <ul>
        <li>Titulo: {{$film->name}}</li>
        <li>Año: {{$film->year}}</li>
        <li>Descripción: {{$film->description}}</li>
        <li>País: {{$film->country}}</li>
        <li>Director: {{$film->director}}</li>
        <li>Puntuación: {{$film->rating}}</li>
        <li>Género: <a href="/genres/{{$film->genre_id}}">{{$film->genre->genre}}</a></li>
    </ul>
        <p>Actores</p>
        <ul>
            @foreach ($film->actors as $actor)
                <li><a href="/actors/{{$actor->id}}">{{$actor->name}}</a></li>
            @endforeach
        </ul>
@endsection