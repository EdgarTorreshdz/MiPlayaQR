@extends('layouts.app')

@section('content')
    
<h1>editar nota {{$playasEditar->id}}</h1>

    <form method="post" action="{{ route('playas.update', $playasEditar->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" value={{ $playasEditar->nombre }} />
            </div>
            <div class="form-group">
              <label for="ubicacion">Estado</label>
              <input type="text" class="form-control" name="ubicacion" value={{ $playasEditar->estado }} />
            </div>
            <div class="form-group">
              <label for="bandera">Bandera</label>
              <input type="text" class="form-control" name="bandera" value={{ $playasEditar->bandera }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>



@endsection