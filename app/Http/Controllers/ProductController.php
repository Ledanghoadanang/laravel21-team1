<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Product;
use App\Branch;

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

public function create()
  {
   $branchs = Branch::all()->pluck('name', 'id');
   return view('products.create')->with('branchs', $branchs);
  }

public function show(Product $product)
  {
  return view('products.show', compact('product'));
  }

public function searchProduct()
  {
    $product = Input::get ( 'product' );
    $products = Product::where('name','LIKE','%'.$product.'%')->get();
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


}
