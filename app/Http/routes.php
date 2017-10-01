<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::auth();
Route::get('/', 'MainController@index');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/categories', 'AdminController@categories');
Route::post('/admin/category', 'CategoryController@store');
Route::delete('/admin/category/{category}', 'CategoryController@destroy');
Route::get('/admin/categories/{category}', 'CategoryController@goods');
Route::delete('/admin/category/{category}/{good}', 'GoodController@destroy');
Route::post('/admin/good', 'GoodController@store');
Route::get('/admin/orders', 'OrderController@index');
Route::get('/admin/orders/{order}', 'OrderController@order');
Route::delete('/admin/order/{order}', 'OrderController@destroy');

//Route::get('/categories', 'UserCategoryController@index');
//Route::get('/categories/{category}', 'UserCategoryController@category');
Route::get('/contacts', 'ContactController@index');
Route::get('/about', 'AboutController@index');
//Route::get('/categories/{category}/{product}', 'UserProductController@index');
//Route::post('/addBasket', 'UserProductController@to_basket');
//Route::get('/basket', ' BasketController@index');
//Route::post('/orders', 'BasketController@buy');


