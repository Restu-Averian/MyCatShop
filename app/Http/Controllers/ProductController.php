<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view("products/create", [
            "title" => "Tambah Data",
            'categories' => $categories
        ]);
    }
    public function store()
    {
        $products = new Products();

        $products->productname = request('productname');
        $products->kategori = request('kategori');
        $products->harga = request('harga');
        $products->image = request()->file('image')->store('product-images');
        $products->save();
        return redirect()->to('/addproduct');
    }

    public function formedit($id)
    {
        $categories = DB::table('categories')->get();
        $products = Products::findorFail($id);
        return view('products/edit', [
            'title' => 'Edit Produk',
            'products' => $products,
            'categories' => $categories
        ], compact('products'));
    }

    public function processedit(Request $request, $id) //Proses update
    {
        $request->validate([
            'productname' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'image' => 'image|file|max:2024'
        ]);
        $update = [
            'productname' => $request->productname,
            'kategori' => $request->kategori,
            'harga' => $request->harga
        ];

        if ($files = $request->file('image')) {
            $destinationPath = 'storage/product-images'; //Lokasi kalau gambar sudh terupload
            $NamaSimpanDiDb = 'product-images/' . date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $NamaSimpanDiDb);

            $update['image'] = "$NamaSimpanDiDb";
        };

        $update['productname'] = $request->get('productname');
        $update['kategori'] = $request->get('kategori');
        $update['harga'] = $request->get('harga');

        Products::where('id', $id)->update($update);
        //Categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbaharui!');
        return redirect('/data-product');
    }
}