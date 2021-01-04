<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_comment', 'expert_comment', 'paper_id', 'comment'
    ];
}
