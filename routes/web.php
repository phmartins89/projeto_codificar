<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/orcamentos','OrcamentosController@index');
Route::get('/orcamentos/criar','OrcamentosController@create');



