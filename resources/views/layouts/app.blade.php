<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyplayaQR</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">
<link href="css/mapa.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/cartas.css">
<link rel="stylesheet" href="css/fonts.css">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md nav shadow-sm" style="height: auto;">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images/2076984.png" alt="" style="width:50px;">
                <p class="F-logo">MI PLAYAQR</p>     
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="icon-menu" style="color:white"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                            
                        @else
                            
                            
                            @if(Auth::user()->permiso==2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('playas') }}">{{ __('Playas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link badge" href="{{ route('topPlayas') }}">{{ __('Top playas') }}</a>
                            </li>
                            @endif
                            
                            @if(Auth::user()->permiso==1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">{{ __('Panel') }}</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </div>

            @yield('content')
 
    

