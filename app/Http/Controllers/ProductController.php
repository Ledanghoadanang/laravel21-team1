<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Product;
use App\Branch;

class ProductController extends Controller
{

  // public function home()
  // {
  //  return redirect('/products');
  // }
  // public function index()
  // {
  //   $products = Product::all();
  //   return view('products.index',compact('products'));
  // }

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  public function branchs()
  {
   $products = Branch::all();
   return view('products.index',compact('products'));

  }

  public function image($id)
  {
   $product = Product::find($id);
   $response = Response::make($product->image, 200);
   $response->header('Content-Type', 'image/jpeg');
   return $response;
  }

  // public function branchs()
  // {
  //  $products = Branch::all();
  //  return view('products.index',compact('products'));
  //
  // }

  public function getProductsByBranch($name){
   $branch = Branch::with('products')
     ->whereName($name)
     ->first();
   return view('products.index')
     ->with('branch', $branch)
     ->with('products', $branch->products);
  }

  // public function create(){
  //  $branchs = Branch::all()->pluck('name', 'id');
  //  return view('products.create')->with('branchs', $branchs);
  // }

  public function show(Product $product){
   return view('products.show', compact('product'));
  }


    public function indexProduct(){
      $products = Product::all();
      return view('admin.products.index', compact('products'));
    }
    public function postProduct(){
      $inputs= Input::all();
      $product = Product::create($inputs);
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
    public function putProduct(Product $product){
      $inputs = Input::all();
      $product->update($inputs);
      return redirect('/admin/products');
    }
    public function deleteProduct(Product $product){
      $product->delete();
      return redirect('admin/products');
    }


  // public function saveStaff(){
  //  $product = Product::create(Input::all());
  //  return redirect('products/' . $product->id)
  //    ->withSuccess('Product has been created.');
  // }
  // public function edit(Product $product){
  //  $branchs = Branch::all()->pluck('name', 'id');
  //  return view('products.edit', compact('product', 'branchs'));
  // }
  //
  // public function put(Product $product){
  // $product -> update(Input::all());
  // return redirect('products/' . $product->id)
  //   ->withSuccess('Product has been updated.');
  // }
  // public function delete(Product $product){
  // $product->delete();
  // return redirect('products')->withSuccess('Product has been deleted');
  // }

}
