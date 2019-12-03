<!DOCTYPE html">
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page') | CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG</title>
    
    <meta name="description" content="TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập" />
    <meta name="keywords" content="taseco, công ty taseco,hàng không thăng long" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" href="@yield('alternate')" hreflang="vi-vn">
    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:title" content="@yield('ogTitle')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('ogUrl')" />
    <meta property="og:image" content="https://taseco.vn/logo.jpg" />
    <meta property="og:description" content="@yield('ogDesc')" />
    <meta property="og:site_name" content="CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="https://taseco.vn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox-buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox-thumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/vinastar.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/viewport.css') }}" />    
    @section('pageCss')
    @show
</head>

<body>
    <div id="wrapper_all">
        @include('layouts.user.header')

        @yield('content')

        @include('layouts.user.footer')
    </div>

    <a id='backTop'><i class="fa fa-chevron-up"></i></a>

    <script src="{{ asset('frontend/themes/default/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.popup.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.smartmenus.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.smartmenus.bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.lettering.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.textillate.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.bootstrap.newsbox.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.mousewheel-3.0.6.pack.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-buttons.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-thumbs.js') }}"></script>

    @section('pageJs')
    @show

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox-thumbs").fancybox({
                openEffect: 'elastic',
                openSpeed: 650,
                arrows: true,
                closeEffect: 'elastic',
                closeSpeed: 650,
                closeBtn: true,
                closeClick: false,
                nextClick: false,
                prevEffect: 'elastic',
                prevSpeed: 650,
                nextEffect: 'elastic',
                nextSpeed: 650,
                helpers: {
                    title: {
                        type: 'outside'
                    },
                    thumbs: {
                        width: 50,
                        height: 50
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox-media').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
        });
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $("area[rel^='prettyPhoto']").prettyPhoto();
            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                allow_resize: true,
                autoplay_slideshow: false
            });
            $(".gallery1:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast',
                slideshow: 10000,
                hideflash: true
            });
        });
    </script>

    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic:latin,vietnamese']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            document.cookie = popunder1 = "adf";
            $('#myModal').vinastar($('#myModal').data());
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#backTop').backTop({
                'position': 100,
                'speed': 500,
                'color': 'red',
            });
        });
    </script>
    <script>
        $('.responsive-tabs').responsiveTabs({
            accordionOn: ['xs', 'sm']
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $("#owl_carousel");
            owl.owlCarousel({
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: 4000,
                autoplayTimeout: 100
            });
            $('[data-toggle="tooltip"]').tooltip();
            $(".owl-next").click(function() {
                owl.trigger('owl.next');
            })
            $(".owl-prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

            var owl = $("#owl_slgtaseco");

            owl.owlCarousel({
                items: 1, //10 items above 1000px browser width
                itemsDesktop: [1000, 1], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 1], // betweem 900px and 601px
                itemsTablet: [600, 1], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: 4000,
                autoplayTimeout: 100
            });
            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })
        });

        $(document).ready(function() {
            $("#owl_1506").owlCarousel({
                navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
        });
    </script>
    <script type="text/javascript">
        $('.tlt').textillate({
            // the default selector to use when detecting multiple texts to animate
            selector: '.texts',
            // enable looping
            loop: true,
            // sets the minimum display time for each text before it is replaced
            minDisplayTime: 2000,
            // sets the initial delay before starting the animation
            // (note that depending on the in effect you may need to manually apply 
            // visibility: hidden to the element before running this plugin)
            initialDelay: 0,
            // set whether or not to automatically start animating
            autoStart: true,
            // custom set of 'in' effects. This effects whether or not the 
            // character is shown/hidden before or after an animation  
            inEffects: [],
            // custom set of 'out' effects
            outEffects: ['hinge'],
            // in animation settings
            in: {
                // set the effect name
                effect: 'fadeIn',

                // set the delay factor applied to each consecutive character
                delayScale: 1.5,

                // set the delay between each character
                delay: 50,

                // set to true to animate all the characters at the same time
                sync: false,

                // randomize the character sequence 
                // (note that shuffle doesn't make sense with sync = true)
                shuffle: false,

                // reverse the character sequence 
                // (note that reverse doesn't make sense with sync = true)
                reverse: false,

                // callback that executes once the animation has finished
                callback: function() {}
            },
            // out animation settings.
            out: {
                effect: 'flash',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function() {}
            },
            // callback that executes once textillate has finished 
            callback: function() {},
            // set the type of token to animate (available types: 'char' and 'word')
            type: 'char'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $("#owl_fie");
            owl.owlCarousel({
                autoPlay: 4000,
                itemsCustom: [
                    [0, 1],
                    [450, 2],
                    [600, 2],
                    [700, 2],
                    [1000, 3],
                    [1200, 3],
                    [1400, 3],
                    [1600, 3]
                ],
                navigation: true
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(".newstb_dv3003").bootstrapNews({
                newsPerPage: 3,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 2000,
                onToDo: function() {
                    //console.log(this);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(".news_tb").bootstrapNews({
                newsPerPage: 6,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 2000,
                onToDo: function() {
                    //console.log(this);
                }
            });
        });
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#carousel_main,#carousel_pri').carousel({
                interval: 3000
            })
        });
    </script>

</body>

</html>