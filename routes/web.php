<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
//Rutas de usuario standard
route::group(['middleware'=>'usuarioStandard'],function()     {
    //Route::get('login','LoginController@showLoginForm')->name('login');
    Route::post('/playas/{playa}', 'PageController@votar')->name('playas.votar');
    Route::get('/playas', 'PageController@playas')->name('playas');
    Route::get('/playas/{playa}', 'PageController@show')->name('playas.show');

});
Route::post('/playas/{playa}', 'PageController@votar')->name('playas.votar');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/denied', ['as' => 'denied', function() {
    return view('admin');
}]);
Route::get('/', 'PageController@welcome')->name('welcome');

Route::get('/denegado', ['as' => 'denegado', function() {
    return view('welcome');
}]);
//Rutas de Administrador
route::group(['middleware'=>'usuarioAdmin'],function(){
    Route::get('/admin', 'PageController@admin')->name('admin');
    Route::get('/lista','PageController@listaPlaya')->name('lista');
    Route::get('/usuarios', 'PageController@Usuarios')->name('usuarios');
    Route::get('/votos','informacionController@infos')->name('votos');
});
