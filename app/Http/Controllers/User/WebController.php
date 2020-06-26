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
        // $slides = Article::where('type', 'slide')
        //     ->where('status', 1)
        //     ->get();
        $projects = [];
        $catProject = Category::where('slug', 'projects')->first();
        if ($catProject) {
            $projects = Article::where('cat_id', $catProject->id)
                ->orderBy('id', 'desc')
                ->get();
        }

        $featureEvent = null;
        $catEvent = Category::where('slug', 'events')->first();
        if ($catEvent) {
            $featureEvent = Article::where('is_feature', 1)
                ->where('cat_id', $catEvent->id)
                ->orderBy('id', 'desc')
                ->first();
        }

        $news = [];
        $catNew = Category::where('slug', 'news')->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $news = Article::whereIn('cat_id', $arrIds)
                ->orderBy('id', 'desc')
                ->limit(7)
                ->get();
        }

        return view('pages.user.home.index', [
            // 'slides' => $slides,
            'projects' => $projects,
            'featureEvent' => $featureEvent,
            'news' => $news
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

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $cates = Category::where('parent_id', 0)->where('status', 1)->get();

        $articles = Article::whereHas('translations', function ($query) use ($keyword) {
            $query->where('locale', \App::getLocale())
                  ->where(function ($q) use ($keyword) {
                        $q->where('title', 'LIKE', '%'.$keyword.'%')
                          ->orWhere('intro', 'LIKE', '%'.$keyword.'%');
                  });
        })->where('type', 'article')
          ->where('status', 1)
          ->orderBy('id', 'desc')
          ->paginate(10);

        return view('pages.user.home.search', [
            'keyword' => $keyword,
            'articles' => $articles,
            'cates' => $cates
        ]);
    }

    public function about()
    {
        $article = Article::where('slug', 'about')->where('type', 'page')->first();
        if ($article) {
            return view('pages.user.home.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function contact()
    {
        return view('pages.user.home.contact', []);
    }

    public function newsEvents()
    {
        $highlightNews = [];
        $recentlyNews = [];
        $catNew = Category::where('slug', 'news')->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $highlightNews = Article::whereIn('cat_id', $arrIds)
                ->where('is_feature', 1)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

            $recentlyNews = Article::whereIn('cat_id', $arrIds)
                ->where('is_feature', 0)
                ->orderBy('id', 'desc')
                ->limit(6)
                ->get();

            $explorerTopics = $newChilds;
        }

        $events = [];
        $catEvent = Category::where('slug', 'events')->first();
        if ($catEvent) {
            $events = Article::where('cat_id', $catEvent->id)
                ->orderBy('id', 'desc')
                ->limit(3)
                ->get();
        }

        return view('pages.user.home.news-events', [
            'highlightNews' => $highlightNews,
            'recentlyNews' => $recentlyNews,
            'explorerTopics' => $explorerTopics,
            'events' => $events
        ]);
    }

    public function news()
    {
        return view('pages.user.home.news', []);
    }

    public function newsletter()
    {
        return view('pages.user.home.newsletter', []);
    }

    public function comingEvents()
    {
        return view('pages.user.home.coming-events', []);
    }

    public function pastEvents()
    {
        return view('pages.user.home.past-events', []);
    }

    public function projects()
    {
        return view('pages.user.home.projects', []);
    }

    public function partners()
    {
        return view('pages.user.home.partners', []);
    }

    public function mediaPress()
    {
        return view('pages.user.home.media-press', []);
    }

    public function termsPolicies()
    {
        $article = Article::where('slug', 'term-policy')->where('type', 'page')->first();
        if ($article) {
            return view('pages.user.home.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function faqs()
    {
        $article = Article::where('slug', 'faqs')->where('type', 'page')->first();
        if ($article) {
            return view('pages.user.home.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function detailPost(Request $request, $slug)
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

            return view('pages.user.home.detail-post', [
                'category' => $category,
                'parentCate' => isset($parentCate) ? $parentCate : null,
                'childCates' => isset($childCates) ? $childCates : null,
                'articles' => $articles,
                'type' => $type
            ]);
        }

        abort(404);
    }

    public function detailEvent(Request $request, $slug)
    {

    }
}