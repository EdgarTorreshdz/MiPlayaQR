@extends('layouts.app')
@section('content')
<h1>Playas - MiplayaQR</h1>

<div clas="caja">
@foreach($playas as $recorrido)
  <div id="carta" class="card mb-3">
    <a href="/playas/{{$recorrido->id}}"><img class="card-img-top" src="images/delfines.jpg" alt=""></a>
    <div class="card-body">
      <h5 class="card-title">Playa:  {{$recorrido->nombre}}</h5>
      <p class="card-text">Ubicación {{$recorrido->ubicacion}}</p>
    </div>
  </div>
    @endforeach
  </div>
@endsection