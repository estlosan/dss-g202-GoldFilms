<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Editar Película</h1>

<form class="form-horizontal" action="{{url('/film/edit/{id}/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

  <input type="hidden" id="film_changed" name="film_changed" value="{{$film->id}}">

  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-6 formulario_peli">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre" value="{{$film->name}}">
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-6 formulario_peli">
      <input type="number" class="form-control" name="year" id="year" placeholder="Año" value="{{$film->year}}">
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Descripción</label>
    <div class="col-lg-6 formulario_peli">
     <textarea class="form-control" rows="4" name="description" id="description" placeholder="Descripción">{{$film->description}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Tráiler</label>
    <div class="col-lg-6 formulario_peli">
      <input type="name"class="form-control" name="trailer" id="trailer" placeholder="Tráiler" value="{{$film->trailer}}">
    </div>
  </div>

  <div class="form-group">
    <label for="genre" class="col-lg-1 control-label">Género</label>
    <div class="col-lg-4 formulario_peli">
      <input type="name" class="form-control" name="genre_new" id="genre_new" disabled="disabled" placeholder="Género" value="{{$film->genre->genre}}">
    </div>

    <div class="col-lg-2">     
      <select name="genre" style="width: 115px;" onchange="document.getElementById('genre_new').value=this.options[this.selectedIndex].text">
          @foreach($genres as $genre)
              <option value="{{ $genre->id}}">{{$genre->genre}}</option>
          @endforeach
      </select>
    </div>
  </div>

  <div class="form-group">
      <label for="country" class="col-lg-1 control-label">País</label>
      <div class="col-lg-6 formulario_peli">
          <input type="name" class="form-control" name="country" id="country"  placeholder="País" value="{{$film->country}}">
      </div>
  </div>
  <div class="form-group">
      <label for="director" class="col-lg-1 control-label">Director</label>
      <div class="col-lg-6 formulario_peli">
          <input type="name" class="form-control" name="director" id="director"  placeholder="Director" value="{{$film->director}}">
      </div>
  </div>
  <div class="form-group">
      <label for="rating" class="col-lg-1 control-label">Puntuación</label>
      <div class="col-lg-6 formulario_peli">
          <input type="number" class="form-control" name="rating" id="rating"  placeholder="Puntuación" value="{{$film->rating}}">
      </div>
  </div>

  <div class="form-group">
    <label for="rating" class="col-lg-1 control-label">Actores:</label>
    <div class="col-lg-6 formulario_peli">
      <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Actores</span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
              <ul class='list-inline'>
                @foreach ($actors as $actor)
                  <li>
                  <input type="checkbox" name="actors[]" id="actor-{{$actor->id}}" value="{{$actor->id}}" {{$actor->checked}}>{{$actor->name}}
                  </li>
                @endforeach
              </ul>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Guardar">
      <input type="button" onclick="location.href='/films';" value="Cancelar">
    </div>
  </div>

</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-films').className = 'active';
};
</script>
@endsection
