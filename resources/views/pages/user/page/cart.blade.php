@extends('layouts.user.master')

@section('page')Giỏ hàng
@stop

@section('description')Giỏ hàng
@stop

@section('keywords')Giỏ hàng
@stop

@section('canonical'){{ route('cart') }}
@stop

@section('alternate'){{ route('cart') }}
@stop

@section('propName')Giỏ hàng
@stop

@section('propDesc')Giỏ hàng
@stop

@section('ogTitle')Giỏ hàng
@stop

@section('ogDesc')Giỏ hàng
@stop

@section('ogUrl'){{ route('cart') }}
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('schema'){{ $setting->seo_schema }}
@stop

@section('pageCss')
	
@stop

@section('content')  
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">Giỏ hàng</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container white collections-container">
        <div class="white-background">
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <div class="visible-md visible-lg">
                            <div class="shopping-cart-table">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span class="count_item_pr">{{ $countItemCart }}</span> sản phẩm)</span></h1>
                                    </div>
                                </div>
                                @if (count($cart) > 0)
                                    <div class="row">
                                        <div class="col-main cart_desktop_page cart-page">
                                            <div class="cart page_cart cart_des_page hidden-xs-down">
                                                <div class="col-xs-9 cart-col-1">
                                                    
                                                    <div class="cart-tbody">
                                                        @foreach($cart as $item)
                                                        <div class="row shopping-cart-item">
                                                            <div class="col-xs-3 img-thumnail-custom">
                                                                <p class="image">
                                                                    <img class="img-responsive" src="{{ $item->options->image }}" alt="{{ $item->name }}">
                                                                </p>
                                                            </div>
                                                            <div class="col-right col-xs-9">
                                                                <div class="box-info-product">
                                                                    <p class="name">
                                                                        <a href="{{ route('product-detail', ['slug' => $item->options->slug]) }}" target="_blank">
                                                                            {{ $item->name }}
                                                                        </a>
                                                                    </p>
                                                                    <form method="POST" action="{{ route('cartDelete') }}">
                                                                        <p class="action">
                                                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                            <button type="submit" class="btn btn-link btn-item-delete remove-item-cart">Xóa</button>
                                                                        </p>
                                                                    </form>
                                                                </div>
                                                                <div class="box-price">
                                                                    <p class="price">
                                                                        {{ number_format($item->price, 0, 0, '.') }}đ
                                                                    </p>
                                                                </div>
                                                                <div class="quantity-block">
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <div class="input-group-btn">
                                                                            <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                <input type="hidden" name="increment" value="1">
                                                                                <button class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="submit">+
                                                                                </button>
                                                                            </form>

                                                                            <input autocomplete="off" type="text" maxlength="12" min="1" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem15647394" size="4" value="{{ $item->qty }}" disabled="true">

                                                                            <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                <input type="hidden" name="decrease" value="1">
                                                                                <button class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="submit">–
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">
                                                    <div id="right-affix">
                                                        <div class="each-row">
                                                            <div class="box-style fee">
                                                                <p class="list-info-price"><span>Tạm tính: </span><strong class="totals_price price _text-right text_color_right1">{{ $total }}₫</strong></p>
                                                            </div>
                                                            <div class="box-style fee">
                                                                <div class="total2 clearfix"><span class="text-label">Thành tiền: </span>
                                                                    <div class="amount">
                                                                        <p><strong class="totals_price">{{ $total }}₫</strong></p>
                                                                        <p class="text-right"><small>(Đã bao gồm VAT)</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout" title="Thanh toán ngay" type="button" onclick="window.location.href='/checkout/first'">Thanh toán ngay</button>
                                                            <button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/cua-hang'">Tiếp tục mua hàng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Không có sản phẩm nào!</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="visible-sm visible-xs">

                            <div class="cart-mobile">
                                <div class="header-cart">
                                    <div class="title-cart">
                                        <h3>Giỏ hàng của bạn</h3>
                                    </div>
                                </div>
                                @if (count($cart) > 0)
                                <div class="header-cart-content">
                                    <div class="cart_page_mobile content-product-list">
                                        @foreach($cart as $item)
                                        <div class="item-product item productid-1">
                                            <div class="item-product-cart-mobile">
                                                <a class="product-images1" href="{{ route('product-detail', ['slug' => $item->options->slug]) }}" title="{{ $item->name }}">
                                                    <img width="80" height="150" alt="{{ $item->name }}" src="{{ $item->options->image }}">
                                                </a>
                                            </div>
                                            <div class="title-product-cart-mobile">
                                                <h3><a href="{{ route('product-detail', ['slug' => $item->options->slug]) }}" title="{{ $item->name }}">{{ $item->name }}</a></h3>
                                                <p>Giá: <span>{{ number_format($item->price, 0, 0, '.') }}đ</span></p>
                                            </div>
                                            <div class="select-item-qty-mobile">
                                                <div class="txt_center">
                                                    <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="decrease" value="1">
                                                        <button class="reduced items-count btn-minus" type="submit">–</button>
                                                    </form>

                                                    <input disabled="true" type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile1" size="4" value="{{ $item->qty }}">

                                                    <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="increment" value="1">
                                                        <button class="increase items-count btn-plus" type="submit">+</button>
                                                    </form>
                                                </div>
                                                <form method="POST" action="{{ route('cartDelete') }}">
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn-link button remove-item remove-item-cart">Xoá</button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="header-cart-price">
                                        <div class="title-cart ">
                                            <h3 class="text-xs-left">Tổng tiền</h3>
                                            <a class="text-xs-right totals_price_mobile">{{ $total }}₫</a>
                                        </div>
                                        <div class="checkout">
                                            <button class="btn btn-primary btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='/checkout/first'">
                                                Tiến hành thanh toán
                                            </button>
                                            <button class="btn btn-primary btn-proceed-continues-mobile" title="Tiếp tục mua sắm" type="button" onclick="window.location.href='/cua-hang'">
                                                Tiếp tục mua sắm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <p style="margin: 15px 0px 0px 15px">Không có sản phẩm nào!</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pageJs')

@stop