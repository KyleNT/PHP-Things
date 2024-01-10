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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'App\Http\Controllers\ClientesController@index');
Route::get('/{id}', 'App\Http\Controllers\ClientesController@getCliente');
Route::post('/','App\Http\Controllers\ClientesController@inserir');

