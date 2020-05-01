<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function paymentMethod()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.payment-method', [
            'info' => $info
        ]);
    }

    public function deliveryMethod()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.delivery-method', [
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

    public function recruitment()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.recruitment', [
            'info' => $info
        ]);
    }

    public function saleOff()
    {
        $info = DB::table('pages')->first();

        return view('pages.admin.page.saleoff', [
            'info' => $info
        ]);
    }

    public function update(Request $request)
    {
        try {
            $data = $request->all();
            unset($data['_token']);

            if (isset($data['about']) && in_array($data['about'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['about'] = '';
            }
            if (isset($data['payment_method']) && in_array($data['payment_method'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['payment_method'] = '';
            }
            if (isset($data['delivery_method']) && in_array($data['delivery_method'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['delivery_method'] = '';
            }
            if (isset($data['policy']) && in_array($data['policy'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['policy'] = '';
            }
            if (isset($data['recruitment']) && in_array($data['recruitment'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['recruitment'] = '';
            }
            if (isset($data['saleoff']) && in_array($data['saleoff'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['saleoff'] = '';
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