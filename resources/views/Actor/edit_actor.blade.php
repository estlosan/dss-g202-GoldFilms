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

    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Guardar">
      <input type="button" onclick="location.href='/actors';" value="Cancelar">
    </div>
  </div>
  

</form>
@endsection
