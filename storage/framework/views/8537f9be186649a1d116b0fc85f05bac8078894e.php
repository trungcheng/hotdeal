<div class="body-left col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <?php if(isset($type) && $type == 'product' && count($categories) > 0): ?>
    <div class="box-support" style="padding:0">
        <div class="header">Danh mục sản phẩm</div>
        <div class="box-body" style="padding:0">
            <ul class="product-cates">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('product-detail', ['slug' => $cate->slug])); ?>"><?php echo e($cate->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <div class="box-support">
        <div class="header">Hỗ trợ trực tuyến</div>
        <div class="box-body">
            <div class="chattuvan" style="margin-bottom: 15px;">
                <strong class="hotline-right">
                    <a href="http://zalo.me/<?php echo e($setting->phone); ?>" style="background:#0C599C;" rel="nofollow">
                        <img style="width:35px;border-radius:126px;position:absolute;left:0px;top:0;" src="<?php echo e(asset('frontend/images/zalo.png')); ?>" alt="Chat với Thủy Mộc Trà"> 
                        <span>Chat zalo với chúng tôi</span>
                    </a>
                </strong>
            </div>
            <div class="gopy-phananh">
                <strong class="hotline-right">
                    <a href="tel:<?php echo e($setting->phone); ?>" rel="nofollow">
                        <div class="phone"><span></span></div>
                        <div></div> 
                        <span>Hotline: <?php echo e($setting->phone); ?></span>
                    </a>
                </strong>
            </div>
        </div>
    </div>

    <?php if(count($sidebarArticles) > 0): ?>
    <div class="box-news-hot">
        <div class="header">Tin mới</div>
        <ul class="body-news" style="min-height:347px">
            <?php $__currentLoopData = $sidebarArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="item-list">
                <div class="img-view" style="float:left">
                    <a title="<?php echo e($article->title); ?>" href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">
                        <img src="<?php echo e($article->image); ?>" alt="<?php echo e($article->title); ?>">
                    </a>
                </div>
                <h5>
                    <a class="link-view" title="<?php echo e($article->title); ?>" href="<?php echo e(route('article-detail', ['slug' => $article->slug])); ?>">
                        <?php echo e($article->title); ?>

                    </a>
                </h5>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
</div>