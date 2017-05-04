<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>{{$actor->name}}</h1>

<div class="z-movie">
  <div class="margin-ntabs">
    <ul class="ntabs">
          <li ><a href="#">Biografia&nbsp;</a></li>
    </ul>
  </div>

  <div id="right-column">
    <div id="movie-main-image-container">
          <a class="lightbox">
            <img itemprop="image" width="180" height="238" src="/images/Actores/{{$actor->name}}.jpg">
        </a>
    </div>
  </div>

  <div id="left-column">
    <dl class="movie-info">
      <dt>Nombre</dt>
      <dd>{{$actor->name}}</dd>

      <dt>Edad</dt>
      <dd>{{$actor->age}}</dd>

      <dt>Nacionalidad</dt>
      <dd>{{$actor->nacionality}}</dd>

      <dt>Sexo</dt>
      <dd>{{$actor->gender}}</dd>

      <dt>Peliculas</dt>
      <br>
      <dd>
      @foreach ($actor->films as $film)
        <div class="films_row">
          <div class="thumbnail">
            <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
            <div class="caption">
              <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
            </div>
            </div>
        </div>
      @endforeach
      </dd>

      </dl>
    </div>







</div>    
<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
        
@endsection