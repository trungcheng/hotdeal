<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page')</title>
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
    <meta property="og:site_name" content="Vincom Retail">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @section('pageCss')
    @show
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <!-- Header -->
    @include('layouts.user.header')
    <!-- Content -->
    <div id="content"> 
        @yield('content')
    </div>
    <!-- Footer -->
    @include('layouts.user.footer')

    <!-- JavaScripts --> 
    <script>
        var clickBody = 1;
        function open_group(id){
            $('.list-child').css("display", "none");
            $('.list-'+id).css("display", "block");
            clickBody = 0;
        }

        $(document).ready(function () {
            var user = $('.box-user'),
            menuUser = $('.user-dropdown'),
            openLogin = false,
            closeUser = false;
            $('.box-user').click(function(){
                if (closeUser == true) {
                    if(openLogin == false){
                        menuUser.fadeOut();
                        closeUser = false;
                        console.log('true');
                    }
                } else {
                    menuUser.fadeIn();
                    closeUser = true;
                    console.log('false');
                }
                clickBody = 0;
            });

            $('.login').click(function(){
                openLogin = true;
            });

            $('body').click(function(){
                clickBody += 1;
                if (clickBody > 1) {
                    console.log('clickBody');
                    menuUser.fadeOut();
                    $('.list-child').css("display", "none");
                    closeUser = false;
                    openLogin = false;
                }
            });
        });

        $(function() {
            var nav = $(".header");
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    nav.addClass("f-nav");
                } else {
                    nav.removeClass("f-nav");
                }
            });
        });
    </script>

    @section('pageJs')
    @show

</body>
</html>