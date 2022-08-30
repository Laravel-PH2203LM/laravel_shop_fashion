<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminHomeController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function login() {
        return view('admin.login');
    }
    public function postlogin(Request $request) {
        $data = $request->only('email','password','remember_token');
        if (Auth::attempt($data)) {
            return redirect()->intended('admin/trang-chu');
        }
        return redirect("admin/login");
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
