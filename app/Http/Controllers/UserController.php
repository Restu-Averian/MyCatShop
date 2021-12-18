<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
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
    public function hapuspembelian($id)
    {
        $order_item = new OrderItem();
        $order_item = OrderItem::find($id);
        $order_item->delete();
        return back()->with('status', 'Barang checkout berhasil dihapus!');
    }

    public function changenama()
    {
        $users = Auth::user();
        return view('profile/gantinama', [
            'title' => 'Ganti Nama',
            'users' => $users

        ]);
    }
    public function changeemail()
    {
        $users = Auth::user();
        return view('profile/gantiemail', [
            'title' => 'Ganti Email',
            'users' => $users

        ]);
    }

    public function updatenama(Request $request, $id)
    {
        $update = [
            'name' => $request->name
        ];
        $update['name'] = $request->get('name');

        User::where('id', Auth::id())->update($update);
        //Categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbaharui!');
    }
    public function updateemail(Request $request, $id)
    {
        $update = [
            'email' => $request->email
        ];
        $update['email'] = $request->get('email');

        User::where('id', Auth::id())->update($update);
        //Categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbaharui!');
    }
}