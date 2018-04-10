<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Response;

class CategoryController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.category.index');
    }

    public function getAllCategories(Request $request)
    {
    	$categories = Category::all();

        if (!empty($categories)) {
            $results = Category::init($request);
            foreach ($results as $result) {
                if ($result->parent_id !== 0) {
                    $result['parent'] = Category::find($result->parent_id)->name;
                }
            }
            
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }
}