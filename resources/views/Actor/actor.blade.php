<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Actor</h1>

<div class="media">
   <a href="#" class="pull-left">
      <img src="/images/Actores/{{$actor->name}}.jpg" class="media-object" alt="imagen">
   </a>
   <div class="media-body">
     <ul>
        <li>Nombre: {{$actor->name}}</li>
        <li>Edad: {{$actor->age}}</li>
        <li>Nacionalidad: {{$actor->nacionality}}</li>
        <li>Sexo: {{$actor->gender}}</li>
    </ul>
   </div>
</div>


<div class="row row_actores">
  <h3>Peliculas</h3>
  <div class="col-sm-12">
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
  </div>
  
</div>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
        
@endsection