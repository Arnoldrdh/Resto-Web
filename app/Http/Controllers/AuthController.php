<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:10'
        ]);

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function register(Request $req)
    {
        $req -> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User;
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> password = Hash::make($req -> password);
        $user -> role = 'user';
        $user->save();
        return $this -> login($req);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
