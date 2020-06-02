<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'pic1', 'pic2', 'pic3', 'pic4', 'pic5'
    ];
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
