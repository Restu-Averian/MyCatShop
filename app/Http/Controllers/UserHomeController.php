<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
{
    public function index()
    {
        //$categories = DB::table('categories')->get(); //Penting ! Karena untuk define di perulangan
        // $products = DB::table('products')->get(); //Penting ! Karena untuk define di perulangan
        return view("/home", [
            //  'categories' => $categories,
            // 'products' => $products,
            "title" => "Home"
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
        $products = DB::table('products')->where('kategori', '=', 'Obat')->get();
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

    public function detail(Products $id)
    {
        $reviews = DB::table('reviews')->get();
        $products = DB::table('products')->get();
        return view('product-clicked', [
            'title' => 'Detail Produk',
            'products' => $id,
            'reviews' => $reviews,
            'prodcuts' => $products
        ]);
    }


    // Cart

    public function addToCart(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'productname' => $request->productname,
            'harga' => $request->harga,
            'kuantitas' => $request->kuantitas,
            'image' => array('image' => $request->image)

        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart');
    }
}