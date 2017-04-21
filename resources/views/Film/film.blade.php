<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

    <h1> {{$film->name}}</h1>


<div class="media">
   <a href="#" class="pull-left">
      <img src="/images/{{$film->name}}.jpg" class="media-object" alt="imagen" width="142" height="232">
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
        r= confirm('¿Esta seguro que desea elmininar esto?');
        if(r == true){
        window.location.href="/critic/delete/" + id;
        }else{
          window.location.href="/films/" + id;
        }
    }

    window.onload = function() {
        document.getElementById('menu-films').className = 'active';
    };

</script>


@endsection