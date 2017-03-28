@extends('layout')

@section('content')

<div class="lista_generos">
<h1>Genres</h1>

<ul>
@foreach ($genres as $genre)
    <li><a href="genres/{{$genre->id}}">{{$genre->genre}}</a></li>
@endforeach
</ul>

<br>
</br>

<a class="btn btn-success">Create</a>
<a class="btn btn-primary">Edit</a>
<a class="btn btn-danger">Delete</a>
</div>

@endsection