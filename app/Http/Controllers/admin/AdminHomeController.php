<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utiles\Constants;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminHomeController extends Controller
{
    public function home() {
        return view('admin.index');
    }
    public function register(){
        return view('admin.register');
    }
    public function postregister(Request $request){
        $request->validate([
           'email'=> 'required|min:3|max:100' ,
            'name'=> 'required|min:3|max:100',
            'password'=> 'required|min:3|max:100'
        ]);
         $data = $request->only('email','name','password');
            $register = new User();
            $register->name = $data['name'];
            $register->email = $data['email'];
            $register->password = Hash::make($data['password']);
            $register->level = 0;
            $register->save();
        return redirect()->route('login');
    }
    public function login() {
        return view('admin.login');
    }
    public function postlogin(Request $request) {
        $data = $request->only('email','password','remember_token');
        if (Auth::attempt($data)) {
            return redirect()->intended('admin/trang-chu')->with('Đăng nhập thành công');
        }
        return redirect("admin/login")->with('Tên tài khoản hoặc mật khẩu không chính xác');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
