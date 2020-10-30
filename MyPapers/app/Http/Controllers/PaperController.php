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
            'file' => $request->file,
            'preview' => null,
            'user_id' => 1
        ]);

        return redirect('/paper')->with('status', 'Paper has been created!');
    }
}
