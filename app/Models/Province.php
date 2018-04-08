<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'name', 
        'slug'
    ];

    public function provinceCity() {
    	return $this->hasMany('App\Models\ProvinceCity');
    }

}
