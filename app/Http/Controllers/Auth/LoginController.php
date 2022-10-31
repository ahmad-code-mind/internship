<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(Auth::user()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        $credentials = ["email" => $request->email , "password" => $request->password];
        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
        return redirect('login')->with('msgLoginFaild',"Login Faild!..");
    }

    public function logOut(){
        Auth::logout();

        return redirect('login');
    }
}