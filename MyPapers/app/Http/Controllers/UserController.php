<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use App\User;
use App\Paper;
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
        if(Session::get('username') != null)
        {
            return redirect()->back();
        }

        return view('signup');
    }

    public function doSignUp(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'dob' => 'required',
            'address' => 'required',
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
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "Admin") == 0)
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
            $user_id = Session::get('user_id');

            if(strcmp(Session::get('role'), "User") == 0)
            {
                $waitingPapers = Paper::join('experts', 'papers.expert_id', '=', 'experts.expert_id')->where('user_id', '=', $user_id)->
                            where('status', 'LIKE', 'Pending')->get();

                $pendingPapers = Paper::where('user_id', '=', $user_id)->
                            where('status', 'LIKE', 'Waiting')->get();

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('home.home_user')->with('waitingPapers', $waitingPapers)->with('pendingPapers', $pendingPapers)
                        ->with('notifications', $notifications)->with('totalNotification', $totalNotification);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function removeUser($id)
    {
        if(Session::get('username'))
        {
            $role = Session::get('role');

            if(strcmp($role, "Admin") == 0)
            {
                User::where('user_id', '=', $id)->delete();
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function showProfile()
    {
        if(Session::get('username'))
        {
            $role = Session::get('role');
            $user_id = Session::get('user_id');

            if(strcmp($role, "User") == 0)
            {
                $totalCv = User::join('papers', 'users.user_id', '=', 'papers.user_id')->
                            where('type', 'LIKE', 'Curriculum Vitae')->where('status', 'LIKE', 'Finished')->
                            where('papers.user_id', '=', $user_id)->get();
                $totalBrochure = User::join('papers', 'users.user_id', '=', 'papers.user_id')->
                            where('type', 'LIKE', 'Brochure')->where('status', 'LIKE', 'Finished')->
                            where('papers.user_id', '=', $user_id)->get();
                $totalLeaflet = User::join('papers', 'users.user_id', '=', 'papers.user_id')->
                            where('type', 'LIKE', 'Leaflet')->where('status', 'LIKE', 'Finished')->
                            where('papers.user_id', '=', $user_id)->get();

                $totalPaper = count($totalCv) + count($totalBrochure) + count($totalLeaflet);

                if($totalPaper != 0)
                {
                    $cvPercentage = (count($totalCv) / $totalPaper) * 100;
                    $brochurePercentage = (count($totalBrochure) / $totalPaper) * 100;
                    $leafletPercentage = (count($totalLeaflet) / $totalPaper) * 100;
                }else
                {
                    $cvPercentage = 0;
                    $brochurePercentage = 0;
                    $leafletPercentage = 0;
                }

                $user = User::where('user_id', 'LIKE', $user_id)->get();

                return view('update_profile', ['user' => $user])
                    ->with('totalCv', count($totalCv))->with('totalBrochure', count($totalBrochure))
                    ->with('totalLeaflet', count($totalLeaflet))
                    ->with('cvPercentage', $cvPercentage)->with('brochurePercentage', $brochurePercentage)
                    ->with('leafletPercentage', $leafletPercentage);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function updateName(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        User::where('user_id', '=', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->back(); 
    }

    public function updateAddress(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        User::where('user_id', '=', $id)->update([
            'address' => $request->address
        ]);

        return redirect()->back(); 
    }

    public function updatePassword(Request $request, $id)
    {
        $old_password = $request->input('old_password');

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        else{
            $user = User::where('user_id', '=', $id)->first();

            if(Hash::check($old_password, $user->password))
            {
                $temp_password = Hash::make($request->new_password);

                User::where('expert_id', '=', $id)->update([
                    'password' => $temp_password
                ]);
    
                return redirect()->back();
            }else
            {
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
        }
    }

    public function updatePicture(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'profile_picture' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        User::where('user_id', '=', $id)->update([
            'profile_picture' => $request->profile_picture
        ]);

        return redirect()->back(); 
    }

    public function logout()
    {
        Session::forget('username');
        Session::forget('role');
        Session::forget('user_id');

        return redirect()->route('start_page');
    }
}
