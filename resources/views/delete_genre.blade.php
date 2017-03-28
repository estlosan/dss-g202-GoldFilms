@extends('layout')

@section('content')
<h1>Delete<span class="label label-default"></span></h1>
<div class="lista_generos" style="max-height: 400px;max-width: 700px;overflow: auto;">
    <ul class="list-group checked-list-box">
    @foreach ($genres as $genre)
        <li class="list-group-item"><input type="checkbox" class="style1">{{$genre->genre}}
        <span class="badge badge-default badge-pill">{{$genre->id}}</span></li>
    @endforeach
    </ul>
</div>
<br></br>
<div class="formulario_boton">
    <button type="sumbit" class="btn btn-danger">Delete</button>
</div>
@endsection