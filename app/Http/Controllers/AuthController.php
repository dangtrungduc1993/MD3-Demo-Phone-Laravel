<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class AuthController extends Controller
{

    public function showForm()
    {
        return view("auth.register");

    }

    public function register(Request $request)
    {
        $user = $request->only('name','email','password');
        $user["password"]= Hash::make($user["password"]);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }

    public function showFormLogin()
    {
        return view("auth.login");


    }

    public function login(Request $request)
    {
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return redirect()->route('phone.list');
        }else{
            \Illuminate\Support\Facades\Session::flash("error","Tai khoan khong dung");
            return redirect()->back();

        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }
};
