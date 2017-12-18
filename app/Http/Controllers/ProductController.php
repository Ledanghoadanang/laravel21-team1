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

}
