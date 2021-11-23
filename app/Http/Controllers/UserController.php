<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        //$orders = Order::where('user_id', Auth::id())->get();
        $order_item = OrderItem::where('user_id', Auth::id())->get();
        $users = Auth::user();
        return view('profile', [
            'title' => 'Akun',
            'users' => $users,
            'order_item' => $order_item,
            //'orders' => $orders
        ]);
    }
    public function hapuscheckout($id)
    {
        $order_item = new OrderItem();
        $order_item = OrderItem::find($id);
        $order_item->delete();
        return back()->with('status', 'Barang checkout berhasil dihapus!');
    }
}