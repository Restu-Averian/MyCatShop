<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function store(Request $request)
    {

        // $products = DB::table('products')->get();
        if (Auth::check()) { //Auth check -> ngecek apakah sudah login
            Review::create([
                'body' => request('body'),
                'products_id' => $request->id,
                'user_id' => auth()->id()
            ]);
        } else {
            return redirect('/login');
        }
        // $request->addReview(request('body'), auth()->id());
        return back();
    }
}