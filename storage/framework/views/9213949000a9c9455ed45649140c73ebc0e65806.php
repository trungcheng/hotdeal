<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $__env->yieldContent('page'); ?> | CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ</title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="robots" content="noodp,index,follow" />
    <meta itemprop="name" content="<?php echo $__env->yieldContent('propName'); ?>">
    <meta itemprop="description" content="<?php echo $__env->yieldContent('propDesc'); ?>">
    <meta name="copyright" content="Thủy Mộc Trà" />
    <meta name="author" content="Thủy Mộc Trà" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $__env->yieldContent('ogTitle'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('ogImage'); ?>">
    <meta property="og:image:secure_url" content="<?php echo $__env->yieldContent('ogImage'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('ogDesc'); ?>">
    <meta property="og:url" content="<?php echo $__env->yieldContent('ogUrl'); ?>">
    <meta property="og:site_name" content="thuymoctra.com.vn">
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('propDesc'); ?>" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('ogTitle'); ?>" />
    <meta name="twitter:image" content="<?php echo e(asset('frontend/images/icons/favicon.png')); ?>" />
    <link rel="icon" href="<?php echo e(asset('frontend/images/icons/favicon-logo.png')); ?>" type="image/x-icon" />
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical'); ?>" />
    <link rel="alternate" href="<?php echo $__env->yieldContent('alternate'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/owl.carousel.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/owl.theme.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/owl.transitions.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/layout.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/responsive.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/component.css')); ?>" />
    <?php $__env->startSection('pageCss'); ?>
    <?php echo $__env->yieldSection(); ?>
    <?php echo ($setting != '') ? $setting->fb_pixel_code : ''; ?>

</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v6.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="105945831083619"
        theme_color="#d22521"
        logged_in_greeting="Xin chào, chúng tôi hỗ trợ được gì cho bạn?"
        logged_out_greeting="Xin chào, chúng tôi hỗ trợ được gì cho bạn?">
    </div>
    <div class="main-container-full">
        <div class="wrapper mp-pusher" id="mp-pusher">

            <?php echo $__env->make('layouts.user.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.user.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>

    <span id="top-link-block" class="hidden">
        <a href="#top" class="well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <img src="<?php echo e(asset('frontend/images/icon_gototop.png')); ?>" />
        </a>
    </span>

    <div class="social-button">
        <div class="social-button-content" style="display:none">
            <a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>" class="call-icon" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated alo-circle"></div>
                <div class="animated alo-circle-fill"></div>
                <span>Hotline: <?php echo e($setting->phone); ?></span>
            </a>
            <a href="sms:<?php echo e(str_replace(' ', '', $setting->phone)); ?>" class="sms">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span>SMS: <?php echo e($setting->phone); ?></span>
            </a>
            <a href="<?php echo e($setting->facebook_url); ?>" class="mes" rel="nofollow">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Nhắn tin Facebook</span>
            </a>
            <a href="http://zalo.me/<?php echo e(str_replace(' ', '', $setting->phone)); ?>" class="zalo" rel="nofollow">
                <img style="width:40px;height:40px;border-radius:50%;box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.25);" src="<?php echo e(asset('frontend/images/zalo.png')); ?>">
                <span>Zalo: <?php echo e($setting->phone); ?></span>
            </a>
        </div>

        <a class="user-support">
            <i class="fa fa-user" aria-hidden="true"></i>
            <!-- <div class="animated alo-circle"></div> -->
            <div class="animated alo-circle-fill lantoa"></div>
        </a>
    </div>

    <script type="text/javascript" src="<?php echo e(asset('frontend/js/jquery-2.2.3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/owl.carousel.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/modernizr.custom.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/classie.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/mlpushmenu.js')); ?>"></script>

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

    <?php $__env->startSection('pageJs'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>

</html>