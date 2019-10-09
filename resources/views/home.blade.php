@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card-login">
                <div class="card-header" id="head-login">Bienvenido</div>
                

                <div class="card-body">
                    @if (session('status'))
                        return view('welcome');
                    @endif
                     <a href="{{ route('welcome') }}"><button id="ubicacion" style="margin-top: 35px; margin-bottom: 20px; height:50px; margin-left:44%;" class="btn btn-primary">Continuar</button></a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
