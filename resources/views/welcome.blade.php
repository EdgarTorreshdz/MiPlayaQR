
@extends('layouts.app')
@section('content')
    <div id="startLat"></div>
    <div id="startLon"></div>
    <div id="map"></div>

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
    zoom: 15});
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
