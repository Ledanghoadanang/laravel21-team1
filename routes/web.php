<?php
use App\Style;
use App\Branch;
use App\Product;
use Illuminate\Support\Facades\Input;
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

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/styles','StyleController@index');
Route::post('admin/styles', 'StyleController@postStyle');
Route::get('admin/styles/create', 'StyleController@createStyle');
Route::get('admin/styles/{style}/edit', 'StyleController@editStyle');
Route::put('admin/styles/{style}', 'StyleController@putStyle');
Route::get('admin/styles/{style}/delete','StyleController@deleteStyle');
Route::put('admin/styles/{style}', function(Style $style){
  $inputs = Input::all();
  $style->update($inputs);
  // return redirect('/admin/styles/' . $style->id)->withSuccess('Styles has been update');
  return redirect('/admin/styles');
});
Route::get('admin/styles/{style}/delete', function(Style $style){
  $style->delete();
  return redirect('admin/styles')->withSuccess('Styles has delete');
});
Route::get('/', 'ProductController@home') ;
Route::get('/products', 'ProductController@index');
Route::get('/branchs', 'ProductController@branchs');
Route::get('products/branchs/{name}', 'ProductController@getProductsByBranch');
Route::get('products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@saveProduct');
Route::get('products/{product}/edit', 'ProductController@edit');
Route::put('products/{product}', 'ProductController@put');
Route::get('products/{product}/delete', 'ProductController@delete');
Route::get('pic/{id}', 'ProductController@showPicture');
