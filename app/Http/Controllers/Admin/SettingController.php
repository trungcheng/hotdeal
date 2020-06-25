<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Response;

class SettingController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        $setting = Setting::first();

        return view('pages.admin.setting.index', [
            'setting' => $setting
        ]);
    }

    public function partnerLogos()
    {
        $setting = Setting::first();

        return view('pages.admin.media.partner-logo.index', [
            'setting' => $setting
        ]);
    }

    public function updatePartnerLogos(Request $request)
    {
        try {
            $data = $request->all();
            if ($data) {
                $setting = Setting::find(1);
                if ($setting) {
                    $saveData = [];
                    if (count($data['partner_logos']) > 0) {
                        foreach ($data['partner_logos'] as $key => $logo) {
                            $saveData[] = [
                                'image' => $logo,
                                'link' => $data['link'][$key]
                            ];
                        }
                    }

                    $setting->update(['partner_logos' => json_encode($saveData)]);
                    
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy cấu hình', 
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

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            $setting = Setting::first();

            foreach (\Config::get('translatable.locales') as $locale) {
                if (isset($data['name'])) {
                    $setting->translateOrNew($locale)->name = ($locale == 'en') ? $data['name'] : $data[$locale.'_name'];
                }
                if (isset($data['slogan'])) {
                    $setting->translateOrNew($locale)->slogan = ($locale == 'en') ? $data['slogan'] : $data[$locale.'_slogan'];
                }
                if (isset($data['address'])) {
                    $setting->translateOrNew($locale)->address = ($locale == 'en') ? $data['address'] : $data[$locale.'_address'];
                }
            }
    
            if (isset($data['vi_name'])) unset($data['vi_name']);
            if (isset($data['vi_slogan'])) unset($data['vi_slogan']);
            if (isset($data['vi_address'])) unset($data['vi_address']);

            foreach ($data as $key => $value) {
                $setting[$key] = $value;
            }

            $setting->save();
            
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