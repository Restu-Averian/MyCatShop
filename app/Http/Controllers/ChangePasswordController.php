<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        return view('forgotpassinside', [
            'title' => 'Ganti Password',
            'users' => $users
        ]);
    }
    public function updatepassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:8|max:100',
            'new_password' => 'required|min:8|max:100',
            'new_confirm_password' => 'required|same:new_password',
        ]);
        if (Hash::check($request->current_password, auth()->user()->password)) {
            $request->user()->update(['password' => $request->new_password]);
            return redirect()->to('/change-password')->with('success', 'password updated');
        }
        return redirect()->to('/change-password')->with('error', 'Old password doesn\'t match');
        // return redirect()->to('/change-password');
    }
}