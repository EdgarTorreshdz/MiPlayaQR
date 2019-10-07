<?php


use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@welcome')->name('welcome');

//Route::get('login','LoginController@showLoginForm')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//pagina info
Route::get('/info', 'informacionController@infos')->name('infos');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/playas', 'PageController@playas')->name('playas');
//Pagina playa
Route::put('/editar/{id}', 'PageController@editar' )->name('playas.editar');
Route::delete('eliminar/{id}', 'PageController@eliminar')->name('playas.eliminar');