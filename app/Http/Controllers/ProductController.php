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
}
