<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('page')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="robots" content="@yield('robots')" />
    <meta name="copyright" content="King Bếp" />
    <meta name="author" content="King Bếp" />
    <meta http-equiv="audience" content="General" /> 
    <meta name="resource-type" content="Document" />  
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:image" content="@yield('ogImage')">
    <meta property="og:image:secure_url" content="@yield('ogImage')">
    <meta property="og:description" content="@yield('ogDesc')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:site_name" content="kingbep.vn">
    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.ico') }}" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="alternate" href="@yield('alternate')">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('frontend/css/all.min.css') }}">
    @section('pageCss')
    @show
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    {!! ($setting != '') ? $setting->fb_pixel_code : '' !!}
    @section('schema')
    @show
</head>

<body class="{{ \Route::currentRouteName() == 'home' ? 'bg-index' : '' }}">
    <div id="box-wrapper">
        @include('layouts.user.header')
        @yield('content')
        @include('layouts.user.footer')
    </div>

    <div id="menu-mobile">
        <div class="clearfix">
            <div class="account_mobile" style="">
                <div class="text-center">
                    <img src="{{ asset('frontend/images/icons/user.svg') }}" alt="Tài khoản" />
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
                        <a class="{{ isset($cate->childrens) ? 'submenu-level1-children-a' : '' }}" title="{{ $cate->name }}" href="{{ route('cate-detail', ['slug' => $cate->slug]) }}">
                            {{ $cate->name }}
                            @if (isset($cate->childrens))
                                <i class="fa fa-angle-right"></i>
                            @endif
                        </a>
                        @if (isset($cate->childrens))
                            <ul class="dropdown-menu submenu-level1-children" role="menu" style="display:none;">
                                @foreach ($cate->childrens as $child)
                                <li>
                                    <a class="submenu-level2-children-a" href="{{ route('cate-detail', ['slug' => $child->slug]) }}" title="{{ $child->name }}">{{ $child->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

                <li class="current">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                </li>

                <li class="">
                    <a href="{{ route('about') }}" title="Giới thiệu">Giới thiệu</a>
                </li>

                {{--<li class="">
                    <a href="{{ route('store') }}" title="Cửa hàng">Cửa hàng</a>
                </li>--}}

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

            <a class="mes" href="{{ $setting->facebook_url }}" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Facebook Fanpage</span>
            </a>

            <a class="zalo" href="mailto:{{ $setting->email }}" target="_blank">
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

    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="{{ mix('frontend/js/bundle.min.js') }}" type="text/javascript"></script>

    @section('pageJs')
    @show
</body>
</html>