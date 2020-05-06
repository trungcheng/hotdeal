<?php $__env->startSection('page'); ?><?php echo e($page->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($page->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($page->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($page->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($page->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($page->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($page->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('article')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(!empty($articles) ? $articles[0]->image : $setting->logo); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('schema'); ?><?php echo e($page->seo_schema); ?>

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
                        <li><strong itemprop="title">Tin tức</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container" itemscope itemtype="http://schema.org/Blog">
        <meta itemprop="name" content="Tin tức">
        <meta itemprop="description" content="Chủ đề không có mô tả">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head">Tin tức</h1>
                </div>

                <div class="margin-bottom-20">
                    <?php echo $page->seo_content; ?>

                </div>

                <?php if(count($articles) > 0): ?>
                <section class="list-blogs blog-main">
                    <div class="row">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">
                                        <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($article->image); ?>" alt="<?php echo e($article->title); ?>" class="img-responsive center-block" />
                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" title="<?php echo e($article->title); ?>"><?php echo e($article->title); ?></a></h3>
                                <div class="post-time">
                                    <?php echo e($article->created_at); ?>

                                </div>
                                <p class="blog-item-summary margin-bottom-5"><?php echo $article->intro; ?></p>
                            </article>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo e($articles->appends(request()->query())->links()); ?>

                        </div>
                    </div>
                </section>
                <?php else: ?>
                <section class="list-blogs blog-main">
                    <div class="row">
                        <div class="col-md-12">Không có bài viết nào</div>
                    </div>
                </section>
                <?php endif; ?>

            </section>
            <aside class="left left-content col-md-3 col-md-pull-9">

                <aside class="aside-item collection-category blog-category">
                    <div class="heading">
                        <h2 class="title-head"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category  navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('product-detail', ['slug' => $cat->slug])); ?>"><?php echo e($cat->name); ?></a>
                                        <?php if(isset($cat->childrens)): ?>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $cat->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="<?php echo e(route('product-detail', ['slug' => $child->slug])); ?>"><?php echo e($child->name); ?></a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head">Bài viết khác</h2>
                    </div>
                    <div class="list-blogs">
                        <div class="row">
                            <?php $__currentLoopData = $otherArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="blog-item blog-item-list col-md-12">
                                <a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" class="panel-box-media">
                                    <img src="<?php echo e(asset('frontend/images/icons/loaders.svg')); ?>" data-lazyload="<?php echo e($article->image); ?>" width="70" height="70" alt="<?php echo e($article->title); ?>" />
                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" title="<?php echo e($article->title); ?>"><?php echo e($article->title); ?></a></h3>
                                    
                                </div>
                            </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $(function () {
            $('.blog-item p').each(function (v, k) {
                var trim = trimText($(k).text(), 20);
                $(k).text(trim);
            });
        });
    </script>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>