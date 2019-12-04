<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
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

    public function processPageLevelOne(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $parentCate = Category::where('id', $category->parent_id)->where('status', 1)->first();
            $childCates = Category::where('parent_id', $parentCate->id)
                ->where('status', 1)
                ->orderBy('order', 'asc')
                ->get();
            if ($childCates) {
                $buildCates = Category::where('status', 1)->orderBy('order', 'asc')->get();
                $childCates = Util::buildTree($buildCates, $parentCate->id);
            }
            $childs = Category::where('parent_id', $category->id)->where('status', 1);
            if ($childs->get()) {
                $type = 'category';
                $articles = $childs->paginate(12);
            } else {
                $type = 'article';
                $articles = Article::where('cat_id', $category->id)->where('status', 1)->paginate(12);
            }

            return view('pages.user.home.detail', [
                'category' => $category,
                'parentCate' => $parentCate,
                'childCates' => $childCates,
                'articles' => $articles,
                'type' => $type
            ]);
        }

        abort(404);
    }

    public function processPageLevelTwo(Request $request, $parent, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $parentCate = Category::where('id', $category->parent_id)->where('status', 1)->first();
            $childCates = Category::where('parent_id', $parentCate->id)
                ->where('status', 1)
                ->orderBy('order', 'asc')
                ->get();
            if ($childCates) {
                $buildCates = Category::where('status', 1)->orderBy('order', 'asc')->get();
                $childCates = Util::buildTree($buildCates, $parentCate->id);
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