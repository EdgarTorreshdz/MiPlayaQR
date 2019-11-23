@extends('layouts.app')
@section('content')

<div class="container row">
  
  <div class="col-2 menu-lateral">
        <nav>
            <li>
              <br>
            <a href="/admin"><span class="icon-file-text"></span>
                <br>
                Encuestas</a>
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
            <a href="votos"><span class="icon-pencil"></span>
                <br>
                Votos</a>
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



    <table class="table" id="indiv">
      <thead class="thead-dark container">
        <tr>
        <th>nombre de la playa</th>
        <th >Basura <br>generada por <br>el hombre</th>
      <th >Basura <br>generada por <br>el sargaso</th>
        </tr>
      </thead>
      <tbody>
      @foreach($encuesta as $recorrido)
        <tr>
        <td>{{$recorrido->playa->nombre}}</td>
        <td>{{$recorrido->hombre}}</td>
      <td>{{$recorrido->sargazo}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <table class="table" id="indiv">
      <thead class="thead-dark container">
        <tr>
        <th>nombre de la playa</th>
        <th >Basura organica</th>
      <th >Basura inorganica</th>
        </tr>
      </thead>
      <tbody>
      @foreach($encuesta as $recorrido)
        <tr>
        <td>{{$recorrido->playa->nombre}}</td>
        <td>{{$recorrido->organica}}</td>
      <td>{{$recorrido->inorganica}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <table class="table" id="indiv">
      <thead class="thead-dark container">
        <tr>
        <th>nombre de la playa</th>
        <th >Mucha basura</th>
      <th >Poca basura</th>
        </tr>
      </thead>
      <tbody>
      @foreach($encuesta as $recorrido)
        <tr>
        <td>{{$recorrido->playa->nombre}}</td>
        <td>{{$recorrido->mucha}}</td>
      <td>{{$recorrido->poca}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <table class="table" id="indiv">
      <thead class="thead-dark container">
        <tr>
        <th>nombre de la playa</th>
        <th >- de 50 persona por playa</th>
      <th >- de 100 personas por playa</th>
      <th >+ de 100 personas por playa</th>

        </tr>
      </thead>
      <tbody>
      @foreach($encuesta as $recorrido)
        <tr>
        <td>{{$recorrido->playa->nombre}}</td>
        <td>{{$recorrido->menosCincuenta}}</td>
      <td>{{$recorrido->menosCien}}</td>
      <td>{{$recorrido->masCien}}</td>

        </tr>
        @endforeach
      </tbody>
    </table>



    </div>
  </div>
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Mi PlayaQR:</h2>
                <p>Todos los derechos reservados a Mi PlayaQR</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Nos localizamos en:</h2>
                <p>Carretera Cancún-Aeropuerto, Km. 11.5 S.M. 299, Mz. 5, Lt 1, 77565 Cancùn, Q.R.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Contacto:</h2>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-facebook"> Facebook</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-twitter"> Twiiter</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-instagram"> Instagram</span></a></li>
            </form>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>

    
    
  


@endsection