<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function createComment(Request $request, $paper_id)
    {
        $role = Session::get('role');
        if(strcmp($role, "User") == 0)
        {
            Comment::create([
                'user_comment' => true,
                'expert_comment' => false,
                'paper_id' => $paper_id,
                'comment' => $request->comment,
            ]);
        }else if(strcmp($role, 'Expert') == 0)
        {
            Comment::create([
                'user_comment' => false,
                'expert_comment' => true,
                'paper_id' => $paper_id,
                'comment' => $request->comment,
            ]);
        }

        return redirect()->back();
    }
}
