<?php

use Illuminate\View\View;

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
    return redirect('/login');
});
// Route::get('examenfisico', function () {
//     return View('ExamenFisico.vista');
// });

Route::resource('atleta', 'AtletaController');
Route::resource('roles', 'RolesController');
Route::resource('CuestionarioMedico','CuestionarioMedicoController');
Route::resource('category','CategoryController');
Route::resource('hospital','HospitalController');
Route::resource('examenfisico', 'ExamenFisicoController');
//Route::post('examenfisico', 'ExamenFisicoController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
