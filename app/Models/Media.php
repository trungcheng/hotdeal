<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    protected $table = 'medias';
   
    protected $fillable = [
        'cat_id',
        'user_id',
        'name',
        'description',
        'filename',
        'filesize',
        'filetype', 
        'file_srt',
        'source',
        'duration',
        'author',
        'singer',
        'image',
        'display',
        'ordering',
        'content',
        'type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function playlist() {
        return $this->belongsTo('App\Models\Playlist');
    }

    public function mediaPlaylist() {
        return $this->hasMany('App\Models\mediaPlaylist', 'media_id', 'id');
    }

}