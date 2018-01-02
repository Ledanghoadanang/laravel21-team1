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

//ADMIN ROUTES---------------//---------------//--------------//---------------//

Route::get('/admin', function () {
if(Auth::check('email')){
return redirect('/admin/products');
}
else {
return view('admin.login');
}
})->middleware('checkadmin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Admin Styles Routes
Route::get('/admin/styles','StyleController@index');
Route::post('admin/styles', 'StyleController@postStyle');
Route::get('admin/styles/create', 'StyleController@createStyle');
Route::get('admin/styles/{style}/edit', 'StyleController@editStyle');
Route::put('admin/styles/{style}', 'StyleController@putStyle');
Route::get('admin/styles/{style}/delete','StyleController@deleteStyle');
Route::put('admin/styles/{style}', function(Style $style){
$inputs = Input::all();
$style->update($inputs);
return redirect('/admin/styles');
});
Route::get('admin/styles/{style}/delete', function(Style $style){
$style->delete();
return redirect('admin/styles')->withSuccess('Styles has delete');
});


//Admin Products Routes
Route::get('/admin/products', 'ProductController@indexProduct');
Route::post('admin/products', 'ProductController@postProduct');
Route::get('admin/products/create', 'ProductController@createProduct');
Route::get('admin/products/{product}/edit', 'ProductController@editProduct');
Route::put('admin/products/{product}', 'ProductController@putProduct');
Route::get('admin/products/{product}/delete', 'ProductController@deleteProduct');
Route::get('admin/products/search', 'ProductController@searchAdminProduct');
Route::get('admin/orders/search', 'OrderController@searchAdminOrder');

//Admin Branch Routes
Route::get('/admin/branchs', 'BranchController@indexBranch');
Route::post('admin/branchs', 'BranchController@postBranch');
Route::get('admin/branchs/create', 'BranchController@createBranch');
Route::get('admin/branchs/{branch}/edit', 'BranchController@editBranch');
Route::put('admin/branchs/{branch}', 'BranchController@putBranch');
Route::get('admin/branchs/{branch}/delete', 'BranchController@deleteBranch');
Route::get('admin/branchs/search', 'BranchController@searchBranch');


//Admin Cart Routes
Route::get('/admin/carts/manage', 'ShoppingCartController@adminManage');
Route::get('/admin/carts/{id}/orderdetais', 'ShoppingCartController@adminOrderDetails');
Route::get('admin/carts/{id}/cancel' , 'ShoppingCartController@cancel');


// USER ROUTES ----------------------------//------------------//----------------//-------------//


//Frontend Products Routes
Route::get('/', 'ProductController@index');
Route::get('/products', 'ProductController@index');
Route::get('products/branchs/{name}', 'ProductController@getProductsByBranch');
Route::get('products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@saveProduct');
Route::get('products/{product}/edit', 'ProductController@edit');
Route::put('products/{product}', 'ProductController@put');
Route::get('products/{product}/delete', 'ProductController@delete');
Route::get('/search', 'ProductController@searchProduct');
Route::post('/searchPrice', 'ProductController@searchProductByPrices');
Route::get('products/{branch}', 'ProductController@searchProductDetails');
Route::get('products/{branch}', 'ProductController@searchProductDetails');


//Search products
Route::get('/branchs', 'ProductController@branchs');
Route::get('/branchs/searchRolex', 'ProductController@searchRolex');
Route::get('/branchs/searchCartier', 'ProductController@searchCartier');
Route::get('/branchs/searchOmega', 'ProductController@searchOmega');
Route::get('/branchs/searchPatekPhilippe', 'ProductController@searchPatekPhilippe');
Route::get('/branchs/searchMontblanc', 'ProductController@searchMontblanc');
Route::get('/branchs/searchTagHeuer', 'ProductController@searchTagHeuer');
Route::get('/branchs/searchLongines', 'ProductController@searchLongines');


//Search products by branch and male style
Route::get('/branchs/searchRolexStyle', 'ProductController@searchRolexStyle');
// Route::get('/branchs/searchCartierStyle', 'ProductController@searchCartierStyle');
// Route::get('/branchs/searchOmegaStyle', 'ProductController@searchOmegaStyle');
// Route::get('/branchs/searchPatekPhilippeStyle', 'ProductController@searchPatekPhilippeStyle');
// Route::get('/branchs/searchMontblancStyle', 'ProductController@searchMontblancStyle');
// Route::get('/branchs/searchTagHeuerStyle', 'ProductController@searchTagHeuerStyle');
// Route::get('/branchs/searchLonginesStyle', 'ProductController@searchLonginesStyle');



///carts
Route::get('/carts', 'ShoppingCartController@carts')->middleware('checkcart');
Route::get('/checkout', 'ShoppingCartController@checkout')->middleware('checklogin');
Route::get('carts/{id}/add', 'ShoppingCartController@add');
Route::get('carts/{rowId}/down-count', 'ShoppingCartController@down_count');
Route::get('carts/{rowId}/up-count', 'ShoppingCartController@up_count');
Route::get('carts/delete/{rowId}', 'ShoppingCartController@delete');
Route::post('/carts', 'ShoppingCartController@store_order');
Route::get('carts/manage' , 'ShoppingCartController@manage');
Route::get('carts/manage/{id}/detail' , 'ShoppingCartController@detail');
// Route::get('carts/manage/export', 'CartController@export_order');
// Route::get('carts/manage/{id}/detail/export', 'CartController@export_order_detail');


//User-Customers Routes
Route::get('/admin/customers' , 'CustomerController@index');
