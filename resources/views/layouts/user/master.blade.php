<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page') | Thachvu.com</title>
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
    <meta property="og:site_name" content="Thachvu">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    @section('pageCss')
    @show
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script src="{{ asset('frontend/js/vendors/modernizr.custom.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=590845398084862&autoLogAppEvents=1"></script>
    {!! ($setting != '') ? $setting->fb_pixel_code : '' !!}
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1"> 
        <!-- Top bar -->
        {{--@include('layouts.user.topbar')--}}
        <!-- Header -->
        @include('layouts.user.header')
        <!-- Content -->
        <div id="content"> 
            @yield('content')
            <!-- Newslatter -->
            <section class="newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 style="font-size:20px;">Đăng ký để nhận những thông tin mới nhất từ chúng tôi</h3>
                        </div>
                        <div class="col-md-6">
                            <form>
                              <input type="email" placeholder="Nhập địa chỉ email...">
                              <button type="submit">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        @include('layouts.user.footer')
        <!-- GO TO TOP  --> 
        <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
        <!-- GO TO TOP End --> 
    </div>
    <!-- End Page Wrapper --> 

    <!-- JavaScripts --> 
    <script src="{{ asset('frontend/js/vendors/modernizr.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery/jquery.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/wow.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/own-menu.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/jquery.sticky.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery.magnific-popup.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script src="{{ asset('frontend/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
    <script src="{{ asset('frontend/rs-plugin/js/jquery.tp.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js?').time() }}"></script>

    @section('pageJs')
    @show

    <script type="text/javascript">
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
        });
    </script>

</body>
</html>