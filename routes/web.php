<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');

    Route::get('json-api', "medio@index");

    Auth::routes(['verify' => true]);

    Auth::routes();

    Route::get('materia_primaa/index',"Materia_Prima_Controller@index");
    Route::get('materia_prima/show/{Primario_Id}',"Prima@show");
});
