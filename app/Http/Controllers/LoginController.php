<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function postLogin(Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('datatamu');
        }
        return redirect('login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}

