<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    protected $table = 'history';
   
    protected $fillable = [
        'round_id',
        'user_vote',
        'vote_for',
        'vote_count'
    ];

    public function round() {
        return $this->belongsTo('App\Models\Round', 'round_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'vote_for', 'id');
    }

}