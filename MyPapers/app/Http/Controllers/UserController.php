<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function startPage()
    {
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }

        return view('before_login_home');
    }

    public function showSignUp(){
        return view('signup');
    }

    public function doSignUp(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'dob' => 'required',
            'gender' => 'required'
        ]);
        
        User::create([
            'name' => $req->input('name'), 
            'username' => $req->input('username'), 
            'password' => Hash::make($req->input('password')), 
            'address' => $req->input('address'), 
            'dob' => $req->input('dob'), 
            'gender' => $req->input('gender'),
            'profile_picture' => 'anonymous.png',
        ]);
        
        return redirect()->route('start_page');
    }

    public function doLoginUser(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $credential = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        else{
            if(Auth::attempt($credential)){
                $user = User::where('username', $username)->first();

                Session::put('username', $user->username);
                Session::put('role', 'User');
                Session::put('user_id', $user->user_id);

                return redirect()->route('home_user');
            }else{
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
        }
    }

    public function showLoginMenu()
    {
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }
        
        return view('login.login_menu');
    }

    public function showLoginUser()
    {
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }

        return view('login.login_user');
    }

    public function showAllUser()
    {
        $users = User::all();

        if(Session::get('username') != null)
        {
            if(Session::get('role') == "Admin")
            {
                $users = User::all();
                return view('all_user.all_user', ['users' => $users]);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function showHomeUser()
    {
        if(Session::get('username') != null)
        {
            if(Session::get('role') == "User")
            {
                return view('home.home_user');
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }
}
