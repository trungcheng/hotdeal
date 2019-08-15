<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'setting';
   
    protected $fillable = [
        'name',
        'slogan',
        'email',
        'mobile',
        'address',
        'work_time',
        'logo'
    ];

}