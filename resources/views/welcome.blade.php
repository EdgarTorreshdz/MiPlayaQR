
@extends('layouts.app')
@section('content')
    <div id="startLat"></div>
    <div id="startLon"></div>
    <div id="map"></div>

@endsection
    <script>
var startPos;
var lati;
var long;
window.onload = function() {
  
  var geoSuccess = function(position) {
    startPos = position;
    document.getElementById('startLat').innerHTML = startPos.coords.latitude;
    document.getElementById('startLon').innerHTML = startPos.coords.longitude;
    lati = startPos.coords.latitude;
    long = startPos.coords.longitude;
  };
  

  navigator.geolocation.getCurrentPosition(geoSuccess);
};

        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 21.1321181, lng: -86.8563852},
            zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBw-vOkQq7mPD-46S1GOq-dCPcmFmxNkko&callback=initMap"
    async defer></script>
