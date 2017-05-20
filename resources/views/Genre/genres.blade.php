<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Géneros</h1>

<div class="z-movie">
  <div class="margin-ntabs">
    <ul class="ntabs">
    </ul>
  </div>

  <br>

    @foreach ($genres as $genre)
    <div clas="hola">
    <label class="letras_editar" for="name">{{$genre->genre}}</label>
    <hr>
    </div>
    <?php $genre = \App\Genre::find($genre->id); $count= 0;?>
    @foreach ($genre->film as $film)
    @if($count < 4)
        <div class="films_row">
            <div class="thumbnail">
                <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                    <div class="caption">
                        <p><a style="font-weight: normal;" href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                    </div>
            </div>
        </div>
    <?php $count++; ?>
    @endif
    @endforeach
    <div class="see-more-principal">
        <a href="/genres/{{$genre->id}}"> Ver más >> </a>
    </div>
    @endforeach

    <div class="paginacion">
        {{$genres->links()}}
    </div>

    <br>
    
    @if(\Auth::user()->email == "admin@hotmail.com")
        <a class="btn btn-success" href="/genre/new">Crear</a>
        <a class="btn btn-primary" href="/genre/edit">Editar</a>
        <a class="btn btn-danger"  href="/genre/delete">Borrar</a>        
    @endif
    <br>
    <br>
  </div>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection