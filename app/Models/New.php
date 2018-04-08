<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_id', 
        'cat_id',
        'title',
        'slug',
        'intro',
        'fulltext',
        'image',
        'tags',
        'status'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function category() {
    	return $this->belongsTo('App\Models\Category');
    }

}
