<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

    use Illuminate\Http\Request;
    use Auth;

    class LoginController extends Controller
    {

        public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:writer')->except('logout');
        }

        public function showAdminLoginForm()
        {
            return view('auth.login', ['url' => 'admin']);
        }

        public function adminLogin(Request $request)
        {
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->intended('/admin');
            }
            return back()->withInput($request->only('email', 'remember'));
        }


        public function showWriterLoginForm()
        {
            return view('auth.login', ['url' => 'writer']);
        }

        public function writerLogin(Request $request)
        {
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (Auth::guard('writer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->intended('/writer');
            }
            return back()->withInput($request->only('email', 'remember'));
        }

        public function showAdminRegisterForm()
        {
            return view('auth.register', ['url' => 'admin']);
        }

        public function showWriterRegisterForm()
        {
            return view('auth.register', ['url' => 'writer']);
        }
        protected function createAdmin(Request $request)
        {
            $this->validator($request->all())->validate();
            $admin = Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/admin');
        }

        protected function createWriter(Request $request)
        {
            $this->validator($request->all())->validate();
            $writer = Writer::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->intended('login/writer');
        }

    }