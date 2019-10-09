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
<link href="../css/menu.css" rel="stylesheet">
<link href="../css/mapa.css" rel="stylesheet">
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
                <img src="../../images/Logo.png" alt="" style="width:100px;">
                
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


<br />
  <div class="container">
    <section class="row">
      <div class="col-md-12">
        <h1 class="text-center">Encuesta sobre la contaminación en la {{$playa->nombre}}</h1>
      </div>
    </section>
    <hr><br />
    <section class="row">
      <section class="col-md-12">
        <h3>Datos basicos</h3>
        <p></p>
      </section>
    </section>
    

    <!--  Servicios  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Servicio.</h3>
        <p></p>
      </div>
    </section>
    <form action="{{route('encuesta',$playa->id)}}" method="POST">
    @csrf
    <!--  PREGUNTA 1  -->
    <section class="row">
      <div class="col-md-6">
        <p>1- ¿Qué clase de contaminante hay?</p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="pregunta1a" value="SI"> Generados por el hombre
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntab" value="NO"> Sargazo
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
    <!--  PREGUNTA 2  -->
    <section class="row">
      <div class="col-md-6">
        <p>2-¿Qué tipo de basura hay en la playa? </p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta2" id="pregunta1a" value="SI"> Organico
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta2" id="preguntab" value="NO"> Inorganico
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta2" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
    <!--  PREGUNTA 3  -->
    <section class="row">
      <div class="col-md-6">
        <p>3- ¿Hay mucha basura? </p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta3" id="pregunta1a" value="SI"> Si
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta3" id="preguntab" value="NO"> No
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta3" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
    <!--  PREGUNTA 4  -->
    <section class="row">
      <div class="col-md-6">
        <p>4- Aproximadamente ¿Cuánta gente hay?</p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta4" id="pregunta1a" value="SI"> menos de 50 personas
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta4" id="preguntab" value="NO"> menos de 100 personas
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta4" id="preguntac" value="NA"> más de 100 personas
      </label>
      </div>
    </section><br>
    <hr>
    <!--  Durante la Atención  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Durante la Atención.</h3>
        <p></p>
      </div>
    </section>
    <section class="row">
      <div class="col-md-12">
      
          <button type="submit" class="btn btn-info" id="saveForm" onclick="saveForm">Guardar Encuesta</button>

        
      </div>
    </section>
    </form>
  </div>

  <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
