<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>{{$user->username}}</h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <div id="right-column2">
        <div id="movie-main-image-container">
             <a class="lightbox">
                <img src="/images/Users/{{$user->username}}.jpg" class="img-circle" style="width: 140px; height: 150px;">
            </a>
        </div>
    </div>

     <br>

    <div id="left-column">
        <dl class="movie-info">

        @if(\Auth::user()->email == "admin@hotmail.com")
        <label for="name" class="col-lg-1 control-label">Id</label>
        <dd>{{$user->id}}</dd>
        @endif

        <label for="name" class="col-lg-1 control-label">Nombre</label>
        <dd>{{$user->username}}</dd>

        <label for="name" class="col-lg-1 control-label">Email</label>
        <dd>{{$user->email}}</dd>

      </dl>
    </div>

    <br>
    <br>
    <br>
    <br>

    <label for="name" class="col-lg-1 control-label">Criticas</label>

    <div class="panel panel-default">
    @foreach ($user->critics as $critic)
        <div class="panel-heading">
         <a href="/films/{{$critic->film->id}}"><b>{{$critic->film->name}}</b></a> 
            @if(\Auth::user()->email == "admin@hotmail.com")
                <input type="button" id="{{$critic->id}}" value="Borrar" onclick="eliminarComentario(this.id);">      
            @endif
        </div>
        <div class="panel-body">
            {{$critic->comment}}
        </div>
    @endforeach  
    </div>

</div>
</form>

<script>
window.onload = function() {
    document.getElementById('menu-users').className = 'active';
};
</script>
@endsection