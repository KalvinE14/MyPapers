<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function showAllPaperData()
    {
        $papers = Paper::all();
        return view('paper', ['papers' => $papers]);
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
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'requirement' => 'required',
            'description' => 'required',
            'file' => 'nullable',
        ]);

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

        $request->image->store('assets');

        return redirect('/papers')->with('status', 'Paper has been created!');
    }
}
