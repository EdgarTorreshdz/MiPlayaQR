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
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Id de la playa</th>
        <th scope="col">Votos positivos</th>
        <th scope="col">Votos Negativos</th>
      </tr>
    </thead>
    <tbody>
      @foreach($information as $recorrido)
      <tr>
        <th scope="row">{{$recorrido->id}}</th>
        <td>{{$recorrido->idplaya}}</td>
        <td>{{$recorrido->votospositivos}}</td>
        <td>{{$recorrido->votosnegativos}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
  </div>
</body>
</html>

    
    
  


@endsection