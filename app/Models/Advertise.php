<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'advertises';

    protected $fillable = [
        'name', 
        'url',
        'width',
        'height',
        'link',
        'position',
        'order',
        'status'
    ];
}
