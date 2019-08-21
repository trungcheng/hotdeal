<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Round;
use App\Models\UserRound;
use App\Models\History;
use App\Util\Util;
use Response;
use Validator;

class StatisticalController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.statistical.index');
    }
    
}