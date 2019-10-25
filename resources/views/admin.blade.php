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
        <table class="table">
  <thead class="thead-dark container">
    <tr class="row">
      <th scope="col-1">Basura del hombre</th>
      <th scope="col-1">Basura por sargaso</th>
      <th scope="col-1">Basura organica</th>
      <th scope="col-1">Basura inorganica</th>
      <th scope="col-1">Mucha basura</th>
      <th scope="col-1">Poca basura</th>
      <th scope="col-1">- de 50 persona por playa</th>
      <th scope="col-1">- de 100 personas por playa</th>
      <th scope="col-1">+ de 100 personas por playa</th>
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
  </div>
</body>
</html>

    
    
  


@endsection