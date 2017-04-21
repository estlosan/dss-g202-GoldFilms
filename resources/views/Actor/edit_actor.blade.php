@extends('layout')

@section('content')

<h1>Editar Actor</h1>

<form class="form-horizontal" action="{{url('/actor/edit/{id}/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

    <input type="hidden" id="actor_changed" name="actor_changed" value="{{$actor->id}}">
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre" value="{{$actor->name}}">
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-5">
      <input type="number" class="form-control" name="age" id="age" placeholder="Edad" value="{{$actor->age}}">
    </div>
  </div>

<div class="form-group">
    <label for="nacionality" class="col-lg-1 control-label">Nacionalidad</label>
    <div class="col-lg-5">
        <input type="name" class="form-control" name="nacionality" id="nacionality"  placeholder= "Nacionalidad" value="{{$actor->nacionality}}">
    </div>
</div>

<div class="form-group">
    <label for="genero" class="col-lg-1 control-label">Genero</label>
    <div class="col-lg-5">
        <label class="radio-inline"><input type="radio" name="radio_button" id="hombre_radio" value="hombre">Hombre</label>
        <label class="radio-inline"><input checked type="radio" name="radio_button" id="mujer_radio" value="mujer">Mujer</label>
    </div>
</div>

<div class="form-group"><label for="films" class="col-lg-1 control-label"></label> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-film"> Peliculas</span> <span class="caret"></span></button>
          <ul class="dropdown-menu">
          @foreach ($films as $film)
            <div class="checkbox checkbox-inline">
            <li><input type="checkbox" name="films[]" id="film-{{$film->id}}" value="{{$film->id}}" {{$film->checked}}>{{$film->name}}</li>
            </div>
          @endforeach
          </ul>
        </div>
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
