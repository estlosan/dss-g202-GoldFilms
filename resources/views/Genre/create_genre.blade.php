<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Crear género</h1>

<form class="form-horizontal" action="{{url('/genre/new/create')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

    <div class="form-group">
        <label for="genero" class="col-lg-1 control-label">Género</label>
        <div class="col-lg-6 formulario_peli">
            <input type="name" class="form-control" name="genre" id="genre" placeholder="Inserta un nuevo género">
        </div>
  </div>

    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" class="btn btn-default" value="Crear">
      <input type="button" class="btn btn-default" onclick="location.href='/genres';" value="Cancelar">
    </div>
  </div>

</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection