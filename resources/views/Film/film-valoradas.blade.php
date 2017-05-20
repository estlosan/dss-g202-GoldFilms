<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1> Más valoradas </h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>
    
    <div class="panel">


<div class="container" style="margin-right: 30px; margin-left: 10px;">
  <ul class="nav nav-tabs" >
    <li class="active"><a href="#general" data-toggle="tab">Vista General</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Por año <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#asc" data-toggle="tab">Ascendente</a></li>
        <li><a href="#desc" data-toggle="tab">Descendente</a></li>                        
      </ul>
    </li>
    <li><a href="#puntuacion" data-toggle="tab">Puntuación</a></li>
    <li><a href="#genero" data-toggle="tab">Género</a></li>
    <li><a href="#nombre" data-toggle="tab">Nombre</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade in active" id="general">
    <br>
      @foreach($films as $film)
      <div class="movie-card">
        <div class="caratula">
            <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
        </div>
        <div class="info-pelicula">
            <div class="titulo-pelicula">
                <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                ({{$film->year}})
                <img src="/images/Paises/{{$film->country}}.png" title="País">
            </div>
            <div class="puntuacion-pelicula">
                <div class="diseño-puntuacion"> {{$film->rating}} </div>
            </div>
            <div class="director">
                {{$film->director}}
            </div>
        </div>
            <hr />
           
        </div>
        @endforeach


      </div>

    <div class="tab-pane fade" id="puntuacion">
      <br>
      @foreach($films3 as $film)
      <div class="movie-card">
        <div class="caratula">
            <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
        </div>
        <div class="info-pelicula">
            <div class="titulo-pelicula">
                <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                ({{$film->year}})
                <img src="/images/Paises/{{$film->country}}.png" title="País">
            </div>
            <div class="puntuacion-pelicula">
                <div class="diseño-puntuacion"> {{$film->rating}} </div>
            </div>
            <div class="director">
                {{$film->director}}
            </div>
        </div>
            <hr />
           
        </div>
        @endforeach
    </div>

    <div class="tab-pane fade" id="asc">
      
      <br>
      @foreach($films4 as $film)
      <div class="movie-card">
        <div class="caratula">
            <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
        </div>
        <div class="info-pelicula">
            <div class="titulo-pelicula">
                <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                ({{$film->year}})
                <img src="/images/Paises/{{$film->country}}.png" title="País">
            </div>
            <div class="puntuacion-pelicula">
                <div class="diseño-puntuacion"> {{$film->rating}} </div>
            </div>
            <div class="director">
                {{$film->director}}
            </div>
        </div>
            <hr />
           
        </div>
        @endforeach
    </div>

    <div class="tab-pane fade" id="desc">
      
      <br>
      @foreach($films2 as $film)
      <div class="movie-card">
        <div class="caratula">
            <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
        </div>
        <div class="info-pelicula">
            <div class="titulo-pelicula">
                <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                ({{$film->year}})
                <img src="/images/Paises/{{$film->country}}.png" title="País">
            </div>
            <div class="puntuacion-pelicula">
                <div class="diseño-puntuacion"> {{$film->rating}} </div>
            </div>
            <div class="director">
                {{$film->director}}
            </div>
        </div>
            <hr />
           
        </div>
        @endforeach
    </div>

        <div class="tab-pane fade" id="genero">
      
      <br>
      @foreach($genres as $genre)
        <?php 
            $genero = \App\Genre::find($genre->id);
            $existe = 0;
            foreach($genero->film as $film){
                if($film->country == 'España'){
                    $existe++;
                }
            }
        ?>
        @if($existe > 0)
        <div clas="hola">
          <label class="letras_editar" for="name">{{$genre->genre}}</label>
          <hr>
        </div>
        @endif
        @foreach($genre->film as $film)
          @if($film->rating >= '8')
            <div class="movie-card">
              <div class="caratula">
                  <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
              </div>
              <div class="info-pelicula">
                  <div class="titulo-pelicula">
                      <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                      ({{$film->year}})
                      <img src="/images/Paises/{{$film->country}}.png" title="País">
                  </div>
                  <div class="puntuacion-pelicula">
                      <div class="diseño-puntuacion"> {{$film->rating}} </div>
                  </div>
                  <div class="director">
                      {{$film->director}}
                  </div>
              </div>
                  <hr />
                
              </div>
          @endif
          @endforeach
          @endforeach
      </div>

    <div class="tab-pane fade" id="nombre">
      
      <br>
      @foreach($films5 as $film)
      <div class="movie-card">
        <div class="caratula">
            <a title="Pelicula"><img width="100" src="/images/{{$film->name}}.jpg"></a>
        </div>
        <div class="info-pelicula">
            <div class="titulo-pelicula">
                <a href="/films/{{$film->id}}" title="Pelicula"> {{$film->name}} </a>
                ({{$film->year}})
                <img src="/images/Paises/{{$film->country}}.png" title="País">
            </div>
            <div class="puntuacion-pelicula">
                <div class="diseño-puntuacion"> {{$film->rating}} </div>
            </div>
            <div class="director">
                {{$film->director}}
            </div>
        </div>
            <hr />
           
        </div>
        @endforeach
    </div>



  </div>
  
</div>
</div>


</div>


<script>
    window.onload = function() {
        document.getElementById('menu-films').className = 'active';
    };

</script>
@endsection