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
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mapa.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsqLUn1LcX7EQVldV2uheSxnoeQjHyWNM&callback"
    async defer>   
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md nav nav-light shadow-sm" style="height: auto;">
            <div class="container">
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
                        @if(Auth::user()->permiso==1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">{{ __('Panel') }}</a>
                            </li>
                            @endif
                            @if(Auth::user()->permiso==2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('playas') }}">{{ __('Playas') }}</a>
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
    <div id="map"></div>
    <div class="site-section bg-light" id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1">
                <h2>¡Encuentra tu playa!</h2>
                <button id="ubicacion" style="margin-top: 35px; margin-bottom: 20px; height:50px;" class="btn btn-primary">Obtener ubicación</button>
              </div>
            </div>
          </div>
      </div>
      </div>


 <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 text-center" >
          <h3 class="subscribe-title">Ayudanos a mejorar para ti.</h3>
          <p class="subscribe-text">Caribe mexicano recibió 14.2 millones de turistas en 2018 ¡Disfruta tu Estado!.</p>
        </div>
      </div>
    </div>
  </section>


      <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div  style="background-image: url('images/depot_delivery_1.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>



            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-4 text-azul">Nuestros Objetivos</h2>
              <p>Nuestros objetivos a corto plazo:</p>

              <ul class="primary list-unstyled mt-5">
                <li>°Generar datos de aceptación de las playas.</li>
                <li>°Generar datos de la contaminación de playas.</li>
                <li>°Evaluación hecha por los usuarios.</li>
              </ul>

            </div>

          </div>
        </div>
      </div>

      <div class="site-section" id="team-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Equipo de desarrollo.</h2>
                <p>Estudiantes de la Universidad Tecnologica de Cancún.</p>
              </div>
            </div>
          </div>

          <div class="owl-carousel owl-all mb-5" style="padding-left: 20%">
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/edgar.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Edgar Antonio Torres</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Desarrollador de back.</span>
              <a href="https://www.facebook.com/edgaar.toorres.1" style="color: black;">Facebook</a>  
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="images/ricardo.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ricardo</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Desarrollador de back.</span>
              <a href="https://www.facebook.com/RicarcasCruz" style="color: black;">Facebook</a>  
            </div>

        </div>
      </div>
      </div>

      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Mi PlayaQR:</h2>
                <p>Todos los derechos reservados a Mi PlayaQR</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Nos localizamos en:</h2>
                <p>Carretera Cancún-Aeropuerto, Km. 11.5 S.M. 299, Mz. 5, Lt 1, 77565 Cancùn, Q.R.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Contacto:</h2>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-facebook"> Facebook</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-twitter"> Twiiter</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-instagram"> Instagram</span></a></li>
            </form>
          </div>
        </div>
      </div>
    </footer>
<script>
function localizacion(position){
  map.setCenter({lat: position.coords.latitude, lng: position.coords.longitude});
  var myLatlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var marker = new google.maps.Marker({
    position: myLatlng,
    icon:'images/gps.png',
    content:'<h4>Tu ubicación</h4>'
});
marker.setMap(map);
$("#ubicacion").css("display", "none");
}
        STARTPOS = 0;
        LATI = 0;
        LONG = 0;
        variab = 0;
        window.onload = function() {
          
          var geoSuccess = function(position) {
            /*startPos = position;
            //document.getElementById('startLat').innerHTML = startPos.coords.latitude;
            //document.getElementById('startLon').innerHTML = startPos.coords.longitude;
            lati = startPos.coords.latitude;
            long = startPos.coords.longitude;*/
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 18.494725, lng: -88.293657},
            zoom: 15});
                google.maps.event.addListener(map, function(event){
                    // Add marker
                    addMarker({coords:event.latLng});
                });
                var markers=<?php echo json_encode($playas ?? '');?>;

                for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
        
      }
      // Add Marker Function
      function addMarker(props){
        console.log(props);
        //return;
        var marker = new google.maps.Marker({
          position:{lat:props.latitud,lng:props.longitud},
          map:map,
          icon:'images/palmera.png',
          content:'<a href="/playas/'+props.id+'"> hola'+ props.nombre +'</a>',
          //icon:props.iconImage
        });
        google.maps.event.addListener(marker, 'click', function() {
          //alert(props.nombre);
          window.location='/playas/'+props.id;
        });

        if(props.nombre){
          var nombre = props.bandera;
          if(nombre==1){
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banV.png" alt=""></h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }else if(nombre==2){
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banA.png" alt=""></h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }else if(nombre==3){
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banR.png" alt=""> </h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }else if(nombre==4){
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banAz.png" alt=""> </h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }else if(nombre==5){
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banB.png" alt=""></h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }else{
            var contentString = 
          '<div id="content">'+
          '<h6>'+props.nombre+' <img src="images/banN.png" alt=""> </h6> Estacionamiento: '+
            props.estacionamiento+'<br> Evento actual:'+
            props.evento+
            '</div>'+
          '</div>';
          }
          
          

          var infoWindow = new google.maps.InfoWindow({
            
            content:contentString
          });infoWindow.open(map, marker);

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
            
          });
          

        }
        //geoSuccess();
      }
          };
          //navigator.geolocation.getCurrentPosition(geoSuccess);
          geoSuccess();
          $("#ubicacion").click(function(){

            navigator.geolocation.getCurrentPosition(localizacion);
          });
        };

        /**/
        
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
