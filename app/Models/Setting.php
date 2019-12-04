<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'setting';
   
    protected $fillable = [
        'name',
        'slogan',
        'website',
        'email',
        'mobile',
        'fax',
        'address',
        'work_time',
        'logo',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

}