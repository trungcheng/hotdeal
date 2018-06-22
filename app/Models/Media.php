<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    protected $table = 'media';
   
    protected $fillable = [
        'parent_id',
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

    public function ListMediaPlaylist() {
        return $this->hasMany('App\Models\ListMediaPlaylist', 'media_id', 'id');
    }

}