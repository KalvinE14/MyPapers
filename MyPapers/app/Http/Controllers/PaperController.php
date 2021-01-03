<?php

namespace App\Http\Controllers;

use App\Paper;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PaperController extends Controller
{
    public function showAllPaperData()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "Admin") == 0)
            {
                $papers = Paper::select('paper_id', 'title', 'requirement', 'description', 'type', 'status', 'preview', 'users.name as userName', 'experts.name as expertName', 'papers.created_at', 'users.profile_picture as userPicture', 'experts.profile_picture as expertPicture')->
                            join('experts', 'papers.expert_id', '=', 'experts.expert_id')->
                            join('users', 'papers.user_id', '=', 'users.user_id')->
                            get();
                
                return view('all_paper.all_paper', ['papers' => $papers]);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function showAllUserPaper($userId)
    {
        $papers = Paper::where('user_id', $userId)->get();
        return view('paper_user', ['papers' => $papers]);
    }

    public function showPendingPapers($userid){
        $papers = Paper::where('user_id', $userid)->where('status', 'Pending')->get();
        return view('paper', ['papers' => $papers]);
    }

    public function showFinishedPapers($userid){
        $papers = Paper::where('user_id', $userid)->where('status', 'Finished')->get();
        return view('paper', ['papers' => $papers]);
    }

    public function showPaperDetail($paper_id, $user_id){
        $papers = Paper::where('user_id', $user_id)->where('paper_id', $paper_id)->first();
        return view('paper_detail', ['papers' => $papers]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'type' => 'required',
            'requirement' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        if($request->file('image') != null)
        {
            Paper::create([
                'title' => $request->title,
                'type' => $request->type,
                'requirement' => $request->requirement,
                'description' => $request->description,
                'status' => "Pending",
                'file' => $request->file('image')->getClientOriginalName(),
                'preview' => null,
                'user_id' => 1,
                'expert_id'=> null
            ]);

            $image = $request->file('image');

            $name = $request->file('image')->getClientOriginalName();
            $image->move(public_path("assets"), $name);
        }else
        {
            Paper::create([
                'title' => $request->title,
                'type' => $request->type,
                'requirement' => $request->requirement,
                'description' => $request->description,
                'status' => "Pending",
                'file' => null,
                'preview' => null,
                'user_id' => 1,
                'expert_id'=> null
            ]);
        }

        return redirect('/papers')->with('status', 'Paper has been created!');
    }

    public function createCv()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "User") == 0)
            {
                return view('create_paper.create_paper')->with('paper_type', 'Curriculum Vitae');
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function createBrochure()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "User") == 0)
            {
                return view('create_paper.create_paper')->with('paper_type', 'Brochure');
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function createLeaflet()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "User") == 0)
            {
                return view('create_paper.create_paper')->with('paper_type', 'Leaflet');
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function downloadPaper($preview){
        $file = public_path('assets/').$preview;

        return response()->download($file);
    }

    public function showHistory()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "User") == 0)
            {
                $papers = Paper::join('experts', 'papers.expert_id', '=', 'experts.expert_id')->where('user_id', Session::get('user_id'))->where('status', 'LIKE', 'Finished')->get();

                return view('history.paper_history', ['papers' => $papers]);
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
        
    }

    public function choosePaper()
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "User") == 0)
            {
                return view('create_paper.choose_paper');
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }
}
