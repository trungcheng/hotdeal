<?php $__env->startSection('page'); ?><?php echo e($setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($setting->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('home')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('home')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('home')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e($setting->logo); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('schema'); ?><?php echo e($setting->seo_schema); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    <style type="text/css">
        .seo-content {
            padding: 5px;
        }
        .seo-content img {
            width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="hidden">KingBep</h1>

    <section class="awe-section-1">
        <div class="container">
            <div class="col-md-3 no-padding"></div>
            <div class="col-md-9 no-padding">
                <div class="home-slider owl-carousel not-dqowl">
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <?php if($slide->target_type == 'product'): ?>
                                <a href="<?php echo e(($slide->product) ? route('product-detail', ['slug' => $slide->product->slug]) : 'javascript:void(0)'); ?>" class="clearfix">
                                    <img src="<?php echo e($slide->image); ?>" alt="<?php echo e($slide->title); ?>" class="img-responsive center-block" />
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(($slide->article) ? route('article-detail', ['slug' => $slide->article->slug]) : 'javascript:void(0)'); ?>" class="clearfix">
                                    <img src="<?php echo e($slide->image); ?>" alt="<?php echo e($slide->title); ?>" class="img-responsive center-block" />
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-2">
        <div class="section_policy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-policy-mobile owl-carousel not-dqowl">

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_1.svg?1576740881097" alt="Bảo đảm chất lượng" />
                                    <div class="section-policy-padding">
                                        <h3>Bảo đảm chất lượng</h3>
                                        <div class="section_policy_title">Sản phẩm bảo đảm chất lượng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_2.svg?1576740881097" alt="Miễn phí giao hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Miễn phí giao hàng</h3>
                                        <div class="section_policy_title">Cho đơn hàng từ 2 triệu đồng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_3.svg?1576740881097" alt="Hỗ trợ 24/7" />
                                    <div class="section-policy-padding">
                                        <h3>Hỗ trợ 24/7</h3>
                                        <div class="section_policy_title">Hotline: 0123 456 789</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_4.svg?1576740881097" alt="Đổi trả hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Đổi trả hàng</h3>
                                        <div class="section_policy_title">Trong vòng 7 ngày.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(count($chauda) > 0): ?>
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Chậu rửa bát đá nhân tạo</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="<?php echo e(route('product-detail', ['slug' => $chauda[0]->category->slug])); ?>" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        <?php $__currentLoopData = $chauda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <?php if($pro->discount > 0): ?>
                                                            <div class="sale-flash">SALE</div>
                                                        <?php endif; ?>
                                                        <div class="product-image-flip">
                                                            <a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>">
                                                                <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($pro->image); ?>" alt="<?php echo e($pro->name); ?>" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    <?php echo e(number_format($pro->price_sale, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php if($pro->discount > 0): ?>
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    <?php echo e(number_format($pro->price, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if(count($chauinox) > 0): ?>
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Chậu rửa inox</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="<?php echo e(route('product-detail', ['slug' => $chauinox[0]->category->slug])); ?>" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        <?php $__currentLoopData = $chauinox; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <?php if($pro->discount > 0): ?>
                                                            <div class="sale-flash">SALE</div>
                                                        <?php endif; ?>
                                                        <div class="product-image-flip">
                                                            <a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>">
                                                                <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($pro->image); ?>" alt="<?php echo e($pro->name); ?>" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    <?php echo e(number_format($pro->price_sale, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php if($pro->discount > 0): ?>
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    <?php echo e(number_format($pro->price, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if(count($voiruabat) > 0): ?>
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Vòi rửa bát</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="<?php echo e(route('product-detail', ['slug' => $voiruabat[0]->category->slug])); ?>" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        <?php $__currentLoopData = $voiruabat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        <?php if($pro->discount > 0): ?>
                                                            <div class="sale-flash">SALE</div>
                                                        <?php endif; ?>
                                                        <div class="product-image-flip">
                                                            <a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>">
                                                                <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($pro->image); ?>" alt="<?php echo e($pro->name); ?>" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>"><?php echo e($pro->name); ?></a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    <?php echo e(number_format($pro->price_sale, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php if($pro->discount > 0): ?>
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    <?php echo e(number_format($pro->price, 0, 0, '.')); ?>đ
                                                                </span>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if(count($featureArticles) > 0): ?>
    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="barbox clearfix">
                                    <h2 class="titlecate">Kinh nghiệm hay</h2>
                                    <a href="<?php echo e(route('article')); ?>" class="viewmoretext">Xem tất cả</a>
                                </div>
                                <div class="list-blogs-link">
                                    <div class="section_blogs_owl owl-carousel owl-theme not-dqowl">
                                        <?php $__currentLoopData = $featureArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">
                                                        <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($article->image); ?>" alt="<?php echo e($article->title); ?>" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" title="<?php echo e($article->title); ?>"><?php echo e($article->title); ?></a></h3>
                                                    <div class="post-time">
                                                        <span><?php echo e($article->created_at); ?></span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"><?php echo $article->intro; ?></p>
                                                </div>
                                            </article>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php endif; ?>

    <?php if($setting->seo_content != '' && $setting->seo_content != null): ?>
    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="list-blogs-link seo-content">
                                    <?php echo $setting->seo_content; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $(function () {
            $('.blog-item-contens p').each(function (v, k) {
                var trim = trimText($(k).text(), 20);
                $(k).text(trim);
            });
        });

        $(".home-slider").owlCarousel({
            nav: false,
            slideSpeed: 600,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: false,
            autoHeight: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                543: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1300: {
                    items: 1,
                },
                1590: {
                    items: 1,
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>