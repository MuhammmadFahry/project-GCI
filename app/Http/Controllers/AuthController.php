<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
   
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'reqired'
        ]);

        if(Auth::attempt())

        if ($credentials['username'] === 'member' && $credentials['password'] === '1234') {
            
            Auth::loginUsingId(1); // Assuming member's user id is 1
            dd('member');
            return redirect()->route('member');
        } elseif ($credentials['username'] === 'admin' && $credentials['password'] === '1235') {
            Auth::loginUsingId(2); // Assuming admin's user id is 2
            dd('admin');
            return redirect()->route('admin');
        } else {
            return redirect()->route('login')->withErrors('Invalid credentials');
        }
    }

    public function showMemberPage()
    {
        return view('member');
    }

    public function showAdminPage()
    {
        return view('admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
