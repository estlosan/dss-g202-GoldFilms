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
<br>
<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          @foreach($films1 as $film)
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" class="img-responsive center-block" style="width:150px; height:200px;"></a>
              <h4 class="text-center">{{$film->name}}</h4>
            </div>
          </div>
          @endforeach
          @foreach($films2 as $film)
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" class="img-responsive center-block" style="width:150px; height:200px;"></a>
              <h4 class="text-center">{{$film->name}}</h4>
            </div>
          </div>
          @endforeach

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive" style="margin-top: 40px;"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive" style="margin-top: 40px;"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->

</div>

<div class="filtros">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#inicio" data-toggle="tab">Cartelera España</a></li>
        <li><a href="#perfil" data-toggle="tab">Próximos estrenos</a></li>
        <li><a href="#mensajes" data-toggle="tab">Las más valoradas</a></li>
    </ul>
    
    <div class="tab-content">
        <div class="tab-pane fade in active row_peliculas_principal" id="inicio">
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
            <div class="see-more-principal">
                <a href="/principal/españolas"> Ver más >> </a>
            </div>
        </div>

        <div class="tab-pane fade row_peliculas_principal" id="perfil">
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
            <div class="see-more-principal">
                <a href="/principal/estrenos"> Ver más >> </a>
            </div>
        </div>

        <div class="tab-pane fade row_peliculas_principal" id="mensajes">
            @foreach ($films5 as $film)
                <div class="films_row">
                    <div class="thumbnail">
                        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
                        <div class="caption">
                            <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="see-more-principal">
                <a href="/principal/valoradas"> Ver más >> </a>
            </div>
        </div>

    </div>
</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

window.onload = function() {
    document.getElementById('menu-home').className = 'active';
};
</script>
@endsection