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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/test', 'TestController@test');

// suppliers
Route::get('/providers', 'SupplierController@index')->name('providers.index');
Route::get('/providers/{trade_name}/', 'SupplierController@show')->name('providers.show');

// Manufacturers
Route::get('/manufacturers', 'ManufacturerController@index')->name('manufacturers.index');
Route::get('/manufacturers/{name}/', 'ManufacturerController@show')->name('manufacturers.show');

// Products
Route::get('/supplies', 'SupplieController@index')->name('supplies.index');
Route::get('/supplies/{number}/', 'SupplieController@show')->name('supplies.show');

// Search
Route::get('/search', 'IndexController@search')->name('index.search');

// Contact
Route::get('/contact', 'IndexController@contact')->name('index.contact');

// About
Route::get('/about', 'IndexController@about')->name('index.about');