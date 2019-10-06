
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

    
    <div id="map"></div>
    @foreach($playas as $recorrido)
      <input class="invisible" type="text" placeholder="{{$recorrido->nombre}}">
      <input class="invisible" type="text" placeholder="{{$recorrido->latitud}}">
    @endforeach


<<<<<<< HEAD
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
                google.maps.event.addListener(map, 'click', function(event){
                    // Add marker
                    addMarker({coords:event.latLng});
                });
                var markers = [
                  {
                    coords:{lat:lati,lng:long},
                    content:'<h1>Amesbury MA</h1>'
                    },
                    {
                    coords:{lat:21.131679,lng:-86.856411},
                    iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                    content:'<h1>Lynn MA</h1>'
                    },
                    
                    {
                    coords:{lat:21.132219,lng:-86.855646},
                    iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                    content:'<h1>Lynn MA</h1>'
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
=======
@endsection


    <script>

STARTPOS = 0;
LATI = 0;
LONG = 0;
window.onload = function() {
  

  var geoSuccess = function(position) {
    startPos = position;
    document.getElementById('startLat').innerHTML = startPos.coords.latitude;
    document.getElementById('startLon').innerHTML = startPos.coords.longitude;
    lati = startPos.coords.latitude;
    long = startPos.coords.longitude;
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: lati, lng: long},
    zoom: 20});
  };
  

  navigator.geolocation.getCurrentPosition(geoSuccess);
};
>>>>>>> 1.1 R

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
