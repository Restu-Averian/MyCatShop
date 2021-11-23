<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
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


    public function viewcart()
    {
        //$cartitems = DB::table('carts')->where('user_id', '=', Auth::id())->get();
        $cartitems = Cart::where('user_id', Auth::id())->get();
        // return view('cart', [
        //     'title' => 'tes',
        //     'cartitems' => $cartitems
        // ]);
        return view('cart/index', ['title' => 'Cart'], compact('cartitems'));
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
    // public function formupdate($id)
    // {
    //     $cartitems = Cart::findorFail($id);
    //     $products = Products::findorFail($id);
    //     return view('cart/editqty', [
    //         'title' => 'Cart',
    //         'cartitems' => $cartitems,
    //         'products' => $products

    //         //'categories' => $categories
    //     ], compact('cartitems', 'products'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $update = [
    //         'prod_qty' => $request->prod_qty
    //     ];
    //     $update['prod_qty'] = $request->get('prod_qty');
    //     Cart::where('id', $id)->update($update);
    //     return back()->with('success', 'Data telah diperbaharui!');
    // }
    public function deleteproduct(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $cartitem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
        $cartitem->delete();
        return response()->json(['status' => 'berhasil hapus']);
    }
}