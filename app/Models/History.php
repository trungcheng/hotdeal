<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    protected $table = 'history';
   
    protected $fillable = [
        'round_id',
        'user_vote',
        'vote_for',
        'vote_count'
    ];

    public function round() {
        return $this->belongsTo('App\Models\Round', 'round_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'vote_for', 'id');
    }

    public static function init($request)
    {
        $data = self::whereHas('user', function ($query) use ($request) {
            if ($request->name !== 'all-member' && $request->name !== 'undefined') {
                $query->where('full_name', 'LIKE', '%' . $request->name . '%');
            }
        })->groupBy('round_id', 'vote_for')
          ->selectRaw('round_id, vote_for, sum(vote_count) as totalVote')
          ->with(['user', 'round'])
          ->get();

        return $data;
    }

}