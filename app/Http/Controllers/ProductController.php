<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Branch;
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
       ->with('brach', $branch)
       ->with('products', $branch->products);
    }
    public function searchProductDetails(Product $product)
    {
      //$products = Product::all();
      return view('products.showDetail')->with('product', $product);
    }

}
