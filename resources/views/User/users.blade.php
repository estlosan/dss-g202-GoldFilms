<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends ('layout')

@section('content')

<h1>Usuarios</h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <a class="btn btn-success" style="float:right;" role"button" href="{{action('UsersController@AddUser')}}" >Añadir Usuario</button></a>

    <div id="left-column">
        <table class="table table-hover" id="dev-table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Email</th>
                <th class="text-center">Acciones </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href=" {{action('UsersController@showUser',[$user->id])}}">{{$user->username}}</a></td>
                <td>{{$user->email}}</td>
                <td>
                <div class="botones_usuarios">
                    <a class="btn btn-danger" href="{{action('UsersController@DeleteUser',[$user->id])}}"  onclick="return confirm('¿Esta seguro de desea elmininar esto?')" role="button" class="btn btn-default">Borrar</a>
                    <a class="btn btn-primary" href="{{action('UsersController@EditUser',[$user->id])}}" role="button" class="btn btn-default">Editar</a>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    <div class="paginate_users">
        {{$users->links()}}
    </div>
</div>

<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>

@endsection