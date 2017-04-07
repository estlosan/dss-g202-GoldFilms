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

  <div class="form-group">
    <label for="films" class="col-lg-1 control-label">Películas</label>
      <div class="col-lg-5">
            @foreach($films as $film)
                <label class="checkbox-inline"><input type="checkbox" name="films" value="{{$film->id}}">{{$film->name}}</label>
            @endforeach
        </select>
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
