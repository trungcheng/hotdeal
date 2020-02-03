@extends('layouts.user.master')

@section('page')Giỏ hàng
@stop

@section('description')
@stop

@section('keywords')Giỏ hàng, Ant Kitchen, ant-kitchen.mysapo.net
@stop

@section('canonical'){{ route('cart') }}
@stop

@section('alternate'){{ route('cart') }}
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('cart') }}
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
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
                        <div class="visible-md visible-lg">
                            <div class="shopping-cart-table">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span class="count_item_pr">2</span> sản phẩm)</span></h1>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-main cart_desktop_page cart-page">

                                        <div class="cart page_cart cart_des_page hidden-xs-down">
                                            <div class="col-xs-9 cart-col-1">
                                                <form id="shopping-cart" action="/cart" method="post" novalidate="">
                                                    <div class="cart-tbody">
                                                        <div class="row shopping-cart-item productid-15647394">
                                                            <div class="col-xs-3 img-thumnail-custom">
                                                                <p class="image"><img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/270/860/products/chao-2-88c038bb-2888-471f-9812-cc19974ccea8.jpg" alt="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm - Z / Đen"></p>
                                                            </div>
                                                            <div class="col-right col-xs-9">
                                                                <div class="box-info-product">
                                                                    <p class="name"><a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" target="_blank">Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm - Z / Đen</a></p>
                                                                    <p class="seller-by hidden" style="display: none;">Z / Đen</p>
                                                                    <p class="action"><a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" data-id="15647394">Xóa</a></p>
                                                                </div>
                                                                <div class="box-price">
                                                                    <p class="price">1.000.000₫</p>
                                                                </div>
                                                                <div class="quantity-block">
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <div class="input-group-btn"><input class="variantID" type="hidden" name="variantId" value="15647394"><button onclick="var result = document.getElementById('qtyItem15647394'); var qtyItem15647394 = result.value; if( !isNaN( qtyItem15647394 )) result.value++;return false;" class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button">+</button><input type="text" maxlength="12" min="1" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem15647394" id="qtyItem15647394" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyItem15647394'); var qtyItem15647394 = result.value; if( !isNaN( qtyItem15647394 ) &amp;&amp; qtyItem15647394 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button">–</button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row shopping-cart-item productid-14154614">
                                                            <div class="col-xs-3 img-thumnail-custom">
                                                                <p class="image"><img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg" alt="Android Tivi Sony 4K 49 inch KD-49X7500E"></p>
                                                            </div>
                                                            <div class="col-right col-xs-9">
                                                                <div class="box-info-product">
                                                                    <p class="name"><a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" target="_blank">Android Tivi Sony 4K 49 inch KD-49X7500E</a></p>
                                                                    <p class="seller-by hidden" style="display: none;">Default Title</p>
                                                                    <p class="action"><a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" data-id="14154614">Xóa</a></p>
                                                                </div>
                                                                <div class="box-price">
                                                                    <p class="price">19.900.000₫</p>
                                                                </div>
                                                                <div class="quantity-block">
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <div class="input-group-btn"><input class="variantID" type="hidden" name="variantId" value="14154614"><button onclick="var result = document.getElementById('qtyItem14154614'); var qtyItem14154614 = result.value; if( !isNaN( qtyItem14154614 )) result.value++;return false;" class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button">+</button><input type="text" maxlength="12" min="1" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem14154614" id="qtyItem14154614" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyItem14154614'); var qtyItem14154614 = result.value; if( !isNaN( qtyItem14154614 ) &amp;&amp; qtyItem14154614 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button">–</button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">
                                                <div id="right-affix">
                                                    <div class="each-row">
                                                        <div class="box-style fee">
                                                            <p class="list-info-price"><span>Tạm tính: </span><strong class="totals_price price _text-right text_color_right1">20.900.000₫</strong></p>
                                                        </div>
                                                        <div class="box-style fee">
                                                            <div class="total2 clearfix"><span class="text-label">Thành tiền: </span>
                                                                <div class="amount">
                                                                    <p><strong class="totals_price">20.900.000₫</strong></p>
                                                                    <p class="text-right"><small>(Đã bao gồm VAT)</small></p>
                                                                </div>
                                                            </div>
                                                        </div><button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout" title="Thanh toán ngay" type="button" onclick="window.location.href='/checkout/first'">Thanh toán ngay</button><button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/cua-hang'">Tiếp tục mua hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="visible-sm visible-xs">

                            <div class="cart-mobile">
                                <form action="/cart" method="post" class="margin-bottom-0">
                                    <div class="header-cart">
                                        <div class="title-cart">
                                            <h3>Giỏ hàng của bạn</h3>
                                        </div>
                                    </div>
                                    <div class="header-cart-content">
                                        <div class="cart_page_mobile content-product-list">

                                            <div class="item-product item productid-1">
                                                <div class="item-product-cart-mobile">
                                                    <a class="product-images1" href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm?variantid=15647394" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">

                                                        <img width="80" height="150" alt="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm - Z / Đen" src="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-2-88c038bb-2888-471f-9812-cc19974ccea8.jpg?v=1510583505400" alt="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">

                                                    </a>
                                                </div>
                                                <div class="title-product-cart-mobile">
                                                    <h3><a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm?variantid=15647394" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm</a></h3>
                                                    <p>Giá: <span>1.000.000₫</span></p>
                                                </div>
                                                <div class="select-item-qty-mobile">
                                                    <div class="txt_center">
                                                        <input class="variantID" type="hidden" name="variantId" value="1">
                                                        <button onclick="var result = document.getElementById('qtyMobile1'); var qtyMobile1 = result.value; if( !isNaN( qtyMobile1 ) &amp;&amp; qtyMobile1 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button>
                                                        <input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile1" id="qtyMobile1" name="Lines" size="4" value="1">
                                                        <button onclick="var result = document.getElementById('qtyMobile1'); var qtyMobile1 = result.value; if( !isNaN( qtyMobile1 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
                                                    </div>
                                                    <a class="button remove-item remove-item-cart" href="/cart/change?line=1&amp;quantity=0" data-id="1">Xoá</a>
                                                </div>
                                            </div>

                                            <div class="item-product item productid-2">
                                                <div class="item-product-cart-mobile">
                                                    <a class="product-images1" href="/android-tivi-sony-4k-49-inch-kd-49x7500e?variantid=14154614" title="Android Tivi Sony 4K 49 inch KD-49X7500E">

                                                        <img width="80" height="150" src="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357" alt="Android Tivi Sony 4K 49 inch KD-49X7500E" />

                                                    </a>
                                                </div>
                                                <div class="title-product-cart-mobile">
                                                    <h3><a href="/android-tivi-sony-4k-49-inch-kd-49x7500e?variantid=14154614" title="Android Tivi Sony 4K 49 inch KD-49X7500E">Android Tivi Sony 4K 49 inch KD-49X7500E</a></h3>
                                                    <p>Giá: <span>19.900.000₫</span></p>
                                                </div>
                                                <div class="select-item-qty-mobile">
                                                    <div class="txt_center">
                                                        <input class="variantID" type="hidden" name="variantId" value="2">
                                                        <button onclick="var result = document.getElementById('qtyMobile2'); var qtyMobile2 = result.value; if( !isNaN( qtyMobile2 ) &amp;&amp; qtyMobile2 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button>
                                                        <input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile2" id="qtyMobile2" name="Lines" size="4" value="1">
                                                        <button onclick="var result = document.getElementById('qtyMobile2'); var qtyMobile2 = result.value; if( !isNaN( qtyMobile2 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
                                                    </div>
                                                    <a class="button remove-item remove-item-cart" href="/cart/change?line=2&amp;quantity=0" data-id="2">Xoá</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="header-cart-price">
                                            <div class="title-cart ">
                                                <h3 class="text-xs-left">Tổng tiền</h3>
                                                <a class="text-xs-right totals_price_mobile">20.900.000₫</a>
                                            </div>
                                            <div class="checkout">
                                                <button class="btn btn-primary btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='/checkout'">
                                                    Tiến hành thanh toán
                                                </button>
                                                <button class="btn btn-primary btn-proceed-continues-mobile" title="Tiếp tục mua sắm" type="button" onclick="window.location.href='/collections/all'">
                                                    Tiếp tục mua sắm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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