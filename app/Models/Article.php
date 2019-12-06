<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Article extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'articles';

    public $translatedAttributes = ['title', 'intro', 'fulltext'];

    protected $fillable = [
        'user_id', 
        'cat_id',
        'title',
        'slug',
        'intro',
        'fulltext',
        'image',
        'photos',
        'video',
        'is_about',
        'is_feature',
        'status',
        'type',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function category() {
    	return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public static $rules = [
        'title' => 'required|min:2',
        'image' => 'required',
        'intro' => 'required',
        'fulltext' => 'required'
    ];

    public static $add_media_rules = [
        'title' => 'required|min:2',
        'image' => 'required'
    ];

    public static $messages = [
        'title.required' => 'Tiêu đề không được để trống',
        'title.min' => 'Tiêu đề ít nhất từ 2 ký tự',
        'image.required' => 'Ảnh không được để trống',
        'intro.required' => 'Mô tả ngắn không được để trống',
        'fulltext.required' => 'Nội dung không được để trống',
    ];

    public static $add_media_messages = [
        'title.required' => 'Tiêu đề không được để trống',
        'title.min' => 'Tiêu đề ít nhất từ 2 ký tự',
        'image.required' => 'Ảnh không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0)->where('type', 'article');
        if ($request->name !== 'all-article' && $request->name !== 'undefined') {
            $data->where("title", "LIKE", "%" . $request->name . "%")
                ->orWhere("intro", "LIKE", "%" . $request->name . "%");
        }
        $data = $data->with(['category', 'user'])->orderBy('id', 'desc')->get();
        
        return $data;
    }

    public static function addAction($data, $type = NULL)
    {
        $data['slug'] = Util::generateSlug($data['title']);

        $article = new Article();
        foreach (\Config::get('translatable.locales') as $locale) {
            if (isset($data['title'])) {
                $article->translateOrNew($locale)->title = ($locale == 'vi') ? $data['title'] : $data[$locale.'_title'];
            }
            if (isset($data['intro'])) {
                $article->translateOrNew($locale)->intro = ($locale == 'vi') ? $data['intro'] : $data[$locale.'_intro'];
            }
            if (isset($data['fulltext'])) {
                $article->translateOrNew($locale)->fulltext = ($locale == 'vi') ? $data['fulltext'] : $data[$locale.'_fulltext'];
            }
        }

        if (isset($data['ko_title'])) unset($data['ko_title']);
        if (isset($data['ko_intro'])) unset($data['ko_intro']);
        if (isset($data['ko_fulltext'])) unset($data['ko_fulltext']);

        
        $data['type'] = $type;

        foreach ($data as $key => $value) {
            if ($key == 'photos' && count($value) > 0) {
                $value = implode(',', array_filter($value, function ($val) { 
                    return !is_null($val) && $val != '';
                }));
            }
            $article[$key] = $value;
        }

        return $article->save();
    }
    
    public static function updateAction($data, $article, $type = NULL)
    {
        $data['slug'] = Util::generateSlug($data['title']);

        foreach (\Config::get('translatable.locales') as $locale) {
            if (isset($data['title'])) {
                $article->translateOrNew($locale)->title = ($locale == 'vi') ? $data['title'] : $data[$locale.'_title'];
            }
            if (isset($data['intro'])) {
                $article->translateOrNew($locale)->intro = ($locale == 'vi') ? $data['intro'] : $data[$locale.'_intro'];
            }
            if (isset($data['fulltext'])) {
                $article->translateOrNew($locale)->fulltext = ($locale == 'vi') ? $data['fulltext'] : $data[$locale.'_fulltext'];
            }
        }

        if (isset($data['ko_title'])) unset($data['ko_title']);
        if (isset($data['ko_intro'])) unset($data['ko_intro']);
        if (isset($data['ko_fulltext'])) unset($data['ko_fulltext']);

        $data['type'] = $type;

        foreach ($data as $key => $value) {
            if ($key == 'photos' && count($value) > 0) {
                $value = implode(',', array_filter($value, function ($val) { 
                    return !is_null($val) && $val != '';
                }));
            }
            $article[$key] = $value;
        }

        return $article->save();
    }
}