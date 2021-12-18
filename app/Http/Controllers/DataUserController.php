<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataUserController extends Controller
{
    public function index()
    {
        // $userPaging = User::where('isAdmin', '=', 0)->paginate(10);
        $user = DB::table('users')->where('isAdmin', '=', 0)->paginate(10);

        return view('/admin/data-user', [
            'user' => $user,
            // 'userPaging' => $userPaging,
            'title' => 'Data User'
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $user = User::where('name', 'like', '%' . $search . '%')->where('isAdmin', 0)->paginate(10);
        // $user = DB::table('users')->where('name', 'like', '%' . $search . '%')
        //     ->where('isAdmin', '=', 0)->paginate(10);
        return view('admin/searchuser', [
            'title' => 'Pencarian : "' . $search . '"',
            'user' => $user
        ]);
    }
}