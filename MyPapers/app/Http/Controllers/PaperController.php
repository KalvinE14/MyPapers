<?php

namespace App\Http\Controllers;

use App\Paper;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class PaperController extends Controller
{
    public function showAllPaperData()
    {
        $papers = Paper::all();
        return view('paper', ['papers' => $papers]);
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

    public function insertPaperData()
    {
        return view('create_paper');
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
            return view('create_paper')->withErrors($validator->errors());
        }

        Paper::create([
            'title' => $request->title,
            'type' => $request->type,
            'requirement' => $request->requirement,
            'description' => $request->description,
            'status' => "Pending",
            'file' => $request->file('image')->getClientOriginalName(),
            'preview' => null,
            'user_id' => 1
        ]);
        
        $image = $request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        
        $image->move(public_path("assets"), $name);

        return redirect('/papers')->with('status', 'Paper has been created!');
    }

    public function downloadPaper($preview){
        $file = public_path('assets/').$preview;

        return response()->download($file);
    }
}
