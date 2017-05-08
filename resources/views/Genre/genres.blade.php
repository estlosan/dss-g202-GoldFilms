<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Género</h1>

<div class="z-movie">
  <div class="margin-ntabs">
    <ul class="ntabs">
    </ul>
  </div>

  <dt class="peliculas_genero">Lista de géneros<dt>
    <br>

    <ul>
    @foreach ($genres as $genre)
        <li><a style="font-weight: normal;" href="genres/{{$genre->id}}">{{$genre->genre}}</a></li>
    @endforeach
    </ul>

    <div class="paginacion">
        {{$genres->links()}}
    </div>
    @if(\Auth::user()->email == "admin@hotmail.com")
        <a class="btn btn-success" href="/genre/new">Crear</a>
        <a class="btn btn-primary" href="/genre/edit">Editar</a>
        <a class="btn btn-danger"  href="/genre/delete">Borrar</a>        
    @endif
</div>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection