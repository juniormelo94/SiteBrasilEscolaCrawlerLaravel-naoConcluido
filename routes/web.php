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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'RoboController@welcome');

Route::get('/teste_drive', 'RoboController@teste_drive');

Route::get('/buscar', 'RoboController@buscar');

Route::get('/salvar', 'RoboController@salvar');

Route::get('/inserir', 'RoboController@inserir');
