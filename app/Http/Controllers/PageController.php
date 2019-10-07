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


    public function welcome(){
        $playas = App\Playa::all();
        return view('welcome',compact('playas'));
    }
    public function editar($id){

    }
    public function eliminar($id){
        $playasEliminar= App\Playa::findOrFail($id);
        $playasEliminar->delete();
        return back()->with('mensaje', 'Playa Eliminada');
    }
}
