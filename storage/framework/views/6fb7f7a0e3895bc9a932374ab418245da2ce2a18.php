<?php $__env->startSection('page'); ?><?php echo e($cate == 'all' ? 'Tất cả sản phẩm' : $cate); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('store')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(asset('frontend/images/logos/logo.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container-site">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active"><?php echo e($cate == 'all' ? 'Sản phẩm' : $cate); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">
            <form role="form" id="storeForm" action="" method="get">
                <div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
                    <div class="box-news-sub">
                        <div class="cate-header sub-top">
                            <div class="txt-name-sub">
                                <h2><?php echo e($cate == 'all' ? 'Tất cả sản phẩm' : $cate); ?></h2>
                                <ul style="float:right;margin-top:5px;">
                                    <!-- Short  -->
                                    <li style="float:left">
                                        <select id="num" name="num" class="form-control filter-input filter-num">
                                            <option value="10" selected>Hiển thị 10</option>
                                            <option value="20">Hiển thị 20</option>
                                            <option value="50">Hiển thị 50</option>
                                            <option value="100">Hiển thị 100</option>
                                        </select>
                                    </li>
                                    <!-- by Default -->
                                    <li style="float:right;margin-left:10px">
                                        <select id="order" name="order" class="form-control filter-input filter-order">
                                            <option value="created_at-desc" selected>Mới nhất</option>
                                            <option value="price-asc">Giá thấp đến cao</option>
                                            <option value="price-desc">Giá cao đến thấp</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body homepage clearfix store" style="margin-top:20px">
                            <!-- Items -->
                            <?php if(count($results) > 0): ?>
                            <div class="item-col-3">
                                <!-- Product -->
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <a href="<?php echo e(route('product-detail', ['slug' => $result->slug])); ?>">
                                                <img class="img-responsive" src="<?php echo e(asset($result->image)); ?>" alt="<?php echo e(asset($result->image)); ?>">
                                            </a>
                                        </div>
                                        <h3><a href="<?php echo e(route('product-detail', ['slug' => $result->slug])); ?>" class="tittle"><?php echo e($result->name); ?></a></h3>
                                        <div class="price">
                                            <?php echo e(number_format($result->price_sale, 0, 0, '.')); ?> VNĐ
                                            <?php if($result->discount > 0): ?>
                                                <span><?php echo e(number_format($result->price, 0, 0, '.')); ?> VNĐ</span>
                                            <?php endif; ?>
                                        </div>
                                    </article>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php else: ?>
                            <p style="padding-left:15px;">Không có sản phẩm nào !</p>
                            <?php endif; ?>
                            <!-- pagination -->
                            <?php echo e($results->appends(request()->query())->links()); ?>

                        </div>
                    </div>
                </div>
            </form>

            <?php echo $__env->make('layouts.user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $(document).on('change', '.filter-input', function() {
            $('#storeForm').submit();
        });
        var query = get_query(window.location.href);
        if (query.order !== undefined) {
            $('#order').val(query.order);
        }
        if (query.num !== undefined) {
            $('#num').val(query.num);
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>