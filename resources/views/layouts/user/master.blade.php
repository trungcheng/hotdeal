<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Thạch Vũ" />

    <title>@yield('page') | Thachvu.com</title>

    <!-- <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon"> -->

    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    @section('pageCss')
    @show

</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1"> 
        <!-- Top bar -->
        @include('layouts.user.topbar')
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

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.tp.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    @section('pageJs')
    @show

</body>
</html>