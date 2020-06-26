<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Response;
use Validator;

class ArticleController extends Controller
{
    public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.article.index');
    }

    public function getAllArticles(Request $request)
    {
        $results = Article::init($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.article.add');
    }

    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.admin.article.edit', ['article' => $article]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$rules, Article::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Article::addAction($data);

                return Response::json([
                    'status' => true,
                    'message' => 'Thêm bài viết thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Đã xảy ra lỗi', 
                'type' => 'error'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$rules, Article::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $article = Article::find($data['id']);
                if ($article) {
                    Article::updateAction($data, $article, $data['type']);
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật bài viết thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy bài viết', 
                        'type' => 'error'
                    ]);
                }
            }
            return Response::json([
                'status' => false,
                'message' => 'Đã xảy ra lỗi', 
                'type' => 'error'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }
    
    public function delete(Request $request)
    {
        $articleId = $request->articleId;
        if ($articleId && !is_null($articleId)) {
            $article = Article::find($articleId);
            if ($article) {
                $article->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa bài viết thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy bài viết', 
                'type' => 'error'
            ]);
        }
        
        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }
}