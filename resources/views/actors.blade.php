@extends('layout')

@section('content')
<h1>Cartelera</h1>
<ul>
@foreach ($actors as $actor)
    <li><a href="actors/{{$actor->id}}">{{$actor->name}}</a></li>
@endforeach
</ul>

@endsection
