<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

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
                'slug' => $product->slug
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