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
}
