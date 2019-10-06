<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuariosFormRequest;
use DB;
class UsuariosController extends Controller
{
    
    public function __construct(){

    }
    public function index(Request $request) {

        if($request)
        {
            $query=trim($request->get('searchText'));
            $usuarios=DB::table('usuarios')->where('nombre','LIKE','%'.$query.'%')->orderBy('id','desc');
            return view('almacen.usuarios.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        }

    }
    public function create(){

        return view("almacen.usuarios.create");
    }
    public function store (UsuariosFormRequest $request){

        $usuario=new Usuarios;
        $usuario->nombre=$request->get('nombre');
    }
    
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
