<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{

    protected $table = 'playlists';
   
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'image', 
        'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function mediaPlaylist() {
        return $this->hasMany('App\Models\mediaPlaylist', 'playlist_id', 'id');
    }

}