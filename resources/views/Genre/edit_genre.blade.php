<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Editar género</h1>

<form class="form-horizontal" action="{{url('/genre/edit/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

    <div class="form-group">
        <label for="genero" class="col-lg-1 control-label">Género</label>
        <div class="col-lg-6 formulario_peli">
            <div class="dropdown">
                <select id="test" name="genero" onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
                </select>
                <input style="margin-left: 20px;" type="text" id="text_content" name="genero_nombre" value="" />
            </div> 
        </div> 
    </div> 

    <div class="form-group">
        
    </div>

    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
        <button type="sumbit" class="btn btn-default">Editar</button>
        <input type="button" class="btn btn-default" onclick="location.href='/genres';" value="Cancelar">
    </div>
  </div>

</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection