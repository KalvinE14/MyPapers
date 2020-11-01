<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showSignUp(){
        return view('signup');
    }

    public function doSignUp(){
        $this->validate(request(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'username', 'password', 'address', 'dob', 'gender']));
        
        auth()->login($user);

        return view('login');
    }

    public function doLogin(Request $request){
        
        $username = $request->input('username');
        $password = $request->input('password');

        $login = User::where('username', 'like', "%$username%")->where('password', 'like', "%$password%")->count();

        if($login == 0){
            return view('login');
        }else{
            $request->session()->put('data', $request->input());
            return view('create_paper');
        }
        
    }

    public function showLogin(){
        
        return view('login');
    }

    // public function accessSessionData(Request $request) {
    //     if($request->session()->has('my_name'))
    //        echo $request->session()->get('my_name');
    //     else
    //        echo 'No data in the session';
    //  }

}
