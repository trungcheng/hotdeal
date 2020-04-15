<?php $__env->startSection('page'); ?><?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($title); ?> về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai'])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai'])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($title); ?> về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($title); ?> về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai'])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(asset('frontend/images/logos/logo.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    <style>
        .blog-post {
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .blog-post:last-child {
            border: none;
        }
        .blog-post img {
            width: 100%;
            height: 200px;
            margin-bottom: 0px;
            object-fit: cover;
        }
        .blog-post .tittle {
            font-weight: bold;
            font-size: 16px;
            display: inline-block;
            width: 100%;
            margin-bottom: 10px;
            margin-top: 10px;
            color: #333333 !important;
        }
        .blog-post a {
            color: #0088cc;
            text-decoration: none;
        }
        .blog-post a:hover {
            text-decoration: none;
        }
        .pagination {
            margin-bottom: 70px;
        }
        .blog-post .date {
            margin-top: -7px;
            margin-bottom: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active"><?php echo e($title); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:50px;">
        <div class="row">
            <div class="body-right col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2><?php echo e($title); ?></h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix">
                        <p style="margin-bottom:20px">Cập nhật <?php echo e(strtolower($title)); ?> về <strong>trà hoa</strong>, <strong>trà thảo mộc</strong>. Mời các bạn đón đọc các bài viết về trà thảo dược thiên nhiên. Các kinh nghiệm, phương pháp được ứng dụng hàng ngày để bảo vệ sức khỏe của bạn.
                            Chia sẻ <?php echo e(strtolower($title)); ?> về các loại trà hoa, trà thảo mộc, thảo dược được triết xuất 100% từ tự nhiên, cách bảo quản, cách sử dụng <strong><a href="/tra-huyet-dang">trà huyết đằng</a></strong>, trà nụ hoa tam thất, saffon... tại <strong>Thủy Mộc Trà</strong>.</p>
                        <!-- Blog Post -->
                        <?php if(count($articles) > 0): ?>
                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="blog-post">
                                <article class="row">
                                    <div class="image-block col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">
                                            <img class="img-responsive" src="<?php echo e(asset($article->image)); ?>" alt="<?php echo e(asset($article->image)); ?>">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" class="tittle"><?php echo e($article->title); ?></a>
                                        <p class="date"><?php echo e($article->created_at); ?></p>
                                        <?php echo $article->intro; ?>

                                        <a style="margin-top:10px;display:block;" href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">Chi tiết</a>
                                    </div>
                                </article>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- pagination -->
                            <?php echo e($articles->appends(request()->query())->links()); ?>

                        <?php else: ?>
                            <p>Chưa có bài viết nào!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('layouts.user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('pageJs'); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>