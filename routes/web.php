<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/orcamentos/editar/{id}','OrcamentosController@editIndex')
    ->name('form_editar_orcamento');

Route::post('/orcamentos/editar/{id}','OrcamentosController@edit');

Route::get('/orcamentos','OrcamentosController@index')
    ->name('listar_orcamentos');

Route::post('/orcamentos','OrcamentosController@filtro')
    ->name('filtro_orcamentos');

Route::get('/orcamentos/criar','OrcamentosController@create')
    ->name('form_criar_orcamento');


Route::post('/orcamentos/criar','OrcamentosController@store');

Route::delete('/orcamentos/{id}','OrcamentosController@destroy');



