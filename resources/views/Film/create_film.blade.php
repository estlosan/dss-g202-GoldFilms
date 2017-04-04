@extends('layout')

@section('content')


<h1>Nueva Película</h1>
<form class="form-horizontal" action="{{url('/film/new/create')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-5">
      <input type="number" class="form-control" name="year" id="year" placeholder="Año">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Descripción</label>
    <div class="col-lg-5">
     <textarea class="form-control" rows="4" name="description" id="description" placeholder="Descripción"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="genre" class="col-lg-1 control-label">Género</label>
      <div class="col-lg-5">
        <select name="genre">
            @foreach($genres as $genre)
                <option value="{{ $genre->id}}">{{$genre->genre}}</option>
            @endforeach
        </select>
      </div>
  </div>
    <div class="form-group">
        <label for="country" class="col-lg-1 control-label">País</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" name="country" id="country"  placeholder="País">
        </div>
    </div>
    <div class="form-group">
        <label for="director" class="col-lg-1 control-label">Director</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" name="director" id="director"  placeholder="Director">
        </div>
    </div>
    <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Puntuación</label>
        <div class="col-lg-5">
            <input type="number" class="form-control" name="rating" id="rating"  placeholder="Puntuación">
        </div>
    </div>
    <div class="form-group">
        <label for="actors" class="col-lg-1 control-label">Actores</label>
        <div class="col-lg-5">
            @foreach ($actors as $actor)
                <label class="checkbox-inline"><input type="checkbox" name="actors[]" value="{{$actor->id}}">{{$actor->name}}</label>
            @endforeach
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Crear">
      <input type="button" onclick="location.href='/films';" value="Cancelar">
    </div>
  </div>
  

</form>
<script>
window.onload = function() {
    document.getElementById('menu-films').className = 'active';
};
</script>
@endsection
