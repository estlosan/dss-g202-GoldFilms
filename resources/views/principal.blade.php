<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Últimos estrenos</h1>

<div class="z-movie">
  <div class="margin-ntabs">
    <ul class="ntabs">
    </ul>
  </div>

  <br>

<div class="contenido_principal">
    <div class="div_carrousel">
        <div id="Carousel" class="carousel slide" data-interval="10000">

        <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    @foreach($films1 as $film)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                            <div class="caption">
                            <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
               @foreach($films2 as $film)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                        <div class="caption">
                        <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--.item-->

            </div><!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel" class="left carousel-control" ></a>
            <a data-slide="next" href="#Carousel" class="right carousel-control" ></a>

        </div><!--.carousel slide-->
    </div><!--.div_carrousel-->
</div><!--.container-->

<div class="filtros">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#inicio" data-toggle="tab">Cartelera España</a></li>
        <li><a href="#perfil" data-toggle="tab">Próximos estrenos</a></li>
        <li><a href="#mensajes" data-toggle="tab">Las más valoradas</a></li>
    </ul>

    <!--Poner las pestañas-->


</div><!--.container-->


</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.Carousel').carousel()
    });

    $(document).ready(function(){
        $("Carousel").carousel({
         interval : 1000
        });
    });

window.onload = function() {
    document.getElementById('menu-home').className = 'active';
};
</script>
@endsection