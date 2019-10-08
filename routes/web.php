<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


//rutas accesibles si el usuario no esta logueado.

Route::get('/', 'PageController@welcome')->name('welcome');

Route::get('/playas/{playa}', 'PageController@show')->name('playas.show');

route::group(['middleware'=>'usuarioAdmin'],function(){
    Route::delete('eliminar/{id}', 'PageController@eliminar')->name('playas.eliminar');
    Route::get('/playas', 'PageController@playas')->name('playas');
    Route::put('/editar/{id}', 'PageController@editar' )->name('playas.editar');
});
route::group(['middleware'=>'usuarioStandard'],function(){
    //Route::get('login','LoginController@showLoginForm')->name('login');
    Route::post('/playas/{playa}', 'PageController@votar')->name('playas.votar');


});
Route::get('/usuarios', 'PageController@Usuarios')->name('usuarios');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


//pagina info
Route::get('/info', 'informacionController@infos')->name('infos');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/denied', ['as' => 'denied', function() {
    return view('welcome');
}]);
Route::get('/denegado', ['as' => 'denegado', function() {
    return view('welcome');
}]);
//Pagina playa

