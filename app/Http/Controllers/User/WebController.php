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
        $cateTypes = Category::where('is_home', 1)
            ->where('parent_id', 0)
            ->whereNotIn('id', [19,20])
            ->where('status', 1)
            ->orderBy('order', 'desc')
            ->get();

        foreach ($cateTypes as $cate) {
            $cate['childCates'] = Category::where('parent_id', $cate->id)
                ->where('is_home', 1)
                ->where('status', 1)
                ->orderBy('order', 'asc')
                ->get();

            if ($cate->layout == 2) {
                $ids = [];
                foreach ($cate['childCates'] as $child) {
                    $ids[] = $child->id;
                }

                if (!empty($ids)) {
                    $cate['hotNew'] = Article::whereIn('cat_id', $ids)
                        ->where('status', 1)
                        ->where('is_feature', 1)
                        ->orderBy('id', 'desc')
                        ->first();
                    if ($cate['hotNew']) {
                        $cate['firstCate'] = Category::where('id', $cate['hotNew']->cat_id)
                            ->where('status', 1)
                            ->where('is_home', 1)
                            ->first();
                        $cate['listNews'] = Article::where('status', 1)
                            ->whereIn('cat_id', $ids)
                            ->where('id', '<>', $cate['hotNew']->id)
                            ->orderBy('id', 'desc')
                            ->with('category')
                            ->get();
                    }
                } else {
                    $cate['hotNew'] = Article::where('cat_id', $cate->id)
                        ->where('status', 1)
                        ->where('is_feature', 1)
                        ->orderBy('id', 'desc')
                        ->first();
                    if ($cate['hotNew']) {
                        $cate['firstCate'] = $cate;
                        $cate['listNews'] = Article::where('status', 1)
                            ->where('cat_id', $cate->id)
                            ->where('id', '<>', $cate['hotNew']->id)
                            ->orderBy('id', 'desc')
                            ->with('category')
                            ->get();
                    }
                }
            }
        }

        $tvHinhanh = Category::where('id', 19)->where('status', 1)->where('is_home', 1)->first();
        $video = Category::where('id', 20)->where('status', 1)->where('is_home', 1)->first();

        $slides = Article::where('type', 'slide')
            ->where('status', 1)
            ->get();

        $sloganSlides = Article::where('type', 'slogan-slide')
            ->where('status', 1)
            ->get();

        return view('pages.user.home.index', [
            'cateTypes' => $cateTypes,
            'tvHinhanh' => $tvHinhanh,
            'video' => $video,
            'slides' => $slides,
            'sloganSlides' => $sloganSlides
        ]);
    }

    public function navigate(Request $request)
    {
    	return redirect('/admin/access/login');
    }

    public function changeLocale(Request $request, $locale)
    {
        \Session::put('locale', $locale);

        return redirect()->back();
    }

    public function contact()
    {
        return view('pages.user.home.contact', []);
    }

    public function processPageLevelOne(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            if ($category->parent_id != 0) {
                $parentCate = Category::where('id', $category->parent_id)->where('status', 1)->first();
                $childCates = Category::where('parent_id', $parentCate->id)
                    ->where('status', 1)
                    ->orderBy('order', 'asc')
                    ->get();
                if ($childCates) {
                    $buildCates = Category::where('status', 1)->orderBy('order', 'asc')->get();
                    $childCates = Util::buildTree($buildCates, $parentCate->id);
                }
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
                'parentCate' => isset($parentCate) ? $parentCate : null,
                'childCates' => isset($childCates) ? $childCates : null,
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
            if ($parentOfParent) {
                $childCates = Category::where('parent_id', $parentOfParent->id)
                    ->where('status', 1)
                    ->orderBy('order', 'asc')
                    ->get();
            }

            return view('pages.user.home.detail-article', [
                'article' => $article,
                'parent' => $parent,
                'relatedArticles' => $relatedArticles,
                'parentOfParent' => $parentOfParent,
                'childCates' => isset($childCates) ? $childCates : null
            ]);
        }

        abort(404);
    }
}