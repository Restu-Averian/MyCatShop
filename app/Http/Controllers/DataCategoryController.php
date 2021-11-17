<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataCategoryController extends Controller
{
    public function index() //show tabel kategori
    {
        $categories = new Categories();
        $categories = DB::table('categories')->get();
        return view('data-category', [
            'categories' => $categories,
            'title' => 'Data Kategori'
        ]);
    }
    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect('/data-kategori')->with('status', 'Data berhasil dihapus');
    }
}