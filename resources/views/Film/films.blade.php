<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-9">
    <h1>Cartelera</h1>
  </div>
  <div class="col-md-3">
    <a href="/film/new"<button type="button" onclick="/film/new" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Crear</a></button>
    <a href="/films/actions"<button type="button" onclick="/films/actions" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Borrar/Editar</a></button>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
  @foreach ($films as $film)
    <a href="/films/{{$film->id}}" class="text-center" >
      <img class = "image_films" src="/images/{{$film->name}}.jpg" >
    </a>
  @endforeach
  </div>
  {{$films->links()}}
</div>

<script>
window.onload = function() {
    document.getElementById('menu-films').className = 'active';
};
</script>
@endsection