@extends('layout')

@section('content')

<h1>Cartelera</h1>
<ul>
    @foreach ($films as $film)
        <li><a href="films/{{$film->id}}">{{$film->name}}</a></li>
    @endforeach
</ul>

@endsection