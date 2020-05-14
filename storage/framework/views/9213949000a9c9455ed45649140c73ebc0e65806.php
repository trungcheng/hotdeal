<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $__env->yieldContent('page'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="robots" content="<?php echo $__env->yieldContent('robots'); ?>" />
    <meta name="copyright" content="King Bếp" />
    <meta name="author" content="King Bếp" />
    <meta http-equiv="audience" content="General" /> 
    <meta name="resource-type" content="Document" />  
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta itemprop="name" content="<?php echo $__env->yieldContent('propName'); ?>">
    <meta itemprop="description" content="<?php echo $__env->yieldContent('propDesc'); ?>">
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $__env->yieldContent('ogTitle'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('ogImage'); ?>">
    <meta property="og:image:secure_url" content="<?php echo $__env->yieldContent('ogImage'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('ogDesc'); ?>">
    <meta property="og:url" content="<?php echo $__env->yieldContent('ogUrl'); ?>">
    <meta property="og:site_name" content="kingbep.vn">
    <link rel="icon" href="<?php echo e(asset('frontend/images/icons/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical'); ?>" />
    <link rel="alternate" href="<?php echo $__env->yieldContent('alternate'); ?>">
    <link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(mix('frontend/css/all.min.css')); ?>">
    <?php $__env->startSection('pageCss'); ?>
    <?php echo $__env->yieldSection(); ?>
    <script src="<?php echo e(asset('frontend/js/jquery-2.2.3.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>" type="text/javascript"></script>
    <?php echo ($setting != '') ? $setting->fb_pixel_code : ''; ?>

    <?php $__env->startSection('schema'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body class="<?php echo e(\Route::currentRouteName() == 'home' ? 'bg-index' : ''); ?>">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v7.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=596032051018066&autoLogAppEvents=1"></script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1717083925079842"
        theme_color="#a90202"
        logged_in_greeting="Xin chào, chúng tôi có thể hỗ trợ gì cho bạn?"
        logged_out_greeting="Xin chào, chúng tôi có thể hỗ trợ gì cho bạn?">
    </div>

    <div id="box-wrapper">
        <?php echo $__env->make('layouts.user.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.user.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <div id="menu-mobile">
        <div class="clearfix">
            <div class="account_mobile" style="">
                <div class="text-center">
                    <img src="<?php echo e(asset('frontend/images/icons/user.svg')); ?>" alt="Tài khoản" />
                </div>
                <ul class="account_text text-center">
                    <li><a class="register_account" href="<?php echo e(route('signup')); ?>" title="Đăng ký">Đăng ký</a></li>
                    <li>|</li>
                    <li><a class="login_account" href="<?php echo e(route('signin')); ?>" title="Đăng nhập">Đăng nhập</a></li>
                </ul>
            </div>
            <ul class="menu-mobile">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="">
                        <a class="<?php echo e(isset($cate->childrens) ? 'submenu-level1-children-a' : ''); ?>" title="<?php echo e($cate->name); ?>" href="<?php echo e(route('cate-detail', ['slug' => $cate->slug])); ?>">
                            <?php echo e($cate->name); ?>

                            <?php if(isset($cate->childrens)): ?>
                                <i class="fa fa-angle-right"></i>
                            <?php endif; ?>
                        </a>
                        <?php if(isset($cate->childrens)): ?>
                            <ul class="dropdown-menu submenu-level1-children" role="menu" style="display:none;">
                                <?php $__currentLoopData = $cate->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="submenu-level2-children-a" href="<?php echo e(route('cate-detail', ['slug' => $child->slug])); ?>" title="<?php echo e($child->name); ?>"><?php echo e($child->name); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <li class="current">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                </li>

                <li class="">
                    <a href="<?php echo e(route('about')); ?>" title="Giới thiệu">Giới thiệu</a>
                </li>

                

                <li class="">
                    <a href="<?php echo e(route('article')); ?>" title="Tin tức">Tin tức</a>
                </li>

                <li class="">
                    <a href="<?php echo e(route('contact')); ?>" title="Liên hệ">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="support-online">
        <div class="support-content" style="display: none;">

            <a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>" class="call-now" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <span>Gọi ngay: <?php echo e($setting->phone); ?></span>
            </a>

            <a class="mes" href="<?php echo e($setting->facebook_url); ?>" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Facebook Fanpage</span>
            </a>

            <a class="zalo" href="mailto:<?php echo e($setting->email); ?>" target="_blank">
                <i class="fa fa-envelope"></i>
                <span><?php echo e($setting->email); ?></span>
            </a>

            <a class="sms" href="sms:<?php echo e(str_replace(' ', '', $setting->phone)); ?>">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                <span>SMS: <?php echo e($setting->phone); ?></span>
            </a>

        </div>
        <a class="btn-support">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        </a>
    </div>

    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.form-validator.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(mix('frontend/js/bundle.min.js')); ?>" type="text/javascript"></script>

    <?php $__env->startSection('pageJs'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>