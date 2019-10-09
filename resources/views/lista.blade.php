<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>HEY</title>
</head>
<body>

@extends('layouts.menu')
@section('content')


    <div class="contenedor-1">
    <h1>Usuarios - MiplayaQR</h1>


    <form action="{{route('playas.crear')}}" method="POST">
      @csrf
      <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
      <input type="text" name="imagen" placeholder="Imagen" value="1" disabled>
      <input type="number" step="any" name="latitud" placeholder="Latitud" class="form-control mb-2">
      <input type="number" step="any" name="longitud" placeholder="Longitud" class="form-control mb-2">
      <input type="text" name="ubicacion" placeholder="Estado" class="form-control mb-2">

      <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
    
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col"> acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($playas as $recorrido)
    <tr>
      <th scope="row">{{$recorrido->id}}</th>
      <td>{{$recorrido->nombre}}</td>
      <td>{{$recorrido->ubicacion}}</td>
      <td>Acciones</td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>

</body>
</html>
@endsection