<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/orcamentos','OrcamentosController@index')
    ->name('listar_orcamentos');
Route::get('/orcamentos/criar','OrcamentosController@create')
->name('form_criar_orcamento');
Route::post('/orcamentos/criar','OrcamentosController@store');
Route::delete('/orcamentos/{id}','OrcamentosController@destroy');



