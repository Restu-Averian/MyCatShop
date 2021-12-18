<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('cart/index', ['title' => 'Cart'], compact('cartitems'));
    }

    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $prod_check = Products::where('id', $product_id)->exists();
            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['telahtambah' => 'Produk telah ditambahkan']);
                } else {
                    $cart_item = new Cart();
                    $cart_item->prod_id = $product_id;
                    $cart_item->prod_qty = $product_qty;
                    $cart_item->user_id = Auth::id();
                    $cart_item->save();
                    return response()->json(['berhasiltambah' => 'Produk berhasil ditambahkan ke keranjang !']);
                }
            }
        } else {
            return response()->json(['failure' => 'Silahkan login terlebih dahulu']);
        }
    }





    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        if (Auth::check()) {
            $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
            $cart->prod_qty = $product_qty;
            $cart->update();
            return response()->json(['status' => 'Berhasil update']);
        }
    }

    public function deleteproduct($id)
    {
        $cartitems = new Cart();
        $cartitems = Cart::findorFail($id);
        $cartitems->delete();
        return back()->with('status', 'Barang cart berhasil dihapus!');
    }

    public function cartcount()
    {
        $cartCount = Cart::where('user_id', Auth::id())->count();
        return response()->json(['count' => $cartCount]);
    }
}