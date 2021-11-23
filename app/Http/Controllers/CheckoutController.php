<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        // $users = User::where('id', Auth::id())->get();
        //$users = DB::table('users')->where('id', '=', Auth::id())->get();

        return view('checkout/index', [
            'title' => 'Checkout',
            // 'users' => $users,
            'cartitems' => $cartitems
        ]);
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->user_id = Auth::id();
        $order->email = $request->input('email');
        $order->alamat = $request->input('alamat');
        $order->notelp = $request->input('notelp');
        $order->save();


        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems as $item) {
            OrderItem::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'image' => $item->products->image,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'harga' => $item->products->harga,
            ]);
            $prod = Products::where('id', $item->prod_id)->first(); //Cari id produk yang dicheckout
            $prod->kuantitas = $prod->kuantitas - $item->prod_qty; //Banyak produk yang terseida - Banyak produk yang dicheckout 
            $prod->update();
        }
        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/cart')->with('status', 'berhasil');
    }
}