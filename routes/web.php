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
Route::get('product', 'ProdutoController@index');
Route::get('product/create', 'ProdutoController@create');
// To insert data to data base we use ROUTE::POST
Route::post('product', 'ProdutoController@store');
// Show method by customer ID
Route::get('producr/{product}', 'ProdutoController@show');
// Restful method of updating
Route::get('product/{product}/edit', 'ProdutoController@edit'); //view for editing
Route::patch('product/{product}', 'ProdutoController@update'); //saving data comming from view edit
Route::delete('product/{product}', 'ProdutoController@destroy'); //deleting data comming from view

Route::resource('provider', 'FornecedorController')->middleware('auth');
Route::resource('reports', 'RelatoriosController')->middleware('auth');
Route::resource('sale', 'VendaController')->middleware('auth');
Route::resource('storage', 'EstoqueController')->middleware('auth');

//Cor, Tamanho, Referencia store routes
Route::post('size', 'TamanhoController@store');

//QRCode routes
Route::get('product/{product}/qrcode', 'ProdutoController@qrCode')->middleware('auth');

