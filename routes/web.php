<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', 'PrincipalController@funcaoPrincipal');
Route::get('/sobrenos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/vaicaralho', 'TestController@vaicaralho');

Route::get('/contato/{nome}/{idade}', function(String $nome, Int $idade) {
    echo 'Nome: '. strtoupper($nome);    
    echo '<br>Idade: '. $idade;
})->where('idade', '[0-9]+')->where('nome', '[A-Za-z]+');


