<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        GoldFilms
                    </a>
                </div>

                <div id="navbar" class="collapse navbar-collapse">
                    @if(Auth::check())
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
                    @endif

                    <!-- Right Side Of Navbar -->
                    <div class="nav navbar-nav navbar-right" style="margin:auto;">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if(Auth::check())
                            <a class="dropdown-toggle" data-toggle="dropdown">

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
  

                        @endif
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
