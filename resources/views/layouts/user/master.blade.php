<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('page') | CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta name="copyright" content="Thủy Mộc Trà" />
    <meta name="author" content="Thủy Mộc Trà" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:image" content="@yield('ogImage')">
    <meta property="og:image:secure_url" content="@yield('ogImage')">
    <meta property="og:description" content="@yield('ogDesc')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:site_name" content="thuymoctra.com.vn">
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('propDesc')" />
    <meta name="twitter:title" content="@yield('ogTitle')" />
    <meta name="twitter:image" content="{{ asset('frontend/images/icons/favicon.png') }}" />
    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="alternate" href="@yield('alternate')">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.transitions.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/component.css') }}" />
    @section('pageCss')
    @show
    {!! ($setting != '') ? $setting->fb_pixel_code : '' !!}
</head>

<body>
    <div class="main-container-full">
        <div class="wrapper mp-pusher" id="mp-pusher">

            @include('layouts.user.header')

            @yield('content')

            @include('layouts.user.footer')

        </div>
    </div>

    <span id="top-link-block" class="hidden">
        <a href="#top" class="well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <img src="{{ asset('frontend/images/icon_gototop.png') }}" />
        </a>
    </span>

    <div class="social-button">
        <div class="social-button-content" style="display:none">
            <a href="tel:{{ str_replace(' ', '', $setting->phone) }}" class="call-icon" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated alo-circle"></div>
                <div class="animated alo-circle-fill"></div>
                <span>Hotline: {{ $setting->phone }}</span>
            </a>
            <a href="sms:{{ str_replace(' ', '', $setting->phone) }}" class="sms">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span>SMS: {{ $setting->phone }}</span>
            </a>
            <a href="{{ $setting->facebook_url }}" class="mes" rel="nofollow">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Nhắn tin Facebook</span>
            </a>
            <a href="http://zalo.me/{{ str_replace(' ', '', $setting->phone) }}" class="zalo" rel="nofollow">
                <img style="width:40px;height:40px;border-radius:50%;box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.25);" src="{{ asset('frontend/images/zalo.png') }}">
                <span>Zalo: {{ $setting->phone }}</span>
            </a>
        </div>

        <a class="user-support">
            <i class="fa fa-user" aria-hidden="true"></i>
            <!-- <div class="animated alo-circle"></div> -->
            <div class="animated alo-circle-fill lantoa"></div>
        </a>
    </div>

    <script type="text/javascript" src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/mlpushmenu.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;
                var links = this.el.find('.link');
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');
                if (!e.data.multiple) {
                    $el.find('.sub-menu-left').not($next).slideUp().parent().removeClass('open');
                };
            }
            var accordion = new Accordion($('#menu_left'), false);

            $('.user-support').click(function(event) {
                $('.social-button-content').slideToggle();
            });

            var header = $("#view_top_banner");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 120) {
                    header.addClass('banner-fix');
                } else {
                    header.removeClass("banner-fix");
                }
            });
        });

        if (($(window).height() + 100) < $(document).height()) {
            $('#top-link-block').removeClass('hidden').affix({
                offset: {
                    top: 100
                }
            });
        }

        new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'), {
            type: 'cover'
        });
    </script>

    <script type="text/javascript">
        var owl_category_home = $("#news-category-home");

        owl_category_home.owlCarousel({
            items: 5,
            autoPlay: true,
            transitionStyle: "fade",
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 5],
            itemsTablet: [768, 4],
            itemsMobile: [479, 2],
            navigation: true,
            navigationText: ["«", "»"],
            rewindNav: false,
            scrollPerPage: false,
            slideSpeed: 1500,
            pagination: false,
            paginationNumbers: false,
        });
    </script>

    <script type="text/javascript">
        $(".videoItems").on("click", function() {
            var strURL = this.name;
            strURL = strURL.replace("&feature=youtu.be", "");
            strURL = strURL.replace("watch?v=", "embed/");
            strURL = strURL.indexOf("?rel=0") > 0 ? strURL : strURL + "?rel=0";
            strURL = strURL.indexOf("&autoplay=1") > 0 ? strURL : strURL + "&autoplay=1";
            $("#myElement").find("iframe")[0].src = strURL;
        })
    </script>

    @section('pageJs')
    @show
</body>

</html>