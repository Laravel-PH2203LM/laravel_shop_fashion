<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request) {
        $data = $request->only('email','password','remember_token');
        if (Auth::attempt($data)) {
            if(Auth::user()->level === 0)
                return redirect()->intended('admin/trang-chu')->with('Đăng nhập thành công');
        } if (Auth::user()->level === 1){
            return redirect()->route('index');
        }
        return redirect()->route('login');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request){
        $request->validate([
            'email'=> 'required|min:3|max:100' ,
            'name'=> 'required|min:3|max:100',
            'password'=> 'required|min:3|max:100'
        ]);
        $data = $request->only('email','name','password','full_name','address','phone');
        $register = new User();
        $register->name = $data['name'];
        $register->full_name = $data['full_name'];
        $register->address = $data['address'];
        $register->phone = $data['phone'];
        $register->email = $data['email'];
        $register->password = Hash::make($data['password']);
        $register->level = 1;
        $register->save();
        return redirect()->route('login');
    }
}
