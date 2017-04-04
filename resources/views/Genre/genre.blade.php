@extends('layout')

@section('content')
<div class='info_genero'>
<h2>Genero: {{$genre->genre}}</h2>
    <ul>
        <li>Id del genero: {{$genre->id}}</li>
    </ul>
        <h3>Peliculas del genero:</h3>
        @foreach ($genre->film as $film)
            <ul>
            <li><a href="/films/{{$film->id}}">{{$film->name}}</a></li>
            </ul>
        @endforeach
</div>  
<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>
@endsection