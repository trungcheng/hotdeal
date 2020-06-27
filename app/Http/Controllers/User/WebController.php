<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Util\Util;
use Carbon\Carbon;

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
        $catProject = Category::where('slug', 'projects')->where('status', 1)->first();
        if ($catProject) {
            $projects = Article::where('cat_id', $catProject->id)
                ->orderBy('id', 'desc')
                ->where('status', 1)
                ->get();
        }

        $featureEvent = null;
        $catEvent = Category::where('slug', 'events')->where('status', 1)->first();
        if ($catEvent) {
            $featureEvent = Article::where('is_feature', 1)
                ->where('cat_id', $catEvent->id)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->first();
        }

        $news = [];
        $catNew = Category::where('slug', 'news')->where('status', 1)->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->where('status', 1)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $arrIds[] = $catNew->id;
            $news = Article::whereIn('cat_id', $arrIds)
                ->orderBy('id', 'desc')
                ->where('status', 1)
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

        $articles = Article::whereHas('translations', function ($query) use ($keyword) {
            $query->where('locale', \App::getLocale())
                  ->where(function ($q) use ($keyword) {
                        $q->where('title', 'LIKE', '%'.$keyword.'%')
                          ->orWhere('intro', 'LIKE', '%'.$keyword.'%');
                  });
        })->where('type', '<>', 'page')
          ->where('status', 1)
          ->orderBy('id', 'desc')
          ->paginate(10);

        return view('pages.user.home.search', [
            'keyword' => $keyword,
            'articles' => $articles
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
        $catNew = Category::where('slug', 'news')->where('status', 1)->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->where('status', 1)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $arrIds[] = $catNew->id;
            $highlightNews = Article::whereIn('cat_id', $arrIds)
                ->where('is_feature', 1)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

            $recentlyNews = Article::whereIn('cat_id', $arrIds)
                ->where('created_at', '>=', Carbon::today()->subDays(7))
                ->where('status', 1)
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
                ->where('status', 1)
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
        $news = [];
        $catNew = Category::where('slug', 'news')->where('status', 1)->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->where('status', 1)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $arrIds[] = $catNew->id;

            $news = Article::whereIn('cat_id', $arrIds)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }

        return view('pages.user.home.news', [
            'news' => $news,
            'catNew' => $catNew,
            'explorerTopics' => $newChilds
        ]);
    }

    public function newsletter()
    {
        $newsletters = [];
        $catNew = Category::where('slug', 'news')->where('status', 1)->first();
        if ($catNew) {
            $arrIds = [];
            $newChilds = Category::where('parent_id', $catNew->id)->where('status', 1)->get();
            foreach ($newChilds as $child) {
                $arrIds[] = $child->id;
            }
            $arrIds[] = $catNew->id;

            $newsletters = Article::whereIn('cat_id', $arrIds)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }

        return view('pages.user.home.newsletter', [
            'newsletters' => $newsletters,
            'catNew' => $catNew
        ]);
    }

    public function comingEvents()
    {
        $events = [];
        $catEvent = Category::where('slug', 'events')->where('status', 1)->first();
        if ($catEvent) {
            $events = Article::where('cat_id', $catEvent->id)
                ->where('status', 1)
                ->whereDate('event_date_from', '>=', Carbon::now())
                ->orderBy('id', 'desc')
                ->get();
        }

        return view('pages.user.home.coming-events', [
            'events' => $events
        ]);
    }

    public function pastEvents()
    {
        $events = [];
        $catEvent = Category::where('slug', 'events')->where('status', 1)->first();
        if ($catEvent) {
            $events = Article::where('cat_id', $catEvent->id)
                ->where('status', 1)
                ->whereDate('event_date_from', '<', Carbon::now())
                ->orderBy('id', 'desc')
                ->paginate(10);
        }

        return view('pages.user.home.past-events', [
            'events' => $events
        ]);
    }

    public function projects()
    {
        $projects = [];
        $catProject = Category::where('slug', 'projects')->where('status', 1)->first();
        if ($catProject) {
            $recentlyProjects = Article::where('cat_id', $catProject->id)
                ->where('created_at', '>=', Carbon::today()->subDays(7))
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

            $projects = Article::where('cat_id', $catProject->id)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->get();
        }

        return view('pages.user.home.projects', [
            'projects' => $projects,
            'recentlyProjects' => $recentlyProjects
        ]);
    }

    public function partners()
    {
        return view('pages.user.home.partners', []);
    }

    public function mediaPress()
    {
        $medias = [];
        $catMediaPress = Category::where('slug', 'media-press')->where('status', 1)->first();
        if ($catMediaPress) {
            $medias = Article::where('cat_id', $catMediaPress->id)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->get();
        }

        return view('pages.user.home.media-press', [
            'medias' => $medias
        ]);
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
        $article = Article::where('slug', $slug)
            ->where('type', 'new')
            ->where('status', 1)
            ->first();

        if ($article) {
            $relatedNews = [];
            $catNew = Category::where('slug', 'news')->where('status', 1)->first();
            if ($catNew) {
                $arrIds = [];
                $newChilds = Category::where('parent_id', $catNew->id)->get();
                foreach ($newChilds as $child) {
                    $arrIds[] = $child->id;
                }
                $arrIds[] = $catNew->id;
                $relatedNews = Article::whereIn('cat_id', $arrIds)
                    ->where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get()
                    ->except($article->id);
            }

            return view('pages.user.home.detail-post', [
                'article' => $article,
                'relatedNews' => $relatedNews
            ]);
        }

        abort(404);
    }

    public function detailEvent(Request $request, $slug)
    {
        $event = Article::where('slug', $slug)
            ->where('type', 'event')
            ->where('status', 1)
            ->first();

        if ($event) {
            return view('pages.user.home.detail-event', [
                'event' => $event
            ]);
        }

        abort(404);
    }
}