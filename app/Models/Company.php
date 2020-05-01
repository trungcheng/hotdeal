<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = [
        'logo',
        'name',
        'slogan',
        'address',
        'phone',
        'email',
        'time_work',
        'google_map_url',
        'fb_pixel_code',
        'facebook_url',
        'twitter_url',
        'youtube_url',
        'google_url',
        'instagram_url',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

}
