<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Expert;
use App\Notification;
use App\Paper;
use App\User;
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

    public function showPaperDetail($paper_id){
        if(Session::get('username') != null)
        {
            $paper = Paper::where('paper_id', $paper_id)->first();

            if(strcmp(Session::get('role'), "User") == 0)
            {
                $user_id = Session::get('user_id');

                $user = User::where('user_id', '=', $user_id)->first();

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();

                $totalNotification = count($notifications);

                $comments = Comment::select('comment_id', 'user_comment', 'expert_comment', 'comments.created_at', 'comment',
                                    'users.name as userName', 'users.profile_picture as userPicture', 'experts.name as expertName', 
                                    'experts.profile_picture as expertPicture')->
                                    join('papers', 'comments.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    join('experts', 'papers.expert_id', '=', 'experts.expert_id')->
                                    where('papers.paper_id', '=', $paper_id)->get();

                $totalComment = count($comments);

                return view('paper_detail', ['paper' => $paper])->
                        with('notifications', $notifications)->with('totalNotification', $totalNotification)->
                        with('comments', $comments)->with('totalComment', $totalComment)->
                        with('user', $user);
            }else if(strcmp(Session::get('role'), "Expert") == 0)
            {
                $expert_id = Session::get('expert_id');

                $expert = Expert::where('expert_id', '=', $expert_id)->first();

                $comments = Comment::select('comment_id', 'user_comment', 'expert_comment', 'comments.created_at', 'comment',
                                    'users.name as userName', 'users.profile_picture as userPicture', 'experts.name as expertName', 
                                    'experts.profile_picture as expertPicture')->
                                    join('papers', 'comments.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    join('experts', 'papers.expert_id', '=', 'experts.expert_id')->
                                    where('papers.paper_id', '=', $paper_id)->get();

                $totalComment = count($comments);

                return view('paper_detail', ['paper' => $paper])->
                        with('comments', $comments)->with('totalComment', $totalComment)->
                        with('expert', $expert);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'type' => 'required',
            'requirement' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:docx,pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        if($request->file('file') != null)
        {
            Paper::create([
                'title' => $request->title,
                'type' => $request->type,
                'requirement' => $request->requirement,
                'description' => $request->description,
                'status' => "Pending",
                'file' => $request->file('file')->getClientOriginalName(),
                'preview' => null,
                'user_id' => 1,
                'expert_id'=> null
            ]);

            $image = $request->file('file');

            $name = $request->file('file')->getClientOriginalName();
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
                $user_id = Session::get('user_id');

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('create_paper.create_paper')->with('paper_type', 'Curriculum Vitae')->with('notifications', $notifications)->with('totalNotification', $totalNotification);
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
                $user_id = Session::get('user_id');

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('create_paper.create_paper')->with('paper_type', 'Brochure')->with('notifications', $notifications)->with('totalNotification', $totalNotification);
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
                $user_id = Session::get('user_id');

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('create_paper.create_paper')->with('paper_type', 'Leaflet')->with('notifications', $notifications)->with('totalNotification', $totalNotification);
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

                $user_id = Session::get('user_id');

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('history.paper_history', ['papers' => $papers])->with('notifications', $notifications)->with('totalNotification', $totalNotification);
            }else if(strcmp(Session::get('role'), "Expert") == 0)
            {
                $papers = Paper::join('users', 'papers.user_id', '=', 'users.user_id')->where('expert_id', Session::get('expert_id'))->where('status', 'LIKE', 'Finished')->get();

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
                $user_id = Session::get('user_id');

                $notifications = Notification::join('papers', 'notifications.paper_id', '=', 'papers.paper_id')->
                                    join('users', 'papers.user_id', '=', 'users.user_id')->
                                    where('papers.user_id', '=', $user_id)->get();
                
                $totalNotification = count($notifications);

                return view('create_paper.choose_paper')->with('notifications', $notifications)->with('totalNotification', $totalNotification);
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function acceptOrder($id)
    {
        if(Session::get('username') != null)
        {
            if(strcmp(Session::get('role'), "Expert") == 0)
            {
                Paper::where('paper_id', '=', $id)->update([
                    'status' => 'Pending',
                    'expert_id' => Session::get('expert_id'),
                ]);
        
                Notification::create([
                    'paper_id' => $id, 
                    'message' => "Requested paper have been accepted", 
                ]);
            }

            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

    public function deletePaper($id)
    {
        Paper::where('paper_id', '=', $id)->delete();

        return redirect()->back(); 
    }

    public function updatePreview(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'preview' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        Paper::where('paper_id', '=', $id)->update([
           'preview' => $request->file('preview')->getClientOriginalName(),
        ]);

        $preview = $request->file('preview');

        $name = $request->file('preview')->getClientOriginalName();
        $preview->move(public_path("assets"), $name);

        return redirect()->back();
    }

    public function downloadAdditionalFile($file){
        $file = public_path('assets/').$file;

        return response()->download($file);
    }

    public function updateAdditionalFile(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:docx,pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        Paper::where('paper_id', '=', $id)->update([
           'file' => $request->file('file')->getClientOriginalName(),
        ]);

        $file = $request->file('file');

        $name = $request->file('file')->getClientOriginalName();
        $file->move(public_path("assets"), $name);

        return redirect()->back();
    }
}
