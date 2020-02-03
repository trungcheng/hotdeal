<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ant Kitchen - Thanh toán đơn hàng" />
    <title>Thanh toán đơn hàng | Ant Kitchen</title>
    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/nprogress.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/checkout.css') }}" rel="stylesheet" type="text/css" />
    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'ant-kitchen.mysapo.net';
        Bizweb.theme = {
            "id": 606449,
            "role": "main",
            "name": "Ant Kitchen"
        };
        Bizweb.template = '';
    </script>
    <script type="text/javascript">
        if (typeof Bizweb == 'undefined') {
            Bizweb = {};
        }
        Bizweb.Checkout = {};
        Bizweb.Checkout.token = "0f15394c112542c79b8eb0caee02058a";
        Bizweb.Checkout.apiHost = "ant-kitchen.mysapo.net";
    </script>
</head>

<body class="body--custom-background-color ">
    <div class="banner" data-header="">
        <div class="wrap">
            <div class="shop logo logo--left ">

                <h1 class="shop__name">
                    <a href="/">
                        Ant Kitchen
                    </a>
                </h1>

            </div>
        </div>
    </div>
    <button class="order-summary-toggle" bind-event-click="Bizweb.StoreCheckout.toggleOrderSummary(this)">
        <div class="wrap">
            <h2>
                <label class="control-label">Đơn hàng</label>
                <label class="control-label hidden-small-device">
                    (2 sản phẩm)
                </label>
                <label class="control-label visible-small-device inline">
                    (2)
                </label>
            </h2>
            <a class="underline-none expandable pull-right" href="javascript:void(0)">
                Xem chi tiết
            </a>
        </div>
    </button>

    <div context="paymentStatus" define='{ paymentStatus: new Bizweb.PaymentStatus(this,{payment_processing:"",payment_provider_id:"",payment_info:{} }) }'>

    </div>
    <form method="post" action="" data-toggle="validator" class="content stateful-form formCheckout">
        <div class="wrap" context="checkout" define='{checkout: new Bizweb.StoreCheckout(this,{ token: "0f15394c112542c79b8eb0caee02058a", email: "", totalOrderItemPrice: 20900000.0000, shippingFee: 0, freeShipping: false, requiresShipping: true, existCode: false, code: "", discount: 0, settingLanguage: "vi", moneyFormat: "{{0}}₫", discountLabel: "Miễn phí", districtPolicy: "optional", wardPolicy: "hidden", district: "", ward: "", province:"", otherAddress: false, shippingId: 0, shippingMethods: [], customerAddressId: 0, reductionCode: "" })}'>
            <div class='sidebar '>
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label">Đơn hàng (2 sản phẩm)</label>
                    </h2>
                    <hr class="full_width" />
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product">
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>

                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img src="//bizweb.dktcdn.net/thumb/thumb/100/270/860/products/chao-2-88c038bb-2888-471f-9812-cc19974ccea8.jpg?v=1510583505400" class="product-thumbnail__image" />

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">

                                                    Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm
                                                </span>

                                                <span class="product-info-description">
                                                    Z / Đen
                                                </span>


                                            </td>
                                            <td class="product-price text-right">
                                                1.000.000₫
                                            </td>
                                        </tr>

                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img src="//bizweb.dktcdn.net/thumb/thumb/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357" class="product-thumbnail__image" />

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">

                                                    Android Tivi Sony 4K 49 inch KD-49X7500E
                                                </span>


                                            </td>
                                            <td class="product-price text-right">
                                                19.900.000₫
                                            </td>
                                        </tr>

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
                    <div class="order-summary order-summary--discount">
                        <div class="summary-section">
                            <div class="form-group m0" bind-show="!existCode || !applyWithPromotion || code == null || !code.length">
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
                    </div>
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span bind="money(totalOrderItemPrice - discount,'{{0}}₫')" class="total-line-subprice pull-right">
                                    20.900.000₫
                                </span>
                            </div>
                            <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span>
                                <span bind="shippingFee >  0 ? money(shippingFee,'{{0}}₫') : ((requiresShipping && shippingMethods.length == 0) ? 'Khu vực này không hỗ trợ vận chuyển': 'Miễn phí')" class="total-line-shipping pull-right" bind-show="ShippingProvinceId || BillingProvinceId && !otherAddress || (requiresShipping && shippingMethods.length > 0)">

                                    Miễn phí

                                </span>
                            </div>
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span bind="money(totalOrderItemPrice + (isNaN(shippingFee) ? 0 : shippingFee) - discount,'{{0}}₫')" class="total-line-price pull-right">
                                    20.900.000₫
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
                            <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="button" bind-event-click="paymentCheckout('AIzaSyAjQYbV19v7UMDVk0cDZ54yKh3OP1hQhbk;AIzaSyCLd-YkfOzBXlNGfS_FNLnpolyME1tRAJI;AIzaSyDdvilzaJlb50t2IRC3PrfSb1lNzf6n3pQ')" value="ĐẶT HÀNG" />
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
                                Ant Kitchen
                            </a>
                        </h1>

                    </div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {&quot;address1&quot;:null,&quot;address2&quot;:null,&quot;city&quot;:&quot;&quot;,&quot;company&quot;:null,&quot;country&quot;:&quot;Việt Nam&quot;,&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;name&quot;:&quot;&quot;,&quot;full_name&quot;:&quot;&quot;,&quot;phone&quot;:null,&quot;phone_number&quot;:null,&quot;province&quot;:&quot;&quot;,&quot;province_code&quot;:&quot;&quot;,&quot;district&quot;:&quot;&quot;,&quot;district_code&quot;:&quot;&quot;,&quot;ward&quot;:&quot;&quot;,&quot;ward_code&quot;:&quot;&quot;,&quot;zip&quot;:null,&quot;country_code&quot;:&quot;VN&quot;}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>

                                        {{--<a class="layout-flex__item section__title--link" href="/account/login?returnUrl=/checkout">
                                            <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                                            Đăng nhập
                                        </a>--}}

                                    </div>
                                </div>
                                <div class="section__content">


                                    <div class="form-group" bind-class="{'has-error' : invalidEmail}">
                                        <div>
                                            <label class="field__input-wrapper" bind-class="{ 'js-is-filled': email }">
                                                <span class="field__label" bind-event-click="handleClick(this)">
                                                    Email
                                                </span>
                                                <input name="Email" type="email" bind-event-change="changeEmail()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng" required name="Email" value="" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" bind="email" />
                                            </label>
                                        </div>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>

                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="BillingAddress.LastName" type="text" bind-event-change="saveAbandoned()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_last_name" data-error="Vui lòng nhập họ tên" required bind="billing_address.full_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.phone }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Số điện thoại
                                                    </span>
                                                    <input name="BillingAddress.Phone" bind-event-change="saveAbandoned()" type="tel" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_phone" data-error="Vui lòng nhập số điện thoại" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" bind="billing_address.phone" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>


                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.address1 }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Địa chỉ
                                                    </span>
                                                    <input name="BillingAddress.Address1" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_address1" bind="billing_address.address1" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>



                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingProvinceId">
                                                        Tỉnh thành
                                                    </label>
                                                    <select class="field__input field__input--select form-control filter-dropdown" name="BillingProvinceId" id="billingProvince" required data-error="Bạn chưa chọn tỉnh thành" bind-event-change="billingProvinceChange('')" bind="BillingProvinceId">
                                                        <option value=''>--- Chọn tỉnh thành ---</option>


                                                        <option value="1">Hà Nội</option>

                                                        <option value="2">TP Hồ Chí Minh</option>

                                                        <option value="3">An Giang</option>

                                                        <option value="4">Bà Rịa-Vũng Tàu</option>

                                                        <option value="5">Bắc Giang</option>

                                                        <option value="6">Bắc Kạn</option>

                                                        <option value="7">Bạc Liêu</option>

                                                        <option value="8">Bắc Ninh</option>

                                                        <option value="9">Bến Tre</option>

                                                        <option value="10">Bình Định</option>

                                                        <option value="11">Bình Dương</option>

                                                        <option value="12">Bình Phước</option>

                                                        <option value="13">Bình Thuận</option>

                                                        <option value="14">Cà Mau</option>

                                                        <option value="15">Cần Thơ</option>

                                                        <option value="16">Cao Bằng</option>

                                                        <option value="17">Đà Nẵng</option>

                                                        <option value="18">Đắk Lắk</option>

                                                        <option value="19">Đắk Nông</option>

                                                        <option value="20">Điện Biên</option>

                                                        <option value="21">Đồng Nai</option>

                                                        <option value="22">Đồng Tháp</option>

                                                        <option value="23">Gia Lai</option>

                                                        <option value="24">Hà Giang</option>

                                                        <option value="25">Hà Nam</option>

                                                        <option value="26">Hà Tĩnh</option>

                                                        <option value="27">Hải Dương</option>

                                                        <option value="28">Hải Phòng</option>

                                                        <option value="29">Hậu Giang</option>

                                                        <option value="30">Hòa Bình</option>

                                                        <option value="31">Hưng Yên</option>

                                                        <option value="32">Khánh Hòa</option>

                                                        <option value="33">Kiên Giang</option>

                                                        <option value="34">Kon Tum</option>

                                                        <option value="35">Lai Châu</option>

                                                        <option value="36">Lâm Đồng</option>

                                                        <option value="37">Lạng Sơn</option>

                                                        <option value="38">Lào Cai</option>

                                                        <option value="39">Long An</option>

                                                        <option value="40">Nam Định</option>

                                                        <option value="41">Nghệ An</option>

                                                        <option value="42">Ninh Bình</option>

                                                        <option value="43">Ninh Thuận</option>

                                                        <option value="44">Phú Thọ</option>

                                                        <option value="45">Phú Yên</option>

                                                        <option value="46">Quảng Bình</option>

                                                        <option value="47">Quảng Nam</option>

                                                        <option value="48">Quảng Ngãi</option>

                                                        <option value="49">Quảng Ninh</option>

                                                        <option value="50">Quảng Trị</option>

                                                        <option value="51">Sóc Trăng</option>

                                                        <option value="52">Sơn La</option>

                                                        <option value="53">Tây Ninh</option>

                                                        <option value="54">Thái Bình</option>

                                                        <option value="55">Thái Nguyên</option>

                                                        <option value="56">Thanh Hóa</option>

                                                        <option value="57">Thừa Thiên Huế</option>

                                                        <option value="58">Tiền Giang</option>

                                                        <option value="59">Trà Vinh</option>

                                                        <option value="60">Tuyên Quang</option>

                                                        <option value="61">Vĩnh Long</option>

                                                        <option value="62">Vĩnh Phúc</option>

                                                        <option value="63">Yên Bái</option>


                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingDistrictId">
                                                        Quận huyện
                                                    </label>
                                                    <select class="field__input field__input--select form-control filter-dropdown" name="BillingDistrictId" id="billingDistrict" bind-event-change="billingDistrictChange('')" bind="BillingDistrictId">
                                                        <option value="">--- Chọn quận huyện ---</option>



                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>



                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && loadedShippingMethods && shippingMethods.length == 0  && BillingProvinceId  ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section pt10">
                                <div class="section__content">
                                    <div class="form-group" bind-show="requiresShipping">
                                        <div class="checkbox-wrapper">
                                            <div class="checkbox__input">
                                                <input class="input-checkbox" type="checkbox" value="false" name="otherAddress" id="other_address" bind="otherAddress" bind-event-change="changeOtherAddress(this)">
                                            </div>
                                            <label class="checkbox__label" for="other_address">
                                                Giao hàng đến địa chỉ khác
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section pt10" bind-show="otherAddress">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">
                                            Thông tin nhận hàng
                                        </label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div bind-show="otherAddress" define="{shipping_address: {&quot;address1&quot;:null,&quot;address2&quot;:null,&quot;city&quot;:&quot;&quot;,&quot;company&quot;:null,&quot;country&quot;:&quot;Việt Nam&quot;,&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;name&quot;:&quot;&quot;,&quot;full_name&quot;:&quot;&quot;,&quot;phone&quot;:null,&quot;phone_number&quot;:null,&quot;province&quot;:&quot;&quot;,&quot;province_code&quot;:&quot;&quot;,&quot;district&quot;:&quot;&quot;,&quot;district_code&quot;:&quot;&quot;,&quot;ward&quot;:&quot;&quot;,&quot;ward_code&quot;:&quot;&quot;,&quot;zip&quot;:null,&quot;country_code&quot;:&quot;VN&quot;}, shipping_expand:true,show_district:  true ,show_ward:  false ,show_country:  true }" class="shipping  hide ">
                                        <div bind-show="shipping_expand || !otherAddress">
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="ShippingAddress.LastName" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_last_name" data-error="Vui lòng nhập họ tên" bind="shipping_address.full_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Số điện thoại
                                                    </span>
                                                    <input name="ShippingAddress.Phone" bind-event-change="saveAbandoned()" type="tel" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_phone" data-error="Vui lòng nhập số điện thoại" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" bind="shipping_address.phone" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>


                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.address1 }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Địa chỉ
                                                    </span>
                                                    <input name="ShippingAddress.Address1" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_address1" bind="shipping_address.address1" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>



                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="BillingProvinceId">
                                                        Tỉnh thành
                                                    </label>
                                                    <select class="field__input field__input--select form-control filter-dropdown" name="ShippingProvinceId" id="shippingProvince" data-error="Bạn chưa chọn tỉnh thành" bind-event-change="shippingProvinceChange('')" bind="ShippingProvinceId">
                                                        <option value=''>--- Chọn tỉnh thành ---</option>


                                                        <option value="1">Hà Nội</option>

                                                        <option value="2">TP Hồ Chí Minh</option>

                                                        <option value="3">An Giang</option>

                                                        <option value="4">Bà Rịa-Vũng Tàu</option>

                                                        <option value="5">Bắc Giang</option>

                                                        <option value="6">Bắc Kạn</option>

                                                        <option value="7">Bạc Liêu</option>

                                                        <option value="8">Bắc Ninh</option>

                                                        <option value="9">Bến Tre</option>

                                                        <option value="10">Bình Định</option>

                                                        <option value="11">Bình Dương</option>

                                                        <option value="12">Bình Phước</option>

                                                        <option value="13">Bình Thuận</option>

                                                        <option value="14">Cà Mau</option>

                                                        <option value="15">Cần Thơ</option>

                                                        <option value="16">Cao Bằng</option>

                                                        <option value="17">Đà Nẵng</option>

                                                        <option value="18">Đắk Lắk</option>

                                                        <option value="19">Đắk Nông</option>

                                                        <option value="20">Điện Biên</option>

                                                        <option value="21">Đồng Nai</option>

                                                        <option value="22">Đồng Tháp</option>

                                                        <option value="23">Gia Lai</option>

                                                        <option value="24">Hà Giang</option>

                                                        <option value="25">Hà Nam</option>

                                                        <option value="26">Hà Tĩnh</option>

                                                        <option value="27">Hải Dương</option>

                                                        <option value="28">Hải Phòng</option>

                                                        <option value="29">Hậu Giang</option>

                                                        <option value="30">Hòa Bình</option>

                                                        <option value="31">Hưng Yên</option>

                                                        <option value="32">Khánh Hòa</option>

                                                        <option value="33">Kiên Giang</option>

                                                        <option value="34">Kon Tum</option>

                                                        <option value="35">Lai Châu</option>

                                                        <option value="36">Lâm Đồng</option>

                                                        <option value="37">Lạng Sơn</option>

                                                        <option value="38">Lào Cai</option>

                                                        <option value="39">Long An</option>

                                                        <option value="40">Nam Định</option>

                                                        <option value="41">Nghệ An</option>

                                                        <option value="42">Ninh Bình</option>

                                                        <option value="43">Ninh Thuận</option>

                                                        <option value="44">Phú Thọ</option>

                                                        <option value="45">Phú Yên</option>

                                                        <option value="46">Quảng Bình</option>

                                                        <option value="47">Quảng Nam</option>

                                                        <option value="48">Quảng Ngãi</option>

                                                        <option value="49">Quảng Ninh</option>

                                                        <option value="50">Quảng Trị</option>

                                                        <option value="51">Sóc Trăng</option>

                                                        <option value="52">Sơn La</option>

                                                        <option value="53">Tây Ninh</option>

                                                        <option value="54">Thái Bình</option>

                                                        <option value="55">Thái Nguyên</option>

                                                        <option value="56">Thanh Hóa</option>

                                                        <option value="57">Thừa Thiên Huế</option>

                                                        <option value="58">Tiền Giang</option>

                                                        <option value="59">Trà Vinh</option>

                                                        <option value="60">Tuyên Quang</option>

                                                        <option value="61">Vĩnh Long</option>

                                                        <option value="62">Vĩnh Phúc</option>

                                                        <option value="63">Yên Bái</option>


                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field__input-wrapper field__input-wrapper--select">
                                                    <label class="field__label" for="ShippingDistrictId">
                                                        Quận huyện
                                                    </label>
                                                    <select class="field__input field__input--select form-control filter-dropdown" name="ShippingDistrictId" id="shippingDistrict" bind-event-change="shippingDistrictChange('')" bind="ShippingDistrictId">
                                                        <option value="">--- Chọn quận huyện ---</option>



                                                    </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>



                                            <div class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && shippingMethods.length == 0 && ShippingProvinceId ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section" bind-class="{ 'pt0': otherAddress, 'pt10': !otherAddress}">
                                <div class="section__content">
                                    <div class="form-group m0">
                                        <div>
                                            <label class="field__input-wrapper" bind-class="{'js-is-filled': note}" style="border: none">
                                                <span class="field__label" bind-event-click="handleClick(this)">
                                                    Ghi chú
                                                </span>
                                                <textarea name="note" bind-event-change="saveAbandoned()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" bind="note" class="field__input form-control m0"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            {{--<div class="section shipping-method hide" bind-show="shippingMethodsLoading || shippingMethods.length > 0">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-truck fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="wait-loading-shipping-methods hide" bind-show="shippingMethodsLoading" style="margin-bottom:10px">
                                        <div class="next-spinner">
                                            <svg class="icon-svg icon-svg--color-accent icon-svg--size-32 icon-svg--spinner">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#next-spinner"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="content-box" bind-show="!shippingMethodsLoading && shippingMethods.length > 0">

                                    </div>
                                </div>
                            </div>--}}
                            <div class="section payment-methods" bind-class="{'p0--desktop': shippingMethods.length == 0}">
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
                                                    <input class="input-radio" type="radio" value="276514" name="PaymentMethodId" id="payment_method_276514" data-check-id="4" bind="payment_method_id" checked>
                                                </div>
                                                <label class="radio__label" for="payment_method_276514">
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

                                        <div class="radio-wrapper content-box__row content-box__row--secondary hide" id="payment-gateway-subfields-276514" bind-show="payment_method_id == 276514">
                                            <div class="blank-slate">
                                                <p>cod</p>


                                            </div>
                                        </div>


                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#moca-modal" data-backdrop="static" data-keyboard="false" class="trigger-moca-modal" style="display: none;" title="Thanh toán qua Moca">
                                        </a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#qr-error-modal" class="trigger-qr-error-modal" style="display: none;" title="Lỗi thanh toán">
                                        </a>
                                        <a data-toggle="modal" data-target="#zalopay_modal" data-backdrop="static" data-keyboard="false" class="trigger-zalopay-modal" style="display: none;" title="Thanh toán qua ZaloPay">
                                        </a>
                                        <div class="modal fade moca-modal" id="moca-modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div>
                                                        <iframe style="border: 0px; width: 100%; height: 100%;" src=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="qr-error-modal" data-width="" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                        <div class="invalid_order">
                                                            <p>Giao dịch của bạn chưa đủ hạn mức thanh toán</p>
                                                            <p>Hạn mức tối thiểu để thanh toán được là <span>1đ</span></p>
                                                            <p>Vui lòng chọn hình thức thanh toán khác</p>
                                                        </div>
                                                        <div class="custom_error_message"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade zalopay_modal" id="zalopay_modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div style="display:flex; justify-content: space-around;">
                                                            <div class="qr-wrapper">
                                                                <img />
                                                                <div class="qr-timer-container">
                                                                    Thời gian quét mã QR để thanh toán còn <span class="qr-timer" style="color:#4286f6;">300</span> giây
                                                                </div>
                                                            </div>
                                                            <div class="qr-guide-content">
                                                                <p><b>Thực hiện theo hướng dẫn sau để thanh toán:</b></p>
                                                                <p>Bước 1: Mở ứng dụng ZaloPay</p>
                                                                <p>Bước 2: Chọn "Thanh Toán" <img src="//bizweb.dktcdn.net/assets/images/barcode-zalo.png" class="zalopay-qr-payment-icon"></img> và quét mã QR code bên cạnh</p>
                                                                <p>Bước 3: Hoàn thành các bước thanh toán theo hướng dẫn trên ứng dụng</p>
                                                            </div>
                                                        </div>
                                                        <div style="justify-content: flex-end;display: flex;"><button type="button" class="btn btn-default" data-dismiss="modal">Hủy thanh toán</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="section hidden-md hidden-lg">
                                <div class="form-group clearfix m0">
                                    <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="button" bind-event-click="paymentCheckout('AIzaSyAjQYbV19v7UMDVk0cDZ54yKh3OP1hQhbk;AIzaSyCLd-YkfOzBXlNGfS_FNLnpolyME1tRAJI;AIzaSyDdvilzaJlb50t2IRC3PrfSb1lNzf6n3pQ')" value="ĐẶT HÀNG" />
                                </div>
                                <div class="text-center mt20">
                                    <a class="previous-link" href="/cart">
                                        <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                        <span>Quay về giỏ hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="main_footer footer unprint">



                    <div class="mt10"></div>
                </div>
                <div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Chính sách hoàn trả</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Chính sách bảo mật</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Điều khoản sử dụng</h4>
                            </div>
                            <div class="modal-body">
                                <pre></pre>
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

        context = {}

        $(function() {
            Twine.reset(context).bind().refresh();
        });

        $(document).ready(function() {
            var $select2 = $('.filter-dropdown').select2({
                containerCssClass: 'field__input',
                dropdownCssClass: 'field__input',
                dropdownParent: $('.main_content'),
                language: {
                    noResults: function() {
                        return "Không tìm thấy kết quả"
                    },
                    searching: function() {
                        return "Đang tìm…"
                    }
                }
            });

            setTimeout(function() {




                Twine.context(document.body).checkout.calculateFeeAndSave('');



            }, 50);

        });
    </script>
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
</body>

</html>