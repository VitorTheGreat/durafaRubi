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
Auth::routes();
Route::view('/blank', 'blank');

Route::get('/', 'HomeController@index')->name('dashboard');

//Resources controllers/routes
Route::resource('product', 'ProdutoController')->middleware('auth');
Route::resource('provider', 'FornecedorController')->middleware('auth');
Route::resource('reports', 'RelatoriosController')->middleware('auth');
Route::resource('sale', 'VendaController')->middleware('auth');
Route::resource('storage', 'EstoqueController')->middleware('auth');

//Cor, Tamanho, Referencia store routes
Route::post('size', 'TamanhoController@store');
