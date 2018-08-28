<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Por favor no joda aqui';
});
Route::resource('atleta', 'AtletaController');
Route::resource('CuestionarioMedico','CuestionarioMedicoController');
Route::resource('/cate','CategoriaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
