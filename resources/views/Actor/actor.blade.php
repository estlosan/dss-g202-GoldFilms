<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Actor</h1>

<div class="row">
  <div class="col-sm-12">
      <img class = "image_actor" src="/images/Actores/{{$actor->name}}.jpg" >
    </a>
  </div>
</div>

<p>Nombre:{{$actor->name}}</br>Edad:{{$actor->age}}</br>Nacionalidad:{{$actor->nacionality}}</br>Sexo:{{$actor->gender}}</p>
</br></br>
<p>Peliculas</p>
</br>


<div class="row">
  <div class="col-sm-12">
  @foreach ($actor->films as $film)
    <a href="/films/{{$film->id}}" class="text-center" >
      <img class ="image_films" src="/images/{{$film->name}}.jpg" >
    </a>
  @endforeach
  </div>
  
</div>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
        
@endsection