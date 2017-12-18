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

Route::get('/', function () {
    return view('products.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/styles', function(){
    $styles = Style::all();
    return view('admin.styles.index', compact('styles'));
});
Route::post('admin/styles', function(){
  $inputs= Input::all();//lấy tất cả cả input từ form put lên
  $style = Style::create($inputs);//hàm tạo con mèo
  return redirect('/admin/styles');//$cat->id:câp nhập vs id con mèox
});
Route::get('admin/styles/create', function(){//form
  $styles= Style::all()->pluck('name','id');
  return view('admin.styles.create',compact('styles'));
});
Route::get('admin/styles/{style}/edit', function(Style $style){
    $styles= Style::all()->pluck('name','id');//compact (biếnx)
    return view('admin.styles.edit', compact('style', 'styles'));

});

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
Route::get('/products', 'ProductController@searchProducts');

























































Route::post('admin/products', function(){
  $inputs= Input::all();
  $product = Product::create($inputs);
  return redirect('/admin/products');
});

Route::get('/admin/products', function(){
    $products = Product::all();
    return view('admin.products.index', compact('products'));
});

Route::get('admin/products/create', function(){//form
  $branchs= Branch::all()->pluck('name','id');
  return view('admin.products.create',compact('branchs'));
});
Route::get('admin/products/{product}/edit', function(Product $product){
    $branchs= Branch::all()->pluck('name','id');//compact (biếnx)
    return view('admin.products.edit', compact('product', 'branchs'));
});
Route::put('admin/products/{product}', function(Product $product){
  $inputs = Input::all();
  $product->update($inputs);
  return redirect('/admin/products');
});
Route::get('admin/products/{product}/delete', function(Product $product){
  $product->delete();
  return redirect('admin/products')->withSuccess('Branchs has delete');
});
Route::get('/admin/branchs', function(){
    $branchs = Branch::all();
    return view('admin.branchs.index', compact('branchs'));
});
Route::post('admin/branchs', function(){
  $inputs= Input::all();
  $branch = Branch::create($inputs);
  return redirect('/admin/branchs');
});
Route::get('admin/branchs/create', function(){//form
  $styles= Style::all()->pluck('name','id');
  return view('admin.branchs.create',compact('styles'));
});
Route::get('admin/branchs/{branch}/edit', function(Branch $branch){
    $styles= Style::all()->pluck('name','id');//compact (biếnx)
    return view('admin.branchs.edit', compact('branch', 'styles'));
});
Route::put('admin/branchs/{branch}', function(Branch $branch){
  $inputs = Input::all();
  $branch->update($inputs);
  return redirect('/admin/branchs');
});
Route::get('admin/branchs/{branch}/delete', function(Branch $branch){
  $branch->delete();
  return redirect('admin/branchs')->withSuccess('Branchs has delete');
});

Route::get('products/branchs/{name}', 'ProductController@getProductsByBranch');
Route::get('products/{branch}', 'ProductController@searchProductDetails');

