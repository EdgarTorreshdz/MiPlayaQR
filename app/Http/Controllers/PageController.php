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
    }
    
    public function usuarios(){
        $usuarios = App\User::all();
        return view('usuarios',compact('usuarios'));
    }

    public function admin(){
        //$usuarios = App\User::all();
        return view('admin');
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
            'ubicacion'=>'required|max:40',

        ]);

        $playaNueva= new App\Playa;
        $playaNueva->nombre = $request->nombre;
        $playaNueva->imagen=$request->imagen;
        $playaNueva->latitud=$request->latitud;
        $playaNueva->longitud=$request->longitud;
        $playaNueva->ubicacion = $request->ubicacion;
        $playaNueva->save();
        return back()->with('mensaje','Playa Creada');

        //return $request->all();
    }

    /*public function editar(Request $request, $id){
        $playasEditar = App\Playa::findOrFail($id);
        $playasEditar->save();
        return back()->with('mensaje','Playa editada');
    }*/
    /*public function eliminar($id){
        $playasEliminar= App\Playa::findOrFail($id);
        $playasEliminar->delete();
        return back()->with('mensaje', 'Playa Eliminada');
    }*/
    /*public function crear(Request $request){
        
        $request->validate([
            'nombre'=>'required|max:40',
            'latitud'=>'required|max:10',
            'longitud'=>'required|max:10',
            'ubicacion'=>'required|max:40',

        ]);

        $playaNueva= new App\Playa;
        $playaNueva->nombre = $request->nombre;
        $playaNueva->imagen=$request->imagen;
        $playaNueva->latitud=$request->latitud;
        $playaNueva->longitud=$request->longitud;
        $playaNueva->ubicacion = $request->ubicacion;
        $playaNueva->save();
        return back()->with('mensaje','Playa Creada');

        //return $request->all();
    }*/

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
}
