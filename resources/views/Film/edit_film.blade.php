@extends('layout')

@section('content')



<h1>Editar Película</h1>
<form class="form-horizontal" action="{{url('/film/edit/{id}/save')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}
  <input type="hidden" id="film_changed" name="film_changed" value="{{$film->id}}">
  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre" value="{{$film->name}}">
    </div>
  </div>
  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año</label>
    <div class="col-lg-5">
      <input type="number" class="form-control" name="year" id="year" placeholder="Año" value="{{$film->year}}">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Descripción</label>
    <div class="col-lg-5">
     <textarea class="form-control" rows="4" name="description" id="description" placeholder="Descripción">{{$film->description}}</textarea>
    </div>
  </div>
    <div class="row">
      <label for="genre" class="col-lg-1 control-label">Género</label>
      <div class="col-lg-2">
        <input type="name" class="form-control" name="genre_new" id="genre_new" disabled="disabled" placeholder="Género" value="{{$film->genre->genre}}">
      </div>

      <div class="col-lg-2">     
        <select name="genre" onchange="document.getElementById('genre_new').value=this.options[this.selectedIndex].text">
            @foreach($genres as $genre)
                <option value="{{ $genre->id}}">{{$genre->genre}}</option>
            @endforeach
        </select>
      </div>
    </div>

    <div class="form-group">
        <label for="country" class="col-lg-1 control-label">País</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" name="country" id="country"  placeholder="País" value="{{$film->country}}">
        </div>
    </div>
    <div class="form-group">
        <label for="director" class="col-lg-1 control-label">Director</label>
        <div class="col-lg-5">
            <input type="name" class="form-control" name="director" id="director"  placeholder="Director" value="{{$film->director}}">
        </div>
    </div>
    <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Puntuación</label>
        <div class="col-lg-5">
            <input type="number" class="form-control" name="rating" id="rating"  placeholder="Puntuación" value="{{$film->rating}}">
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
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Guardar">
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
