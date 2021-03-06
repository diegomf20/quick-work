<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header("Access-Control-Allow-Origin: *");   
header("Access-Control-Allow-Headers: *");

Route::post('login','LoginController@ingresar');
Route::resource('postulante', 'PostulanteController');
Route::resource('empresa', 'EmpresaController');
Route::resource('publicacion', 'PublicacionController');
Route::resource('postulacion', 'PostulacionController');