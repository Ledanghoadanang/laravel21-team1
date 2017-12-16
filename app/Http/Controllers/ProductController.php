<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Product;

class ProductController extends Controller
{
    //Create Search Products From products table
    public function searchProducts($products)
    {
      $products = App\Product::all();
      return view('products.index')->with('products', $products);
    }
}
