<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')
<div class='info_genero'>
<h2>Genero: {{$genre->genre}}</h2>

    <h3>Peliculas del genero:</h3>
    
    @foreach ($genre->film as $film)
        <a href="/films/{{$film->id}}" class="text-center" >
        <img class="image_films" src="/images/{{$film->name}}.jpg" >
    @endforeach
</div>  

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection