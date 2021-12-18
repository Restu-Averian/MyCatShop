<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create', [
            'title' => 'Login'
        ]);
    }
    public function store()
    {
        if (Auth::attempt(request(['email', 'password'])) == false) {
            return back()->with('message', 'Email & password salah');
        }

        //Kalau admin
        if (Auth::user() &&  Auth::user()->isAdmin == true) {
            return redirect()->to('/dashboard');
        }
        return redirect()->to('/profile');
    }
    public function destroy()
    {
        Auth::logout();

        return redirect()->to('/home');
    }
}