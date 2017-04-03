@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-9">
    <h1>Cartelera</h1>
    <ul>
</div>
    <div class="col-md-3">
        <a href="/actor/new"<button type="button" onclick="/actor/new" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Crear</a></button>
        <a href="/actor/edit_borrar"<button type="button" onclick="/actor/edit_borrar" style ="margin-top: 20px;" class="btn btn-default" aria-label="Alinear a la derecha">Borrar/Editar</a></button>
    </div>

</div>
@foreach ($actors as $actor)
    <li><a href="actors/{{$actor->id}}">{{$actor->name}}</a></li>
@endforeach
</ul>

@endsection
