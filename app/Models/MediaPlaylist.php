<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaPlaylist extends Model
{

    protected $table = 'media_playlist';
   
    protected $fillable = [
        'media_id',
        'playlist_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function playlist() {
        return $this->belongsTo('App\Models\Playlist');
    }

    public function media() {
        return $this->belongsTo('App\Models\Media');
    }

}