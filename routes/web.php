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
Route::get('/', 'welcomeController@welcome');

Route::get('/teste_drive', 'welcomeController@teste_drive');

Route::get('/buscar', 'SiteBrasilEscolaCrowlerController@buscar');

Route::get('/exibir', 'SiteBrasilEscolaCrowlerController@exibir');

Route::get('/inserir', 'SiteBrasilEscolaCrowlerController@inserir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
