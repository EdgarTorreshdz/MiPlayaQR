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

    
}
