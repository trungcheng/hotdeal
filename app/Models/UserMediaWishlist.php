<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMediaWishlist extends Model
{

    protected $table = 'posts';
   
    protected $fillable = [
        'user_id',
        'media_id'
    ];

    public function media() {
        return $this->belongsTo('App\Models\Media');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}