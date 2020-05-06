<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Response;

class SettingController extends Controller
{

    public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        $setting = Company::first();
        return view('pages.admin.setting.index', [
            'setting' => $setting
        ]);
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);

            if (isset($data['seo_content']) && in_array($data['seo_content'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['seo_content'] = '';
            }
            if (isset($data['seo_schema']) && in_array($data['seo_schema'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['seo_schema'] = '';
            }
            
            $setting = Company::first();
            $setting->update($data);
            
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