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

    <div id="right-column2">
        <div id="movie-main-image-container">
             <a class="lightbox">
                <img src="/images/Users/{{$user->username}}.jpg" class="img-circle">
                <br>
                <button input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/jpg, image/png" id="pictureFilm" aria-describedby="fileHelp" class="btn btn-primary" style="margin-left: 30px;">Cambiar imagen</button>
            </a>
        </div>

        <br>

         <div class="container">
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" style="margin-left:40px;">Información</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">¿Como cambiar una foto de perfil?</h4>
                    </div>
                    <div class="modal-body">
                        <p>El nombre de la imagen debe de ser el mismo que el nombre de usuario.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


       

    <br>


    <div id="left-column2">
        <div class="form-group form_editar_user">
            <label for="name" class="col-lg-1 control-label">Nombre</label>
            <div class="col-lg-6 formulario_peli">
                <input type="text" class="form-control placeholder_usuarios" name="nombre" id="nombre" value="{{$user->username}}" placeholder="{{$user->username}}">
             {{-- ERROS NAME--}}
                @if ($errors->has('nombre'))
                <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                <span class="sr-only">Error</span>
                Introduzca un nombre </div>
                @endif
            </div>
        </div>

        <div class="form-group form_editar_user">
            <label for="name" class="col-lg-1 control-label">Contraseña</label>
            <div class="col-lg-6 formulario_peli">
                <input type="password" class="form-control placeholder_usuarios"  name="password" id="password" value="{{$user->password}}">
                {{-- ERROS password--}}
                @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                <span class="sr-only">Error</span>
                Introduzca un nombre </div>
                @endif
            </div>
        </div>

        <div class="form-group form_editar_user">
            <label for="name" class="col-lg-1 control-label">Email</label>
            <div class="col-lg-6 formulario_peli">
            <input type="email" class="form-control placeholder_usuarios" name="email" id="email" value="{{$user->email}}" placeholder="{{$user->email}}">
            {{-- ERROS email--}}
                @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
                <span class="sr-only">Error</span>
                Introduzca un email </div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="btn-group formilario_usuarios_botones" role="group">
                <button type="submit"  class="btn btn-default">Aceptar</button>
                <a href="{{action('UsersController@showUsers')}}" class="btn btn-default pull-right" role="button">Cancelar</a>
            </div>
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