<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-9">
    <h1>Actors</h1>
    <ul>
  </div>
  <div class="col-md-3">
     <a href="/actor/new"<button type="button" onclick="/actor/new" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Crear</a></button>
     <a href="/actor/edit_borrar"<button type="button" onclick="/actor/edit_borrar" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Borrar/Editar</a></button>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    @foreach ($actors as $actor)
        <a href="actors/{{$actor->id}}">{{$actor->name}}
        <img class = "image_actors" src="/images/Actores/{{$actor->name}}.jpg" >
        </a>
    @endforeach
  </div>
{{$actors->links()}}
</div>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
@endsection
