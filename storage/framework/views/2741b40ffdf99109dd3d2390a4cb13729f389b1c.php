<?php $__env->startSection('page'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($article->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('robots'); ?>noodp,index,follow
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route($article->route)); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route($article->route)); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route($article->route)); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e($setting->logo); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('schema'); ?><?php echo e($article->seo_schema); ?>

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
                        <li><strong itemprop="title"><?php echo e($article->title); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title category-title">
                        <h1 class="title-head"><a href="#"><?php echo e($article->title); ?></a></h1>
                    </div>
                    <div class="content-page rte">
                        <?php echo $article->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>