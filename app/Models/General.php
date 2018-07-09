<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{

    protected $table = 'general';
   
    protected $fillable = [
        'name',
        'introduce',
        'mobile',
        'fax',
        'address',
        'work_time',
        'email',
        'logo',
        'recruitment',
        'policy',
        'term_of_use'
    ];

}