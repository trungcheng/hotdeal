<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>@yield('page') | Hotdeal</title>
    
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-4.2.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/fontawesome-5.6.1/css/all.min.css') }}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/stroyka/stroyka.css') }}">

    @section('pageCss')
    @show

</head>

<body>
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    
    <!-- mobile__menu -->
    @include('layouts.user.mobile-menu')
    <!-- mobile__menu / end -->

    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        @include('layouts.user.mobile-header')
        <!-- mobile site__header / end -->

        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">

                <!-- .topbar -->
                @include('layouts.user.topbar-header')
                <!-- .topbar / end -->
                
                <!-- .middlebar -->
                @include('layouts.user.middlebar-header')
                <!-- .middlebar / end  -->

                <!-- navbar -->
                @include('layouts.user.navbar')
                <!-- navbar / end -->

            </div>
        </header>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            @yield('content')
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        @include('layouts.user.footer')
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->

    <!-- js -->
    <script src="{{ asset('frontend/vendor/jquery-3.3.1/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl-carousel-2.3.4/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/nouislider-12.1.0/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/number.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/vendor/svg4everybody-2.1.9/svg4everybody.min.js') }}"></script>
    <script>
        svg4everybody();
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>

    @section('pageJs')
    @show

</body>

</html>