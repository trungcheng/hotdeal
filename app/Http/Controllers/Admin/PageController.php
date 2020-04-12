<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Response;
use DB;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function about()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.about', [
            'info' => $info
        ]);
    }

    public function policy()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.policy', [
            'info' => $info
        ]);
    }

    public function certificate()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.certificate', [
            'info' => $info
        ]);
    }

    public function healthAdvice()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.health-advice', [
            'info' => $info
        ]);
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);

            if (isset($data['introduce']) && in_array($data['introduce'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['introduce'] = '';
            }
            if (isset($data['policy']) && in_array($data['policy'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['policy'] = '';
            }
            if (isset($data['certificate']) && in_array($data['certificate'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['certificate'] = '';
            }
            if (isset($data['health_advice']) && in_array($data['health_advice'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['health_advice'] = '';
            }
            
            DB::table('pages')->where('id', 1)->update($data);
            
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