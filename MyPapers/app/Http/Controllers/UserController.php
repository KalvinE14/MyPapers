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

    public function doLogin(){
        
    }
}
