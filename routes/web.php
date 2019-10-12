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

Route::get('/', function (){
    return view('auth.login');
});

Route::get('/backoffice', "BackofficeController@index")->name('backoffice.index');
#Route::get('/backoffice/{user}', "BackofficeController@show")->name('backoffice.show'); pegar 
############ Essa rota estou a pensar em fazer /backoffice/{perfil}/{user} -> para pegar os dados
Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

#Para testes
Route::get('/backoffice/mediador', function (){
    $appContents = json_decode(Storage::disk('local')->get('page.json'), true);
    return view('backoffice.mediador', compact('appContents'));
});

Route::get('/backoffice/{any}', 'VueController@index')->where('any', '.*');
#EndTest


#Route::get('/backoffice/create','BackofficeController@create')->name('backoffice.create');