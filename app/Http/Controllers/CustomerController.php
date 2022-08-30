<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller
{
    public function register(Request $request) {
        $users = User::create([
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
            'name'=>$request->name,
            'level' => 2,
            'status' => $request->status
        ]);
    }
    public function login(Request $request) {
        $cre = [
          'email' => $request->email,
          'password'=> $request->password,
        ];

        $remember = $request->remember;
        if(Auth::attempt($cre,$remember)) {
            $user = User::whereEmail($request->email)->first();
            $user->token = $user->createToken('app')->accessToken;
            return response()->json($user);
        }
    }
}
