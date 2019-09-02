<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    protected $table = 'history';

    protected $cats = [
        'round_id' => 'integer',
        'user_vote' => 'integer',
        'vote_for' => 'integer',
        'vote_count' => 'integer'
    ];
   
    protected $fillable = [
        'round_id',
        'user_vote',
        'vote_for',
        'vote_count'
    ];

    public function round() {
        return $this->belongsTo('App\Models\Round', 'round_id', 'id');
    }

    public function member() {
        return $this->belongsTo('App\Models\User', 'vote_for', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_vote', 'id');
    }

    public static function init($request)
    {
        $data = self::whereHas('member', function ($query) use ($request) {
            if ($request->name !== 'all-member' && $request->name !== 'undefined') {
                $query->where('full_name', 'LIKE', '%' . $request->name . '%');
            }
        })->groupBy('round_id', 'vote_for')
          ->selectRaw('round_id, vote_for, sum(vote_count) as totalVote')
          ->with(['member.category', 'round'])
          ->get();

        return $data;
    }

    public static function initDetail($request)
    {
        $data = self::where('round_id', $request->roundId)
            ->where('vote_for', $request->memId)
            ->whereHas('user', function ($query) use ($request) {
                if ($request->name !== 'all-user' && $request->name !== 'undefined') {
                    $query->where('username', 'LIKE', '%' . $request->name . '%');
                }
            })->with('user')->get();

        return $data;
    }

}