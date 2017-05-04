<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>{{$genre->genre}}</h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <dt class="peliculas_genero"> Películas <dt>
    <br>

    @foreach ($genre->film as $film)
    <div class="films_row">
        <div class="thumbnail">
            <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                <div class="caption">
                    <p><a style="font-weight: normal;" href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                </div>
         </div>
    </div>
    @endforeach





</div>


<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection