<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';

    protected $fillable = [
        'logo',
        'name',
        'address',
        'phone',
        'email',
        'time_work',
        'fb_pixel_code',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

}
