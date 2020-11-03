<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showSignUp(){
        return view('signup');
    }

    public function doSignUp(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'gender' => 'required'
        ]);
        
        $user = User::create(request(['name', 'username', 'password', 'address', 'dob', 'gender']));
        
        auth()->login($user);

        return view('login');
    }

    public function doLogin(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        else{
            if(!User::where('username', 'like', "%$username%")->where('password', 'like', "%$password%")->first()){
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
            $request->session()->put('data', $request->input());
           return view('create_paper'); 
        }
        
    }

    public function showLogin(){
        
        return view('login');
    }

}
