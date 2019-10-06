@extends('layouts.app')
@section('content')
<h1>Playas - MiplayaQR</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">imagen</th>
    </tr>
  </thead>
  <tbody>
    @foreach($playas as $recorrido)
    <tr>
      <th scope="row">{{$recorrido->id}}</th>
      <td>{{$recorrido->nombre}}</td>
      <td>{{$recorrido->descripcion}}</td>
      <td>{{$recorrido->imagen}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection