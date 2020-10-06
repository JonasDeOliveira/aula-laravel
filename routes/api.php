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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'autenticador'], function() {
    Route::get('/listar', 'Api\CursoController@listar');
});

//rotas Curso
//Route::get('/listar', 'Api\CursoController@listar');
Route::post('/salvar', 'Api\CursoController@salvar');
Route::get('/buscar/{id}', 'Api\CursoController@buscar');
Route::put('/atualizar/{id}', 'Api\CursoController@atualizar');
Route::delete('/deletar/{id}', 'Api\CursoController@deletar');

Route::post('/login', 'TokenController@gerarToken');

Route::post('/cadastrar', 'Api\UsuarioController@cadastrar');
