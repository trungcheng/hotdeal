<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRound extends Model
{

    protected $table = 'user_round';
   
    protected $fillable = [
        'user_id',
        'round_id',
        'vote',
        'is_selected'
    ];

    public function round() {
        return $this->belongsTo('App\Models\Round', 'round_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}