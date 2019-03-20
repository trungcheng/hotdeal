<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="TUTA">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page') | Autwatch.vn</title>
    
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">

    @yield('pageCss')

    <script src="{{ asset('frontend/js/vendor/modernizr.custom.js') }}"></script>

</head>
<body>
    <div class="page pg-home">
        <!-- Header -->
        @include('layouts.user.header')
        <!-- Content -->
        @yield('content')
        <!-- Footer -->
        @include('layouts.user.footer')
    </div>
    <a class="backtotop btn btn-primary rounded-circle shadow" id="back-to-top" href="#"></a>

    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.sticky-kit.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/js/photoswipe-init.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    @yield('pageJs')

</body>
</html>