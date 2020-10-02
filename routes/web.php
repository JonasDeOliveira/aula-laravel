<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/contato', 'ContatoController@index');
Route::post('/contato', 'ContatoController@criar');
Route::put('/contato', 'ContatoController@editar');

//Curso
Route::group(['middleware'=>'auth'], function (){
    Route::get('/admin/cursos', 'Admin\CursoController@index')
        ->name('admin.cursos');
    Route::get('/admin/cursos/adicionar', 'Admin\CursoController@adicionar')
        ->name('admin.cursos.adicionar');
    Route::post('/admin/cursos/salvar', 'Admin\CursoController@salvar')
        ->name('admin.cursos.salvar');
    Route::get('admin/cursos/editar/{id}', 'Admin\CursoController@editar')
        ->name('admin.cursos.editar');
    Route::put('admin/cursos/atualizar/{id}', 'Admin\CursoController@atualizar')
        ->name('admin.cursos.atualizar');
    Route::delete('/admin/cursos/deletar/{id}', 'Admin\CursoController@deletar')
        ->name('admin.cursos.deletar');
});

Auth::routes();
