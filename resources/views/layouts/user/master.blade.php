<!DOCTYPE html">
<html data-wf-page="5d0b80bd2ab90c35cef3f7a9" data-wf-site="5d0b80bd2ab90c4f90f3f7ac" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page') | {{ $setting->getTranslation(app()->getLocale())->name }}</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" href="@yield('alternate')">
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:title" content="@yield('ogTitle')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('ogUrl')" />
    <meta property="og:image" content="@yield('ogImage')" />
    <meta property="og:description" content="@yield('ogDesc')" />
    <meta property="og:site_name" content="{{ $setting->getTranslation('en')->name }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/webclip.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/webflow.css?').time() }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/css/visci-re-coded-09-05-4929290c404f89e2b5.webflow.css?').time() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    <style>
        a.nav-link:visited {
            color: #17A53C
        }
    </style>
    @section('pageCss')
    @show
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Be Vietnam:100,100italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic:latin,vietnamese"
                ]
            }
        });
    </script>
    <script type="text/javascript">
        !function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
</head>

<body>
    <div class="preloader">
        <div class="preloader-container">
            <figure class="logo-image"></figure>
        </div>
    </div>
    <div style="opacity:0" class="layout">
        @include('layouts.user.header')

        @yield('home')

        @yield('content')

        @include('layouts.user.footer')

        @if (\Route::currentRouteName() == 'home')
        <div class="cookie-bar">
            <div>
                <h5 class="title-xs cookie">Cookies</h5>
                <p class="small-paragraph cookie">{{ trans('general.cookie_desc') }}</p>
                <p class="small-paragraph cookie">{!! trans('general.cookie_learn_more') !!}</p>
            </div>
            <a href="#" class="button-style cookie w-inline-block">
                <div class="button-label">{{ trans('general.cookie_accept') }}</div>
                <div class="hover-shape"></div>
            </a>
        </div>
        @endif
    </div>

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5d0b80bd2ab90c4f90f3f7ac"
        type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/webflow.js') }}"></script>
    @yield('pageJs')
</body>

</html>