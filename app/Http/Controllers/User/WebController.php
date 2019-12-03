<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Util\Util;

class WebController extends Controller
{
	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.home.index', []);
    }

    public function navigate(Request $request)
    {
    	return redirect('/admin/access/login');
    }

    public function contact()
    {
        return view('pages.user.home.contact', []);
    }

    public function processPage(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $parentCate = Category::where('id', $category->parent_id)->where('status', 1)->first();
            $childCates = Category::where('parent_id', $parentCate->id)
                ->where('status', 1)
                ->orderBy('order', 'asc')
                ->get();
            if ($childCates) {
                dd($childCates);
                $hi = Util::buildTree($childCates);
                dd($hi);
            }

            return view('pages.user.home.detail', [
                'category' => $category,
                'parentCate' => $parentCate,
                'childCates' => $childCates
            ]);
        }

        abort(404);
    }
}