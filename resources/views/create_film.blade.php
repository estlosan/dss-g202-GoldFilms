@extends('layout')

@section('content')


<h1>Nueva Película</h1>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="name"class="form-control" id="name"
             placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-5">
      <input type="number" class="form-control" id="year" 
             placeholder="Año">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Descripción</label>
    <div class="col-lg-5">
     <textarea class="form-control" rows="4" id="description" placeholder="Descripción"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="genre" class="col-lg-1 control-label">Género</label>
      <div class="col-lg-5">
        <select name="genero" id="genre" class="form-control">
            @foreach ($genres as $genre)
                <option value="{{ $genre['id'] }}">{{ $genre['genre']}}</option>
            @endforeach
        </select>
      </div>
  </div>
    <div class="form-group">
        <label for="country" class="col-lg-1 control-label">País</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" id="country"  placeholder="País">
        </div>
    </div>
    <div class="form-group">
        <label for="director" class="col-lg-1 control-label">Director</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" id="director"  placeholder="Director">
        </div>
    </div>
    <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Puntuación</label>
        <div class="col-lg-5">
            <input type="number" class="form-control" id="rating"  placeholder="Puntuación">
        </div>
    </div>
    <div class="form-group">
        <label for="actors" class="col-lg-1 control-label">Actores</label>
        <div class="col-lg-5">
            @foreach ($actors as $actor)
            <label class="checkbox-inline"><input type="checkbox" value="{{$actor->name}}">{{$actor->name}}</label>
            @endforeach
        </div>
    </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="button"  onclick="location.href='/film/new/create';"value="Crear">
      <input type="button" onclick="location.href='/films';" value="Cancelar">
    </div>
  </div>
  {{ csrf_field() }}

</form>
@endsection
