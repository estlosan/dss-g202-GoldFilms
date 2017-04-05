@extends ('layout')

@section('content')

<div class= "container-fluid">
<div class="row">
<div class="col-md-6"><h1>Usuarios Registrados:</h1></div>
<div class="col-md-6"> 
<a class="btn btn-default" role"button" style="margin-top:20px" href="{{action('UsersController@AddUser')}}" >Añadir Usuario</button></a></div>
</div>
@foreach ($users as $user)
<div class="row">
<div class="col-md-6">
<a href=" {{action('UsersController@showUser',[$user->id])}}">
 <ul>{{ $user->username }} </a></div>
 <div class="col-md-6">
 <a href="{{action('UsersController@DeleteUser',[$user->id])}}" role="button" class="btn btn-default">Borrar</a>
 <a href="{{action('UsersController@EditUser',[$user->id])}}" role="button" class="btn btn-default">Editar</a>
 </ul> </div></div>
@endforeach
    </div>
    
        {{  $users->links() }}

        <script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>

@endsection