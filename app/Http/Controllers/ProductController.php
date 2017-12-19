<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Branch;
use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    //Create Search Products From products table
    public function searchProducts(Product $products)
    {
      $products = Product::all();
      return view('products.search')
      ->with('products', $products);
    }
    public function getProductsByBranch($name){
     $products = Product::with('products')
       ->whereName($name)
       ->first();
     return view('products.index')
       ->with('branch', $branch)
       ->with('products', $branch->products);
    }
    public function searchProductDetails(Product $product)
    {
     return view('products.showDetail', compact('product'));
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
}
