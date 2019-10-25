<?php


use App\Http\Controllers\PageController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
//Rutas de usuario standard
route::group(['middleware'=>'usuarioStandard'],function()     {
    //Route::get('login','LoginController@showLoginForm')->name('login');
    Route::post('/playas/{playa}', 'PageController@votar')->name('playas.votar');
    Route::get('/playas', 'PageController@playas')->name('playas');
    Route::get('/playas/{playa}', 'PageController@show')->name('playas.show');
    Route::get('/playas/{playa}/encuesta', 'PageController@encuesta')->name('playas.encuesta.encuesta');
    Route::get('/realizado', 'PageController@realizado')->name('realizado');
    Route::get('/encuestaRealizada', 'PageController@encuestaRealizada')->name('encuestaRealizada');

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

//CRUD PLAYAS
    Route::post('/', 'PageController@crear')->name('playas.crear');
    Route::delete('/eliminar/{id}', 'PageController@eliminar')->name('playas.eliminar');
    Route::get('/editar/{id}', 'PageController@editar')->name('playas.editar');


});



Route::post('/encuestaok/{id}', 'PageController@encuestaupdate')->name('encuesta');

