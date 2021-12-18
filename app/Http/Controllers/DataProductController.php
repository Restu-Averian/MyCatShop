<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        $products = Products::paginate(10);
        $review = Review::all();
        return view(
            '/admin/data-product',
            [
                'product' => $products,
                'title' => 'Data Product',
                'review' => $review
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = Products::where('productname', 'LIKE', '%' . $search . '%')->paginate(10);
        $review = Review::all();

        return view('admin/searchproduct', [
            'title' => 'Pencarian : ' . '"' . $search . '"',
            'product' => $product,
            'review' => $review
        ]);
    }
}