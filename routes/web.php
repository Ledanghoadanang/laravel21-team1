<?php
use App\Style;
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
Route::get('products/branchs/{name}', 'ProductController@getProductsByBranch');
