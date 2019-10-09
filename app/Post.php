<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'text',
        'user_id'
    ];
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

