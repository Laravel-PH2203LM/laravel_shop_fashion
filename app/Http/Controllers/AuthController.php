<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
//    public function register(Request $request) {
//        $users = User::create([
//           'email'=>$request->email,
//           'password'=>Hash::make($request->password),
//            'name'=>$request->name,
//            'level' => 2
//        ]);
//    }
    public function login() {
        return view('login');
    }
}
