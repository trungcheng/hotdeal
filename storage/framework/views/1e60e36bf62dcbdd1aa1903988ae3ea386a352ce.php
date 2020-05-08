<header class="header">

    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-5 col-100-h">
                    <a href="/" class="logo-wrapper">
                        <img src="<?php echo e($setting->logo); ?>" alt="Logo KingBep" />
                    </a>
                </div>
                <div class="col-100-h col-sm-6 col-xs-7 hidden-lg hidden-md">
                    <div class="hotline">
                        <a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>"><?php echo e($setting->phone); ?></a>
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="search-auto clearfix">
                        <form class="input-group search-bar search_form" action="<?php echo e(route('search')); ?>" method="get" role="search">
                            <input type="search" name="query" value="" placeholder="Bạn tìm gì..." class="input-group-field st-default-search-input search-text auto-search-ant" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn icon-fallback-text">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </form>
                    </div>
                    <div class="mobile-cart visible-sm visible-xs">
                        <a href="<?php echo e(route('cart')); ?>" title="Giỏ hàng">
                            <img src="<?php echo e(asset('frontend/images/icons/shopping-cart.svg')); ?>" alt="Giỏ hàng" />
                            <div class="cart-right">
                                <span class="count_item_pr"><?php echo e($countItemCart); ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="hotline">
                        <a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>"><?php echo e($setting->phone); ?></a>
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                    <div class="index-account">
                        <a href="javascript:void(0)">Tài khoản</a>
                        <span>Xin chào, <?php echo e(isset($authUser) ? $authUser->fullname : 'Khách'); ?></span>
                        <ul>
                            <?php if(!isset($authUser)): ?>
                            <li><a href="<?php echo e(route('signin')); ?>">Đăng nhập</a></li>
                            <li><a href="<?php echo e(route('signup')); ?>">Đăng ký</a></li>
                            <?php else: ?>
                            <li><a href="<?php echo e(route('getLogout')); ?>">Đăng xuất</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="index-cart">
                        <a href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-bag"></i></a>
                        <span class="cnt crl-bg count_item_pr"><?php echo e($countItemCart); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <div class="container">
            <nav class="hidden-sm hidden-xs">
                <div class="col-md-3 no-padding">
                    <div class="mainmenu <?php echo e(\Route::currentRouteName() != 'home' ? 'mainmenu-other' : ''); ?>">
                        <div class="line"><i></i><i></i><i></i></div>
                        <span>Danh mục sản phẩm</span>
                        <div class="nav-cate">
                            <ul id="menu2017">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="menu-item-count <?php echo e(isset($cate->childrens) ? 'dropdown' : ''); ?>">
                                        <h3>
                                            <img src="<?php echo e($cate->icon); ?>" alt="<?php echo e($cate->name); ?>" />
                                            <a href="<?php echo e(route('cate-detail', ['slug' => $cate->slug])); ?>"><?php echo e($cate->name); ?></a>
                                        </h3>
                                        <?php if(isset($cate->childrens)): ?>
                                            <div class="subcate gd-menu">
                                                <aside>
                                                    
                                                    <?php $__currentLoopData = $cate->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                                        <a href="<?php echo e(route('cate-detail', ['slug' => $child->slug])); ?>" class=""><?php echo e($child->name); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </aside>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 no-padding">
                    <ul id="nav" class="nav">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('home')); ?>">Trang chủ</a></li>

                        <li class="nav-item "><a class="nav-link" href="<?php echo e(route('about')); ?>">Giới thiệu</a></li>

                        

                        <li class="nav-item "><a class="nav-link" href="<?php echo e(route('article')); ?>">Tin tức</a></li>

                        <li class="nav-item "><a class="nav-link" href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>