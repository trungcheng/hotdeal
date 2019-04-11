<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page') | Donghoxachtay.store</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" href="@yield('alternate')" hreflang="vi-vn">
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:title" content="@yield('ogTitle')"> 
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('ogUrl')"> 
    <meta property="og:description" content="@yield('ogDesc')"> 
    <meta property="og:site_name" content="Donghoxachtay">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}" />
    @yield('pageCss')
    <script src="{{ asset('frontend/js/vendor/modernizr.custom.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=536910540049979&autoLogAppEvents=1"></script>
    {!! ($setting != '') ? $setting->fb_pixel_code : '' !!}
</head>
<body>
    <div class="page pg-home">
        <form role="form" method="get" action="" style="display:contents !important;">
        @include('layouts.user.header')
        <div class="page-main">
            <hr class="divider my-0">
            <section class="bg-gray-100 fs-sm">
                <div class="container py-2 py-lg-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="swiper swiper-button-simple swiper-news">
                                <div class="swiper-container" data-plugin="swiper" data-loop="true" data-delay="5000">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <i class="fa fa-plane mr-3"></i>Cam kết hàng mới tinh fullbox 100%, giá tốt nhất thị trường
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <i class="fa fa-plane mr-3"></i>Miễn phí ship toàn quốc, ship COD toàn quốc
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <i class="fa fa-plane mr-3"></i>Đồng hồ chính hãng 100%
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-none d-md-flex">
                                        <div class="swiper-button-prev">
                                            <i class="icont-chevron-left"></i>
                                        </div>
                                        <div class="swiper-button-next">
                                            <i class="icont-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider my-0">
            @yield('content')
        </div>
        @include('layouts.user.footer')
        </form>
    </div>
    <a class="backtotop btn btn-primary rounded-circle shadow" id="back-to-top" href="#"></a>

    <div class="social-button">
        <div class="social-button-content" style="display:none">
            <a href="tel:0988832333" class="call-icon" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated alo-circle"></div>
                <div class="animated alo-circle-fill"></div>
                <span>Hotline: 098.883.2333</span>
            </a>
            <a href="sms:0988832333" class="sms">
                <i class="fa fa-sms" aria-hidden="true"></i>
                <span>SMS: 098.883.2333</span>
            </a>
            <a href="https://www.facebook.com/truewatchdongho" class="mes">
                <i class="fa fa-facebook facebook" aria-hidden="true"></i>
                <span>Nhắn tin Facebook</span>
            </a>
            <a href="http://zalo.me/0988832333" class="zalo">
                <i class="fa fa-comment-dots" aria-hidden="true"></i>
                <span>Zalo: 098.883.2333</span>
            </a>
        </div>
       
        <a class="user-support">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <div class="animated alo-circle"></div>
            <div class="animated alo-circle-fill lantoa"></div>
        </a>
    </div>

    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/js/photoswipe-init.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js?').time() }}"></script>
    @yield('pageJs')
    <script type="text/javascript">
        $(document).on('keydown', '.search-input', function(e) {
            var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
            if (key == 13) {
                e.preventDefault();
                window.location.href = '/s?key=' + $(this).val();
            }
        });
        $(function () {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
            $('.user-support').click(function(event) {
                $('.social-button-content').slideToggle();
            });
        });
    </script>
</body>
</html>