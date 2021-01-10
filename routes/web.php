<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

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

Route::get('/', 'PrincipalController@funcaoPrincipal')->name('site.principal');
Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/vaicaralho', 'TestController@vaicaralho');
Route::get('/login', function(){return 'login';});
Route::get('/teste/{p1}/{p2}', 'TestController@passagemParametro')->name('teste');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';});
    Route::get('/fornecedores', 'FornecedorController@index');
    Route::get('/produtos', function(){return 'produtos';});
});


Route::fallback(function() {
    echo 'Pagina inexistente. <a href="/">Clique aqui<a> para ir para a home';
});


