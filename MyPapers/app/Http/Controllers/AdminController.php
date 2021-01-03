<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showLoginAdmin()
    {
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }

        return view('login.login_admin');
    }

    public function showHomeAdmin()
    {
        if(Session::get('username') != null)
        {
            if(Session::get('role') == "Admin")
            {
                return view('home.home_admin');
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function doLoginAdmin(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:admins,username',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        else{
            $admin = Admin::where('username', $username)->first();

            if(Hash::check($password, $admin->password))
            {
                Session::put('username', $admin->username);
                Session::put('role', 'Admin');
                Session::put('user_id', $admin->admin_id);
    
                return redirect()->route('home_admin');
            }else
            {
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
        }
    }
}
