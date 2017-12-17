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

Route::get('/', function () {
    return view('products.index');
});

Route::get('/products', 'ProductController@searchProducts');
Route::get('products/branchs/{name}', 'ProductController@getProductsByBranch');
Route::get('products/{staff}', 'ProductController@searchProductDetails');
