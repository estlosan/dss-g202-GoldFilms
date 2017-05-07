<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<br>
<h1>Últimos estrenos</h1>
<div class="container">
    <div class="row">
    	<div class="col-md-12">
                <div id="Carousel" class="carousel slide" data-interval="5000">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
					@foreach($films1 as $film)
                	  <div class="col-md-2" style="margin-left: 30px;"><a href="/films/{{$film->id}}" class="thumbnail"><img src="/images/{{$film->name}}.jpg" alt="Image" style="max-width:100%;"></a>
                      </div>
                      
					@endforeach
                	</div><!--.row-->
                </div><!--.item-->
                 
                 
                <div class="item">
                	<div class="row">
                	@foreach($films2 as $film)
                	  <div class="col-md-2" style="margin-left: 30px;"><a href="/films/{{$film->id}}" class="thumbnail"><img src="/images/{{$film->name}}.jpg" alt="Image" style="max-width:100%;"></a></div>
					@endforeach
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control" style="width: 70px; height: 280px;"></a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control" style="width: 70px; height: 280px;"></a>
                </div><!--.Carousel-->
                 
		</div>
	</div>
</div><!--.container-->

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#inicio" data-toggle="tab">Las más valoradas</a></li>
        <li><a href="#perfil" data-toggle="tab">Últimas peliculas</a></li>
        <li><a href="#mensajes" data-toggle="tab">Mensajes</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade in active" id="inicio">
            <div class="row row_peliculas">
            @foreach ($films3 as $film)
                <div class="films_row">
                    <div class="thumbnail">
                        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                        <div class="caption">
                            <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="see-more-principal">
                <a href="/films"> Ver más >> </a>
            </div>
        </div>

        <div class="tab-pane fade" id="perfil">
            <div class="row row_peliculas">
            @foreach ($films4 as $film)
                <div class="films_row">
                    <div class="thumbnail">
                        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                        <div class="caption">
                            <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="see-more-principal">
                <a href="/principal/valoradas"> Ver más >> </a>
            </div>
        </div>
</div>   
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