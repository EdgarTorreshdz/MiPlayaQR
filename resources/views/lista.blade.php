@extends('layouts.app')
@section('content')

<div class="container row">
  
  <div class="col-2 menu-lateral">
        <nav>
            <li>
              <br>
            <a href="/admin"><span class="icon-home"></span>
                <br>
                Home</a>
            </li>
            <li>
              <br>
            <a href="/usuarios"><span class="icon-users"></span>
                <br>
                Usuarios</a>
            </li>
            <li>
              <br>
            <a href="/lista"><span class="icon-leaf"></span>
                <br>
                Playas</a>
            </li>
            <li>
              <br>
            <a href="votos"><span class="icon-file-text"></span>
                <br>
                Encuestas</a>
            </li>
            <li>
                
            </li>
          </nav>
        </div>
    
    <div class="admin1 col-10">
        <div class="text-center" >
          <h2 class="subscribe-title">Resultados de encuestas</h2>
          <p class="subscribe-text">Encuentra todas las playas de nuestro hermoso estado de Quintana Roo</p>
        </div>

        <form action="{{route('playas.crear')}}" method="POST" class="form1">
      @csrf
    <input type="text" name="nombre"  placeholder="Nombre" class="form-control mb-2">
      <input type="text" name="imagen" placeholder="Imagen" value="1" disabled>
      <input type="number" step="any" name="latitud"  placeholder="Latitud" class="form-control mb-2">
      <input type="number" step="any" name="longitud" placeholder="Longitud" class="form-control mb-2">
      <input type="text" name="ubicacion" placeholder="Estado" class="form-control mb-2">

      <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

    <br>
    <br>
    <br>
    
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
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
      <td>
      <!--a href="{{ route('playas.editar', $recorrido->id)}}" class="btn btn-warning btn-sm">Editar</a-->

      <form action="{{route('playas.eliminar',$recorrido->id)}}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        
    </div>
  </div>
</body>
</html>

    
    
  


@endsection

