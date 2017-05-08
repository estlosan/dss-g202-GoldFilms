<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Editar actor</h1>

<form class="form-horizontal" action="{{url('/actor/edit/{id}/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>
    
    <input type="hidden" id="actor_changed" name="actor_changed" value="{{$actor->id}}">
    <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-6 formulario_peli">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre" value="{{$actor->name}}">    
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-6 formulario_peli">
      <input type="number" class="form-control" name="age" id="age" placeholder="Edad" value="{{$actor->age}}">
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Nacionalidad</label>
    <div class="col-lg-6 formulario_peli">
     <input type="name" class="form-control" name="nacionality" id="nacionality"  placeholder= "Nacionalidad" value="{{$actor->nacionality}}">
    </div>
  </div>

  <div class="form-group">
    <label for="genero" class="col-lg-1 control-label">Genero</label>
    <div class="col-lg-6 formulario_peli">
        <label class="radio-inline"><input type="radio" name="radio_button" id="hombre_radio" value="hombre" {{$actor->hombreChecked}}>Hombre</label>
        <label class="radio-inline"><input type="radio" name="radio_button" id="mujer_radio" value="mujer" {{$actor->mujerChecked}}>Mujer</label>
    </div>
  </div>

    <div class="form-group">
      <label for="rating" class="col-lg-1 control-label">Seleccione</label>
      <div class="col-lg-6 formulario_peli">
        <div class="button-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-film"> Películas</span> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
                <ul class='list-inline'>
                  @foreach ($films as $film)
                    <li>
                      <input type="checkbox" name="films[]" id="film-{{$film->id}}" value="{{$film->id}}" {{$film->checked}}>{{$film->name}}                      
                    </li>
                  @endforeach
                </ul>
        </div>
      </div>
    </div>

</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Guardar">
      <input type="button" onclick="location.href='/actors';" value="Cancelar">
    </div>
  </div>
  

</form>


<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
@endsection
