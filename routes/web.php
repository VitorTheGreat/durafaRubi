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

//Resources controllers
Route::resource('product', 'ProductController')->middleware('auth');
Route::resource('provider', 'ProviderController')->middleware('auth');
Route::resource('reports', 'ReportsController')->middleware('auth');
Route::resource('sale', 'SaleController')->middleware('auth');
Route::resource('storage', 'StorageController')->middleware('auth');
