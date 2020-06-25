<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Response;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function getPage(Request $request, $page)
    {
        $info = Article::where('slug', $page)->first();
        if ($info) {
            return view('pages.admin.page.index', [
                'info' => $info
            ]);
        }

        abort(404);
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);

            if (isset($data['title']) && in_array($data['title'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['title'] = '';
            }
            if (isset($data['vi_title']) && in_array($data['vi_title'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['vi_title'] = '';
            }
            if (isset($data['fulltext']) && in_array($data['fulltext'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['fulltext'] = '';
            }
            if (isset($data['vi_fulltext']) && in_array($data['vi_fulltext'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['vi_fulltext'] = '';
            }
            
            $article = Article::find($data['id']);
            Article::updateAction($data, $article, 'page');
            
            return Response::json([
                'status' => true,
                'message' => 'Cập nhật thành công'
            ]);
        } catch (\Exception $e) {
            return Response::json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

}