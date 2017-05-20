<!DOCTYPE html>
<html lang="en">
<head>
  <title>GoldFilms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Secciones laterales grises y centro blanco: es más fácil pintar todo de gris y el centro de blanco.
     * clase content -> donde tenéis las tres columnas
     * clase content-inner -> columna central que es "el interior de vuestro contenido"
     */
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/principal">GoldFilms</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="menu-home"><a href="/principal">Home</a></li>
            <li id="menu-films"><a href="/films">Películas</a></li>
            <li id="menu-actors"><a href="/actors">Actores</a></li>
            <li id="menu-genres"><a href="/genres">Géneros</a></li>
            @if(\Auth::user()->email == "admin@hotmail.com")
            <li id="menu-users"><a href="/users">Usuarios</a></li>
            @endif
          </ul>
          <!--/Buscador-->
          <form class="navbar-form navbar-left"  action="/search" method="get">
            <input type="text"  name="q" placeholder="Search film..."/>
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
    <div class="col-sm-2 sidenav">
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

      <div class="seccion-sidenav">
        <div class="titulo-sidenav"> Información </div>
          <ul>
            <a href="/contacto" style="margin-right: 30px;"> Contáctanos</a>
          </ul>
      </div>

    </div>
    <div class="col-sm-8 text-left content-inner"> 
      @yield('content')
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer>
  <p>Contenido del pie de página</p>
</footer>

</body>
</html>
