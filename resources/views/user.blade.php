@extends ('layout')

@section ('content')
<div class="container-fluis">
<div class="row">
    <div class="col-md-12"<li><h1> Nombre: {{$user->username}}</h1></li></div>
    </div>
        <ul>
      <li>id: {{$user->id}}</li>
      <li>Email: {{$user->email}}</li>
      <li>password: {{$user->password}}</li>
      </ul>
@endsection