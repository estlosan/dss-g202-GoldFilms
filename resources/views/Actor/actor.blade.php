<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>{{$actor->name}}</h1>

<div class="z-movie">
  <div class="margin-ntabs">
    <ul class="ntabs">
          <li ><a href="{{$actor->biography}}" target="_blank">Biografia&nbsp;</a></li>
    </ul>
  </div>

  <div id="right-column">
    <div id="movie-main-image-container">
          <a class="lightbox">
            <img class="panel panel-primary" style="border-width: 2px;" itemprop="image" width="180" height="238" src="/images/Actores/{{$actor->name}}.jpg">
        </a>
    </div>
  </div>

  <div id="left-column">
    <dl class="movie-info">
      <dt>Nombre</dt>
      <dd>{{$actor->name}}</dd>

      <dt style="margin-top: 10px">Edad</dt>
      <dd style="margin-top: 18px">{{$actor->age}}</dd>

      <dt style="margin-top: 10px">Nacionalidad</dt>
      <dd style="margin-top: 18px">{{$actor->nacionality}}</dd>

      <dt style="margin-top: 10px">Sexo</dt>
      <dd style="margin-top: 18px">{{$actor->gender}}</dd>

      <dt style="margin-top:200px;">Peliculas</dt>
      <br>
      <dd style="margin-top: 210px; width: 805px; margin-left: 35px">
      @foreach ($actor->films as $film)
        <div class="films_row" style="margin-right: -15px;">
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