@extends('layout')

@section('content')

<form role="form">
    <h1>Create<span class="label label-default"></span></h1>

    <div class="formulario_crear_genero">

        <label for="label_genero">Genre</label>
        <input type="text" class="input_genero" id="input_genero" placeholder="Insert the new genre" required>
    </div>
    <br></br>
    <div class="formulario_boton">
        <button type="sumbit" class="btn btn-default">Create</button>
    </div>
</form>

@endsection