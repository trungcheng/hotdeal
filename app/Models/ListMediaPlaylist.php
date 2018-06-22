<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListMediaPlaylist extends Model
{

    protected $table = 'list_playlist_media';
   
    protected $fillable = [
        'media_id',
        'playlist_id',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function playlist() {
        return $this->belongsTo('App\Models\Playlist');
    }

    public function orderDetail() {
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

}