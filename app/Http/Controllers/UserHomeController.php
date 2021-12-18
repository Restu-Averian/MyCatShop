<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
{
    public function index()
    {
        //$categories = DB::table('categories')->get(); //Penting ! Karena untuk define di perulangan
        // $products = DB::table('products')->get(); //Penting ! Karena untuk define di perulangan
        $products = Products::latest()->limit('3')->get();
        $kucing = Products::where('kategori', 'Kucing');
        $wetfood = Products::where('kategori', 'Wet Food');
        $dryfood = Products::where('kategori', 'Dry Food');
        $cattoys = Products::where('kategori', 'Cat Toys');
        $pasir = Products::where('kategori', 'Perlengkapan Pasir');
        $obat = Products::where('kategori', 'Obat Kucing');
        return view("/home", [
            //  'categories' => $categories,
            // 'products' => $products,
            "title" => "Home",
            'products' => $products,
            'kucing' => $kucing,
            'wetfood' => $wetfood,
            'dryfood' => $dryfood,
            'cattoys' => $cattoys,
            'pasir' => $pasir,
            'obat' => $obat,
        ]);
    }

    public function showKucing()
    {
        $products = DB::table('products')->where('kategori', '=', 'Kucing')->get();
        return view('/catproduct/kucing', [
            'title' => 'Semua Dry Food',
            'products' => $products
        ]);
    }
    public function showWetFood()
    {
        $products = DB::table('products')->where('kategori', '=', 'Wet Food')->get();
        return view('/catproduct/wetfood', [
            'title' => 'Semua Wet Food',
            'products' => $products
        ]);
    }
    public function showDryFood()
    {
        $products = DB::table('products')->where('kategori', '=', 'Dry Food')->get();
        return view('/catproduct/dryfood', [
            'title' => 'Semua Dry Food',
            'products' => $products
        ]);
    }
    public function showCatToys()
    {
        $products = DB::table('products')->where('kategori', '=', 'Cat Toys')->get();
        return view('/catproduct/cattoys', [
            'title' => 'Semua Dry Food',
            'products' => $products
        ]);
    }
    public function showPasir()
    {
        $products = DB::table('products')->where('kategori', '=', 'Perlengkapan Pasir')->get();
        return view('/catproduct/pasir', [
            'title' => 'Semua Dry Food',
            'products' => $products
        ]);
    }
    public function showMedic()
    {
        $products = DB::table('products')->where('kategori', '=', 'Obat Kucing')->get();
        return view('/catproduct/medic', [
            'title' => 'Semua Dry Food',
            'products' => $products
        ]);
    }

    public function allproducts()
    {
        $products = Products::all();
        return view('allproduct', [
            'title' => 'Semua Produk',
            'products' => $products
        ]);
    }
    public function resultsearchproducts()
    {
        $products = Products::latest();
        if (request('search')) {
            $products->where('productname', 'like', '%' . request('search') . '%')->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }
        return view('resultsearchproduct', [
            'title' => 'Semua Produk',
            'products' => $products->get()
        ]);
    }

    public function detail(Products $id)
    {
        $reviews = DB::table('reviews')->get();
        // $products = DB::table('products')->get();
        return view('product-clicked', [
            'title' => 'Detail Produk',
            'products' => $id,
            'reviews' => $reviews,
            // 'products' => $products
        ]);
    }

    public function beli(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $proditem = new Products();
            $proditem->id = $product_id;
            $proditem->kuantitas = $product_qty;
            $proditem->user_id = Auth::id();
            $proditem->save();
            return response()->json(['berhasiltambah' => 'Produk berhasil ditambahkan ke keranjang !']);
        } else {
            return response()->json(['failure' => 'Silahkan login terlebih dahulu']);
        }
    }



    // Cart

    // public function addToCart(Request $request)
    // {
    //     Cart::add([
    //         'id' => $request->id,
    //         'productname' => $request->productname,
    //         'harga' => $request->harga,
    //         'kuantitas' => $request->kuantitas,
    //         'image' => array('image' => $request->image)

    //     ]);

    //     session()->flash('success', 'Product is Added to Cart Successfully !');

    //     return redirect()->route('cart');
    // }
}