@extends('layouts.app')
@section('content')
    <div class="contenedor-1">
    <h1>playas - MiplayaQR</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($playas as $recorrido)
    <tr>
      <th scope="row">{{$recorrido->id}}</th>
      <td>{{$recorrido->nombre}}</td>
      <td>{{$recorrido->ubicacion}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>

@endsection