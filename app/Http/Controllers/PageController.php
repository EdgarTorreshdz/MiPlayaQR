<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class PageController extends Controller
{   
    //
    public function playas(){
        $playas = App\Playa::all();
        return view('playas',compact('playas'));
    }
    public function show($playa){
        $playas = App\Playa::find($playa);  
        return view('playas.detalle',[
            'playa'=>$playas
        ]);
    }
    public function encuesta($playa){
        $playas = App\Playa::find($playa);  
        return view('playas.encuesta.encuesta',[
            'playa'=>$playas
        ]);
    }


    public function votar(Request $request, $playa){
        $playas = App\InformacionPlayas::where('idplaya',$playa)->first();
        if(is_null($playas)){
            $playas=new App\InformacionPlayas;
            $playas->votosnegativos=0;
            $playas->votospositivos=0;
            $playas->idplaya=$playa;
        }
        if($request->tipo=='malo'){
            $playas->votosnegativos=$playas->votosnegativos+1;
        }else{
            $playas->votospositivos=$playas->votospositivos+1;
        }
        $playas->save();
        
        return redirect()->route('realizado');
    }
    
    public function usuarios(){
        $usuarios = App\User::all();
        return view('usuarios',compact('usuarios'));
    }

    public function admin(){
        //$usuarios = App\User::all();
        $encuesta = App\Encuesta::all();
        return view('admin',compact('encuesta'));

    }

    public function welcome(){
        $playas = App\Playa::all();
        return view('welcome',compact('playas'));
    }
    
    public function crear(Request $request){
        
        $request->validate([
            'nombre'=>'required|max:40',
            'latitud'=>'required|max:10',
            'longitud'=>'required|max:10',
            'bandera'=>'required',
            'evento'=>'required',
            'estacionamiento'=>'required',
            'ubicacion'=>'required|max:40',

        ]);

        $playaNueva= new App\Playa;
        $playaNueva->nombre = $request->nombre;
        $playaNueva->imagen=$request->imagen;
        $playaNueva->latitud=$request->latitud;
        $playaNueva->longitud=$request->longitud;
        $playaNueva->bandera = $request->bandera;
        $playaNueva->evento = $request->evento;
        $playaNueva->estacionamiento = $request->estacionamiento;
        $playaNueva->ubicacion = $request->ubicacion;
        
        $playaNueva->save();
        return back()->with('mensaje','Playa Creada');

        //return $request->all();
    }


    public function editar($id){
        $playasEditar = App\Playa::findOrFail($id);
        return view('editar',compact('playasEditar'));

    }
    public function eliminar($id){
        $playasEliminar= App\Playa::findOrFail($id);
        $playasEliminar->delete();
        return back()->with('mensaje', 'Playa Eliminada');
    }


    public function listaPlaya(){
        $playas = App\Playa::all();
        return view('lista',compact('playas'));

    }



    public function encuestaUpdate(Request $request, $id){
        $encuesta = App\Encuesta::where('idplaya', $id)->first();
        if(is_null($encuesta)){
            $encuesta = new App\Encuesta();
            $encuesta->idplaya=$id;
            $encuesta->hombre=0;
            $encuesta->sargazo=0;
            $encuesta->organica=0;
            $encuesta->inorganica=0;
            $encuesta->mucha=0;
            $encuesta->poca=0;
            $encuesta->menosCincuenta=0;
            $encuesta->menosCien=0;
            $encuesta->masCien=0;
        }
        if($request->pregunta1=="SI"){
            $encuesta->hombre = $encuesta->hombre + 1;
        }
        if($request->pregunta1=="NO"){
            $encuesta->sargazo = $encuesta->sargazo + 1;
        }
        if($request->pregunta2=="SI"){
            $encuesta->organica = $encuesta->organica + 1;
        }
        if($request->pregunta1=="NO"){
            $encuesta->inorganica = $encuesta->inorganica + 1;
        }
        if($request->pregunta2=="SI"){
            $encuesta->mucha = $encuesta->mucha + 1;
        }
        if($request->pregunta1=="NO"){
            $encuesta->poca = $encuesta->poca + 1;
        }
        if($request->pregunta2=="SI"){
            $encuesta->menosCincuenta = $encuesta->menosCincuenta + 1;
        }
        if($request->pregunta1=="NO"){
            $encuesta->menosCien = $encuesta->menosCien + 1;
        }
        if($request->pregunta1=="NA"){
            $encuesta->masCien = $encuesta->masCien + 1;
        }
        $encuesta->save();
        return redirect()->route('encuestaRealizada');
    }
    public function realizado(){
        return view('realizado');
    }
    public function encuestaRealizada(){
        return view('encuestaRealizada');
    }
}
