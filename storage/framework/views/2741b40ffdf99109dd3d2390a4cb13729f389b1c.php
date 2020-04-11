<?php $__env->startSection('page'); ?>Giới thiệu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>Giới thiệu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>Giới thiệu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('about')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('about')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('about')); ?>/
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
                        <li><a class="active">Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">
            <div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>Giới thiệu</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix">
                        <p>Đang cập nhật...</p>
                        <div class="shares">
                            <div class="fb-comments" data-href="http://thuymoctra.com.vn/chi-tiet-bai-viet/270/gioi-thieu-cong-ty-tnhh-phat-trien-thuy-moc-tra.html" data-colorscheme="" data-width="770" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('layouts.user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>