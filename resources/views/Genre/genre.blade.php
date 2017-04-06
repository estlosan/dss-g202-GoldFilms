<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')
<div class='info_genero'>
<h2>Genero: {{$genre->genre}}</h2>

    <h3>Peliculas del genero:</h3>
    
    @foreach ($genre->film as $film)
    <div class="films_row" style="width:200px; margin:auto; display:inline-block; vertical-align: middle;">
        <div class="thumbnail" style="width:150px; height:278px;">
            <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                <div class="caption" style="text-align:center;">
                    <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                </div>
         </div>
    </div>
    @endforeach
</div>  

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection