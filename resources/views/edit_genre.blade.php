@extends('layout')

@section('content')

<form role="form">
    <h1>Edit<span class="label label-default"></span></h1>

    <div class="formulario_edit_genero">
        <label for="label_genero">Genre</label>
             <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select a genre
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach ($genres as $genre)
                        <li><a genres/{{$genre->id}}>{{$genre->genre}}</a></li>
                    @endforeach
                </ul>
            </div> 

            <br></br>
            <label>Genre name</label>

    <div class="input_name">
        <input type="text" class="input_genero" id="input_genero" value="" required>
    </div>

    <br></br>
    <label>Genre id</label>

    <div class="id">
        <input type="text" class="input_genero" id="input_genero" required>
    </div>

    </div>
    <br></br>
    <div class="formulario_boton">
        <button type="sumbit" class="btn btn-default">Edit</button>
    </div>
</form>

@endsection