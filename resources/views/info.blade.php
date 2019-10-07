@extends('layouts.app')
@section('content')
 
 <h1>Informacion diaria de playas</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Votos positivos</th>
        <th scope="col">Votos Negativos</th>
      </tr>
    </thead>
    <tbody>
      @foreach($information as $recorrido)
      <tr>
        <th scope="row">{{$recorrido->id}}</th>
        <td>{{$recorrido->nombre}}</td>
        <td>{{$recorrido->votospositivos}}</td>
        <td>{{$recorrido->votosnegativos}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

 
 @endsection