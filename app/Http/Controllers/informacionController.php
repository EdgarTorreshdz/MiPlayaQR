<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
class informacionController extends Controller
{
    public function infos(){
        $information = App\informacionPlayas::all();
        return view('info',compact('information'));
    }
    public function crear(Request $request){
        //Falta editar
        $request->validate([
            'nombre'=>'required|max:40',
            'latitud'=>'required|max:10',
            'longitud'=>'required|max:10',
            'ubicacion'=>'required|max:40',

        ]);

        $playaNueva= new App\InformacionPlayas;
        $playaNueva->nombre = $request->nombre;
        $playaNueva->imagen=$request->imagen;
        $playaNueva->latitud=$request->latitud;
        $playaNueva->longitud=$request->longitud;
        $playaNueva->ubicacion = $request->ubicacion;
        $playaNueva->save();
        return back()->with('mensaje','Playa Creada');

        //return $request->all();
    }

    
}
