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
        $papers = new Paper;
        $papers->title = $request->title;
        $papers->type = $request->type;
        $papers->requirement = $request->requirement;
        $papers->description = $request->description;
        $papers->status = $request->status;
        $papers->file = $request->file;
        $papers->preview = $request->file;
        $papers->user_id = 1;

        $papers->save();

        return redirect('/paper');
    }
}
