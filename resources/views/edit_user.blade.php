@extends ('layout')



@section('content')

<div class="container">
<form class="form-horizontal" action= "{{action('UsersController@EditUserValidate',[$user->id])}}"   method="POST">

{{csrf_field()}}
{{ method_field('POST')}}

<div class="form-group" style="padding-top:15px">
    <label for="nombre" class="control-label col-md-4">Nombre de Usuario</label>
        <div class="col-md-8">
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{$user->username}}" placeholder="{{$user->username}}">
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
             <input type="password"  name="password" id="password" value="{{$user->password}}" class="form-control">
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
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="{{$user->email}}">
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