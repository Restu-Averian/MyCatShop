<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create', [
            'title' => 'Register'
        ]);
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users', //users is tablename
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        $user->image = request()->file('image')->store('user-images');
        $user->save();
        // Auth::login($user);

        return redirect()->to('/login');
    }
}