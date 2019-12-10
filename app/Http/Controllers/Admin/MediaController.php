<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use Response;

class MediaController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    // ************************************* PHOTO **************************************** //

    public function photos()
    {
        return view('pages.admin.media.photo.index', []);
    }

    public function getAllPhotos(Request $request)
    {
        $results = Article::where('id', '>', 0)->where('cat_id', 19)->where('status', 1);
        if ($request->name !== 'all-photo' && $request->name !== 'undefined') {
            $results->where("title", "LIKE", "%" . $request->name . "%");
        }
        $results = $results->with(['category', 'user'])->orderBy('id', 'desc')->get();
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function createPhoto(Request $request)
    {
        return view('pages.admin.media.photo.add');
    }

    public function editPhoto(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.admin.media.photo.edit', ['article' => $article]);
        }

        abort(404);
    }

    public function addPhoto(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    'message' => 'Thêm album thành công', 
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

    public function updatePhoto(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    // if ($data['is_about'] == 1) {
                    //     Article::where('id', '>', 0)->update(['is_about' => 0]);
                    // }
                    Article::updateAction($data, $article);
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật album thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy album', 
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
    
    public function deletePhoto(Request $request)
    {
        $articleId = $request->articleId;
        if ($articleId && !is_null($articleId)) {
            $article = Article::find($articleId);
            if ($article) {
                $article->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa album thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy album', 
                'type' => 'error'
            ]);
        }
        
        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }






    // ************************************* VIDEO **************************************** //

    public function videos()
    {
        return view('pages.admin.media.video.index', []);
    }

    public function getAllVideos(Request $request)
    {
        $results = Article::where('id', '>', 0)->where('cat_id', 20)->where('status', 1);
        if ($request->name !== 'all-video' && $request->name !== 'undefined') {
            $results->where("title", "LIKE", "%" . $request->name . "%");
        }
        $results = $results->with(['category', 'user'])->orderBy('id', 'desc')->get();
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function createVideo(Request $request)
    {
        return view('pages.admin.media.video.add');
    }

    public function editVideo(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.admin.media.video.edit', ['article' => $article]);
        }

        abort(404);
    }

    public function addVideo(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    'message' => 'Thêm video thành công', 
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

    public function updateVideo(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    // if ($data['is_about'] == 1) {
                    //     Article::where('id', '>', 0)->update(['is_about' => 0]);
                    // }
                    Article::updateAction($data, $article);
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật video thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy video', 
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
    
    public function deleteVideo(Request $request)
    {
        $articleId = $request->articleId;
        if ($articleId && !is_null($articleId)) {
            $article = Article::find($articleId);
            if ($article) {
                $article->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa video thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy video', 
                'type' => 'error'
            ]);
        }
        
        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }







    // ************************************* SLIDE **************************************** //

    public function slides()
    {
        return view('pages.admin.media.slide.index', []);
    }

    public function getAllSlides(Request $request)
    {
        $results = Article::where('id', '>', 0)->where('type', 'slide')->where('status', 1);
        if ($request->name !== 'all-slide' && $request->name !== 'undefined') {
            $results->where("title", "LIKE", "%" . $request->name . "%");
        }
        $results = $results->orderBy('id', 'desc')->get();
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function createSlide(Request $request)
    {
        return view('pages.admin.media.slide.add');
    }

    public function editSlide(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.admin.media.slide.edit', ['article' => $article]);
        }

        abort(404);
    }

    public function addSlide(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Article::addAction($data, 'slide');

                return Response::json([
                    'status' => true,
                    'message' => 'Thêm slide thành công', 
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

    public function updateSlide(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    Article::updateAction($data, $article, 'slide');
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật slide thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy slide', 
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
    
    public function deleteSlide(Request $request)
    {
        $articleId = $request->articleId;
        if ($articleId && !is_null($articleId)) {
            $article = Article::find($articleId);
            if ($article) {
                $article->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa slide thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy slide', 
                'type' => 'error'
            ]);
        }
        
        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }






    // ************************************* SLOGAN SLIDE **************************************** //

    public function sloganSlides()
    {
        return view('pages.admin.media.slogan-slide.index', []);
    }

    public function getAllSloganSlides(Request $request)
    {
        $results = Article::where('id', '>', 0)->where('type', 'slogan-slide')->where('status', 1);
        if ($request->name !== 'all-slogan-slide' && $request->name !== 'undefined') {
            $results->where("title", "LIKE", "%" . $request->name . "%");
        }
        $results = $results->orderBy('id', 'desc')->get();
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function createSloganSlide(Request $request)
    {
        return view('pages.admin.media.slogan-slide.add');
    }

    public function editSloganSlide(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.admin.media.slogan-slide.edit', ['article' => $article]);
        }

        abort(404);
    }

    public function addSloganSlide(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Article::addAction($data, 'slogan-slide');

                return Response::json([
                    'status' => true,
                    'message' => 'Thêm slide thành công', 
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

    public function updateSloganSlide(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Article::$add_media_rules, Article::$add_media_messages);
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
                    Article::updateAction($data, $article, 'slogan-slide');
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật slide thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy slide', 
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
    
    public function deleteSloganSlide(Request $request)
    {
        $articleId = $request->articleId;
        if ($articleId && !is_null($articleId)) {
            $article = Article::find($articleId);
            if ($article) {
                $article->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa slide thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy slide', 
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