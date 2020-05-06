<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
    	'name',
    	'title',
    	'route',
    	'content',
        'seo_title',
        'seo_desc',
        'seo_keyword',
        'seo_content',
        'seo_schema'
    ];

}
