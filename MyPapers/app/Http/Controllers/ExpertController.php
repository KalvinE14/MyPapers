<?php

namespace App\Http\Controllers;

use App\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ExpertController extends Controller
{
    public function showLoginExpert()
    {
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }

        return view('login.login_expert');
    }

    public function showHomeExpert()
    {
        if(Session::get('username') != null)
        {
            if(Session::get('role') == "Expert")
            {
                return view('home.home_expert');
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function doLoginExpert(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:experts,username',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        else{
            $expert = Expert::where('username', $username)->first();

            if(Hash::check($password, $expert->password))
            {
                Session::put('username', $expert->username);
                Session::put('role', 'Expert');
                Session::put('user_id', $expert->expert_id);
    
                return redirect()->route('home_expert');
            }else
            {
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
        }
    }
}
