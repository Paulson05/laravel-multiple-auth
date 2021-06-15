<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    public function register(){
        return view('dashboard.writer.register');
    }


    public function create(Request $request){

        $this->validate($request,[
            'email' => 'required|unique:users|email|max:250',
            'username'=> 'required',
            'password'=> 'required|max:20'
        ]);
        $array=collect($request->only(['email','username']))->put('password',bcrypt($request->password))->all();
        Writer::create($array);
        return redirect()->back()->with('info', 'your are successfully register');
    }



    public function login(){
        return view('dashboard.writer.login');
    }


    public function check(Request  $request){

        $cred = $request->only('email', 'password');

        if(Auth::guard('writer')->attempt($cred)){
            return redirect()->route('writer.home');
        }else{
            return  redirect()->route('writer.login');
    }
}

public function home(){
        return view('dashboard.writer.home');

}

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');

    }

}
