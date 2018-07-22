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

/*--------------GET---------------*/
Route::get('/', 'AlunosController@Index');
Route::get('lista', 'AlunosController@Index');
Route::get('cadastro', 'AlunosController@Cadastro');
Route::get('{id}/editar', 'AlunosController@Editar');

/*-------------PACTH--------------*/
Route::patch('alunos/{aluno}', 'AlunosController@Atualizar');

/*-------------DELETE--------------*/
Route::delete('alunos/{id}', 'AlunosController@Deletar');

/*--------------POST--------------*/
Route::post('alunos/salvar', 'AlunosController@Salvar');
