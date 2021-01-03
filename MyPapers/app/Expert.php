<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = [
        'name', 'username', 'password', 'address', 'dob', 'gender'
    ];
}
