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
    <a class="btn btn-success" href="/film/new"<button type="button" onclick="/film/new" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Crear</a></button>
    <a class="btn btn-danger" href="/films/actions"<button type="button" onclick="/films/actions" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Borrar/Editar</a></button>
  </div>
</div>

<div class="row" style="text-align:center; margin-top:10px;">
@foreach ($films as $film)
  <div class="films_row" style="width:200px; margin:auto; display:inline-block; vertical-align: middle;">
    <div class="thumbnail" style="width:150px; height:278px;">
        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
        <div class="caption" style="text-align:center;">
        <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
        </div>
    </div>
  </div>
  @endforeach
</div>

<div class="paginate_films">
  {{$films->links()}}
</div>

<script>
window.onload = function() {
    document.getElementById('menu-films').className = 'active';
};
</script>
@endsection