<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['title', 'intro', 'fulltext'];
}