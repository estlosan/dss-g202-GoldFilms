<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Create user<span class="label label-default"></span></h1>

<div class="container">
<form class="form-horizontal" action= "{{action('UsersController@ValidateAddUser')}}"   method="POST">
{{csrf_field()}}
{{ method_field('POST')}}

<div class="form-group form_usuario">
    <label for="nombre" class="control-label col-md-4">Nombre de Usuario</label>
        <div class="col-md-8">
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    {{-- ERROS NAME--}}
@if ($errors->has('nombre'))

    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Pon un nombre de usuario</div>
@endif
    </div>
</div>

<div class="form-group">
     <label for="password" class="control-label col-md-4">Introduzca contraseña</label>
         <div class="col-md-8">
             <input type="password"  name="password" id="password" class="form-control"  placeholder="Password">
        {{-- ERROS PASS--}}
        @if ($errors->has('password'))
        <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
        <span class="sr-only">Error</span>
        Introduzca una contraseña </div>
        @endif
            </div>
</div>


<div class="form-group">
   <label for="correo" class="control-label col-md-4">Correo Electrónico</label> 
        <div class="col-md-8">
        <input type="email" name="email" id="email" class="form-control" placeholder="Example@email.com">
        {{-- ERRORS EMAIL --}}

        @if ($errors->has('email'))
         <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
        <span class="sr-only">Error</span>
        Pon un email válido </div>
        @endif
        </div>
</div>

<div class="form-group">
    <div class="btn-group" role="group">
    <button type="submit"  class="btn btn-default">Aceptar</button>
    <a href="{{action('UsersController@showUsers')}}" class="btn btn-default pull-right" role="button">Cancelar</a>
        </div>
</div>

</form>
</div>



<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>



@endsection