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
                        <li>
                            <a itemprop="url" href="<?php echo e(route('article')); ?>" title="Tin tức"><span itemprop="title">Tin tức</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title"><?php echo e($article->title); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container article-wraper">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <article class="article-main" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="mainEntityOfPage" content="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien">
                    <meta itemprop="description" content="<?php echo e($article->intro); ?>">
                    <meta itemprop="author" content="<?php echo e($article->user->fullname); ?>">
                    <meta itemprop="headline" content="<?php echo e($article->title); ?>">
                    <meta itemprop="image" content="<?php echo e($article->image); ?>">
                    <meta itemprop="datePublished" content="<?php echo e($article->created_at); ?>">
                    <meta itemprop="dateModified" content="<?php echo e($article->created_at); ?>">
                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo e(asset('frontend/images/logos/logo.png')); ?>" alt="King Bep" />
                            <meta itemprop="url" content="<?php echo e(asset('frontend/images/logos/logo.png')); ?>">
                            <meta itemprop="width" content="200">
                            <meta itemprop="height" content="49">
                        </div>
                        <meta itemprop="name" content="<?php echo e($article->title); ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-head"><?php echo e($article->title); ?></h1>
                            <div class="postby">
                                <span><?php echo e($article->created_at); ?></span>
                            </div>
                            <div class="article-details">
                                <div class="article-content">
                                    <div class="rte">
                                        <?php echo $article->fulltext; ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="blog_related">
                                <h2>Bài viết liên quan</h2>
                                <?php $__currentLoopData = $otherArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="blog_entry clearfix">
                                    <h3 class="blog_entry-title"><a rel="bookmark" href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" title="<?php echo e($article->title); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo e($article->title); ?></a></h3>
                                </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="article-comments" class="clearfix">
                                <h5 class="title-form-comment">Bình luận</h5>
                                <div class="article-comment clearfix">
                                    <div class="fb-comments" data-href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>" data-width="100%" data-numposts="10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <aside class="left left-content col-md-3 col-md-pull-9">

                <?php if(count($articleCates) > 0): ?>
                <aside class="aside-item collection-category blog-category">
                    <div class="heading">
                        <h2 class="title-head"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category  navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('article')); ?>">Mới nhất</a>
                                </li>
                                <?php $__currentLoopData = $articleCates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('article-detail', ['slug' => $cat->slug])); ?>"><?php echo e($cat->name); ?></a>
                                        <?php if(isset($cat->childrens)): ?>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $cat->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="<?php echo e(route('article-detail', ['slug' => $child->slug])); ?>"><?php echo e($child->name); ?></a>
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
                <?php endif; ?>

                <?php if(count($otherArticles) > 0): ?>
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
                <?php endif; ?>

            </aside>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>