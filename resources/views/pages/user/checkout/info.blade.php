<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="King Bep - Thanh toán đơn hàng" />
    <title>Thanh toán đơn hàng | King Bếp</title>
    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/nprogress.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/checkout.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="body--custom-background-color ">

    <div class="banner" data-header="">
        <div class="wrap">
            <div class="shop logo logo--left ">
                <h1 class="shop__name">
                    <a href="/">
                        King Bếp
                    </a>
                </h1>
            </div>
        </div>
    </div>

    <button class="order-summary-toggle">
        <div class="wrap">
            <h2>
                <label class="control-label">Đơn hàng</label>
                <label class="control-label hidden-small-device">
                    ({{ $countItemCart }} sản phẩm)
                </label>
                <label class="control-label visible-small-device inline">
                    ({{ $countItemCart }})
                </label>
            </h2>
            <a class="underline-none expandable pull-right" href="javascript:void(0)">
                Xem chi tiết
            </a>
        </div>
    </button>

    <form id="formCheckout" method="post" action="{{ route('postStep2') }}" data-toggle="validator" class="content stateful-form formCheckout">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ \Auth::id() }}">

        <div class="wrap" context="checkout">
            <div class='sidebar'>
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label">Đơn hàng ({{ $countItemCart }} sản phẩm)</label>
                    </h2>
                    <hr class="full_width" />
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product">
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
                                        @foreach ($cart as $item)
                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">
                                                        <img src="{{ $item->options->image }}" class="product-thumbnail__image" />
                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">{{ $item->qty }}</span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">
                                                    {{ $item->name }}
                                                </span>
                                            </td>
                                            <td class="product-price text-right">
                                                {{ number_format($item->price, 0, 0, '.') }}đ
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="order-summary__scroll-indicator">
                                    Cuộn chuột để xem thêm
                                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="m0" />
                    </div>
                    {{--<div class="order-summary order-summary--discount">
                        <div class="summary-section">
                            {{--<div class="form-group m0" bind-show="!existCode || !applyWithPromotion || code == null || !code.length">
                                <div class="field__input-btn-wrapper">
                                    <div class="field__input-wrapper">
                                        <input bind="code" name="code" type="text" class="form-control discount_code" placeholder="Nhập mã giảm giá" value="  " id="checkout_reduction_code" />
                                    </div>
                                    <button bind-event-click="reduction_code = false, caculateShippingFee('')" class="btn btn-primary event-voucher-apply" type="button">Áp dụng</button>
                                </div>
                            </div>
                            <div bind-class="{'warning' : existCode && !freeShipping && discount == 0,'success' : existCode && ( freeShipping || discount >0 )}" class="clearfix hide" bind-show="code!= null && code.length && existCode && applyWithPromotion">
                                <div class="pull-left">
                                    <i class="fa fa-check applied-discount-status-success" aria-hidden="true"></i>
                                    <i class="fa fa-exclamation-triangle applied-discount-status-warning" aria-hidden="true"></i>
                                </div>
                                <div bind="code" class="pull-left applied-discount-code">

                                </div>
                                <div bind="(discountShipping && freeShipping) ? 'Miễn phí' : money(discount,'{{0}}₫')" class="pull-right">

                                    0

                                </div>
                                <input bind-event-click="removeCode('')" class="btn btn-delete" type="button" value="×" name="commit">
                            </div>
                            <div class="error mt10 hide" bind-show="inValidCode">
                                Mã khuyến mãi không hợp lệ
                            </div>
                            <div class="error mt10 hide" bind-show="!applyWithPromotion && existCode">
                                Mã khuyến mãi không được áp dụng chung với chương trình khuyến mãi
                            </div>
                        </div>
                        <hr class="m0" />
                    </div>--}}
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span class="total-line-subprice pull-right">
                                    {{ $total }}đ
                                </span>
                            </div>
                            <div class="total-line total-line-shipping clearfix">
                                <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span>
                                <span id="delivery-fee" class="pull-right">
                                    Miễn phí
                                </span>
                            </div>
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span id="total" class="total-line-price pull-right">
                                    {{ $total }}đ
                                </span>
                                <span id="new-total" class="hide total-line-price pull-right">
                                    <?php
                                        $newtotal = 25000;
                                        foreach ($cart as $item) {
                                            $newtotal += ($item->price * $item->qty);
                                        }
                                    ?>
                                    {{ number_format($newtotal, 0, 0,'.') }}đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="{{ route('cart') }}">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                            </a>
                            <input class="btn btn-primary btn-checkout" type="submit" value="ĐẶT HÀNG" />
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">
                        <h1 class="shop__name">
                            <a href="/">
                                King Bếp
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="main_content">
                    <div class="row">

                        @foreach (['danger', 'warning', 'success', 'info'] as $key)
                            @if(Session::has($key))
                                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                            @endif
                        @endforeach
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="list-style:none">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-md-6 col-lg-6">
                            <div class="section">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>
                                    </div>
                                </div>
                                <div class="section__content">
                                    <div class="form-group" bind-class="{'has-error': invalidEmail}">
                                        <div>
                                            <label class="field__input-wrapper" bind-class="{'js-is-filled': email }">
                                                <input placeholder="Email" name="customer_email" type="email" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng" required value="" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" bind="email" />
                                            </label>
                                        </div>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>

                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{'js-is-filled': billing_address.customer_name }">
                                                    <input placeholder="Họ và tên" name="customer_name" type="text" class="field__input form-control" id="_billing_address_last_name" data-error="Vui lòng nhập họ tên" required bind="billing_address.customer_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.customer_phone }">
                                                    <input placeholder="Số điện thoại" name="customer_phone" class="field__input form-control" id="_billing_address_phone" data-error="Vui lòng nhập số điện thoại" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" required bind="billing_address.customer_phone" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.customer_address }">
                                                    <input placeholder="Địa chỉ giao hàng" name="customer_address" class="field__input form-control" id="_billing_address_address1" data-error="Vui lòng nhập địa chỉ giao hàng" required bind="billing_address.customer_address" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': note }">
                                                    <textarea placeholder="Ghi chú thêm" name="note" bind="note" class="field__input form-control m0"></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="section payment-methods">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">

                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="Thanh toán tiền mặt khi nhận hàng" name="payment_method" checked>
                                                </div>
                                                <label class="radio__label">
                                                    <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                                                    <span class="radio__label__accessory">
                                                        <ul>
                                                            <li class="payment-icon-v2 payment-icon--4">
                                                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </label>
                                            </div> <!-- /radio-wrapper-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section delivery-methods">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio delivery-method" type="radio" value="Vận chuyển miễn phí" data-fee="Miễn phí" name="delivery_method" checked>
                                                </div>
                                                <label class="radio__label">
                                                    <span class="radio__label__primary">Vận chuyển miễn phí (7 - 12 ngày)</span>
                                                </label>
                                            </div> <!-- /radio-wrapper-->
                                        </div>
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio delivery-method" type="radio" value="Vận chuyển nhanh" data-fee="25.000đ" name="delivery_method">
                                                </div>
                                                <label class="radio__label">
                                                    <span class="radio__label__primary">Vận chuyển nhanh (4 - 7 ngày | +25k)</span>
                                                </label>
                                            </div> <!-- /radio-wrapper-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section hidden-md hidden-lg">
                                <div class="form-group clearfix m0">
                                    <input class="btn btn-primary btn-checkout" type="submit" value="ĐẶT HÀNG" />
                                </div>
                                <div class="text-center mt20">
                                    <a class="previous-link" href="{{ route('cart') }}">
                                        <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                        <span>Quay về giỏ hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="icon-symbols" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="spinner-large"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-270 364 66 66">
                    <path d="M-237 428c-17.1 0-31-13.9-31-31s13.9-31 31-31v-2c-18.2 0-33 14.8-33 33s14.8 33 33 33 33-14.8 33-33h-2c0 17.1-13.9 31-31 31z" /></svg></symbol>
            <symbol id="chevron-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                    <path d="M2 1l1-1 4 4 1 1-1 1-4 4-1-1 4-4" /></svg></symbol>
            <symbol id="success"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm3.784-13.198c.386-.396 1.02-.404 1.414-.018.396.386.404 1.02.018 1.414l-5.85 6c-.392.403-1.04.403-1.432 0l-3.15-3.23c-.386-.396-.378-1.03.018-1.415.395-.385 1.028-.377 1.414.018l2.434 2.5 5.134-5.267z" /></svg></symbol>
            <symbol id="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path d="M16 8.1l-8.1 8.1-1.1-1.1L13 8.9H0V7.3h13L6.8 1.1 7.9 0 16 8.1z" /></svg></symbol>
            <symbol id="spinner-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0v2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8h2z" /></svg></symbol>
            <symbol id="next-spinner"><svg preserveAspectRatio="xMinYMin">
                    <circle class="next-spinner__ring" cx="50%" cy="50%" r="45%"></circle>
                </svg></symbol>
        </svg>
    </div>

    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/twine.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/validator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/nprogress.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/money-helper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/select2-full.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('frontend/js/ua-parser.pack.js') }}" type='text/javascript'></script>
    <script src="{{ asset('frontend/js/checkout.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ajaxStart(function() {
            NProgress.start();
        });
        $(document).ajaxComplete(function() {
            NProgress.done();
        });
        $('.delivery-method').on('change', function () {
            $('#delivery-fee').text($(this).data('fee'));
            if ($(this).data('fee') == '25.000đ') {
                $('#total').addClass('hide');
                $('#new-total').removeClass('hide');
            } else {
                $('#total').removeClass('hide');
                $('#new-total').addClass('hide');
            }
        });
    </script>
</body>

</html>