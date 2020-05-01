<?php $__env->startSection('page'); ?><?php echo e($cate ? $cate->seo_title : $setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($cate ? $cate->seo_desc : $setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($cate ? $cate->seo_keyword : $setting->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e($cate ? route('product-detail', ['slug' => $cate->slug]) : route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e($cate ? route('product-detail', ['slug' => $cate->slug]) : route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($cate ? $cate->seo_title : $setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($cate ? $cate->seo_desc : $setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($cate ? $cate->seo_title : $setting->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($cate ? $cate->seo_desc : $setting->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e($cate ? route('product-detail', ['slug' => $cate->slug]) : route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(asset('frontend/images/logos/logo.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong><span itemprop="title">
                            <?php echo e($cateName); ?>

                        </span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <aside class="sidebar left left-content col-md-3 col-sm-12 col-xs-12">
                
                

                <aside class="aside-item collection-category hidden-xs hidden-sm">
                    <div class="aside-title">
                        <h3 class="title-head margin-top-0"><span>Danh mục</span></h3>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item "><a class="nav-link" href="<?php echo e(route('product-detail', ['slug' => $cate->slug])); ?>"><?php echo e($cate->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </nav>
                    </div>
                </aside>

            </aside>
            
            <section class="main_container collection col-md-9 col-sm-12 col-xs-12">                
                <div class="pottion">
                    <h1 class="title-head margin-top-0">
                        <?php echo e($cateName); ?>

                    </h1>
                    <?php if(count($results) > 0): ?>
                        <div class="category-products products clearfix">
                            <form role="form" id="storeForm" method="get" action="">
                                <div class="sortPagiBar">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 text-xs-left text-sm-right">
                                            <div id="sort-by">
                                                <input id="order-input" type="hidden" name="order" value="">
                                                <label class="left hidden-xs">Sắp xếp: </label>
                                                <ul>
                                                    <li>
                                                        <span id="order-text">Thứ tự</span>
                                                        <ul>
                                                            <li><a class="order" href="javascript:;" data-order="name-asc">A &rarr; Z</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="name-desc">Z &rarr; A</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="price_sale-asc">Giá tăng dần</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="price_sale-desc">Giá giảm dần</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="created_at-desc">Hàng mới nhất</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="created_at-asc">Hàng cũ nhất</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <section class="products-view products-view-grid clearfix">
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xs-6 col-sm-4 col-md-3 no-padding">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <?php if($pro->discount > 0): ?>
                                            <div class="sale-flash">SALE</div>
                                            <?php endif; ?>
                                            <div class="product-image-flip">
                                                <a href="<?php echo e(route('product-detail', ['slug' => $pro->slug])); ?>" title="<?php echo e($pro->name); ?>">
                                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="<?php echo e($pro->image); ?>" alt="<?php echo e($pro->name); ?>" class="img-responsive center-block" />
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
                            </section>

                            <div class="clearfix"></div>
                            <?php if($results->total() > 12): ?>
                            <div class="text-xs-right text-center pagging-css margin-bottom-0">
                                <nav>
                                    <?php echo e($results->appends(request()->query())->links()); ?>

                                </nav>
                            </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <p style="position:absolute;top:43px">Không có sản phẩm nào!</p>
                    <?php endif; ?>
                </div>
                
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $(document).on('click', '.order', function() {
            $('#order-text').text($(this).text());
            $('#order-input').val($(this).data('order'));
            $('#storeForm').submit();
        });
        var query = get_query(window.location.href);
        if (query.order !== undefined) {
            $('.order').each(function (v, k) {
                if ($(k).data('order') == query.order) {
                    $('#order-input').val(query.order);
                    $('#order-text').text($(k).text());
                }
            });
        }
        // if (query.num !== undefined) {
        //     $('#num').val(query.num);
        // }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>