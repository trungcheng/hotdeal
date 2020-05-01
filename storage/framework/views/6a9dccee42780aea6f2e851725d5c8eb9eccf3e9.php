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
	<link href="<?php echo e(asset('frontend/css/lightbox.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('frontend/css/product.review.css')); ?>" rel="stylesheet" type="text/css" />
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
							<a itemprop="url" href="<?php echo e(route('product-detail', ['slug' => $product->category->slug])); ?>" title="<?php echo e($product->category->name); ?>"><span itemprop="title"><?php echo e($product->category->name); ?></span></a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li>
							<strong><span itemprop="title"><?php echo e($product->name); ?></span></strong>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js' type='text/javascript'></script>

	<section class="product" itemscope itemtype="http://schema.org/Product">
		<meta itemprop="url" content="<?php echo e(route('product-detail', ['slug' => $product->slug])); ?>">
		<meta itemprop="image" content="<?php echo e($product->image); ?>">
		<meta itemprop="description" content="<?php echo e($product->name); ?>">
		<meta itemprop="name" content="<?php echo e($product->name); ?>">
		<div class="container">
			<div class="row">
				<div class="details-product clearfix">
					<div class="col-lg-9 col-md-9 col-xs-12">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<div id="product" class="relative product-image-block ">
									<div class="large-image">
										<a href="<?php echo e($product->image); ?>" data-rel="prettyPhoto[product-gallery]" class="large_image_url">
											<img id="zoom_01" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="img-responsive center-block">
										</a>
										<div class="hidden">
											<div class="item">
												<a href="<?php echo e($product->image); ?>" data-image="<?php echo e($product->image); ?>" data-zoom-image="<?php echo e($product->image); ?>" data-rel="prettyPhoto[product-gallery]">
												</a>
											</div>
											<?php $__currentLoopData = $image_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="item">
												<a href="<?php echo e($img); ?>" data-image="<?php echo e($img); ?>" data-zoom-image="<?php echo e($img); ?>" data-rel="prettyPhoto[product-gallery]">
												</a>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									</div>

									<div id="gallery_01" class="owl-carousel owl-theme thumbnail-product abc a2">
										<div class="item">
											<a href="javascript:void(0);" data-image="<?php echo e($product->image); ?>" data-zoom-image="<?php echo e($product->image); ?>"><img data-image="<?php echo e($product->image); ?>" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>"></a>
										</div>
										<?php $__currentLoopData = $image_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="item">
											<a href="javascript:void(0);" data-image="<?php echo e($img); ?>" data-zoom-image="<?php echo e($img); ?>"><img data-image="<?php echo e($img); ?>" src="<?php echo e($img); ?>" alt="<?php echo e($product->name); ?>"></a>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>

								<div class="social-sharing">
									
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 details-pro">
								<h1 class="title-head"><?php echo e($product->name); ?></h1>
								

								<div class="stock-brand">
									<ul>
										<li class="inventory_quantity" itemscope itemtype="http://schema.org/ItemAvailability">
											<span class="stock-brand-title">Tình trạng:</span>
											<span class="a-stock" itemprop="supersededBy"><?php echo e($product->status == 1 ? 'Còn hàng' : 'Hết hàng'); ?></span>
										</li>
										
									</ul>
								</div>

								<div class="price-box" itemscope itemtype="http://schema.org/Offer">
									<span class="special-price">
										<span class="price product-price" itemprop="price">
											<?php echo e(number_format($product->price_sale, 0, 0, '.')); ?>đ
										</span>
										<meta itemprop="priceCurrency" content="VND">
									</span>
									<?php if($product->discount > 0): ?>
									<span class="old-price">Giá cũ: 
										<del class="price product-price-old" itemprop="priceSpecification">
											<?php echo e(number_format($product->price, 0, 0, '.')); ?>đ		
										</del>
										<meta itemprop="priceCurrency" content="VND">
									</span>
									<span class="save-price">Tiết kiệm: 
										<span class="price product-price-save">
											<?php echo e(number_format($product->price - $product->price_sale, 0, 0, '.')); ?>đ
										</span> 
									</span>
									<?php endif; ?>
								</div>

								<div class="form-product">
									<form enctype="multipart/form-data" id="add-to-cart-form" action="<?php echo e(route('cartAdd')); ?>" method="post" class="form-inline">
										<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

										<div class="form-group clearfix">
											<div class="custom custom-btn-number form-control">
												<input type="input" class="input-text qty number-sidebar" data-field='quantity' title="Số lượng" value="1" id="qty" name="quantity" max="1" />
												<div class="gp-btn">
													<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
													<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
												</div>
											</div>

											<button type="submit" class="btn btn-lg btn-gray btn-cart add_to_cart btn_buy add_to_cart" title="Mua ngay">
												<span>Mua ngay</span>
											</button>
										</div>
									</form>
									<div class="clearfix"></div>
								</div>

								<div class="product-summary product_description ahahah margin-bottom-15">
									<div class="rte description">
										<?php echo $product->short_desc; ?>

									</div>
								</div>

								<div class="product-sidebar-ant-fashion hidden-lg hidden-md">

									<div class="box-hotlines clearfix">
										<div class="box-hotlines-left">
											<h3>Bạn cần hỗ trợ?</h3>
											<p>Mua sản phẩm</p>

											<h2><a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>"><?php echo e($setting->phone); ?></a></h2>

											<div class="link-contact">
												<a href="<?php echo e(route('contact')); ?>">Liên hệ</a>
											</div>
										</div>
										<div class="box-hotlines-right">
											<a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 margin-top-15 margin-bottom-10">
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
										<li role="presentation" class="active">
											<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
												<span class="text">Mô tả sản phẩm</span>
											</a>
										</li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<div class="well product-well">
												<div class="row ababa">
													<div class="col-md-12">
														<?php echo $product->full_desc; ?>	
													</div>
												</div>
												<a class="btn btn-default btn--view-more">
													<span class="more-text">Xem thêm <i class="fa fa-chevron-down"></i></span>
													<span class="less-text">Thu gọn <i class="fa fa-chevron-up"></i></span>
												</a>
											</div>
										</div>
									</div>

									<hr style="margin-top:65px;margin-bottom:10px;border:1px solid #ddd;border-color:#f4f4f4;">

									<div class="product-page-relative">
										<div class="row">
											<div class="col-md-12">
												<div class="related-product collections-container">
													<div style="margin-bottom:0px" class="feature_category_title">
														<h3 style="color:#323c3f;letter-spacing:.01em;">So sánh với các sản phẩm cùng loại</h3>
													</div>
													<div class="products owl-carousel owl-theme products-view-grid" data-md-items="4" data-sm-items="4" data-xs-items="2" data-margin="0">
														<?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<div class="product-box">
															<div class="product-thumbnail">
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
																</div>
															</div>
														</div>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</div>
												</div>
											</div>
										</div>
									</div>

									<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
										<li role="presentation" class="active">
											<a href="#review" id="review-tab" role="tab" data-toggle="tab" aria-controls="review" aria-expanded="true">
												<span class="text">Đánh giá sản phẩm</span>
											</a>
										</li>
									</ul>

									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="review" aria-labelledby="review-tab">

											<div class="boxRatingCmt" id="boxRatingCmt">
												<div class="hrt hidden-sm hidden-xs" id="danhgia">
													<div class="tltRt ">
														<h3 style="font-size:18px">Có <?php echo e(count($reviews)); ?> đánh giá về <?php echo e($product->name); ?></h3>
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
																	$w = (count($reviews) > 0) ? $numReview / count($reviews) * 100 . '%' : '0%';
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
													<?php if(count($reviews) > 0): ?>
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
													<?php else: ?>
														<p>Chưa có đánh giá nào!</p>
													<?php endif; ?>
												</div>
											</div>

										</div>
									</div>

									<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
										<li role="presentation" class="active">
											<a href="#comment" id="comment-tab" role="tab" data-toggle="tab" aria-controls="comment" aria-expanded="true">
												<span class="text">Bình luận trên Facebook</span>
											</a>
										</li>
									</ul>

									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="comment" aria-labelledby="comment-tab">
						                    <div class="fb-comments" data-href="<?php echo e(route('product-detail', ['slug' => $product->slug])); ?>" data-width="100%" data-numposts="10"></div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-xs-12">
						<div class="product-sidebar-ant-fashion">

							<div class="box-hotlines clearfix hidden-sm hidden-xs">
								<div class="box-hotlines-left">
									<h3>Bạn cần hỗ trợ?</h3>
									<p>Mua sản phẩm</p>

									<h2><a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>"><?php echo e($setting->phone); ?></a></h2>

									<div class="link-contact">
										<a href="<?php echo e(route('contact')); ?>">Liên hệ</a>
									</div>
								</div>
								<div class="box-hotlines-right">
									<a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							

						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>	
	<script src="<?php echo e(asset('frontend/js/jquery-zoom.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('frontend/js/jquery-prettyphoto.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('frontend/js/jquery-prettyphotoboot.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('frontend/js/product.review.js')); ?>" type="text/javascript"></script>

	<script>
		var product = {
			"id": 8891917,
			"name": "Android Tivi Sony 4K 49 inch KD-49X7500E",
			"alias": "android-tivi-sony-4k-49-inch-kd-49x7500e",
			"vendor": "Sony",
			"type": "Tivi",
			"price": 19900000.0000,
			"price_max": 19900000.0000,
			"price_min": 19900000.0000,
			"price_varies": false,
			"compare_at_price_max": 22000000.0000,
			"compare_at_price_min": 22000000.0000,
			"compare_at_price_varies": false,
			"template_layout": "product",
			"tags": null,
			"meta_title": "Android Tivi Sony 4K 49 inch KD-49X7500E",
			"meta_description": "Thiết kế mỏng ấn tượng Smart Tivi Sony 4K 49 inch KD-49X7500E sở hữu kiểu dáng tinh tế, thời trang cùng với kích thước màn hình rộng 49 inch, kết hợp khung viền",
			"summary": "\u003cp\u003eSmart Tivi Sony 4K 49 inch KD-49X7500E\u0026nbsp;sở hữu kiểu dáng tinh tế, thời trang cùng với kích thước màn hình rộng 49 inch, kết hợp khung viền chắc chắn, sắc sảo và tông màu đen quý phái.\u003c/p\u003e",
			"featured_image": {
				"alt": "",
				"id": 21245178,
				"product_id": 8891917,
				"position": "1",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			},
			"images": [{
				"alt": "",
				"id": 21245178,
				"product_id": 8891917,
				"position": "1",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			}, {
				"alt": "",
				"id": 21245179,
				"product_id": 8891917,
				"position": "2",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-2-org.jpg?v=1509778199387",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			}, {
				"alt": "",
				"id": 21245180,
				"product_id": 8891917,
				"position": "3",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-3-org.jpg?v=1509778192987",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			}, {
				"alt": "",
				"id": 21245181,
				"product_id": 8891917,
				"position": "4",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-4-org.jpg?v=1509778192987",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			}, {
				"alt": "",
				"id": 21245184,
				"product_id": 8891917,
				"position": "5",
				"src": "//bizweb.dktcdn.net/100/270/860/products/tivi-sony-kd-49x7500e-7-org.jpg?v=1509778192987",
				"attached_to_variant": false,
				"variant_ids": [],
				"width": 1020,
				"height": 680
			}],
			"options": ["Title"],
			"variants": [{
				"id": 14154614,
				"barcode": null,
				"sku": null,
				"price": 19900000.0000,
				"compare_at_price": 22000000.0000,
				"options": ["Default Title"],
				"option1": "Default Title",
				"option2": null,
				"option3": null,
				"title": "Default Title",
				"taxable": false,
				"inventory_management": "",
				"inventory_policy": "deny",
				"inventory_quantity": 1,
				"weight": 0.0,
				"weight_unit": "kg",
				"image": null,
				"requires_shipping": true,
				"selected": false,
				"url": "/android-tivi-sony-4k-49-inch-kd-49x7500e?variantid=14154614",
				"available": true
			}],
			"selected_variant": null,
			"available": true,
			"content": "\u003ch3\u003eThiết kế mỏng ấn tượng\u003c/h3\u003e\n\u003cp\u003eSmart Tivi Sony 4K 49 inch KD-49X7500E\u0026nbsp;sở hữu kiểu dáng tinh tế, thời trang cùng với kích thước màn hình rộng 49 inch, kết hợp khung viền chắc chắn, sắc sảo và tông màu đen quý phái.\u003c/p\u003e\n\u003cp\u003e\u003cimg alt=\u0022Thiết kế siêu mỏng\u0022 data-src=\u0022https://cdn.tgdd.vn/Products/Images/1942/105258/sony-kd-49x7500e4.png\u0022 height=\u0022354\u0022 src=\u0022https://cdn.tgdd.vn/Products/Images/1942/105258/sony-kd-49x7500e4.png\u0022 title=\u0022Thiết kế siêu mỏng\u0022 width=\u0022800\u0022 /\u003e\u003c/p\u003e\n\u003ch3\u003eTrải nghiệm hình ảnh rõ ràng, chân thật\u003c/h3\u003e\n\u003cp\u003eKhông chỉ được đầu tư về thiết kế hiện đại mà\u0026nbsp;Sony\u0026nbsp;cũng đã bày tỏ sự quan tâm đặc biệt đến chất lượng của sản phẩm thông qua các công nghệ tiêu biểu:\u003c/p\u003e\n\u003cp\u003e- Độ phân giải\u0026nbsp;Ultra HD 4K\u0026nbsp;cùng công nghệ\u0026nbsp;HDR:\u0026nbsp;Cho phép hình ảnh ở các vùng sáng hoặc tối được hiển thị một cách rõ nét nhất, mang tới chiều sâu và độ tự nhiên nhất cho hình ảnh.\u003c/p\u003e\n\u003cp\u003e- Công nghệ 4K X-Reality Pro:\u0026nbsp;Xử lý tín hiệu hình ảnh thông minh, giúp nâng cấp hình ảnh đầu vào trở nên rõ ràng, trung thực gần chuẩn 4K.\u003c/p\u003e\n\u003ch3\u003eÂm thanh vang dội, cuốn hút\u003c/h3\u003e\n\u003cp\u003eVới công suất loa 20 W cùng chuỗi công nghệ âm thanh hiện đại (Clear Phase,\u0026nbsp;S-Force Front Surround,\u0026nbsp;ClearAudio+),\u0026nbsp;tivi Sony KD-49X7500E\u0026nbsp;sẽ tạo nên điểm nhấn lôi cuốn, hấp dẫn cho người nghe trải nghiệm âm thanh tự nhiên, sinh động hơn bao giờ hết.\u003c/p\u003e\n\u003ch3\u003eChiếu màn hình điện thoại lên tivi dễ dàng, nhanh chóng\u003c/h3\u003e\n\u003ch3\u003eHệ điều hành Android dễ sử dụng, kho ứng dụng phong phú\u003c/h3\u003e\n\u003cp\u003eHệ điều hành\u0026nbsp;Android\u0026nbsp;cùng khả năng kết nối internet, đáp ứng được các nhu cầu giải trí khác cho gia đình bạn từ kho ứng dụng lớn Google Play khổng lồ với Trình duyệt Web, Youtube, Zing TV, Netflix, Nhạc của tui…Thậm chí là bạn còn có thể chơi game thật mượt mà.\u003c/p\u003e\n\u003cp\u003e\u003cimg alt=\u0022Android Tivi Sony\u0022 src=\u0022//bizweb.dktcdn.net/100/270/860/files/tivisony-kd-49x7500e-550x3407.jpg?v=1510728985483\u0022 /\u003e\u003c/p\u003e\n\u003ch3\u003eKết nối dễ dàng với thiết bị ngoài\u003c/h3\u003e\n\u003cp\u003e- Cổng\u0026nbsp;Optical: mang lại trải nghiệm âm thanh mạnh mẽ, chất lượng và sống động hơn.\u003c/p\u003e\n\u003cp\u003e- Cổng\u0026nbsp;HDMI:\u0026nbsp;Với dây cáp HDMI, bạn có chia sẻ hình ảnh/dữ liệu từ thiết bị điện từ bên ngoài lên màn hình tivi.\u003c/p\u003e\n\u003cp\u003e- Cổng\u0026nbsp;USB: Sử dụng USB để chia sẻ nội dung trực tiếp lên tivi.\u003c/p\u003e",
			"summary_or_content": "\u003cp\u003eSmart Tivi Sony 4K 49 inch KD-49X7500E\u0026nbsp;sở hữu kiểu dáng tinh tế, thời trang cùng với kích thước màn hình rộng 49 inch, kết hợp khung viền chắc chắn, sắc sảo và tông màu đen quý phái.\u003c/p\u003e",
			"created_on": "2017-11-04T13:49:52Z",
			"published_on": "2017-11-04T13:49:00Z",
			"object_type": null
		};
		var selectCallback = function(variant, selector) {
			if (variant) {

				var form = jQuery('#' + selector.domIdPrefix).closest('form');

				for (var i = 0, length = variant.options.length; i < length; i++) {

					var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
					//console.log(radioButton);
					if (radioButton.size()) {
						radioButton.get(0).checked = true;
					}
				}
			}
			var addToCart = jQuery('.form-product .btn-cart'),
				form = jQuery('.form-product .form-group'),
				productPrice = jQuery('.details-pro .special-price .product-price'),
				qty = jQuery('.inventory_quantity .a-stock'),
				comparePrice = jQuery('.details-pro .old-price .product-price-old'),
				comparePriceText = jQuery('.details-pro .old-price'),
				savePrice = jQuery('.details-pro .save-price .product-price-save'),
				savePriceText = jQuery('.details-pro .save-price'),
				qtyBtn = jQuery('.form-product .form-group .custom-btn-number'),
				max = jQuery('.form-product .form-group .qty');

			if (variant && variant.available) {
				if (variant.inventory_management == "bizweb") {
					if (variant.inventory_quantity != 0) {
						qty.html('<span class="a-stock">Chỉ còn ' + variant.inventory_quantity + ' sản phẩm</span>');
						max.attr("max", variant.inventory_quantity);
						max.val(1);
					} else if (variant.inventory_quantity == '') {
						qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
					}
				} else {
					qty.html('<span class="a-stock">Còn hàng</span>');
				}
				addToCart.text('Mua ngay').removeAttr('disabled');
				qtyBtn.removeClass('hidden');
				if (variant.price == 0) {
					productPrice.html('Liên hệ');
					comparePrice.hide();
					savePrice.hide();
					comparePriceText.hide();
					savePriceText.hide();
					form.addClass('hidden');
				} else {
					form.removeClass('hidden');
					productPrice.html(Bizweb.formatMoney(variant.price, "<?php echo e(0); ?>₫"));
					// Also update and show the product's compare price if necessary
					if (variant.compare_at_price > variant.price) {
						comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "<?php echo e(0); ?>₫")).show();
						savePrice.html(Bizweb.formatMoney(variant.compare_at_price - variant.price, "<?php echo e(0); ?>₫")).show();
						comparePriceText.show();
						savePriceText.show();
					} else {
						comparePrice.hide();
						savePrice.hide();
						comparePriceText.hide();
						savePriceText.hide();
					}
				}

			} else {
				qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
				addToCart.text('Hết hàng').attr('disabled', 'disabled');
				qtyBtn.addClass('hidden');
				if (variant) {
					if (variant.price != 0) {
						form.removeClass('hidden');
						productPrice.html(Bizweb.formatMoney(variant.price, "<?php echo e(0); ?>₫"));
						// Also update and show the product's compare price if necessary
						if (variant.compare_at_price > variant.price) {
							comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "<?php echo e(0); ?>₫")).show();
							savePrice.html(Bizweb.formatMoney(variant.compare_at_price - variant.price, "<?php echo e(0); ?>₫")).show();
							comparePriceText.show();
							savePriceText.show();
						} else {
							comparePrice.hide();
							savePrice.hide();
							comparePriceText.hide();
							savePriceText.hide();
						}
					} else {
						productPrice.html('Liên hệ');
						comparePrice.hide();
						savePrice.hide();
						comparePriceText.hide();
						savePriceText.hide();
						form.addClass('hidden');
					}
				} else {
					productPrice.html('Liên hệ');
					comparePrice.hide();
					savePrice.hide();
					comparePriceText.hide();
					savePriceText.hide();
					form.addClass('hidden');
				}

			}
			/*begin variant image*/
			if (variant && variant.image) {
				var originalImage = jQuery(".large-image img");
				var stickoriginalImage = jQuery(".productAnchor_horizonalNav img");
				var newImage = variant.image;
				var element = originalImage[0];
				Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
					jQuery(element).parents('a').attr('href', newImageSizedSrc);
					jQuery(element).attr('src', newImageSizedSrc);
					jQuery(stickoriginalImage).attr('src', newImageSizedSrc);
				});
				$('.large-image .checkurl').attr('href', $(this).attr('src'));
				if ($(window).width() > 1200) {
					setTimeout(function() {
						$('.zoomContainer').remove();
						$('#zoom_01').elevateZoom({
							gallery: 'gallery_01',
							zoomWindowOffetx: 0,
							zoomWindowOffety: 0,
							zoomType: "inner",
							easing: true,
							scrollZoom: false,
							cursor: 'pointer',
							galleryActiveClass: 'active',
							imageCrossfade: true
						});
					}, 300);
				}
			}

			/*end of variant image*/
		};
		jQuery(function($) {


			// Add label if only one product option and it isn't 'Title'. Could be 'Size'.


			// Hide selectors if we only have 1 variant and its title contains 'Default'.

			$('.selector-wrapper').hide();

			$('.selector-wrapper').css({
				'text-align': 'left',
				'margin-bottom': '15px'
			});
		});
		jQuery('.swatch :radio').change(function() {
			var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
			var optionValue = jQuery(this).val();
			jQuery(this)
				.closest('form')
				.find('.single-option-selector')
				.eq(optionIndex)
				.val(optionValue)
				.trigger('change');
		});
		$(document).ready(function() {
			if ($(window).width() > 1200) {
				$('#zoom_01').elevateZoom({
					gallery: 'gallery_01',
					zoomWindowOffetx: 0,
					zoomWindowOffety: 0,
					zoomType: "inner",
					easing: true,
					scrollZoom: false,
					cursor: 'pointer',
					galleryActiveClass: 'active',
					imageCrossfade: true
				});
			}
			jQuery("#gallery_01").owlCarousel({
				loop: false,
				margin: 10,
				responsiveClass: true,
				dots: false,
				nav: true,
				items: 4,
				responsive: {
					0: {
						items: 4
					},
					600: {
						items: 4
					},
					1000: {
						items: 4
					}
				}
			});
		});
		$('#gallery_01 img').click(function(e) {
			e.preventDefault();
			$('.large-image img').attr('src', $(this).parent().attr('data-zoom-image'));
		})
		$('#gallery_01 img, .swatch-element label').click(function(e) {
			$('.checkurl').attr('href', $(this).attr('data-image'));
			if ($(window).width() > 1200) {
				setTimeout(function() {
					$('.zoomContainer').remove();
					$('#zoom_01').elevateZoom({
						gallery: 'gallery_01',
						zoomWindowOffetx: 0,
						zoomWindowOffety: 0,
						zoomType: "inner",
						easing: true,
						scrollZoom: false,
						cursor: 'pointer',
						galleryActiveClass: 'active',
						imageCrossfade: true
					});
				}, 300);
			}
		})
	</script>

	<script>
		jQuery(document).ready(function($) {
			var el = document.getElementById("qty");
			$("#qty").change(function() {
				var max = parseInt(el.getAttribute("max")) || 10000;
				console.log(el.value);
				var value = parseInt(jQuery(this).val(), 10) || 0;
				if (value > max) {
					alert('We only have ' + max + ' of this item in stock');
					jQuery(this).val(max);
				}
			});
		});

		function eatFood() {
			var el = document.getElementById("qty");
			var maxs = parseInt(el.getAttribute("max")) || 10000;
			var result = document.getElementById('qty');
			var qty = result.value;
			if (!isNaN(qty) & qty < maxs) result.value++;
			return false;
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>