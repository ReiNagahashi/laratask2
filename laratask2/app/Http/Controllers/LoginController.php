<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class LoginController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $name = Request::input('name');

        return view('home',compact('name'));
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){

        $name = Request::input('name');

        return view('home',compact('name'));
    }
}
