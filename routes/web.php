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

// suppliers
Route::get('/providers', 'SupplierController@index')->name('providers.index');
Route::get('/providers/{trade_name}/', 'SupplierController@show')->name('providers.show');

// Fabricantes
Route::get('/fabricantes', 'ManufacturerController@index')->name('fabricantes.index');
Route::get('/fabricantes/{name}/', 'ManufacturerController@show')->name('fabricantes.show');
// Products
Route::get('/productos', 'SupplieController@index')->name('products.index');


// Search
Route::get('/search', 'IndexController@search')->name('index.search');

// Contact
Route::get('/contacto', 'IndexController@contact')->name('index.contacto');

// About
Route::get('/about', 'IndexController@about')->name('index.about');

// Send Mail
Route::post('/sendmail', 'MessageController@send')->name('sendmail.send');
Route::post('sendmail/part-number', 'MessageController@sendPartNumber')->name('sendmail.partnumber.send');

Route::get('/{manufacturer}/{number}/', 'SupplieController@show')->name('products.show');