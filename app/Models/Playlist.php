<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{

    protected $table = 'playlist';
   
    protected $fillable = [
        'user_id',
        'title',
        'image', 
        'description',
        'type',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function ListMediaPlaylist() {
        return $this->hasMany('App\Models\ListMediaPlaylist', 'playlist_id', 'id');
    }

}