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
     <a class="btn btn-success" href="/actor/new"<button type="button" onclick="/actor/new" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Crear</a></button>
     <a class="btn btn-danger" href="/actor/edit_borrar"<button type="button" onclick="/actor/edit_borrar" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Borrar/Editar</a></button>
  </div>
</div>

<div class="row" style="text-align:center; margin-top:10px;">
@foreach ($actors as $actor)
  <div class="actors_row" style="width:200px; margin:auto; display:inline-block; vertical-align: middle;">
    <div class="thumbnail" style="width:150px; height:278px;">
        <a href="/actors/{{$actor->id}}"><img src="/images/Actores/{{$actor->name}}.jpg" style="width:150px; height:200px;"></a>
        <div class="caption" style="text-align:center;">
        <p><a href="/actors/{{$actor->id}}"> {{$actor->name}}</a></p>
        </div>
    </div>
</div>
  @endforeach
</div>

<div class="paginate_actors">
{{$actors->links()}}
</div>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
@endsection
