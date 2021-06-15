<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('dashboard.admin.login');
    }
    public function check(Request $request){
        $cred = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($cred)){
            return redirect()->route('admin.home');
        }else{
            return  redirect()->route('user.login');
        }
    }
    public function create(){
        return view('dashboard.admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');

    }
}
