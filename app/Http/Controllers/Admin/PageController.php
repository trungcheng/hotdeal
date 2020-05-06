<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Response;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function getPage(Request $request, $page)
    {
        $info = Page::where('route', $page)->first();
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

            if (isset($data['content']) && in_array($data['content'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['content'] = '';
            }

            if (isset($data['seo_content']) && in_array($data['seo_content'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['seo_content'] = '';
            }

            if (isset($data['seo_schema']) && in_array($data['seo_schema'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['seo_schema'] = '';
            }
            
            Page::where('id', $data['id'])->update($data);
            
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