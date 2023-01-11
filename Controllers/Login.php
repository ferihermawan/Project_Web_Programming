<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Login extends Controller
{
    public function view(){
        return view('Login', ['title' => 'Login']);

    }

    public function login(Request $request){
        $credentials = $request->validate([
            'Email_Address' => 'required|email:rfc,dns',
            'password' => 'required|alpha_num|min:8'
        ]);
    
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        
        return back()->with([
            'Error' => "Login Failed !"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
