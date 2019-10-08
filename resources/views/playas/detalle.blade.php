@extends('layouts.app')
@section('content')
        <?php //var_dump($playa) ?>
    <div class="contenedor">
    <div id="card" class="card" style="width: 50%; margin-left:25%; ">
        <img src="../img/delfines.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$playa->nombre}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="container">
            <form class="row" action="/playas/{{$playa->id}}" method="post">
                <div class="col">
                    <input name="tipo" value="bueno" type="submit" class="btn btn-primary">
                </div>
                <div class="col">
                    <input name="tipo" value="malo" type="submit" class="btn btn-danger">
                </div>
                @csrf
            </form>
            </div>
        </div>
        </div>
    </div>
    
    
 @endsection