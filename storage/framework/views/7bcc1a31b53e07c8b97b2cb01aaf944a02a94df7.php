
<footer class="footer">
    <div class="site-footer">
        <div class="container">
            <div class="footer-inner padding-top-10 padding-bottom-10">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="footer-widget">
                            <h4><span>Liên hệ với chúng tôi</span></h4>
                            <ul class="widget-menu contact-info-page">
                                <li>
                                    <i class="fa fa-map-marker color-x" aria-hidden="true"></i> 
                                    <span><?php echo $setting->address; ?><span>
                                </li>
                                <li>
                                    <i class="fa fa-phone color-x" aria-hidden="true"></i> 
                                    <a href="tel:<?php echo e(str_replace(' ', '', $setting->phone)); ?>"><?php echo e($setting->phone); ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                    <a href="mailto:<?php echo e($setting->email); ?>"><?php echo e($setting->email); ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 
                                    <span><?php echo e($setting->time_work); ?></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-widget">
                            <h4><span>Danh mục</span></h4>
                            <ul class="list-menu">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('cate-detail', ['slug' => $cate->slug])); ?>"><?php echo e($cate->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-widget">
                            <h4><span>Dịch vụ khách hàng</span></h4>
                            <ul class="list-menu">

                                <li><a href="<?php echo e(route('payment-method')); ?>">Phương thức thanh toán</a></li>

                                <li><a href="<?php echo e(route('delivery-method')); ?>">Phương thức vận chuyển</a></li>

                                <li><a href="<?php echo e(route('policy-exchange')); ?>">Chính sách đổi trả</a></li>

                                <li><a href="<?php echo e(route('policy-security')); ?>">Chính sách bảo mật</a></li>

                                <li><a href="<?php echo e(route('term-of-service')); ?>">Điều khoản dịch vụ</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class="footer-widget no-border">
                            <h4><span>Kết nối</span></h4>
                            <ul class="list-menu list-menu-social">
                                <li>
                                    <a href="<?php echo e($setting->facebook_url); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e($setting->twitter_url); ?>" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e($setting->youtube_url); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i> Youtube
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e($setting->instagram_url); ?>" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i> Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright clearfix">
        <div class="container">
            <div class="inner clearfix">
                <div class="row">
                    <div class="col-md-12 col-copyright">
                        <span>Copyright © 2020 <b>kingbep.com</b>. All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>