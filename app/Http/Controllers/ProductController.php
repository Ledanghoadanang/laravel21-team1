<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;

use App\Product;
use App\Branch;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
  public function home(){
      return redirect('/products');
  }
  public function index()
  {
    $products = Product::all();
      return view('products.index',compact('products'));
  }


    // public function getProductsByBranch($name){
    //  $products = Product::with('products')
    //    ->whereName($name)
    //    ->first();
    //  return view('products.index')
    //    ->with('branch', $branch)
    //    ->with('products', $branch->products);
    // }

  public function branchs()
  {
      $products = Branch::all();
      return view('products.index',compact('products'));
  }

  public function getProductsByBranch($name){
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
}
