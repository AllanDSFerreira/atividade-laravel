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

Route::get('/', 'ShopController@index');

Route::get('/create', 'ShopController@create');

Route::post('/create','ShopController@store');

Route::get('shops/{id}','ShopController@show');

Route::get('shops/edit/{id}','ShopController@edit');

Route::put('shops/{id}','ShopController@update');

Route::delete('shops/{id}','ShopController@destroy');