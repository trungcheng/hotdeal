<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
   
    protected $fillable = [
        'cat_id',
        'user_id',
        'title',
        'slug',
        'image',
        'author',
        'intro',
        'content',
        'tags',
        'status',
        'type'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}