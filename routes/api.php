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

Route::post('getSolicitacoes', 'SolicitacaoController@getSolicitacoes');
Route::post('updateMediador', 'UserController@update');
Route::post('getUsers', 'UserController@getUsers');
Route::post('createMediador', 'RegisterController@create');
Route::post('getPerfils', 'PerfilController@get');
Route::post('logout','AuthController@logout');