<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Nuevo usuario/a</h1>

<form class="form-horizontal" action= "{{action('UsersController@ValidateAddUser')}}" id="uploadForm" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Usuario">
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
        <label for="name" class="col-lg-1 control-label">Contraseña</label>
            <div class="col-lg-6 formulario_peli">
                <input type="password"  name="password" id="password" class="form-control"  placeholder="Contraseña">
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
    <label for="name" class="col-lg-1 control-label">Email</label>
        <div class="col-lg-6 formulario_peli">
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
        <label for="rating" class="col-lg-1 control-label">Foto</label>
        <div class="col-lg-6 formulario_peli">
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/jpg, image/png" class="form-control-file" id="pictureFilm" aria-describedby="fileHelp">
        </div>
        <div class="container">
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Información</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">¿Como subir una foto de perfil?</h4>
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