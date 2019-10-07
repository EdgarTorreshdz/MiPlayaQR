
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
    <link href="css/mapa.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="">
    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBw-vOkQq7mPD-46S1GOq-dCPcmFmxNkko&callback=initMap">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    async defer></script>

</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                MyplayaQR
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



        
    </div>
  
    <div id="map" class="col-sm-12 col-md-12"></div>
    @foreach($playas as $recorrido)
      <input class="invisible" type="text" placeholder="{{$recorrido->nombre}}">
      <input class="invisible" type="text" placeholder="{{$recorrido->latitud}}">
    @endforeach


   
   <div class="row">
   <div class="col sm 12 azul">
   <h2 id="Encuentra">Encuentra tu playa:</h2>
   </div>
   </div>



     <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">

      <h3 class="col-sm-5"> La playa más limpia: 
      </h3>


        <select class="form-control form-control col-sm-5">
            <option>Hoy</option>
            <option>Ayer</option>
            <option>Última semana</option>
            <option>Último mes</option>
        </select>


      <h3 class="col-sm-6" id="izquierda">La playa más visitada:
      </h3>


      <select class="form-control form-control col-sm-5" id="izquierdaf">
            <option>Hoy</option>
            <option>Ayer</option>
            <option>Última semana</option>
            <option>Último mes</option>
      </select>

    </div>
    <div class="container">

    <br>
    <br>

<h3 class="col-sm-5"> La playa más limpia: 
</h3>


  <select class="form-control form-control col-sm-5">
      <option>Hoy</option>
      <option>Ayer</option>
      <option>Última semana</option>
      <option>Último mes</option>
  </select>


<h3 class="col-sm-6" id="izquierda">La playa más visitada:
</h3>


<select class="form-control form-control col-sm-5" id="izquierdaf">
      <option>Hoy</option>
      <option>Ayer</option>
      <option>Última semana</option>
      <option>Último mes</option>
</select>

</div>
    <div class="container">
    <div class="row"> 
    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="btnEnviar">Enviar</a>
    </div>
    </div>
  </section>


   <!-- Image Showcases -->
   <section class="showcase hueso">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/cancun-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Encuentra</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nesciunt, fugiat at rerum laudantium perspiciatis! Voluptate earum excepturi placeat tempora?</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/cancun-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Reporta</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magnam architecto blanditiis at? Quis quasi, delectus facilis velit provident impedit.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/cancun-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Disfruta</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid ipsa sapiente iste voluptas veritatis eum, ab voluptatem impedit error officiis.</p>
        </div>
      </div>
    </div>
  </section>
  


  <div class="row">
  <div class="azul col-sm-12">
  <h2 style="margin-top:25px;">Creadores...</h2></div>
  </div>


  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
      <div class="row">
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
      </div>
    </div>
  </section>


  <br>
  <br>
  <br>  

  <footer class="section footer-classic context-dark bg-image" style="background: #2176BD;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <script>
        STARTPOS = 0;
        LATI = 0;
        LONG = 0;
        variab = 0;
        window.onload = function() {
          
          var geoSuccess = function(position) {
            startPos = position;
            //document.getElementById('startLat').innerHTML = startPos.coords.latitude;
            //document.getElementById('startLon').innerHTML = startPos.coords.longitude;
            lati = startPos.coords.latitude;
            long = startPos.coords.longitude;
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: lati, lng: long},
            zoom: 15});
                google.maps.event.addListener(map, function(event){
                    // Add marker
                    addMarker({coords:event.latLng});
                });
                var markers = [
                  {
                    coords:{lat:lati,lng:long},
                    content:'<h1>TU ubicacion</h1>'
                    },
                    
                    {
                    coords:{lat:21.137839,lng:-86.747870},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Caracol</h1>'
                    },
                    {
                    coords:{lat:21.1405958,lng:-86.7764553},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Tortugas</h1>'
                    },
                    {
                    coords:{lat:21.103459,lng:-86.763366},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Marlin</h1>'
                    },
                    {
                    coords:{lat:21.060469,lng:-86.780001},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Delfines</h1>'
                    },
                    {
                    coords:{lat:21.136752,lng:-86.754198},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Ancha</h1>'
                    },
                    {
                    coords:{lat:21.14487,lng:-86.778171},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Casa Blanca</h1>'
                    },
                    {
                    coords:{lat:21.145386,lng:-86.780159},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Langosta</h1>'
                    },
                    {
                    coords:{lat:21.128785,lng: -86.748833},
                    iconImage:'images/Palm.png',
                    content:'<h1>Playa Chacmol</h1>'
                    }
                    
                ];
                for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
          };
          
        
          navigator.geolocation.getCurrentPosition(geoSuccess);
        };

        /*var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: LATI, lng: LONG},
            zoom: 8
            });
        }*/
        
    </script>


</body>
</html>