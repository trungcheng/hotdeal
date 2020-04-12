<nav id="mp-menu" class="mp-menu">
    <div class="mp-level">
        <h2 class="icon icon-world">Danh mục</h2>
        <ul>
            <li><a class="icon" href="/" target="_self">Trang chủ</a></li>
            <li><a class="icon" href="<?php echo e(route('store')); ?>">Sản phẩm</a></li>
            <li><a class="icon" href="<?php echo e(route('article')); ?>">Tin tức</a></li>
            <li><a class="icon" href="<?php echo e(route('certificate')); ?>">Chứng nhận chất lượng</a></li>
            <li><a class="icon" href="<?php echo e(route('health-advice')); ?>">Tư vấn sức khỏe</a></li>
            <li><a class="icon" href="<?php echo e(route('article-detail', ['slug' => 'khuyen-mai'])); ?>">Khuyến mãi</a></li>
            <li><a class="icon" href="<?php echo e(route('policy')); ?>">Chính sách giá</a></li>
            <li><a class="icon" href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
        </ul>
    </div>
</nav>

<div class="full-width">
    <header id="view_top_banner">
        <div class="row">
            <div class="container-site">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-sm hidden-xs" style="padding:0">
                    <div class="box-social-network">
                        <div class="body-network">
                            <ul class="body-social">
                                <li><a target="_blank" href="<?php echo e($setting->facebook_url); ?>" class="facebook" rel="nofollow"><span>Facebook</span></a></li>
                                <li><a target="_blank" href="<?php echo e($setting->twitter_url); ?>" class="tweet" rel="nofollow"><span>Tweet</span></a></li>
                                <li><a target="_blank" href="<?php echo e($setting->youtube_url); ?>" class="youtube" rel="nofollow"><span>Youtube</span></a></li>
                                <li><a target="_blank" href="<?php echo e($setting->google_url); ?>" class="googleplus" rel="nofollow"><span>Google+</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a class="link-logo" href="/" title="Logo Thủy Mộc Trà" target="_self">
                            <img class="img-logo" src="<?php echo e(asset('frontend/images/logos/logo.png')); ?>" width="286" height="131" alt="Logo Thủy Mộc Trà" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-sm hidden-xs" style="padding:0">
                    <div class="hotline">
                        <a class="call-view-top" href="tel:<?php echo e($setting->phone); ?>" title="Gọi ngay">
                            <div class="hot-line-view">
                                <span class="icon">Hotline:</span>
                                <span class="phone number"><?php echo $setting->phone; ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="menu-top-mobile hidden-lg hidden-md">
                    <a id="trigger" href="#" class="nav-mobile-icon">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="menu-top-cart">
                    <a href="<?php echo e(route('cart')); ?>" class="nav-mobile-icon" title="Xem giỏ hàng">
                        <span class="hidden-sm hidden-xs">Giỏ hàng</span>
                        <i class="fa fa-shopping-bag"></i>
                        <span class="itm-cont"><?php echo e($countItemCart); ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row menutop hidden-sm hidden-xs">
            <div class="container-site">
                <div class="nav-main">
                    <ul id="nav-main-menu" class="nav-menu">
                        <li class="active"><a href="/" data-route="/" target="_self"><span class="span-menu"></span>Trang chủ</a></li>
                        <li><a href="<?php echo e(route('store')); ?>" data-route="/san-pham"><span class="span-menu"></span>Sản phẩm</a></li>
                        <li><a href="<?php echo e(route('article')); ?>" data-route="/tin-tuc"><span class="span-menu"></span>Tin tức</a></li>
                        <li><a href="<?php echo e(route('certificate')); ?>" data-route="/chung-nhan-chat-luong"><span class="span-menu"></span>Chứng nhận chất lượng</a></li>
                        <li><a href="<?php echo e(route('health-advice')); ?>" data-route="/tu-van-suc-khoe"><span class="span-menu"></span>Tư vấn sức khỏe</a></li>
                        <li><a href="<?php echo e(route('article-detail', ['slug' => 'khuyen-mai'])); ?>" data-route="/tin-tuc/khuyen-mai"><span class="span-menu"></span>Khuyến mãi</a></li>
                        <li><a href="<?php echo e(route('policy')); ?>" data-route="/chinh-sach-gia"><span class="span-menu"></span>Chính sách giá</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>" data-route="/lien-he"><span class="span-menu"></span>Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>