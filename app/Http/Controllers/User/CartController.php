<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Cart;
use Mail;

class CartController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $cart = Cart::content();
        $total = Cart::subtotal(0, '.', '.');

        return view('pages.user.page.cart', [
            'cart' => $cart,
            'total' => $total
        ]);
    }

    public function add(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::find($productId);
        $cartInfo = [
            'id' => $productId,
            'name' => $product->name,
            'price' => $product->price_sale,
            'qty' => $request->quantity,
            'options' => [
                'image' => $product->image,
                'slug' => $product->slug,
                'cate' => $product->category->slug
            ]
        ];
        Cart::add($cartInfo);

        return redirect()->route('cart')->with('success','Bạn vừa thêm sản phẩm "'.$product->name.'" vào giỏ hàng thành công!');
    }

    public function update(Request $request)
    {
        if ($request->product_id && $request->increment == 1) {
            $rows = Cart::search(function($key, $value) use ($request) {
                return $key->id == $request->product_id;
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        //decrease the quantity
        if ($request->product_id && $request->decrease == 1) {
            $rows = Cart::search(function($key, $value) use ($request) {
                return $key->id == $request->product_id;
            });
            $item = $rows->first();
            Cart::update($item->rowId, $item->qty - 1);
        }

        return redirect()->route('cart');
    }

    public function delete(Request $request)
    {
        $item = Cart::search(function ($cart, $key) use ($request) {
            return $cart->id == $request->product_id;
        })->first();
        Cart::remove($item->rowId);

        return redirect()->route('cart');
    }

    public function checkoutFirst()
    {
        if (Cart::count() > 0) {
            if (!\Auth::check()) {
                return view('pages.user.checkout.index', []);
            }

            return redirect()->route('step2');
        }

        return redirect()->route('home');
    }

    public function checkoutPayment()
    {
        if (Cart::count() > 0) {
            if (!\Auth::check()) {
                return redirect()->route('step1');
            }

            $cart = Cart::content();
            $total = Cart::subtotal(0, '.', '.');

            return view('pages.user.checkout.info', [
                'cart' => $cart,
                'total' => $total
            ]);
        }
        
        return redirect()->route('home');
    }

    public function postCheckoutPayment(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|numeric|digits_between:10,11',
            'customer_address' => 'required'
        ], [
            'customer_name.required' => 'Họ tên khách hàng không được để trống',
            'customer_email.required' => 'Email khách hàng không được để trống',
            'customer_email.email' => 'Email khách hàng không đúng định dạng',
            'customer_phone.required' => 'Số điện thoại không được để trống',
            'customer_phone.digits_between' => 'Số điện thoại phải 10 hoặc 11 số ',
            'customer_phone.numeric' => 'Số điện thoại chỉ được nhập số',
            'customer_address.required' => 'Địa chỉ giao hàng không được để trống'
        ]);
        if ($validator->fails()) {
            return redirect('/checkout/payment')->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $obj_info = $request->only(['customer_name', 'customer_phone', 'customer_email', 'customer_address', 'note']);
        unset($data['_token']);

        $cartInfo = Cart::content();

        try {
            $order = new Order;
            $order->user_id = $data['user_id'];
            $order->amount = str_replace('.', '', Cart::subtotal(0, '.', '.'));
            $order->payment_method = $data['payment_method'];
            $order->delivery_method = $data['delivery_method'];
            $order->obj_info = json_encode($obj_info);
            $order->note = $data['note'];
            $order->status = 0;
            $order->save();
            if (count($cartInfo) > 0) {
                foreach ($cartInfo as $key => $item) {
                    $orderDetail = new OrderDetail;
                    $orderDetail->order_id = $order->id;
                    $orderDetail->pro_id = $item->id;
                    $orderDetail->quantity = $item->qty;
                    $orderDetail->amount = $item->price;
                    $orderDetail->save();
                }
            }

            $emails = [
                \Auth::user()->email,
                $data['customer_email'],
                // \Config::get('mail.from.address')
            ];

            if ($data['customer_email'] == \Auth::user()->email) {
                array_shift($emails);
            }

            Mail::send('pages/user/mail/order_temp', [
                'order' => $order,
                'objectInfo' => $obj_info,
                'cartInfo' => $cartInfo,
                'total' => Cart::subtotal(0, '.', '.'),
                'shipFee' => $order->delivery_method
            ], function($message) use ($emails, $order) {
                $message->to($emails)
                        ->subject('Xác nhận đơn hàng #'.$order->id);
            });

            Cart::destroy();

            return redirect()->route('checkout-success', ['order_id' => '#'.$order->id]);
        } catch (Exception $e) {
            abort(500);
        }
    }

    public function checkoutSuccess(Request $request)
    {
        return view('pages.user.page.checkout-success', [
            'order_id' => isset($request->order_id) ? $request->order_id : ''
        ]);
    }
}