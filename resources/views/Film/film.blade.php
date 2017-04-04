@extends('layout')

@section('content')

    <h1> {{$film->name}}</h1>


<div class="media">
   <a href="#" class="pull-left">
      <img src="/images/{{$film->name}}.jpg" class="media-object" alt="imagen">
   </a>
   <div class="media-body">
     <ul>
        <li>Año: {{$film->year}}</li>
        <li>Descripción: {{$film->description}}</li>
        <li>País: {{$film->country}}</li>
        <li>Director: {{$film->director}}</li>
        <li>Puntuación: {{$film->rating}}</li>
        <li>Género: <a href="/genres/{{$film->genre_id}}">{{$film->genre->genre}}</a></li>
        <li> Actores: 
            @foreach ($film->actors as $actor)
                <a href="/actors/{{$actor->id}}">{{$actor->name}}</a>
            @endforeach
        </li>
    </ul>
   </div>
</div>

<div class="panel panel-default">
  @foreach ($film->critics as $critic)
        <div class="panel-heading"> {{$critic->user->username}}
                <input type="button" id="{{$critic->id}}" value="Borrar" onclick="eliminarComentario(this.id);">      
        </div>
        <div class="panel-body">
            {{$critic->comment}}
        </div>
  @endforeach  
</div>

<script>
    function eliminarComentario(id){
        window.location.href="/critic/delete/" + id;
    }

    window.onload = function() {
        document.getElementById('menu-films').className = 'active';
    };
</script>


@endsection