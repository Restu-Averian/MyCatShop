<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPenjualanController extends Controller
{
    public function index()
    {
        $order_item = OrderItem::all();
        $orders = DB::table('orders')->get();
        return view('admin/data-penjualan', [
            'title' => 'Data Penjualan',
            'order_item' => $order_item,
            'orders' => $orders
        ]);
    }

    public function edit($id)
    {
        $order_item = OrderItem::findorFail($id);
        $orders = Order::findorFail($id);
        return view('admin/edit-data-penjualan', [
            'title' => 'Edit Data Penjualan',
            'order_item' => $order_item,
            'orders' => $orders
        ]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'productname' => 'required',
        //     'kategori' => 'required',
        //     'harga' => 'required',
        //     'kuantitas' => 'required',
        //     'deskripsi' => 'required',
        //     'image' => 'image|file|max:2024'
        // ]);
        $update = [

            'status' => $request->status
        ];

        $update['status'] = $request->get('status');

        OrderItem::where('id', $id)->update($update);
        //Categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbaharui!');
    }
}