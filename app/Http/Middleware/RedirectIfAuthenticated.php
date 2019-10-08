<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        if($usuario_actual->permiso!=1){
            return redirect()->route('denegado');
         //return view("welcome")->with("msj","No tiene suficientes Privilegios para acceder a esta seccion");
        }
        return $next($request);
    }
}
