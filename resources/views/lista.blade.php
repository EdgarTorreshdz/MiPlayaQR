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

</body>
</html>
@endsection