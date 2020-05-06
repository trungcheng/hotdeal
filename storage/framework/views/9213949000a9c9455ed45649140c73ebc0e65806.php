<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $__env->yieldContent('page'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="robots" content="noodp,noindex,nofollow" />
    <meta name="copyright" content="King Bep" />    
    <meta name="author" content="King Bep" />
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
    <meta property="og:site_name" content="Kingbep.com">
    <link rel="icon" href="<?php echo e(asset('frontend/images/icons/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical'); ?>" />
    <link rel="alternate" href="<?php echo $__env->yieldContent('alternate'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo e(asset('frontend/css/base.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('frontend/css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <?php $__env->startSection('pageCss'); ?>
    <?php echo $__env->yieldSection(); ?>
    <script src="<?php echo e(asset('frontend/js/jquery-2.2.3.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>" type="text/javascript"></script>
    <?php echo ($setting != '') ? $setting->fb_pixel_code : ''; ?>

    <?php $__env->startSection('schema'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body class="<?php echo e(\Route::currentRouteName() == 'home' ? 'bg-index' : ''); ?>">
    <div id="box-wrapper">
        
        <?php echo $__env->make('layouts.user.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.user.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
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
                    <li><a class="register_account" href="<?php echo e(route('signup')); ?>" title="Đăng ký">Đăng ký</a></li>
                    <li>|</li>
                    <li><a class="login_account" href="<?php echo e(route('signin')); ?>" title="Đăng nhập">Đăng nhập</a></li>
                </ul>
            </div>
            <ul class="menu-mobile">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="">
                        <a class="<?php echo e(isset($cate->childrens) ? 'submenu-level1-children-a' : ''); ?>" title="<?php echo e($cate->name); ?>" href="<?php echo e(route('product-detail', ['slug' => $cate->slug])); ?>">
                            <?php echo e($cate->name); ?>

                            <?php if(isset($cate->childrens)): ?>
                                <i class="fa fa-angle-right"></i>
                            <?php endif; ?>
                        </a>
                        <?php if(isset($cate->childrens)): ?>
                            <ul class="dropdown-menu submenu-level1-children" role="menu" style="display:none;">
                                <?php $__currentLoopData = $cate->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="submenu-level2-children-a" href="<?php echo e(route('product-detail', ['slug' => $child->slug])); ?>" title="<?php echo e($child->name); ?>"><?php echo e($child->name); ?></a>
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

            <a class="mes" href="https://www.messenger.com/t/561797710650232" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Chat qua Messenger</span>
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

    <script src="<?php echo e(asset('frontend/js/rx.all.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/option-selectors.js')); ?>" type="text/javascript"></script>
    <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/appear.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>" type="text/javascript"></script>

    <?php $__env->startSection('pageJs'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>