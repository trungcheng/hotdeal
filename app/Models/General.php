<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{

    protected $table = 'general';
   
    protected $fillable = [
        'intro',
        'policy_delivery',
        'policy_payment',
        'policy_security',
        'shopping_guide',
        'term_of_use',
        'recruitment',
        'sale_new'
    ];

}