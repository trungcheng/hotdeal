<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{

    protected $table = 'general';
   
    protected $fillable = [
        'email',
        'hotline',
        'address',
        'logo',
        'fb_pixel_code'
    ];

}