<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends ('layout')

@section('content')

<h1>Usuarios Registrados:</h1>

<div class="row row_usuarios">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Usuarios</h3>
                <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body"></span>
                </div>
            </div>
            <table class="table table-hover" id="dev-table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Actions </th>
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
    </div>
</div>
<div class="paginate_users" style="float:left;">
    {{$users->links()}}
</div>
<div class="col-md-3 col_usuario"> 
    <a class="btn btn-success" role"button" style="margin-top:20px" href="{{action('UsersController@AddUser')}}" >Añadir Usuario</button></a></div>
</div> 

<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>

@endsection