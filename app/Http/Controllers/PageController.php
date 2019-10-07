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
