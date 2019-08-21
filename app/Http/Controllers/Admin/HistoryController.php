<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Round;
use App\Models\User;
use Response;

class HistoryController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.history.index');
    }

    public function getAllHistories(Request $request)
    {
        $results = History::init($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function getAllDetailHistories(Request $request)
    {
        $results = History::initDetail($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function viewDetail(Request $request, $roundId, $memId)
    {
        $history = History::where('round_id', $roundId)
            ->where('vote_for', $memId)->first();
        $round = Round::find($roundId);
        $mem = User::find($memId);
        if ($history && $round && $mem) {
            return view('pages.admin.history.view', [
                'round' => $round,
                'mem' => $mem
            ]);
        }

        abort(404);
    }

}