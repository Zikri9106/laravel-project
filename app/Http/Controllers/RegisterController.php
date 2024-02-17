<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Form Register',
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        $result = User::create($validateData);
        if ($result) {
            return redirect('/login')->with('success', 'Register berhasil, Silahkan Login !');
        } else {
            return redirect('/register')->with('loginError', 'Register gagal, Silahkan Login !');
        }

    }
}
