<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use Cart;

class CartController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.page.cart', [
            
        ]);
    }

    public function add(Request $request)
    {
        $data = [];
        if (Request::isMethod('post')) {
            $data['title'] = 'Giỏ hàng của bạn';
            $productId = $request->product_id;
            $product = Product::find($productId);
            $cartInfo = [
                'id' => $product_id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => '1'
            ];
            Cart::add($cartInfo);
        }
        $cart = Cart::content();
        $this->data['cart'] = $cart;

        return view('layouts.cart', $this->data);
       
    }

    public function checkoutFirst()
    {
        return view('pages.user.checkout.index', [
            
        ]);
    }

    public function checkoutInfo()
    {
        return view('pages.user.checkout.info', [
            
        ]);
    }

    public function checkoutSuccess()
    {
        return view('pages.user.page.checkout-success', [
            
        ]);
    }
}