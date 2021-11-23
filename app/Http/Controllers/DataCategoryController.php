<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataCategoryController extends Controller
{
    public function index() //show tabel kategori
    {
        $products = DB::table('products')->get();
        $CountKucing = DB::table('products')->where('kategori', '=', 'Kucing')->count();
        $CountWetFood = DB::table('products')->where('kategori', '=', 'Wet Food')->count();
        $CountDryFood = DB::table('products')->where('kategori', '=', 'Dry Food')->count();
        $CountCatToys = DB::table('products')->where('kategori', '=', 'Cat Toys')->count();
        $CountPerlengkapan = DB::table('products')->where('kategori', '=', 'Perlengkapan Pasir')->count();
        $CountObat = DB::table('products')->where('kategori', '=', 'Obat Kucing')->count();
        return view('/admin/data-category', [
            'title' => 'Data Kategori',
            'products' => $products,
            'CountKucing' => $CountKucing,
            'CountWetFood' => $CountWetFood,
            'CountDryFood' => $CountDryFood,
            'CountCatToys' => $CountCatToys,
            'CountPerlengkapan' => $CountPerlengkapan,
            'CountObat' => $CountObat
        ]);
    }
    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect('/data-kategori')->with('status', 'Data berhasil dihapus');
    }
}