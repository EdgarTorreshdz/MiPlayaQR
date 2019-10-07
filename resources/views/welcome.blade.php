
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--
    @foreach($playas as $recorrido)
      <input class="invisible" type="text" placeholder="{{$recorrido->nombre}}">
      <input id="latid" class="invisible" type="text" placeholder="{{$recorrido->latitud}}">
      <input id="lonid" class="invisible" type="text" placeholder="{{$recorrido->longitud}}">
    @endforeach
    -->
    <div id="map"></div>
    <div class="busca">
    <h1>Busca tu playa</h1>
    </div>
    <div id="sec" class="row">
      <div class="col-8">col-8</div>
      <div class="col-4">col-4</div>
    </div>
<div class="dropdown">
  <button class="btn dropdown-toggle sr-only" type="button"
          id="dropdownMenu1" data-toggle="dropdown">
    Menú desplegable
    <span class="caret"></span>
  </button>

  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Acción</a>
    </li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Otra acción</a>
    </li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Otra acción más</a>
    </li>
    <li role="presentation" class="divider"></li>
    <li role="presentation">
      <a role="menuitem" tabindex="-1" href="#">Acción separada</a>
    </li>
  </ul>
</div>
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
    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBw-vOkQq7mPD-46S1GOq-dCPcmFmxNkko&callback=initMap"
    async defer></script>
</body>
</html>