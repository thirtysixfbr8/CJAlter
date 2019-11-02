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
use App\User;
Route::get('/', function (){
    return view('auth.login');
});

Route::get('/backoffice', "BackofficeController@index")->name('backoffice.index');

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::patch('/backoffice/mediador/update', 'Auth\LoginController@update')->name('update');

#Para testes
Route::get('/backoffice/mediador/{user?}', function (User $user){
    $user = User::findOrFail($user);
    $appContents = json_decode(Storage::disk('local')->get('page.json'), true);
    return view('backoffice.mediador', compact('appContents', 'user'));
});

Route::get('backoffice/mediador/solicitacoes/{utilizador?}', 'SolicitacaoController@show')->name('solicitacao.show');

#Route::get('/backoffice/mediador/{user}', "BackofficeController@show")->name('backoffice.show');
############ Essa rota estou a pensar em fazer /backoffice/{perfil}/{user} -> para pegar os dados
Route::get('/backoffice/{any}', 'VueController@index')->where('any', '.*');
#EndTest


#Route::get('/backoffice/create','BackofficeController@create')->name('backoffice.create');