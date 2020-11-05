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

Route::get('/', 'IndexController@index');

Route::get('/test', 'TestController@test');

// suppliers
Route::get('/suppliers', 'SupplierController@index');
Route::get('/suppliers/{trade_name}/', 'SupplierController@show');

// Manufacturers
Route::get('/manufacturers', 'ManufacturerController@index');
Route::get('/manufacturers/{name}/', 'ManufacturerController@show');

// Products
Route::get('/supplies', 'SupplieController@index');
Route::get('/supplies/{number}/', 'SupplieController@show');