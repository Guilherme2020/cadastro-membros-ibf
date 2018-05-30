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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('usuarios','Admin\UsersController@index');
Route::get('/admin/membros',['as'=>'admin.membros','uses'=>'Admin\MembrosController@index']);

Route::get('/admin/membros/adicionar',['as'=>'admin.membros.adicionar','uses'=>'Admin\MembrosController@adicionar']);
Route::post('/admin/membros/salvar',['as'=>'admin.membros.salvar','uses'=>'Admin\MembrosController@salvar']);
Route::get('/admin/membros/editar/{id}',['as'=>'admin.membros.editar','uses'=>'Admin\MembrosController@editar']);
Route::put('/admin/membros/atualizar/{id}',['as'=>'admin.membros.atualizar','uses'=>'Admin\MembrosController@atualizar']);
Route::get('/admin/membros/deletar/{id}',['as'=>'admin.membros.deletar','uses'=>'Admin\MembrosController@deletar']);