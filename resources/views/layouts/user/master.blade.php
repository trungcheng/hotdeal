<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page') | donghoxachtay.store</title>
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
    <meta property="og:site_name" content="Autwatch">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    @yield('pageCss')
    <script src="{{ asset('frontend/js/vendor/modernizr.custom.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=536910540049979&autoLogAppEvents=1"></script>
    {!! $setting->fb_pixel_code !!}
</head>
<body>
    <div class="page pg-home">
        <!-- Header -->
        @include('layouts.user.header')
        <!-- Content -->
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
                                            <i class="fa fa-plane mr-3"></i>Miễn phí Ship toàn quốc, Ship COD toàn quốc (Có cọc)
                                            <!-- <a href="javascript:void(0)">
                                                <ins>Xem thông tin chi tiết 1</ins>
                                            </a> -->
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <i class="fa fa-plane mr-3"></i>Miễn phí Ship toàn quốc, Ship COD toàn quốc (Có cọc)
                                            <!-- <a href="javascript:void(0)">
                                                <ins>Xem thông tin chi tiết 2</ins>
                                            </a> -->
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <i class="fa fa-plane mr-3"></i>Miễn phí Ship toàn quốc, Ship COD toàn quốc (Có cọc)
                                            <!-- <a href="javascript:void(0)">
                                                <ins>Xem thông tin chi tiết 3</ins>
                                            </a> -->
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
        <!-- Footer -->
        @include('layouts.user.footer')
    </div>
    <a class="backtotop btn btn-primary rounded-circle shadow" id="back-to-top" href="#"></a>

    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/js/photoswipe-init.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @yield('pageJs')
</body>
</html>