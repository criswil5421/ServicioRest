<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');

Route::group([

    'middleware' => 'api',

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();

], function ($router) {

    Route::get('materia_prima', 'App\Http\Controllers\Materia_Prima_Controller@index');
    Route::get('materia_prima/{Primario_Id}', 'App\Http\Controllers\Materia_Prima_Controller@show');
    Route::post('materia_prima', 'App\Http\Controllers\Materia_Prima_Controller@create');
    Route::put('materia_prima/{Primario_Id}', 'App\Http\Controllers\Materia_Prima_Controller@update');
    Route::delete('materia_prima/{Primario_Id}', 'App\Http\Controllers\Materia_Prima_Controller@destroy');
});
