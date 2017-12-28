<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Product;
use App\Branch;
use Illuminate\Support\Str;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{

public function home()
  {
    return redirect('/products');
  }
public function index()
  {
    $products = Product::all();
    return view('products.index',compact('products'));
  }

public function branchs()
{
  $products = Branch::all();
  return view('products.index',compact('products'));
}

public function getProductsByBranch($name)
{
  $branch = Branch::with('products')
    ->whereName($name)
    ->first();
  return view('products.index')
    ->with('branch', $branch)
    ->with('products', $branch->products);
}

public function indexProduct(){
    $products = Product::paginate(5);
    return view('admin.products.index', compact('products'));
}

public function postProduct(CreateProductRequest $request){
   $data = $request->all();
   $this->validate($request, [
   'image' => 'mimes:jpg,jpeg,png|max:800',
     ]);
   if ($request->hasFile('image'))
     {
       $file = $request->file('image');
       $filename = $file->getClientOriginalName();
       $image = time(). "_" . $filename;
       $destinationPath = public_path('\images\products');
       $file->move($destinationPath, $image);
       $data['image'] = $image;
       $product = Product::create($data);
      }else
     {
       $data['image'] = '';
       $product = Product::create($data);
   }
    return redirect('/admin/products');
}


 public function createProduct(){
    $branchs= Branch::all()->pluck('name','id');
    return view('admin.products.create',compact('branchs'));
}

 public function editProduct(Product $product){
    $branchs= Branch::all()->pluck('name','id');//compact (biếnx)
    return view('admin.products.edit', compact('product', 'branchs'));
}

public function edit(Product $product){
 $branchs = Branch::all()->pluck('name', 'id');
 return view('products.edit', compact('product', 'branchs'));
}

public function putProduct(Product $product){
    $inputs = Input::all();
    $product->update($inputs);
    return redirect('/admin/products');
}

public function deleteProduct(Product $product){
    $product->delete();
    return redirect('admin/products');
}

public function show(Product $product){
   return view('products.show', compact('product'));
}

public function create()
{
 $branchs = Branch::all()->pluck('name', 'id');
 return view('products.create')->with('branchs', $branchs);
}

public function searchProduct()
{
  $product = Input::get ( 'product' );
  $productUpercase = Str::lower($product);
  $products = Product::where('name','LIKE','%'.$product.'%')
                      ->orWhere('name','LIKE','%'.$productUpercase.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchProductByPrices()
{
  $priceRange = Input::get ('rangePrices');
  $value = explode(",", $priceRange);
  $min = (int) $value[0];
  $max = (int) $value[1];
  $products=Product::where('price', '>=', $min)
                      ->where('price', '<=', $max)
                      ->get();
  return view('products.index',compact('products'));
}

public function saveProduct(Request $request)
{
  $data = $request->all();
  $this->validate($request, [
        'image' => 'mimes:jpg,jpeg,png|max:800',
          ]);
    if ($request->hasFile('image'))
      {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image = time(). "_" . $filename;
            $destinationPath = public_path('\images\products');
            $file->move($destinationPath, $image);
            $data['image'] = $image;
            $product = Product::create($data);
      }else
      {
        $data['image'] = '';
        $product = Product::create($data);
      }
        return redirect('/products');
}

//Search products by branch
public function searchRolex(){
  $products = Product::where('name','LIKE','%'.'Rolex'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchCartier(){
  $products = Product::where('name','LIKE','%'.'Cartier'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchOmega(){
  $products = Product::where('name','LIKE','%'.'Omega'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchPatekPhilippe(){
  $products = Product::where('name','LIKE','%'.'Patek Philippe'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchMontblanc(){
  $products = Product::where('name','LIKE','%'.'Montblanc'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchTagHeuer(){
  $products = Product::where('name','LIKE','%'.'Tag Heuer'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

public function searchLongines(){
  $products = Product::where('name','LIKE','%'.'Longines'.'%')
                      ->get();
  return view('products.index',compact('products'));
}

//Search Branch and male Styles
public function searchRolexStyle(){

  $products = DB::table('products')
            ->join('branchs', 'branchs.id', '=', 'products.id_branch')
            ->join('styles', 'branchs.id_style', '=', 'styles.name')
            ->where('products.name','=','Rolex')
            ->get();
  return view('products.index',compact('products'));
}

// public function searchCartierMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Cartier'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
//
// public function searchOmegaMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Omega'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
//
// public function searchPatekPhilippeMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Patek Philippe'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
//
// public function searchMontblancMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Montblanc'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
//
// public function searchTagHeuerMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Tag Heuer'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
//
// public function searchLonginesMaleStyle(){
//   $products = Product::where('name','LIKE','%'.'Longines'.'%')
//                       ->get();
//   return view('products.index',compact('products'));
// }
}
