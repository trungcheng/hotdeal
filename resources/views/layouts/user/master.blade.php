<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>Ant Kitchen</title>

    <meta name="description" content="">
    <meta name="keywords" content="Ant Kitchen, ant-kitchen.mysapo.net" />
    <meta name="robots" content="noodp,index,follow" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ant Kitchen">
    <meta property="og:image" content="{{ asset('frontend/images/logos/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('frontend/images/logos/logo.png') }}">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://ant-kitchen.mysapo.net">
    <meta property="og:site_name" content="Ant Kitchen">

    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <link rel="canonical" href="https://ant-kitchen.mysapo.net" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Build Main CSS -->
    <link href="{{ asset('frontend/css/base.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!-- Header JS -->
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    
    {{--<script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'ant-kitchen.mysapo.net';
        Bizweb.id = '270860';
        Bizweb.theme = {
            "id": 606449,
            "role": "main",
            "name": "Ant Kitchen"
        };
        Bizweb.template = 'index';
    </script>--}}

    {{--<script>
        (function() {
            function asyncLoad() {
                var urls = ["//productreviews.sapoapps.vn/assets/js/productreviews.min.js?store=ant-kitchen.mysapo.net"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>--}}

    {{--<script type='text/javascript'>
        (function() {
            var log = document.createElement('script');
            log.type = 'text/javascript';
            log.async = true;
            log.src = '//stats.bizweb.vn/delivery/270860.js?lang=vi';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(log, s);
        })();
    </script>--}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109602908-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-109602908-1');
    </script>
    
    {{--<script>
        var ProductReviewsAppUtil = ProductReviewsAppUtil || {};
    </script>--}}
</head>

<body class="bg-index">
    <div id="box-wrapper">
        
        @include('layouts.user.header')
        
        <h1 class="hidden">Ant Kitchen</h1>

        @yield('content')

        {{--<link href="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/bpr-products-module.scss.css?1576740881097" rel="stylesheet" type="text/css" />
        <div class="bizweb-product-reviews-module"></div>--}}

        <div class="search-more">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <label>Tìm kiếm nhiều: </label>

                        <a href="/">• Bếp ga</a>

                        <a href="/">• Lò nướng</a>

                        <a href="/">• Nồi áp suất</a>

                        <a href="/">• Bình thủy điện</a>

                        <a href="/">• Bếp từ</a>

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.user.footer')
        
    </div>

    <script src="{{ asset('frontend/js/rx.all.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('frontend/js/option-selectors.js') }}" type="text/javascript"></script>
    {{--<script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4" type="text/javascript"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    
    {{--<script>
        $.validate({});
    </script>--}}
    
    <div class="ajax-load">
        <span class="loading-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </span>
    </div>

    <div class="loading awe-popup">
        <div class="overlay"></div>
        <div class="loader" title="2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>

    </div>

    {{--<div class="addcart-popup product-popup awe-popup">
        <div class="overlay no-background"></div>
        <div class="content">
            <div class="row row-noGutter">
                <div class="col-xl-6 col-xs-12">
                    <div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành công
                    </div>
                    <a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
                    <div class="info clearfix">
                        <div class="product-image margin-top-5">
                            <img alt="popup" src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/logo.png?1576740881097" style="max-width:150px; height:auto" />
                        </div>
                        <div class="product-info">
                            <p class="product-name"></p>
                            <p class="quantity color-main"><span>Số lượng: </span></p>
                            <p class="total-money color-main"><span>Tổng tiền: </span></p>

                        </div>
                        <div class="actions">
                            <button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button>
                            <button class="btn btn-gray margin-top-5" onclick="window.location='/cart'">Kiểm tra giỏ hàng</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>--}}

    {{--<div class="error-popup awe-popup">
        <div class="overlay no-background"></div>
        <div class="popup-inner content">
            <div class="error-message"></div>
        </div>
    </div>--}}

    {{--<script>
        Bizweb.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {

                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                                jQuery.each(value, function(i, item) {

                                    var src = item.image;
                                    if (src == null) {
                                        src = "http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    jQuery('<li class="item productid-' + item.variant_id + '"><a class="product-image" href="' + item.url + '" title="' + item.name + '">' +
                                        '<img alt="' + item.name + '" src="' + src + '"width="' + '80' + '"\></a>' +
                                        '<div class="detail-item"><div class="product-details"> <a href="javascript:;" data-id="' + item.variant_id + '" title="Xóa" class="remove-item-cart fa fa-remove">&nbsp;</a>' +
                                        '<p class="product-name"> <a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></p></div>' +
                                        '<div class="product-details-bottom"><span class="price">' + Bizweb.formatMoney(item.price, "{{0}}₫") + '</span>' +
                                        '<div class="quantity-select"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' ) &amp;&amp; qty' + item.variant_id + ' &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus" ' + buttonQty + ' type="button">–</button><input type="text" maxlength="12" min="1" class="input-text number-sidebar qty' + item.variant_id + '" id="qty' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div></div></li>').appendTo(table.children('.list-item-cart'));
                                });
                                jQuery('<div><div class="top-subtotal">Tổng cộng: <span class="price">' + Bizweb.formatMoney(cart.total_price, "{{0}}₫") + '</span></div></div>').appendTo(table);
                                jQuery('<div><div class="actions"><a href="/checkout" class="btn btn-gray btn-checkout"><span>Thanh toán</span></a><a href="/cart" class="view-cart btn btn-white margin-left-5"><span>Giỏ hàng</span></a></div></div>').appendTo(table);
                            } else {
                                jQuery('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>').appendTo(table);

                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            var numInput = document.querySelector('#cart-sidebar input.input-text');
            if (numInput != null) {
                // Listen for input event on numInput.
                numInput.addEventListener('input', function() {
                    // Let's match only digits.
                    var num = this.value.match(/^\d+$/);
                    if (num == 0) {
                        // If we have no match, value will be empty.
                        this.value = 1;
                    }
                    if (num === null) {
                        // If we have no match, value will be empty.
                        this.value = "";
                    }
                }, false)
            }
        }

        Bizweb.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);
                            if (value.length) {

                                var pageCart = '<div class="cart page_cart cart_des_page hidden-xs-down">' +
                                    '<div class="col-xs-9 cart-col-1">' +
                                    '<form id="shopping-cart" action="/cart" method="post" novalidate>' +
                                    '<div class="cart-tbody">' +
                                    '</div>' +
                                    '</form>' +
                                    '</div></div>';
                                var pageCartCheckout = '<div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">' +
                                    '<div id="right-affix">' +
                                    '<div class="each-row">' +
                                    '<div class="box-style fee">' +
                                    '<p class="list-info-price">' +
                                    '<span>Tạm tính: </span>' +
                                    '<strong class="totals_price price _text-right text_color_right1">65756756756</strong></p></div>' +
                                    '<div class="box-style fee">' +
                                    '<div class="total2 clearfix">' +
                                    '<span class="text-label">Thành tiền: </span>' +
                                    '<div class="amount">' +
                                    '<p><strong class="totals_price">6</strong></p>' +
                                    '<p class="text-right"><small>(Đã bao gồm VAT)</small></p></div></div></div>' +
                                    '<button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout" title="Thanh toán ngay" type="button" onclick="window.location.href=\'/checkout\'">Thanh toán ngay</button>' +
                                    '<button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'">Tiếp tục mua hàng</button>' +
                                    '</div></div></div>';
                                jQuery(pageCart).appendTo(table);
                                jQuery.each(value, function(i, item) {
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    var link_img1 = Bizweb.resizeImage(item.image, 'medium');
                                    if (link_img1 == "null" || link_img1 == '' || link_img1 == null) {
                                        link_img1 = 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
                                    }
                                    var pageCartItem = '<div class="row shopping-cart-item productid-' + item.variant_id + '">' +
                                        '<div class="col-xs-3 img-thumnail-custom">' +
                                        '<p class="image">' +
                                        '<img class="img-responsive" src="' + link_img1 + '" alt="' + item.name + '" />' +
                                        '</p>' +
                                        '</div>' +
                                        '<div class="col-right col-xs-9">' +
                                        '<div class="box-info-product">' +
                                        '<p class="name">' +
                                        '<a href="' + item.url + '" target="_blank">' + item.name + '</a>' +
                                        '</p>' +
                                        '<p class="seller-by hidden">' + item.variant_title + '</p>' +
                                        '<p class="action">' +
                                        '<a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" data-id="' + item.variant_id + '">Xóa</a>' +
                                        '</p>' +
                                        '</div>' +
                                        '<div class="box-price">' +
                                        '<p class="price">' + Bizweb.formatMoney(item.price, "{{0}}₫") + '</p>' +
                                        '</div>' +
                                        '<div class="quantity-block">' +
                                        '<div class="input-group bootstrap-touchspin">' +
                                        '<div class="input-group-btn">' +
                                        '<input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">' +
                                        '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' )) result.value++;return false;" class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button">+</button>' +
                                        '<input type="text" maxlength="12" min="1" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem' + item.variant_id + '" id="qtyItem' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">' +
                                        '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' ) &amp;&amp; qtyItem' + item.variant_id + ' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button">–</button>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';
                                    jQuery(pageCartItem).appendTo(table.find('.cart-tbody'));
                                    if (item.variant_title == 'Default Title') {
                                        $('.seller-by').hide();
                                    }
                                });
                                jQuery(pageCartCheckout).appendTo(table.children('.cart'));
                            } else {
                                jQuery('<p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
                                jQuery('.cart_desktop_page').css('min-height', 'auto');
                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            jQuery('#wait').hide();
        }
        Bizweb.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {

            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery.each(value, function(i, item) {
                                    var src = item.image;
                                    if (src == null) {
                                        src = "http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    var pageCartItem = '<div class="clearfix cart_product productid-' + item.variant_id + '">' +
                                        '<a class="cart_image" href="' + item.url + '" title="' + item.name + '">' +
                                        '<img src="' + src + '" alt="' + item.name + '" >' +
                                        '</a>' +
                                        '<div class="cart_info">' +
                                        '<div class="cart_name">' +
                                        '<a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a>' +
                                        '</div>' +
                                        '<div class="row-cart-left">' +
                                        '<div class="cart_item_name">' +
                                        '<label class="cart_size variant-title-popup hidden">' + item.variant_title + '</label>' +
                                        '<div>' +
                                        '<label class="cart_quantity">Số lượng</label>' +
                                        '<div class="cart_select">' +
                                        '<div class="input-group-btn">' +
                                        '<input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">' +
                                        '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' ) &amp;&amp; qtyItem' + item.variant_id + ' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced items-count btn-minus btn btn-default" type="button">–</button>' +
                                        '<input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyItem' + item.variant_id + '" id="qtyItem' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">' +
                                        '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus btn btn-default" type="button">+</button></div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '<div class="text-right cart_prices">' +
                                        '<div class="cart__price">' +
                                        '<span class="cart__sale-price">' + Bizweb.formatMoney(item.price, "{{0}}₫") + '</span>' +
                                        '</div>' +
                                        '<a class="cart__btn-remove remove-item-cart" href="javascript:void(0)" data-id="' + item.variant_id + '">Bỏ sản phẩm</a>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>'
                                    jQuery(pageCartItem).prependTo(table);
                                    if (item.variant_title == 'Default Title') {
                                        $('.variant-title-popup').hide();
                                    }
                                    $('.link_product').text();
                                });
                            }
                        }
                    });
                }
            }
            jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{0}}₫"));
            updateCartDesc(cart);
        }
        Bizweb.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {

                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
                                jQuery.each(value, function(i, item) {
                                    if (item.image != null) {
                                        var src = Bizweb.resizeImage(item.image, 'small');
                                    } else {
                                        var src = "https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    jQuery('<div class="item-product item productid-' + item.variant_id + ' "><div class="item-product-cart-mobile"><a href="' + item.url + '">  <a class="product-images1" href=""  title="' + item.name + '"><img width="80" height="150" alt="" src="' + src + '" alt="' + item.name + '"></a></a></div>' +
                                        '<div class="title-product-cart-mobile"><h3><a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></h3><p>Giá: <span>' + Bizweb.formatMoney(item.price, "{{0}}₫") + '</span></p></div>' +
                                        '<div class="select-item-qty-mobile"><div class="txt_center">' +
                                        '<input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><button onClick="var result = document.getElementById(\'qtyMobile' + item.variant_id + '\'); var qtyMobile' + item.variant_id + ' = result.value; if( !isNaN( qtyMobile' + item.variant_id + ' ) &amp;&amp; qtyMobile' + item.variant_id + ' &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button><input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile' + item.variant_id + '" id="qtyMobile' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"><button onClick="var result = document.getElementById(\'qtyMobile' + item.variant_id + '\'); var qtyMobile' + item.variant_id + ' = result.value; if( !isNaN( qtyMobile' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div>' +
                                        '<a class="button remove-item remove-item-cart" href="javascript:;" data-id="' + item.variant_id + '">Xoá</a></div>').appendTo(table.children('.content-product-list'));

                                });

                                jQuery('<div class="header-cart-price" style=""><div class="title-cart "><h3 class="text-xs-left">Tổng tiền</h3><a class="text-xs-right totals_price_mobile">' + Bizweb.formatMoney(cart.total_price, "{{0}}₫") + '</a></div>' +
                                    '<div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href=\'/checkout\'">' +
                                    '<span>Tiến hành thanh toán</span></button></div>' +
                                    '<button class="btn btn-proceed-continues-mobile" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'">Tiếp tục mua hàng</button>' +
                                    '</div>').appendTo(table);
                            }

                        }
                    });
                }
            }
            updateCartDesc(cart);
        }


        function updateCartDesc(data) {
            var $cartPrice = Bizweb.formatMoney(data.total_price, "{{0}}₫"),
                $cartMobile = $('#header .cart-mobile .quantity-product'),
                $cartDesktop = $('.count_item_pr, .cart-popup-count'),
                $cartDesktopList = $('.cart-counter-list'),
                $cartPopup = $('.cart-popup-count');

            switch (data.item_count) {
                case 0:
                    $cartMobile.text('0');
                    $cartDesktop.text('0');
                    $cartDesktopList.text('0');
                    $cartPopup.text('0');

                    break;
                case 1:
                    $cartMobile.text('1');
                    $cartDesktop.text('1');
                    $cartDesktopList.text('1');
                    $cartPopup.text('1');

                    break;
                default:
                    $cartMobile.text(data.item_count);
                    $cartDesktop.text(data.item_count);
                    $cartDesktopList.text(data.item_count);
                    $cartPopup.text(data.item_count);

                    break;
            }
            $('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
            $('.popup-total .total-price, .cart__totle .total-price').html($cartPrice);
            $('.cart-collaterals .totals_price').html($cartPrice);
            $('.header-cart-price .totals_price_mobile').html($cartPrice);
            $('.cartCount').html(data.item_count);
        }

        Bizweb.onCartUpdate = function(cart) {
            Bizweb.updateCartFromForm(cart, '.mini-products-list');
            Bizweb.updateCartPopupForm(cart, '#cart-sidebars .cart_body');

        };
        Bizweb.onCartUpdateClick = function(cart, variantId) {
            jQuery.each(cart, function(key, value) {
                if (key === 'items') {
                    jQuery.each(value, function(i, item) {
                        if (item.variant_id == variantId) {
                            $('.productid-' + variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{0}}₫"));
                            $('.productid-' + variantId).find('.items-count').prop("disabled", false);
                            $('.productid-' + variantId).find('.number-sidebar').prop("disabled", false);
                            $('.productid-' + variantId + ' .number-sidebar').val(item.quantity);
                            if (item.quantity == '1') {
                                $('.productid-' + variantId).find('.items-count.btn-minus').prop("disabled", true);
                            }
                        }
                    });
                }
            });
            updateCartDesc(cart);
        }
        Bizweb.onCartRemoveClick = function(cart, variantId) {
            jQuery.each(cart, function(key, value) {
                if (key === 'items') {
                    jQuery.each(value, function(i, item) {
                        if (item.variant_id == variantId) {
                            $('.productid-' + variantId).remove();
                        }
                    });
                }
            });
            updateCartDesc(cart);
        }
        $(window).ready(function() {
            $.ajax({
                type: 'GET',
                url: '/cart.js',
                async: false,
                cache: false,
                dataType: 'json',
                success: function(cart) {
                    Bizweb.updateCartFromForm(cart, '.mini-products-list');
                    Bizweb.updateCartPopupForm(cart, '#cart-sidebars .cart_body');

                }
            });
        });
    </script>--}}

    <div id="myModal" class="modal fade" role="dialog">
    </div>

    <div class="cart_sidebar" id="cart-sidebars">
        <div class="clearfix cart_heading">
            <h4 class="cart_title">Giỏ hàng<span class="abcb">(<span class="cart-popup-count"></span> Sản phẩm)</span></h4>
            <div class="cart_btn-close" title="Tiếp tục mua sắm!"><i class="fa fa-close"></i></div>
        </div>
        <div class="cart_body">

        </div>
        <div class="cart-footer">
            <hr>
            <div class="clearfix">
                <div class="cart__subtotal">
                    <div class="cart__col-6">
                        Thành tiền:
                    </div>
                    <div class="text-right cart__totle"><span class="total-price"></span></div>
                </div>
            </div>
            <div class="cart__btn-proceed-checkout-dt">
                <button onclick="location.href='/checkout'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout">Tiến Hành Đặt Hàng</button>
            </div>
        </div>
    </div>

    <div id="menu-mobile">
        <div class="clearfix">
            <div class="account_mobile" style="">
                <div class="text-center">
                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/user.svg?1576740881097" alt="Tài khoản" />
                </div>
                <ul class="account_text text-center">

                    <li><a class="register_account" href="/account/register" title="Đăng ký">Đăng ký</a></li>
                    <li>|</li>
                    <li><a class="login_account" href="/account/login" title="Đăng nhập">Đăng nhập</a></li>

                </ul>
            </div>
            <ul class="menu-mobile">


                <li class="">
                    <a class="submenu-level1-children-a" href="/tivi-loa-am-thanh" title="Tivi, Loa, Âm thanh">Tivi, Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/tivi" title="Tivi">Tivi <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a>
                                </li>

                                <li>
                                    <a href="/doi-moi-2017">Đời mới 2017</a>
                                </li>

                                <li>
                                    <a href="/sony">Sony</a>
                                </li>

                                <li>
                                    <a href="/samsung">Samsung</a>
                                </li>

                                <li>
                                    <a href="/lg">LG</a>
                                </li>

                                <li>
                                    <a href="/tu-32-43-inch">Từ 32-43 inch</a>
                                </li>

                                <li>
                                    <a href="/tu-44-55-inch">Từ 44-55 inch</a>
                                </li>

                                <li>
                                    <a href="/duoi-5-trieu">Dưới 5 triệu</a>
                                </li>

                                <li>
                                    <a href="/tivi-cao-cap">Tivi cao cấp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/loa-am-thanh" title="Loa, Âm thanh">Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/loa-thanh-soundbar">Loa thanh (Soundbar)</a>
                                </li>

                                <li>
                                    <a href="/dan-am-thanh">Dàn âm thanh</a>
                                </li>

                                <li>
                                    <a href="/dau-dvd">Đầu DVD</a>
                                </li>

                                <li>
                                    <a href="/cap-hdmi-cap-tivi">Cáp HDMI, cáp Tivi</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/" title="Thương hiệu">Thương hiệu</a>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/tu-lanh" title="Tủ lạnh">Tủ lạnh</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/may-giat-may-say-quan-ao" title="Máy giặt, Máy sấy quần áo">Máy giặt, Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/may-giat" title="Máy giặt">Máy giặt <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/doi-moi-2017-1">Đời mới 2017</a>
                                </li>

                                <li>
                                    <a href="/toshiba">Toshiba</a>
                                </li>

                                <li>
                                    <a href="/lg-1">LG</a>
                                </li>

                                <li>
                                    <a href="/panasonic">Panasonic</a>
                                </li>

                                <li>
                                    <a href="/samsung-1">Samsung</a>
                                </li>

                                <li>
                                    <a href="/electrolux">Electrolux</a>
                                </li>

                                <li>
                                    <a href="/may-giat-cao-cap">Máy giặt cao cấp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/may-say-quan-ao" title="Máy sấy quần áo">Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/gia-duoi-5-trieu">Giá dưới 5 triệu</a>
                                </li>

                                <li>
                                    <a href="/gia-tu-5-10-trieu">Giá từ 5 - 10 triệu</a>
                                </li>

                                <li>
                                    <a href="/electrolux-1">Electrolux</a>
                                </li>

                                <li>
                                    <a href="/beko">Beko</a>
                                </li>

                                <li>
                                    <a href="/kangaroo">Kangaroo</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/may-lanh" title="Máy lạnh">Máy lạnh</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/dien-gia-dung" title="Điện gia dụng">Điện gia dụng <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/gia-dung-nha-bep" title="Gia dụng nhà bếp">Gia dụng nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/bep-gas">Bếp gas</a>
                                </li>

                                <li>
                                    <a href="/bep-tu">Bếp từ</a>
                                </li>

                                <li>
                                    <a href="/bep-hong-ngoai">Bếp hồng ngoại</a>
                                </li>

                                <li>
                                    <a href="/lo-nuong">Lò nướng</a>
                                </li>

                                <li>
                                    <a href="/lo-vi-song">Lò vi sóng</a>
                                </li>

                                <li>
                                    <a href="/lau-dien">Lẩu điện</a>
                                </li>

                                <li>
                                    <a href="/noi-ap-suat">Nồi áp suất</a>
                                </li>

                                <li>
                                    <a href="/noi-com-dien">Nồi cơm điện</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/thiet-bi-gia-dinh" title="Thiết bị gia đình">Thiết bị gia đình <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/ban-ui">Bàn ủi</a>
                                </li>

                                <li>
                                    <a href="/may-hut-mui">Máy hút mùi</a>
                                </li>

                                <li>
                                    <a href="/may-hut-bui">Máy hút bụi</a>
                                </li>

                                <li>
                                    <a href="/may-say-toc">Máy sấy tóc</a>
                                </li>

                                <li>
                                    <a href="/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                </li>

                                <li>
                                    <a href="/quat">Quạt</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-nha-bep" title="Điện nhà bếp">Điện nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/binh-dun-sieu-toc">Bình đun siêu tốc</a>
                                </li>

                                <li>
                                    <a href="/binh-thuy-dien">Bình thủy điện</a>
                                </li>

                                <li>
                                    <a href="/may-danh-trung">Máy đánh trứng</a>
                                </li>

                                <li>
                                    <a href="/may-ep-trai-cay">Máy ép trái cây</a>
                                </li>

                                <li>
                                    <a href="/may-lam-sua-dau-nanh">Máy làm sữa đậu nành</a>
                                </li>

                                <li>
                                    <a href="/may-xay-sinh-to">Máy xay sinh tố</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/do-dung-gia-dinh" title="Đồ dùng gia đình">Đồ dùng gia đình <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/dung-cu-ban-an" title="Dụng cụ bàn ăn">Dụng cụ bàn ăn <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dua-muong">Đũa muỗng</a>
                                </li>

                                <li>
                                    <a href="/ly-bo-ly">Ly - Bộ ly</a>
                                </li>

                                <li>
                                    <a href="/binh-giu-nhiet">Bình giữ nhiệt</a>
                                </li>

                                <li>
                                    <a href="/binh-dung-nuoc">Bình đựng nước</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/do-dung-nha-bep" title="Đồ dùng nhà bếp">Đồ dùng nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/va-san-chien-xao">Vá - Sạn chiên xào</a>
                                </li>

                                <li>
                                    <a href="/thau-ro">Thau - Rổ</a>
                                </li>

                                <li>
                                    <a href="/hop-dung-thuc-pham">Hộp đựng thực phẩm</a>
                                </li>

                                <li>
                                    <a href="/bo-noi">Bộ nồi</a>
                                </li>

                                <li>
                                    <a href="/chao-chong-dinh">Chảo chống dính</a>
                                </li>

                                <li>
                                    <a href="/bo-lau-nha">Bộ lau nhà</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/dien-thoai-laptop-may-tinh-bang" title="Điện thoại, Laptop, Tablet">Điện thoại, Laptop, Tablet <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/dien-thoai" title="Điện thoại">Điện thoại <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/iphone">iPhone</a>
                                </li>

                                <li>
                                    <a href="/samsung-2">Samsung</a>
                                </li>

                                <li>
                                    <a href="/oppo">Oppo</a>
                                </li>

                                <li>
                                    <a href="/sony-1">Sony</a>
                                </li>

                                <li>
                                    <a href="/nokia">Nokia</a>
                                </li>

                                <li>
                                    <a href="/dien-thoai-tu-1-den-3-trieu">Điện thoại từ 1 đến 3 triệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/laptop" title="Laptop">Laptop <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dell">Dell</a>
                                </li>

                                <li>
                                    <a href="/asus">Asus</a>
                                </li>

                                <li>
                                    <a href="/macbook">Macbook</a>
                                </li>

                                <li>
                                    <a href="/hp">HP</a>
                                </li>

                                <li>
                                    <a href="/laptop-duoi-10-trieu">Laptop dưới 10 triệu</a>
                                </li>

                                <li>
                                    <a href="/laptop-tu-10-den-15-trieu">Laptop từ 10 đến 15 triệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/tablet" title="Tablet">Tablet <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/ipad">iPad</a>
                                </li>

                                <li>
                                    <a href="/samsung-2">Samsung</a>
                                </li>

                                <li>
                                    <a href="/asus-1">Asus</a>
                                </li>

                                <li>
                                    <a href="/lenovo">Lenovo</a>
                                </li>

                                <li>
                                    <a href="/may-tinh-bang-duoi-3-trieu">Máy tính bảng dưới 3 triệu</a>
                                </li>

                                <li>
                                    <a href="/may-tinh-bang-tu-3-den-8-trieu">Máy tính bảng từ 3 đến 8 triệu</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/phu-kien" title="Thể thao & Dã ngoại">Thể thao & Dã ngoại</a>
                </li>



                <li class="">
                    <a href="/may-loc-nuoc-may-nuoc-nong" title="Phụ kiện số">Phụ kiện số</a>
                </li>



                <li class="">
                    <a href="/sim-so-the-cao" title="Nạp thẻ cào, thẻ game">Nạp thẻ cào, thẻ game</a>
                </li>



                <li class="">
                    <a href="/dung-cu-lam-banh" title="Dụng cụ làm bánh">Dụng cụ làm bánh</a>
                </li>




                <li class="">
                    <a class="submenu-level1-children-a" href="/collections/all" title="Tính năng nổi bật">Tính năng nổi bật <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien" title="Sản phẩm liên quan trong tin tức">Sản phẩm liên quan trong tin tức</a>
                        </li>



                        <li>
                            <a href="/" title="Tìm kiếm nâng cao">Tìm kiếm nâng cao</a>
                        </li>



                        <li>
                            <a href="/tivi-loa-am-thanh" title="Danh mục thông minh">Danh mục thông minh</a>
                        </li>



                        <li>
                            <a href="/collections/all" title="Tìm kiếm bộ lọc">Tìm kiếm bộ lọc</a>
                        </li>



                        <li>
                            <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Khuyến mãi cho từng sản phẩm">Khuyến mãi cho từng sản phẩm</a>
                        </li>



                        <li>
                            <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                        </li>


                    </ul>
                </li>



                <li class="current">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                </li>



                <li class="">
                    <a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/collections/all" title="Sản phẩm">Sản phẩm <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/tivi-loa-am-thanh" title="Tivi, Loa, Âm thanh">Tivi, Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/tivi">Tivi</a>
                                </li>

                                <li>
                                    <a href="/loa-am-thanh">Loa, Âm thanh</a>
                                </li>

                                <li>
                                    <a href="/">Thương hiệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/tu-lanh" title="Tủ lạnh">Tủ lạnh</a>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/may-giat-may-say-quan-ao" title="Máy giặt, Máy sấy quần áo">Máy giặt, Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/may-giat">Máy giặt</a>
                                </li>

                                <li>
                                    <a href="/may-say-quan-ao">Máy sấy quần áo</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/may-lanh" title="Máy lạnh">Máy lạnh</a>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-gia-dung" title="Điện gia dụng">Điện gia dụng <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/gia-dung-nha-bep">Gia dụng nhà bếp</a>
                                </li>

                                <li>
                                    <a href="/thiet-bi-gia-dinh">Thiết bị gia đình</a>
                                </li>

                                <li>
                                    <a href="/dien-nha-bep">Điện nhà bếp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/do-dung-gia-dinh" title="Đồ dùng gia đình">Đồ dùng gia đình <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dung-cu-ban-an">Dụng cụ bàn ăn</a>
                                </li>

                                <li>
                                    <a href="/do-dung-nha-bep">Đồ dùng nhà bếp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-thoai-laptop-may-tinh-bang" title="Điện thoại, Laptop, Tablet">Điện thoại, Laptop, Tablet <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dien-thoai">Điện thoại</a>
                                </li>

                                <li>
                                    <a href="/laptop">Laptop</a>
                                </li>

                                <li>
                                    <a href="/tablet">Tablet</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/phu-kien" title="Thể thao & Dã ngoại">Thể thao & Dã ngoại</a>
                        </li>



                        <li>
                            <a href="/may-loc-nuoc-may-nuoc-nong" title="Phụ kiện số">Phụ kiện số</a>
                        </li>



                        <li>
                            <a href="/sim-so-the-cao" title="Nạp thẻ cào, thẻ game">Nạp thẻ cào, thẻ game</a>
                        </li>



                        <li>
                            <a href="/dung-cu-lam-banh" title="Dụng cụ làm bánh">Dụng cụ làm bánh</a>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/tin-tuc" title="Tin tức">Tin tức</a>
                </li>



                <li class="">
                    <a href="/lien-he" title="Liên hệ">Liên hệ</a>
                </li>


            </ul>
        </div>
    </div>

    <div class="backdrop__body-backdrop___1rvky"></div>
    <script src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/appear.js?1576740881097" type="text/javascript"></script>
    <script src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/cs.script.js?1576740881097" type="text/javascript"></script>

    {{--<div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block row">

                <div class="product-left-column col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="clearfix image-block">
                        <span class="view_full_size">
                            <a class="img-product" title="" href="#">
                                <img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview center-block" src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/logo.png?1576740881097" alt="quickview" />
                            </a>
                        </span>
                        <div class="loading-imgquickview" style="display:none;"></div>
                    </div>
                    <div class="more-view-wrapper clearfix">
                        <div class="thumbs_quickview" id="thumbs_list_quickview">
                            <ul class="product-photo-thumbs quickview-more-views-owlslider clearfix" id="thumblist_quickview"></ul>
                        </div>
                    </div>
                </div>
                <div class="product-center-column product-info product-item col-xs-5 col-sm-6 col-md-7 col-lg-7">
                    <div class="head-qv">
                        <h3 class="qwp-name">abc</h3>

                    </div>
                    <div class="quickview-info">

                        <span class="prices">
                            <span class="price"></span>
                            <del class="old-price"></del>
                        </span>
                    </div>
                    <div class="product-description rte text4line"></div>
                    <a href="#" class="view-more">Xem chi tiết</a>
                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart">
                        <span class="price-product-detail hidden" style="opacity: 0;">
                            <span class=""></span>
                        </span>
                        <select name='variantId' class="hidden" style="display:none"></select>
                        <div class="clearfix"></div>
                        <div class="quantity_wanted_p">
                            <div class="input_qty_qv">
                                <a class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
                                <input type="text" id="quantity-detail" name="quantity" value="1" onkeypress='validate(event)' onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" class="form-control prd_quantity">
                                <a class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary fix_add_to_cart button_cart_buy_enable add_to_cart_detail ajax_addtocart">
                                <span>Thêm vào giỏ hàng</span>
                            </button>
                        </div>
                        <div class="total-price" style="display:none">
                            <label>Tổng cộng: </label>
                            <span></span>
                        </div>

                    </form>


                </div>

            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fa   fa-times"></i></a>
        </div>
    </div>--}}

    {{--<script type="text/javascript">
        Bizweb.doNotTriggerClickOnThumb = false;

        function changeImageQuickView(img, selector) {
            var src = $(img).attr("src");
            src = src.replace("_compact", "");
            $(selector).attr("src", src);
        }

        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        var selectCallbackQuickView = function(variant, selector) {
            $('#quick-view-product form').show();
            var productItem = jQuery('.quick-view-product .product-item'),
                addToCart = productItem.find('.add_to_cart_detail'),
                productPrice = productItem.find('.price'),
                comparePrice = productItem.find('.old-price'),
                status = productItem.find('.soluong'),
                totalPrice = productItem.find('.total-price span');
            if (variant && variant.available) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
                addToCart.removeClass('disabled').removeAttr('disabled');
                $(addToCart).find("span").text("Thêm vào giỏ hàng");
                status.text('Còn hàng');
                if (variant.price < 1) {
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                } else {
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{0}}₫"));
                    if (variant.compare_at_price > variant.price) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{0}}₫")).show();
                        productPrice.addClass('on-sale');
                    } else {
                        comparePrice.hide();
                        productPrice.removeClass('on-sale');
                    }
                    $(".quantity_wanted_p").show();
                }

                updatePricingQuickView();

                /*begin variant image*/
                if (variant && variant.featured_image) {

                    var originalImage = $("#product-featured-image-quickview");
                    var newImage = variant.featured_image;
                    var element = originalImage[0];
                    Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                        $('#thumblist_quickview img').each(function() {
                            var parentThumbImg = $(this).parent();
                            var productImage = $(this).parent().data("image");
                            if (newImageSizedSrc.includes(productImage)) {
                                $(this).parent().trigger('click');
                                return false;
                            }
                        });

                    });
                    $('#product-featured-image-quickview').attr('src', variant.featured_image.src);
                }
            } else {
                addToCart.addClass('disabled').attr('disabled', 'disabled');
                $(addToCart).find("span").text("Hết hàng");
                status.text('Hết hàng');
                $(".quantity_wanted_p").show();
                if (variant) {
                    if (variant.price < 1) {
                        $("#quick-view-product .price").html('Liên hệ');
                        $("#quick-view-product del").hide();
                        $("#quick-view-product .quantity_wanted_p").hide();
                        $("#quick-view-product .prices .old-price").hide();
                        comparePrice.hide();
                        productPrice.removeClass('on-sale');
                        addToCart.addClass('disabled').attr('disabled', 'disabled');
                        $(addToCart).find("span").text("Hết hàng");
                    } else {
                        if (variant.compare_at_price > variant.price) {
                            comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{0}}₫")).show();
                            productPrice.addClass('on-sale');
                        } else {
                            comparePrice.hide();
                            productPrice.removeClass('on-sale');
                            $("#quick-view-product .prices .old-price").html('');
                        }
                        $("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "{{0}}₫"));
                        $("#quick-view-product del ").hide();
                        $("#quick-view-product .prices .old-price").show();
                        addToCart.addClass('disabled').attr('disabled', 'disabled');
                        $(addToCart).find("span").text("Hết hàng");
                    }
                } else {
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del").hide();
                    $("#quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                    comparePrice.hide();
                    productPrice.removeClass('on-sale');
                    addToCart.addClass('disabled').attr('disabled', 'disabled');
                    $(addToCart).find("span").text("Hết hàng");
                }
            }
            /*begin variant image*/
            if (variant && variant.featured_image) {
                var originalImage = $("#product-featured-image-quickview");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                    $('#thumblist_quickview img').each(function() {
                        var parentThumbImg = $(this).parent();
                        var productImage = $(this).parent().data("image");
                        if (newImageSizedSrc.includes(productImage)) {
                            $(this).parent().trigger('click');
                            return false;
                        }
                    });
                });
                $('#product-featured-image-quickview').attr('src', variant.featured_image.src);
            }
        };
    </script>--}}

    {{--<script>
        initQuickView();
        var product = {};
        var currentLinkQuickView = '';
        var option1 = '';
        var option2 = '';

        function setButtonNavQuickview() {
            $("#quickview-nav-button a").hide();
            $("#quickview-nav-button a").attr("data-index", "");
            var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
            if (listProducts.length > 0) {
                var currentPosition = 0;
                for (var i = 0; i < listProducts.length; i++) {
                    if ($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                        currentPosition = i;
                        break;
                    }
                }
                if (currentPosition < listProducts.length - 1) {
                    $("#quickview-nav-button .btn-next-product").show();
                    $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
                }
                if (currentPosition > 0) {
                    $("#quickview-nav-button .btn-previous-product").show();
                    $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
                }
            }
            $("#quickview-nav-button a").click(function() {
                $("#quickview-nav-button a").hide();
                var indexLink = parseInt($(this).data("index"));
                if (!isNaN(indexLink) && indexLink >= 0) {
                    var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
                    if (listProducts.length > 0 && indexLink < listProducts.length) {
                        $(listProducts[indexLink]).trigger("click");
                    }
                }
            });
        }

        function initQuickView() {

            $(document).on("click", "#thumblist_quickview li", function() {
                changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
                $(this).parent().parent().find('li').removeClass('active');
                $(this).addClass('active');
            });
            $(document).on('click', '.quick-view', function(e) {
                if ($(window).width() > 1023) {
                    e.preventDefault();

                    var producthandle = $(this).data("handle");
                    currentLinkQuickView = $(this);
                    Bizweb.getProduct(producthandle, function(product) {
                        var qvhtml = $("#quickview-modal").html();
                        $(".quick-view-product").html(qvhtml);
                        var quickview = $(".quick-view-product");

                        if (product.summary != null && product.summary != "") {
                            var productdes = product.summary.replace(/(&nbsp;|(<([^>]+)>))/ig, '');
                        } else {
                            if (product.content != null) {
                                var productdes = product.content.replace(/(&nbsp;|(<([^>]+)>))/ig, '');
                            } else {
                                var productdes = "";
                            }
                        }
                        var featured_image = Bizweb.resizeImage(product.featured_image, "large");
                        if (featured_image == null) {
                            featured_image = 'http://bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif';
                        }
                        setButtonNavQuickview();
                        productdes = productdes.split(" ").splice(0, 60).join(" ") + "...";
                        if (featured_image != null) {

                            setTimeout(function() {
                                quickview.find(".view_full_size img").attr("src", featured_image);
                            }, 1000);
                        }
                        if (product.price < 1 && product.variants.length < 2) {
                            quickview.find(".price").html('Liên hệ');
                            quickview.find("del").html('');
                            quickview.find("#quick-view-product form").hide();
                            quickview.find(".prices").html('<span class="price h2">Liên hệ</span>');
                            quickview.find(".add_to_cart_detail span").html('Liên hệ');
                        } else {
                            quickview.find("#quick-view-product form").show();

                            quickview.find(".price").html(Bizweb.formatMoney(product.price, "{{0}}₫"));

                        }
                        quickview.find(".product-item").attr("id", "product-" + product.id);
                        quickview.find(".qv-link").attr("href", product.url);
                        quickview.find(".variants").attr("id", "product-actions-" + product.id);
                        quickview.find(".variants select").attr("id", "product-select-" + product.id);

                        quickview.find(".qwp-name").html('<a class="text2line" href="' + product.url + '" title="' + product.name + '">' + product.name + '</a>');
                        quickview.find(".reviews_qv .text_revi").html('<a href="' + product.url + '" title="Đánh giá ' + product.name + '"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');
                        quickview.find(".bizweb-product-reviews-badge").attr("data-id", product.id);
                        if (product.vendor) {
                            quickview.find(".vend-qv .hangsx").html('Hãng: <span class="name_ven"><a href="/vendors?query=' + product.vendor + '">' + product.vendor + '</a></span>');
                        }
                        if (product.available) {
                            if (product.variants[0].inventory_management == 'bizweb') {
                                quickview.find(".vend-qv .soluong").html('Còn hàng');
                            } else {
                                quickview.find(".vend-qv .soluong").html('Còn hàng');
                            }
                        } else {
                            quickview.find(".vend-qv .soluong").html('Hết hàng');
                        }


                        if (product.variants[0].sku) {
                            quickview.find(".product-sku").append("<b>Mã sản phẩm: </b>" + product.variants[0].sku);
                        } else {
                            quickview.find(".product-sku").append("<b>Mã sản phẩm: </b>Không có");
                        }
                        quickview.find(".product-description").html(productdes);
                        quickview.find(".view-more").attr('href', product.url);

                        if (product.compare_at_price_max > product.price) {

                            quickview.find(".old-price").html(Bizweb.formatMoney(product.compare_at_price_max, "{{0}}₫")).show();

                            quickview.find(".price").addClass("sale-price")
                        } else {
                            quickview.find(".old-price").html("");
                            quickview.find(".price").removeClass("sale-price")
                        }
                        if (!product.available) {

                            $("#quick-view-product form").show();
                            $("#quick-view-product .quantity_wanted_p").show();
                            quickViewVariantsSwatch(product, quickview);

                            quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled").attr("disabled", "disabled");
                            if (product.variants.length > 1) {

                                quickview.find("select, .dec, .inc, .variants label").show();

                            } else {
                                quickview.find("select, .dec, .inc, .variants label").hide();
                            }

                        } else {
                            quickViewVariantsSwatch(product, quickview);
                            $("#quick-view-product .quantity_wanted_p").show();
                            if (product.variants.length > 1) {
                                $('#quick-view-product form').show();
                            } else {
                                if (product.price < 1) {

                                    $('#quick-view-product form').hide();
                                } else {
                                    $('#quick-view-product form').show();
                                }
                            }
                        }

                        quickview.find('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');

                        $("#quick-view-product").modal();

                        $(".view_scroll_spacer").removeClass("hidden");


                        loadQuickViewSlider(product, quickview);

                        // Action
                        setTimeout(function() {
                            var thumbLargeimg = $('.view_full_size .img-product #product-featured-image-quickview').attr('src');
                            var thumMedium = $('#thumbs_list_quickview .owl-item li').find('img').attr('src');
                            if (thumbLargeimg == thumMedium) {
                                $("#thumbs_list_quickview .owl-item li").first().addClass("active");
                            }
                        }, 2000);

                        //initQuickviewAddToCart();

                        $(".quick-view").fadeIn(500);
                        if ($(".quick-view .total-price").length > 0) {
                            $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                        }
                        updatePricingQuickView();
                        // Setup listeners to add/subtract from the input
                        $(".js-qty__adjust").on("click", function() {
                            var el = $(this),
                                id = el.data("id"),
                                qtySelector = el.siblings(".js-qty__num"),
                                qty = parseInt(qtySelector.val().replace(/\D/g, ''));

                            var qty = validateQty(qty);

                            // Add or subtract from the current quantity
                            if (el.hasClass("js-qty__adjust--plus")) {
                                qty = qty + 1;
                            } else {
                                qty = qty - 1;
                                if (qty <= 1) qty = 1;
                            }
                            qtySelector.val(qty);
                            updatePricingQuickView();
                        });
                        $(".js-qty__num").on("change", function() {
                            updatePricingQuickView();
                        });
                    });
                    var numInput = document.querySelector('.quantity_wanted_p input');
                    numInput.addEventListener('input', function() {
                        var num = this.value.match(/^\d+$/);
                        if (num === null) {
                            this.value = "";
                        }
                        if (num == 0) {
                            this.value = 1;
                        }
                    }, false)

                    return false;
                }
            });
        }

        function loadQuickViewSlider(n, r) {
            productImage();
            var loadingImgQuickView = $('.loading-imgquickview');
            var s = Bizweb.resizeImage(n.featured_image, "large");
            r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.loading_url + ') 50% 50% no-repeat;"></div></a>');
            if (n.images.length > 1) {
                $('.thumbs_quickview').addClass('thumbs_list_quickview');
                var o = r.find(".more-view-wrapper ul");
                for (i in n.images) {
                    var u = Bizweb.resizeImage(n.images[i], "large");
                    var a = Bizweb.resizeImage(n.images[i], "large");
                    var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" ><img src="' + u + '" alt="Office World" style="max-width:120px; max-height:120px;" /></a></li>';
                    o.append(f)
                }
                o.find("a").click(function() {
                    var t = r.find("#product-featured-image-quickview");
                    if (t.attr("src") != $(this).attr("data-image")) {
                        t.attr("src", $(this).attr("data-image"));
                        loadingImgQuickView.show();
                        t.load(function(t) {
                            loadingImgQuickView.hide();
                            $(this).unbind("load");
                            loadingImgQuickView.hide()
                        })
                    }
                });
                o.owlCarousel({
                    navigation: true,
                    nav: true,
                    navText: ["", ""],
                    items: 4,
                    margin: 10,
                    itemsDesktop: [1199, 4],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [768, 3],
                    itemsTabletSmall: [540, 3],
                    itemsMobile: [360, 3]
                }).css("visibility", "visible")
            } else {
                $('.thumbs_quickview').removeClass('thumbs_list_quickview');
                r.find(".quickview-more-views").remove();
                r.find(".quickview-more-view-wrapper-jcarousel").remove()
            }
        }

        function quickViewVariantsSwatch(t, quickview) {
            var v = '<input type="hidden" name="id" value="' + t.id + '">';
            quickview.find("form.variants").append(v);
            if (t.variants.length > 1) {
                for (var r = 0; r < t.variants.length; r++) {
                    var i = t.variants[r];
                    var s = '<option value="' + i.id + '">' + i.title + "</option>";
                    quickview.find("form.variants > select").append(s)
                }


                var ps = "product-select-" + t.id;
                new Bizweb.OptionSelectors(ps, {
                    product: t,
                    onVariantSelected: selectCallbackQuickView
                });

                if (t.options.length == 1) {

                    quickview.find(".selector-wrapper:eq(0)").prepend("<label>" + t.options[0].name + "</label>")
                }

                var options = "";
                for (var i = 0; i < t.options.length; i++) {
                    options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                    options += '<div class="header">' + t.options[i].name + '</div>';
                    var is_color = false;
                    if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                        is_color = true;
                    }
                    var optionValues = new Array();
                    for (var j = 0; j < t.variants.length; j++) {
                        var variant = t.variants[j];
                        var value = variant.options[i];
                        var valueHandle = awe_convertVietnamese(value);
                        //console.log(value);
                        var forText = 'swatch-' + i + '-' + valueHandle;
                        if (optionValues.indexOf(value) < 0) {
                            //not yet inserted
                            options += '<div data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                            if (is_color) {
                                options += '<div class="tooltip">' + value + '</div>';
                            }
                            options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';

                            if (is_color) {
                                options += '<label for="' + forText + '" class="' + valueHandle + '" style="background-color: ' + valueHandle + '"></label>';
                            } else {
                                options += '<label for="' + forText + '">' + value + '</label>';
                            }
                            options += '</div>';
                            //console.log(valueHandle);
                            if (variant.available) {}
                            optionValues.push(value);
                        }
                    }
                    options += '</div>';
                }


                quickview.find('form.variants > select').after(options);
                var chon = [];
                var qmoney = [];
                var qimage = [];
                var qid = [];
                quickview.find('.swatch :radio').change(function() {
                    var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                    var optionValue = $(this).val();
                    $(this)
                        .closest('form')
                        .find('.single-option-selector')
                        .eq(optionIndex)
                        .val(optionValue)
                        .trigger('change');

                    var variant_id = $('.quickview-product select[name=id]').val();

                    var check = false;
                    for (var i = 0; i < qid.length; i++) {
                        if (qid[i] == variant_id) {
                            var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                            var totalPrice = qmoney[i] * quantity;
                            var gia = Bizweb.formatMoney(qmoney[i], window.money_format);
                            var totalPriceText = Bizweb.formatMoney(totalPrice, window.money_format);

                            var totalPriceHtml = $('.quickview-product .price').html();


                            $('.quickview-product .total-price span').html(totalPriceText);
                            $('.quickview-product .price').html(gia);
                            currency();

                            if (qimage[i]) {
                                $('.quickview-product .featured-image img').attr('src', qimage[i]);
                            }


                        }
                    }
                    for (var i = 0; i < chon.length; i++) {


                        if (chon[i] == variant_id) {
                            var check = true;
                        } else {}
                    }

                    if (check == true) {
                        $('.quickview-product .btn-addToCart').attr('disabled', 'disabled');

                        $(".quickview-product .btn-addToCart").removeAttr("disabled");
                    }

                });

                quickview.find("form.variants .selector-wrapper label").each(function(n, r) {
                    $(this).html(t.options[n].name)
                })
            } else {
                quickview.find("form.variants > select").remove();
                var q = '<input type="hidden" name="variantId" value="' + t.variants[0].id + '">';
                quickview.find("form.variants").append(q);
            }
        }

        function productImage() {
            $('#thumblist').owlCarousel({
                navigation: true,
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 4],
                itemsTablet: [768, 3],
                itemsTabletSmall: [540, 4],
                itemsMobile: [360, 4]
            });

            if (!!$.prototype.fancybox) {
                $('li:visible .fancybox, .fancybox.shown').fancybox({
                    'hideOnContentClick': true,
                    'openEffect': 'elastic',
                    'closeEffect': 'elastic'
                });
            }
        }
        /* Quick View ADD TO CART */
        function updatePricingQuickView() {

            //Currency.convertAll(window.shop_currency, $("#currencies a.selected").data("currency"), "span.money", "money_format")


        }

        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        $(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function(e) {
            $("#quick-view-product").fadeOut(0);
            awe_hidePopup();
            $('#quick-view-product').modal('hide');
        });
        $(document).on('click', '.fix_add_to_cart', function(e) {
            e.preventDefault();
            $('#quick-view-product').modal('hide');
            var $this = $(this);
            var form = $this.parents('form');
            $.ajax({
                type: 'POST',
                url: '/cart/add.js',
                async: false,
                data: form.serialize(),
                dataType: 'json',
                error: addToCartFail,
                beforeSend: function() {},
                success: addToCartSuccess,
                cache: false
            });
        });
    </script>--}}

    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>

    <div class="support-online">
        <div class="support-content" style="display: none;">

            <a href="tel:0982362509" class="call-now" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <span>Gọi ngay: 0982 362 509</span>
            </a>


            <a class="mes" href="https://www.messenger.com/t/561797710650232" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Chat qua Messenger</span>
            </a>


            <a class="zalo" href="mailto:baotrung304@gmail.com" target="_blank">
                <i class="fa fa-envelope"></i>
                <span>baotrung304@gmail.com</span>
            </a>


            <a class="sms" href="sms:0982362509">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                <span>SMS: 0982 362 509</span>
            </a>

        </div>
        <a class="btn-support">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        </a>
    </div>

</body>

</html>