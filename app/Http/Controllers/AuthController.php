<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request) {
        $users = User::create([
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
            'name'=>$request->name,
            'level' => 2
        ]);
    }
    public function login() {
        return view('login');
    }
    public function postlogin(Request $request) {
        try {
            $user = User::query()
                ->where('email',$request->get('email'))
                ->where('password',$request->get('password'))
                ->first();
            session()->put('id',$user->id);
            session()->put('name',$user->name);
            session()->put('password',$user->password);
            session()->put('level',$user->level);
            return redirect()->route('admin.index');
        } catch (\Throwable $e) {
            return redirect()->route('login');
        }
    }
}
