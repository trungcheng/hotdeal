<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'setting';

    public $translatedAttributes = ['name', 'slogan', 'address'];
   
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
        'partner_logos',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

}