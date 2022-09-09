<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utiles\Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminHomeController extends Controller
{
    public function home() {
        return view('admin.index');
    }
    public function login() {
        return view('admin.login');
    }
    public function postlogin(Request $request) {
        $user = User::query()
            ->where('email',$request->email)
            ->where('password',$request->password)
            ->first();
        session()->put('id',$user->id);
        session()->put('name',$user->name);
        session()->put('level',$user->level);
        return redirect()->route('home');
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
