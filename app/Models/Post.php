<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Input;
use Str;
class Post extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
}
