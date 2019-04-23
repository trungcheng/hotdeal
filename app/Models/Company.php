<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = [
        'logo',
        'name',
        'address',
        'phone',
        'email',
        'time_work',
        'fb_pixel_code'
    ];

}
