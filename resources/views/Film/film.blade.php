<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1> {{$film->name}}</h1>

<!--<hr align="left" width="100%" noshade>-->

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
            <li ><a href="https://www.youtube.com/watch?v=WrFTmZwe5wc" target="_blank">Tráiler&nbsp;</a></li>
        </ul>
    </div>

    <div id="right-column">
        <div id="movie-main-image-container">
             <a class="lightbox">
                <img itemprop="image" width="160" height="238" src="/images/{{$film->name}}.jpg">
            </a>
        </div>
    </div>

    <div id="left-column">
        <dl class="movie-info">
             <dt>Título original</dt>
        <dd>{{$film->name}}</dd>

        <dt>Año</dt>
        <dd>{{$film->year}}</dd>

        <dt>País</dt>
        <dd>{{$film->country}}</dd>

        <dt>Director</dt>
        <dd>{{$film->director}}</dd>

        <dt>Puntuación</dt>
        <dd>{{$film->rating}}</dd>

        <dt>Género</dt>
        <dd><a href="/genres/{{$film->genre_id}}">{{$film->genre->genre}}</a></dd>

        <dt>Actores</dt>
         @foreach ($film->actors as $actor)
            <dd>
                <a href="/actors/{{$actor->id}}">{{$actor->name}}</a>
            </dd>
        @endforeach

        <dt>Descripción</dt>
        <dd>{{$film->description}}</dd>

        <dt>Críticas</dt>
        <dd>
        @if(Auth::check())
            <form method="post" action="{{url('/critic/add')}}">
                {{csrf_field()}}
                <input type="hidden" id="film_id" name="film_id" value="{{$film->id}}">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <textarea name="comment" class="form-control" placeholder="Escribe un comentario..."></textarea>
                            <br />
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>

                    </div>
                </div>
        @endif

         <div class="panel panel-default">
            @foreach ($film->critics as $critic)
                <div class="panel-heading"> {{$critic->user->username}}
                    @if(\Auth::user()->email == "admin@hotmail.com")
                        <input type="button" id="{{$critic->id}}" value="Borrar" onclick="eliminarComentario(this.id);">      
                    @endif
                </div>
                <div class="panel-body">
                    {{$critic->comment}}
                </div>
                
            @endforeach  
            </div>
            </dd>
        </dl>

        
    </div>

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