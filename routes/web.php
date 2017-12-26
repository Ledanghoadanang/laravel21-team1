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
  if(Auth::check('email')){
    return view('admin.index');
  }
  else {
    return view('admin.login');
  }
})->middleware('checkadmin');


Route::get('/admin/styles','StyleController@index');
Route::post('admin/styles', 'StyleController@postStyle');
Route::get('admin/styles/create', 'StyleController@createStyle');
Route::get('admin/styles/{style}/edit', 'StyleController@editStyle');
Route::put('admin/styles/{style}', 'StyleController@putStyle');
Route::get('admin/styles/{style}/delete','StyleController@deleteStyle');
Route::get('/products', 'ProductController@searchProducts');
Route::get('/admin/products', 'ProductController@indexProduct');
Route::post('admin/products', 'ProductController@postProduct');

Route::get('admin/products/create', 'ProductController@createProduct');
Route::get('admin/products/{product}/edit', 'ProductController@editProduct');
Route::put('admin/products/{product}', 'ProductController@putProduct');
Route::get('admin/products/{product}/delete', 'ProductController@deleteProduct');
Route::get('/admin/branchs', 'BranchController@indexBranch');
Route::post('admin/branchs', 'BranchController@postBranch');
Route::get('admin/branchs/create', 'BranchController@createBranch');
Route::get('admin/branchs/{branch}/edit', 'BranchController@editBranch');
Route::put('admin/branchs/{branch}', 'BranchController@putBranch');
Route::get('admin/branchs/{branch}/delete', 'BranchController@deleteBranch');

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
// Route::post('products', 'ProductController@saveStaff');
Route::get('products/{product}/edit', 'ProductController@edit');
Route::put('products/{product}', 'ProductController@put');
Route::get('products/{product}/delete', 'ProductController@delete');
Route::get('pic/{id}', 'ProductController@showPicture');
// Route::get('/products', 'ProductController@searchProducts');
Route::get('products/{branch}', 'ProductController@searchProductDetails');
// Route::get('/products', 'ProductController@searchProducts');
Route::get('products/{branch}', 'ProductController@searchProductDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
