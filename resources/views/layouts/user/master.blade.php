<!DOCTYPE html>
<html data-wf-page="5d0b80bd2ab90c35cef3f7a9" data-wf-site="5d0b80bd2ab90c4f90f3f7ac">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page') - VISCI Re-Coded</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" href="@yield('alternate')">
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:title" content="@yield('ogTitle')"> 
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('ogUrl')"> 
    <meta property="og:description" content="@yield('ogDesc')"> 
    <meta property="og:site_name" content="VISCI">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/webflow.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/visci-re-coded-09-05-4929290c404f89e2b5.webflow.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    @yield('pageCss')
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic:vietnamese,latin"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
</head>
<body>
    @include('layouts.user.header')
    @yield('home')
    <main style="opacity:0" class="b-body">
        @yield('content')
    </main>
    @include('layouts.user.footer')

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/webflow.js') }}"></script>
    @yield('pageJs')
</body>
</html>