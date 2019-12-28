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


Route::get('/produit','ProductsController@index')->name('products');
Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');

Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit");
Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');
Route::get('/ajouproduit', 'ProductsController@create')->name('create_product')->middleware('auth');

Route::delete('product/{id}','ProductsController@destroy');

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
//Route::get('/orders/description', 'ProductsController@desc');
//Route::get('/orders/achat', 'ProductsController@achat');
Route::get("/produit/{id}/show", 'ProductsController@show');







