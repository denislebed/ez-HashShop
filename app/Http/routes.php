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

Route::get('/', function () {
    return view('welcome');
});
//Route::auth();
//Route::get('/', 'MainController@index');
//Route::get('/categories', 'UserCategoryController@index');
//Route::get('/categories/{category}', 'UserCategoryController@category');
//Route::get('/contacts', 'ContactController@index');
//Route::get('/about', 'AboutController@index');
//Route::get('/categories/{category}/{product}', 'UserProductController@index');
//Route::post('/addBasket', 'UserProductController@to_basket');
//Route::get('/basket', ' BasketController@index');
//Route::post('/orders', 'BasketController@buy');
//Route::get('/categories', ' AdminCategoryController@index');
//Route::post('/addCategory', 'AdminCategoryController@add_category');
//Route::delete('/deleteCategory', 'AdminCategoryController@delete_category');
//Route::get('/categories/{category}', ' AdminCategoryController@index');
//Route::post('/addProduct', 'AdminProductController@add_product');
//Route::delete('/deleteProduct', 'AdminProductController@delete_product');
//Route::get('/orders', ' OrderController@index');
//Route::delete('/deleteOrder', 'OrderController@delete_order');
