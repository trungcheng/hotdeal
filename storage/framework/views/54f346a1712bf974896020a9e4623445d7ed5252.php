<?php $__env->startSection('page'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($article->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('article-detail', ['slug' => $article->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('article-detail', ['slug' => $article->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($article->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($article->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('article-detail', ['slug' => $article->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e($article->image); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    <style>
        .blog-post .date {
            margin-bottom: 15px;
            font-size: 13px;
            color: #666;
        }
        .register {
            margin-top: 20px;
        }
        .register .btn-round {
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: #0088cc;
            color: #fff;
        }
        .register .btn-round:hover {
            text-decoration: none;
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
                        <li><a href="<?php echo e(route('article')); ?>">Tin tức</a><span>»</span></li>
                        <li><a id="title" class="active"><?php echo e($article->title); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="body-right col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="box-body homepage clearfix">
                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article>
                                <h1 style="font-size:25px;margin-top:0px;margin-bottom:5px;"><?php echo e($article->title); ?></h1>
                                <p class="date"><?php echo e($article->created_at); ?></p>
                                <hr style="margin-top:-10px;">
                                <div style="text-align:justify">
                                    <?php echo $article->intro; ?>

                                    <?php echo $article->fulltext; ?>

                                </div>
                                <?php if($article->category && $article->category->slug == 'khuyen-mai'): ?>
                                <div class="register">
                                    <a href="https://forms.gle/KvyMoyYmBFiFTLju6" target="_blank" class="btn-round">Đăng ký nhận khuyến mãi tại đây</a>
                                </div>
                                <?php endif; ?>
                                <div style="margin-top:20px" class="fb-like" data-href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" data-width="850" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </article>

                            <!-- Comments -->
                            <div class="comments">
                                <div class="fb-comments" data-href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" data-width="750" data-numposts="10"></div>
                            </div>
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
    <script type="text/javascript">
		var trim = trimText($("#title").text(), 6);
        $("#title").text(trim);
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>