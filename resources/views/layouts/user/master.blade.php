<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('page') | King Bếp</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:image" content="@yield('ogImage')">
    <meta property="og:image:secure_url" content="@yield('ogImage')">
    <meta property="og:description" content="@yield('ogDesc')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:site_name" content="KingBep">
    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="alternate" href="@yield('alternate')">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('frontend/css/base.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet" type="text/css" />
    @section('pageCss')
    @show
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
</head>

<body class="{{ \Route::currentRouteName() == 'home' ? 'bg-index' : '' }}">
    <div id="box-wrapper">
        
        @include('layouts.user.header')
        
        @yield('content')

        @include('layouts.user.footer')
        
    </div>
    
    <div class="ajax-load">
        <span class="loading-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </span>
    </div>

    <div class="loading awe-popup">
        <div class="overlay"></div>
        <div class="loader" title="2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
    </div>

    <div id="menu-mobile">
        <div class="clearfix">
            <div class="account_mobile" style="">
                <div class="text-center">
                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/user.svg?1576740881097" alt="Tài khoản" />
                </div>
                <ul class="account_text text-center">
                    <li><a class="register_account" href="{{ route('signup') }}" title="Đăng ký">Đăng ký</a></li>
                    <li>|</li>
                    <li><a class="login_account" href="{{ route('signin') }}" title="Đăng nhập">Đăng nhập</a></li>
                </ul>
            </div>
            <ul class="menu-mobile">
                @foreach ($categories as $cate)
                    <li class="">
                        <a title="{{ $cate->name }}" href="{{ route('product-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a>
                    </li>
                @endforeach

                <li class="current">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                </li>

                <li class="">
                    <a href="{{ route('about') }}" title="Giới thiệu">Giới thiệu</a>
                </li>

                <li class="">
                    <a href="{{ route('store') }}" title="Cửa hàng">Cửa hàng</a>
                </li>

                <li class="">
                    <a href="{{ route('article') }}" title="Tin tức">Tin tức</a>
                </li>

                <li class="">
                    <a href="{{ route('contact') }}" title="Liên hệ">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="support-online">
        <div class="support-content" style="display: none;">

            <a href="tel:{{ str_replace(' ', '', $setting->phone) }}" class="call-now" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <span>Gọi ngay: {{ $setting->phone }}</span>
            </a>

            <a class="mes" href="https://www.messenger.com/t/561797710650232" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Chat qua Messenger</span>
            </a>

            <a class="zalo" href="mailto:baotrung304@gmail.com" target="_blank">
                <i class="fa fa-envelope"></i>
                <span>{{ $setting->email }}</span>
            </a>

            <a class="sms" href="sms:{{ str_replace(' ', '', $setting->phone) }}">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                <span>SMS: {{ $setting->phone }}</span>
            </a>

        </div>
        <a class="btn-support">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        </a>
    </div>

    <script src="{{ asset('frontend/js/rx.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/option-selectors.js') }}" type="text/javascript"></script>
    <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/custom.js') }}" type="text/javascript"></script>

    @section('pageJs')
    @show
</body>
</html>