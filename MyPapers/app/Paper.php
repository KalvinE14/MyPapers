<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'title', 'type', 'requirement', 'description', 
        'status', 'file', 'preview', 'user_id'
    ];
}
