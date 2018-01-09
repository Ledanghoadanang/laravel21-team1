<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Order;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
  public function searchAdminOrder(Request $request)
  {
  $date_start = $request->Input('date_start');
  $date_end = $request->Input('date_end');
  $status = Input::get ( 'search_order' );
  $statusUpercase = Str::lower($status);
  if(empty($date_start) && empty($date_end))
  {
    // $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
    //                     ->where('note','LIKE','%'.$order.'%')
    //                     ->orwhere('users.name','LIKE','%'.$order.'%')
    //                     ->orWhere('note','LIKE','%'.$orderUpercase.'%')
    //                     ->paginate(10);
    $orders = Order::where('status','LIKE','%'.$status.'%')
                        ->orWhere('status','LIKE','%'.$statusUpercase.'%')
                        ->get();
        return view('admin.orders.index',compact('orders'));
  }
  elseif (empty($date_end)) {
        $orders = Order::where('date_order', '>=', $date_start )
        ->orderBy('date_order','asc')
        ->paginate(10);
        return view('admin.orders.index',compact('orders'));
  }
  elseif (empty($date_start)) {
      $orders = Order::where('date_order', '<=', $date_end)
      ->orderBy('date_order','asc')
      ->paginate(10);
      return view('admin.orders.index',compact('orders'));
  }
  else {
    $orders = Order::where('date_order', '>=', $date_start)
    ->where('date_order', '<=', $date_end)
    ->orderBy('date_order','asc')
    ->paginate(10);
    return view('admin.orders.index',compact('orders'));
  }

  }
}
