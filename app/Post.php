<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'picURL_1', 'picURL_2', 'picURL_3', 'picURL_4', 'picURL_5'
    ];
}
