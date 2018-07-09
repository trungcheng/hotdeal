<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaAlbum extends Model
{

    protected $table = 'media_album';
   
    protected $fillable = [
        'media_id',
        'album_id'
    ];

    public function album() {
        return $this->belongsTo('App\Models\Album');
    }

    public function media() {
        return $this->belongsTo('App\Models\Media');
    }

}