@extends('layouts.app')
@section('content')
@if (Auth::check())
<h1>Playas - MiplayaQR</h1>
@if(session('mensaje'))
  <div class="alert alert-success">
    {{session('mensaje') }}
  </div>
  
@endif

<form action="" method="post">

  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
  <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>


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
 @endif

 <h1>Inicia Sesion Para Continuar</h1>
@endsection