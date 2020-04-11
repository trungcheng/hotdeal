<?php $__env->startSection('page'); ?><?php echo e($product->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><?php echo e($product->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?><?php echo e($product->seo_keyword); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('product-detail', ['slug' => $product->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('product-detail', ['slug' => $product->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?><?php echo e($product->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?><?php echo e($product->seo_desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?><?php echo e($product->seo_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?><?php echo e($product->desc); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('product-detail', ['slug' => $product->slug])); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e($product->image); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/product.review.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/product.detail.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="full-width" style="margin-bottom:50px">

	<div class="box-breadcumb">
		<div class="container-site">
			<div class="row">
				<div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcum">
						<li><a href="/">Trang chủ</a><span>»</span></li>
						<li><a href="<?php echo e(route('product-detail', ['slug' => $product->category->slug])); ?>"><?php echo e($product->category->name); ?></a><span>»</span></li>
						<li><a class="active"><?php echo e($product->name); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container-site" style="margin-bottom:30px;margin-top:30px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-detail">
				<div class="product">
					<div class="row">
						<!-- Slider Thumb -->
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<article class="slider-item on-nav">
								<div id="slider" class="flexslider">
									<ul class="slides">
										<li>
											<img src="<?php echo e(asset($product->image)); ?>" alt="">
										</li>
										<?php $__currentLoopData = $image_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<img src="<?php echo e(asset($image)); ?>" alt="">
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<!-- items mirrored twice, total of 12 -->
									</ul>
								</div>
								<div id="carousel" class="flexslider" style="margin-top:20px;">
									<ul class="slides">
										<li>
											<img src="<?php echo e(asset($product->image)); ?>" alt="">
										</li>
										<?php $__currentLoopData = $image_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<img src="<?php echo e(asset($image)); ?>" alt="">
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<!-- items mirrored twice, total of 12 -->
									</ul>
								</div>
							</article>
						</div>
						<!-- Item Content -->
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

							<h1 style="font-size:25px;margin-top:10px;color:#000"><?php echo e($product->name); ?></h1>
							<span class="tags">Mã sản phẩm: <?php echo $product->sku_id; ?></span>
							<div class="row" style="margin-top:10px;">
								<div class="col-sm-6">
									<span class="price">Giá: <?php echo e(number_format($product->price_sale, 0, 0, '.')); ?> VNĐ</span>
									<div>
										<del class="product-price-old">Giá retail: <?php echo e(number_format($product->price, 0, 0, '.')); ?> VNĐ</del>
									</div>
								</div>
								<div class="col-sm-6">
									<p style="line-height:30px;">Tình trạng: <span class="in-stock"><?php echo e(($product->status == 1) ? 'Còn hàng' : 'Hết hàng'); ?></span></p>
								</div>
							</div>
							<!-- List Details -->
							<div style="margin-top:20px;">
								<?php echo ($product->short_desc != '') ? $product->short_desc : ''; ?>

							</div>

							<!-- Quinty -->
							<form method="POST" action="<?php echo e(route('cartAdd')); ?>" style="margin-top: 30px">
								<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								<div class="quinty">
									<input name="quantity" type="number" value="1">
								</div>
								<button style="border:none" type="submit" id="btnAddCart" class="btn-round">
									<i style="font-size:17px;margin-right:5px" class="fa fa-shopping-cart"></i> Đặt mua ngay
								</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-site">
		<div class="row">
			<div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
				<div class="box-news-sub">
					<div class="cate-header sub-top">
						<div class="txt-name-sub" style="border-bottom:1px solid #e5e5e5">
							<h2>Mô tả sản phẩm</h2>
						</div>
					</div>
					<div class="box-body homepage clearfix" style="padding: 10px 0px 10px 0px;">
						<?php echo $product->full_desc; ?>

					</div>
				</div>

				<?php if(count($reviews) > 0): ?>
				<div class="box-news-sub">
					<div class="cate-header sub-top">
						<div class="txt-name-sub" style="border-bottom:1px solid #e5e5e5">
							<h2>Đánh giá sản phẩm</h2>
						</div>
					</div>
					<div class="box-body homepage clearfix" style="padding: 10px 0px 10px 0px;">
						<div class="boxRatingCmt" id="boxRatingCmt">
							<div class="hrt hidden-sm hidden-xs" id="danhgia">
								<div class="tltRt ">
									<h3 data-s="392" data-gpa="4.0" data-c="99">Có <?php echo e(count($reviews)); ?> đánh giá về <?php echo e($product->name); ?></h3>
								</div>
							</div>

							<div class="toprt hidden-sm hidden-xs">
								<div class="crt">
									<div class="lcrt " data-gpa="4.0">
										<b><?php echo e($averageReview); ?> <i class="iconcom-star"></i></b>  
									</div>
									<div class="rcrt">
										<?php
											for ($i = 5; $i >= 1; $i--) {
												$numReview = \App\Models\Review::where('pro_id', $product->id)
													->where('status', 1)->where('star', $i)->count();
												$w = $numReview / count($reviews) * 100 . '%';
												?>
												<div class="r">
													<span class="t"><?php echo e($i); ?> <i></i></span>
													<div class="bgb">
														<div class="bgb-in" style="width:<?php echo e($w); ?>"></div>
													</div>
													<span class="c"><strong><?php echo e($numReview); ?></strong> đánh giá</span>
												</div>
												<?php
											}
										?>
									</div>
									<div class="bcrt">
										<a href="javascript:showInputRating()">Gửi đánh giá của bạn</a>
									</div>
								</div>

								<div class="clr"></div>

								<form class="input hide" id="fRatingComment" onsubmit="return false;">
									<input type="hidden" name="star" id="hdfStar" value="1">
									<input type="hidden" name="pro_id" id="hdfProductID" value="<?php echo e($product->id); ?>">
									<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
									<div class="ips">
										<span>Chọn đánh giá của bạn</span>
										<span class="lStar">
											<i class="iconstar iconcom-unstar" id="s1" data-txt="Không thích" data-star="1"></i>
											<i class="iconstar iconcom-unstar" id="s2" data-txt="Tạm được" data-star="2"></i>
											<i class="iconstar iconcom-unstar" id="s3" data-txt="Bình thường" data-star="3"></i>
											<i class="iconstar iconcom-unstar" id="s4" data-txt="Rất tốt" data-star="4"></i>
											<i class="iconstar iconcom-unstar" id="s5" data-txt="Tuyệt vời quá" data-star="5"></i>
										</span>
										<span class="rsStar hide">Không thích</span>
									</div>
									<div class="clr"></div>
									<div class="ipt">
										<div class="ct">
											<textarea id="fRContent" name="content" placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)" onkeyup="countTxtRating(this)"></textarea>
											<div class="extCt hide">
												<span class="ckt"></span>
											</div>
										</div>
										<div class="if">
											<input type="text" id="fRName" name="name" placeholder="Họ tên">
											<input type="text" id="fRPhone" name="phone" placeholder="Số điện thoại">
											<input type="text" id="fREmail" name="email" placeholder="Email">
											<a href="javascript:submitRatingComment();">GỬI ĐÁNH GIÁ</a>
										</div>
										<div class="clr"></div>
										<span class="lbMsgRt"></span>
									</div>
								</form>
							</div>

							<div class="list">
								<ul class="ratingLst">
									<?php \Carbon\Carbon::setLocale('vi'); ?>
									<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="par">
										<div class="rh">
											<span><?php echo e($review->name); ?></span>
											<a href="javascript:;" class="cmdt"><?php echo e($review->created_at->diffForHumans(\Carbon\Carbon::now())); ?></a>
										</div>
										<div class="rc">
											<p>
												<span>
													<?php
														for ($k = 1; $k <= $review->star; $k++) {
															?>
															<i class="iconcom-txtstar"></i>
															<?php
														}
														for ($h = 1; $h <= 5 - $review->star; $h++) {
															?>
															<i class="iconcom-txtunstar"></i>
															<?php
														}
													?>
												</span>
												<i><?php echo $review->content; ?></i>
											</p>
										</div>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<?php endif; ?>

				<div class="box-news-sub">
					<div class="cate-header sub-top">
						<div class="txt-name-sub" style="border-bottom:1px solid #e5e5e5">
							<h2>Bình luận trên facebook</h2>
						</div>
					</div>
					<div class="box-body homepage clearfix" style="padding: 10px 0px 10px 0px;">
						<p>Đang cập nhật...</p>
					</div>
				</div>
			</div>

			<?php echo $__env->make('layouts.user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
	<script type="text/javascript" src="<?php echo e(asset('frontend/js/own-menu.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('frontend/js/product.review.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>