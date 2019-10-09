<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <title>Document</title>
</head>
<body>
@extends('layouts.menu')
@section('content')
    <div class="contenedor-1">
        <p>Resultados de encuestas</p>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Basura generada por el hombre</th>
      <th scope="col">Basura generada por el sargaso</th>
      <th scope="col">Basura organica</th>
      <th scope="col">Basura inorganica</th>
      <th scope="col">Mucha basura</th>
      <th scope="col">Poca basura</th>
      <th scope="col">Menos de cincuenta persona por playa</th>
      <th scope="col">Menos de cien personas por playa</th>
      <th scope="col">Más de cien personas por playa</th>

    </tr>
  </thead>
  <tbody>
    @foreach($encuesta as $recorrido)
    <tr>
      <td>{{$recorrido->hombre}}</td>
      <td>{{$recorrido->sargazo}}</td>
      <td>{{$recorrido->organica}}</td>
      <td>{{$recorrido->inorganica}}</td>
      <td>{{$recorrido->mucha}}</td>
      <td>{{$recorrido->poca}}</td>
      <td>{{$recorrido->menosCincuenta}}</td>
      <td>{{$recorrido->menosCien}}</td>
      <td>{{$recorrido->masCien}}</td>

      <td>
      <!--a href="{{ route('playas.editar', $recorrido->id)}}" class="btn btn-warning btn-sm">Editar</a-->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>

</body>
</html>
@endsection