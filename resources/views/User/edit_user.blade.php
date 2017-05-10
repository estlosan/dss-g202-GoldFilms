<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Editar usuario/a</h1>

<form class="form-horizontal" action= "{{action('UsersController@EditUserValidate',[$user->id])}}"   method="POST">
{{csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>


    <div class="form-group">
        <label for="name" class="col-lg-1 control-label">Nombre</label>
        <div class="col-lg-6 formulario_peli">
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{$user->username}}" placeholder="{{$user->username}}">
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-lg-1 control-label">Contraseña</label>
        <div class="col-lg-6 formulario_peli">
            <input type="password"  name="password" id="password" value="{{$user->password}}" class="form-control">
        </div>
    </div>


    <div class="form-group">
        <label for="name" class="col-lg-1 control-label">Email</label>
        <div class="col-lg-6 formulario_peli">
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="{{$user->email}}">
        </div>
    </div>

    <div class="form-group">
        <div class="btn-group formilario_usuarios" role="group">
            <button type="submit"  class="btn btn-default">Aceptar</button>
            <a href="{{action('UsersController@showUsers')}}" class="btn btn-default pull-right" role="button">Cancelar</a>
        </div>
    </div>

</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>
@endsection