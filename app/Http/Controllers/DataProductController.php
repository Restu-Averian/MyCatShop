<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        $products = Products::paginate(10);
        return view(
            '/admin/data-product',
            [
                'product' => $products,
                'title' => 'Data Product'
            ]
        );
    }
    public function delete($id)
    {
        $products = new Products();
        $products = Products::find($id);
        $products->delete();
        return redirect('/data-product');
    }
}