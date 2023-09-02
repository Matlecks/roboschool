<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function auth_page()
    {
        return redirect()->view('auth_page');
    }
    public function auth(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function registrate(Request $request)
    {
        $user = new User;

        $user->email = $request->login;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('admin_auth');
    }
}
