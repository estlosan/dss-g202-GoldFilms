@extends ('layout')

@section('content')

<h1>Edit user<span class="label label-default"></span></h1>

<div class="container">
<form class="form-horizontal" action= "{{action('UsersController@EditUserValidate',[$user->id])}}"   method="POST">

{{csrf_field()}}
{{ method_field('POST')}}

<div class="form-group" style="padding-top:15px">
    <label for="nombre" class="control-label col-md-4">Nombre de Usuario</label>
        <div class="col-md-8">
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{$user->username}}" placeholder="{{$user->username}}">
    </div>
</div>

<div class="form-group">
     <label for="password" class="control-label col-md-4">Introduzca contraseña</label>
         <div class="col-md-8">
             <input type="password"  name="password" id="password" value="{{$user->password}}" class="form-control">
            </div>
</div>


<div class="form-group">
   <label for="correo" class="control-label col-md-4">Correo Electrónico</label> 
        <div class="col-md-8">
        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="{{$user->email}}">

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