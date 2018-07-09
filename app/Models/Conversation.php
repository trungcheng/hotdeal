<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

    protected $table = 'conversations';
   
    protected $fillable = [
        'cat_id',
        'user_id',
        'question',
        'answer'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}