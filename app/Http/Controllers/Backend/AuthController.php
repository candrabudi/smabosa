<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class AuthController extends Controller
{
    public function login()
    {
        $check = Auth::user();
        if(!empty($check)) {
            return redirect()->route('admin-dashboard');
        }
        return view('backend.auth.login');
    }

    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin-dashboard');
        }
  
        return redirect("admin/login")->withErrors('Email atau sandi yang anda masukan salah');
    }
}
