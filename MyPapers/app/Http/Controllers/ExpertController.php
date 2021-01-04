<?php

namespace App\Http\Controllers;

use App\Expert;
use App\Paper;
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
            $expert_id = Session::get('expert_id');

            if(strcmp(Session::get('role'), "Expert") == 0)
            {
                $upcomingPapers = Paper::join('users', 'papers.user_id', '=', 'users.user_id')->where('expert_id', '=', $expert_id)->
                            where('status', 'LIKE', 'Pending')->get();
                
                $availablePapers = Paper::join('users', 'papers.user_id', '=', 'users.user_id')->
                            where('status', 'LIKE', 'Waiting')->get();

                return view('home.home_expert')->with('upcomingPapers', $upcomingPapers)->with('availablePapers', $availablePapers);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function doSignUp(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'username' => 'required|unique:experts,username',
            'password' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required'
        ]);
        
        Expert::create([
            'name' => $req->input('name'), 
            'username' => $req->input('username'), 
            'password' => Hash::make($req->input('password')), 
            'address' => $req->input('address'), 
            'dob' => $req->input('dob'), 
            'gender' => $req->input('gender'),
            'profile_picture' => 'anonymous.png',
        ]);
        
        return redirect()->back();
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
                Session::put('expert_id', $expert->expert_id);
    
                return redirect()->route('home_expert');
            }else
            {
                $validator->getMessageBag()->add('errorPassword', 'The password is wrong');
                return redirect()->back()->withErrors($validator->errors());
            }
        }
    }

    public function showAllExpert()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "Admin") == 0)
            {
                $experts = Expert::all();
                return view('all_expert.all_expert', ['experts' => $experts]);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function removeExpert($id)
    {
        if(Session::get('username'))
        {
            $role = Session::get('role');

            if(strcmp($role, "Admin") == 0)
            {
                Expert::where('expert_id', '=', $id)->delete();
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
            $expert_id = Session::get('expert_id');

            if(strcmp($role, "Expert") == 0)
            {
                $totalCv = Expert::join('papers', 'experts.expert_id', '=', 'papers.expert_id')->
                            where('type', 'LIKE', 'Curriculum Vitae')->get();

                $totalBrochure = Expert::join('papers', 'experts.expert_id', '=', 'papers.expert_id')->
                            where('type', 'LIKE', 'Brochure')->get();

                $totalLeaflet = Expert::join('papers', 'experts.expert_id', '=', 'papers.expert_id')->
                            where('type', 'LIKE', 'Leaflet')->get();

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

                $expert = Expert::where('expert_id', 'LIKE', $expert_id)->get();

                return view('update_profile', ['expert' => $expert])
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

        Expert::where('expert_id', '=', $id)->update([
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

        Expert::where('expert_id', '=', $id)->update([
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
            $expert = Expert::where('expert_id', '=', $id)->first();

            if(Hash::check($old_password, $expert->password))
            {
                $temp_password = Hash::make($request->new_password);

                Expert::where('expert_id', '=', $id)->update([
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
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        Expert::where('expert_id', '=', $id)->update([
            'profile_picture' => $request->file('profile_picture')->getClientOriginalName(),
        ]);

        $profile_picture = $request->file('profile_picture');

        $name = $request->file('profile_picture')->getClientOriginalName();
        $profile_picture->move(public_path("assets"), $name);

        return redirect()->back();
    }
}
