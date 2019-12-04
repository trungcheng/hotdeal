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
        $lvDautu = Category::find(12);
        $childs = Category::where('parent_id', $lvDautu->id)
            ->where('status', 1)
            ->orderBy('order', 'asc')
            ->get();
        $ttSukien = Category::find(16);
        $firstCate = Category::where('parent_id', $ttSukien->id)
            ->where('status', 1)
            ->where('order', 1)
            ->first();
        $hotNew = Article::where('cat_id', $firstCate->id)->where('status', 1)
            ->where('is_feature', 1)
            ->orderBy('id', 'desc')
            ->first();
        $listNews = Article::where('status', 1)->whereIn('cat_id', [13,14,15])
            ->where('id', '<>', $hotNew->id)
            ->with('category')
            ->get();

        return view('pages.user.home.index', [
            'lvDautu' => $lvDautu,
            'childs' => $childs,
            'ttSukien' => $ttSukien,
            'firstCate' => $firstCate,
            'hotNew' => $hotNew,
            'listNews' => $listNews
        ]);
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
            $childs = Category::where('parent_id', $category->id)->where('status', 1)->orderBy('order', 'asc');
            if ($childs->count() > 0) {
                $type = 'category';
                $articles = $childs->paginate(10);
            } else {
                $type = 'article';
                $articles = Article::where('cat_id', $category->id)->where('status', 1)->paginate(10);
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
        $article = Article::where('slug', $slug)->where('status', 1)->first();
        $parent = Category::where('slug', $parent)->where('status', 1)->first();
        if ($article && $parent) {
            $relatedArticles = Article::where('cat_id', $parent->id)
                ->where('id', '<>', $article->id)
                ->where('status', 1)
                ->get();
            $parentOfParent = Category::where('id', $parent->parent_id)->where('status', 1)->first();
            $childCates = Category::where('parent_id', $parentOfParent->id)
                ->where('status', 1)
                ->orderBy('order', 'asc')
                ->get();

            return view('pages.user.home.detail-article', [
                'article' => $article,
                'parent' => $parent,
                'relatedArticles' => $relatedArticles,
                'parentOfParent' => $parentOfParent,
                'childCates' => $childCates
            ]);
        }

        abort(404);
    }
}