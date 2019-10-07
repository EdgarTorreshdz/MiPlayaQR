@extends('layouts.app')
@section('content')
        <?php var_dump($playa) ?>

        <style>

        </style>
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
    
 @endsection