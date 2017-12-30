<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;
use Cart;
use Auth;
use App\Product;
use App\Order;
use App\OrderDetail;
class ShoppingCartController extends Controller
{
// public function index(){
// 	if (Auth::check())
// 	{
// 		return view('layouts.cart.index');
// 	}
// 	return view('auth.login');
// }
public function adminManage()
      {
        // dd(auth::user()->id);
        $orders = Order::all();
        // dd($orders);
        return view('admin.orders.index')->with('orders', $orders);
      }

public function adminOrderDetails($id)
      {
        $items = OrderDetail::where('order_id', '=', $id)->get();
        return view('admin.orders.order-details')->with('items', $items);
      }

public function add($id)
      {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images]);
        $count = Cart::count();
        return response(['count' => $count], 200);
      }
public function delete($rowId)
      {
        Cart::remove($rowId);
        return redirect('/carts')->withSuccess('Cat has been deleted.');
      }

public function carts()
      {
        return view('shoppingCart.cart');
      }

public function checkout()
      {
        return view('shoppingCart.checkout');
      }

public function store_order(Request $request)
      {
        $name = $request->Input('name_receiver');
        $amount = Cart::count();
        $datetime = new DateTime('now');
        $order = Order::create(['date_order' => $datetime,
                               'note' => $request->Input('note'),
                               'status' => $request->Input('status'),
                               'amount' => $amount,
                               'name' => $request->Input('name_receiver'),
                               'phone' => $request->Input('phone'),
                               'adress' => $request->Input('address_order'),
                               'user_id' => Auth::user()->id
                             ]);
        $content = Cart::content();
        foreach ($content as $item) {
        OrderDetail::create(['product_id' => $item->id, 'quantity' => $item->qty, 'total_price' => $item->subtotal, 'order_id' => $order->id]);
      }
        Cart::destroy();
        return redirect('/');
      }

public function manage()
      {
        // dd(auth::user()->id);
        $orders = Order::where('user_id', '=', auth::user()->id)->get();
        // dd($orders);
        return view('shoppingCart.manage')->with('orders', $orders);
      }


public function detail($id)
      {
        $items = OrderDetail::where('order_id', '=', $id)->get();
        return view('shoppingCart.manage-details')->with('items', $items);
      }

public function cancel($id)
      {
        $order = Order::find($id);
        $order->update(['shipping_status' => 'cancel', 'status' => 'not avalible']);
        return redirect('carts/manage');
      }


public function down_count($rowId)
      {
        /*$product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->cost, ['image' => 'this is link image']);
        $count = Cart::count();
        return response(['count' => $count], 200);*/
        $item = Cart::get($rowId);
        Cart::update($rowId, $item->qty - 1);
        $count = Cart::count();
        $subtotal = Cart::subtotal();
        return response(['qty' => $item->qty, 'subtotal' => $item->subtotal, 'count' => $count], 200);
        // Cart::update($rowId, )
      }

public function up_count($rowId)
      {
        $item = Cart::get($rowId);
        Cart::update($rowId, $item->qty + 1);
        $count = Cart::count();
        return response(['qty' => $item->qty, 'subtotal' => $item->subtotal, 'count' => $count], 200);
      }
}
