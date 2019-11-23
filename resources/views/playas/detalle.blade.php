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
<link href="../../css/menu.css" rel="stylesheet">
<link href="../../css/mapa.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/jquery.fancybox.min.css">
<link rel="stylesheet" href="../../css/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../../css/aos.css">
<link rel="stylesheet" href="../../css/cartas.css">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md nav shadow-sm" style="height: auto;">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../../images/2076984.png" alt="" style="width:50px;">
                <p class="F-logo">MI PLAYAQR</p>
                
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            
                        @else
                            
                            
                            @if(Auth::user()->permiso==2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('playas') }}">{{ __('Playas') }}</a>
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
                                        {{ __('Logout') }}
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
        <?php //var_dump($playa) ?>
    <div class="contenedor">
    <div id="card" class="card" style="width: 50%; margin-left:25%; ">
        <img src="../img/delfines.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$playa->nombre}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="container">
            <form class="row" action="/playas/{{$playa->id}}" method="post">
                <div class="col">
                    <input name="tipo" value="Bueno" type="submit" class="btn btn-primary"style="float: right">
                </div>
                <div class="col">
                    <input name="tipo" value="Malo" type="submit" class="btn btn-danger">
                </div>
                @csrf
            </form>
            </div>
            <div class="col">
            <a class="btn" href="/playas/{{$playa->id}}/encuesta" role="button" style="background:#007bff; color:white; heigt:15px;width: 100%;  margin-top: 10px;">Encuesta</a>
            </div>
            <div>

                {!! QrCode::size(200)->generate('http://miplayaqr.zonakb.com/playas/'.$playa->id); !!}
                <!--Aqui va algo-->
            </div>
        </div>
        </div>
    </div>
