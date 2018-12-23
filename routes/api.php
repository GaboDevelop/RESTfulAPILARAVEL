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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('clientes','ClientesController@getALL')->name('getAllClientes');
Route::post('clientes','ClientesController@add')->name('addClientes');
Route::get('clientes/{id}','ClientesController@get')->name('getClientes');
Route::post('clientes/{id}','ClientesController@edit')->name('editClientes');
Route::get('clientes/delete/{id}','ClientesController@delete')->name('deleteClientes');