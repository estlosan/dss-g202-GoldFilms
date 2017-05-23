<!DOCTYPE html>
<html lang="en">
<head>
  <title>GoldFilms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo asset('css/social-buttons.css')?>" type="text/css">
  
  <style>
  @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);

    .content {
      background: #f1f1f1;
    }
    .content-inner {
      background: #fff;
    }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      position: relative;
      padding: 10px;
      text-align: center;
      height: auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content { height:auto; } 
    }
    html,body {
      height:100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/principal">GoldFilms</a>
    </div>
    <div  class="collapse navbar-collapse" id="myNavbar">
          <ul  class="nav navbar-nav">
            <li  id="menu-home"><a href="/principal">Home</a></li>
            <li id="menu-films"><a href="/films">Películas</a></li>
            <li id="menu-actors"><a href="/actors">Actores</a></li>
            <li id="menu-genres"><a href="/genres">Géneros</a></li>
            @if(\Auth::user()->email == "admin@hotmail.com")
            <li id="menu-users"><a href="/users">Usuarios</a></li>
            @endif
          </ul>
          <!--/Buscador-->
          <form class="navbar-form navbar-left"  action="{{action('SearchController@getSearch')}}"method="get">
            <input type="text"  name="q" placeholder="Buscar por nombre o año"/>
            <button type="submit">Search</button>
          </form>

          <div class="nav navbar-nav navbar-right">
            <div class="dropdown">

              @if(Auth::check())
              <a class="dropdown-toggle"  data-toggle="dropdown">

              <img src="/images/Users/{{ Auth::user()->username}}.jpg" class="img-circle" style="width:45px; height:45px; margin-top: 2px;">
              {{ Auth::user()->username }}
              <span class="caret"></span>
              </a> 

              <ul class="dropdown-menu menu_usuarios">
                <li><a href="/user/{{ Auth::user()->id}}">Mi perfil</a></li>
                <li><a href="/users/edit_user/{{ Auth::user()->id}}">Editar perfil</a></li>
                <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              </ul>
              @endif
              </div><!--/.dropdown -->
            </div><!--/.menu_usuario -->
           
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php
    $genres = \App\Genre::get();
    ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><!--Columna izquierda-->

      <div class="seccion-sidenav">
        <div class="titulo-sidenav"> Películas </div>
          <ul class="list-unstyled">
            <li><a href="/principal/españolas" > Españolas</a></li>
            <li><a href="/principal/valoradas" > Más Votadas</a></li>
          </ul>
      </div>
      <div class="seccion-sidenav">
        <div class="titulo-sidenav"> Géneros </div>
          <ul class="list-unstyled">
          @foreach ($genres as $genre)
            <li>
            <a href="/genres/{{$genre->id}}"> {{$genre->genre}}</a>
            </li> 
            @endforeach
          </ul>
      </div>

    </div>
    <div class="col-sm-8 text-left content-inner"><!--Centro-->
      @yield('content')
    </div>
    <div class="col-sm-2 sidenav"><!--Columna derecha-->
    <div class="titulo-sidenav">
     Nuestras redes sociales 
     </div>

     <br>
     
      <div class="well">
        <a class="btn btn-block btn-social btn-twitter">
          <span class="fa fa-twitter"></span> Sigue a Goldfilms
        </a>
      </div>
      <div class="well">
        <a class="btn btn-block btn-social btn-facebook">
          <span class="fa fa-facebook"></span> Sigue a Goldfilms
        </a>
      </div>
      <div class="well">
      <a class="btn btn-block btn-social btn-instagram">
          <span class="fa fa-instagram"></span> Sigue a Goldfilms
        </a>
        </div>
      <div class="well">
        <a class="btn btn-block btn-social btn-tumblr">
          <span class="fa fa-tumblr"></span> Sigue a Goldfilms
        </a>
      </div>
    </div>
  </div>
</div>

<footer>
  <div style="text-align:center; padding: 10px;">
    <a href="/contacto" style="color: #fff"> Contacto  |</a>
    <a href="/quienes_somos" style="color: #fff">  ¿Quiénes somos? </a>

  </div>

  <div style="text-align:center; padding: 10px 2px;">
    <span class="subtext">
      @ 2017 GoldFilms | Todos los derechos reservados - All rights reserved
    </span>

  </div>


</footer>

</body>
</html>
