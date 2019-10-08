@extends('layouts.app')
@section('content')
<h1>Usuarios - MiplayaQR</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">permiso</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $recorrido)
    <tr>
      <th scope="row">{{$recorrido->id}}</th>
      <td>{{$recorrido->name}}</td>
      <td>{{$recorrido->email}}</td>
      <td>{{$recorrido->permiso}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection