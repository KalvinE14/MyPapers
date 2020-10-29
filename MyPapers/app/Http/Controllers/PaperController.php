<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function showPaperData()
    {
        $papers = Paper::all();
        return view('paper', ['papers' => $papers]);
    }
}
