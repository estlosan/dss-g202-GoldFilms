<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Usuario: {{$user->username}}</h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

    <div id="left-column">
        <dl class="movie-info">

        <dt>Id</dt>
        <dd>{{$user->id}}</dd>

        <dt>Nombre</dt>
        <dd>{{$user->username}}</dd>

        <dt>Contraseña</dt>
        <dd>{{$user->password}}</dd>

        <dt>Email</dt>
        <dd>{{$user->email}}</dd>

      </dl>
    </div>


</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>
@endsection