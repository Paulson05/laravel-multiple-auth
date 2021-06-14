<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use \Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function register(){
        return view('dashboard.user.register');
    }

    public function create(Request $request){

        $this->validate($request,[
            'email' => 'required|unique:users|email|max:250',
            'username'=> 'required',
            'password'=> 'required|max:20'
        ]);
        $array=collect($request->only(['email','username']))->put('password',bcrypt($request->password))->all();
        User::create($array);
        return redirect()->back()->with('info', 'your are successfully register');

    }

    public function login(){

        return view('dashboard.user.login');
    }
public function home(){
        return view('dashboard.user.home');
}
    public function check(Request $request){

               $cred = $request->only('email', 'password');

               if(Auth::guard('web')->attempt($cred)){
                   return redirect()->route('user.home');
               }else{
                   return  redirect()->route('user.login');
               }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');

    }
}
