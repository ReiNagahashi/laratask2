<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request,[
            // ここはform内にあるname！！！
            'name' => 'required',
            'email'=>'required',
            'password'=>'required|min:7',
            'confirmPassword'=>'required|same:password'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $user->save();

        return view('home')->with('user',$user);
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:7',
        ]);

        $user = User::where('password',$request->password)->orWhere('email',$request->email)->first();
        if($user != null){
            return view('home')->with('user',$user);
        }else{
            Session::flash('danger','Email or password are not much');
            return redirect('login');
        }


    }
}
