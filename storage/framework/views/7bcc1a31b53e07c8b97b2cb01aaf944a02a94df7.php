<div class="full-width footer">
    <div class="container">
        <div class="row">
            <div class="footer-site">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-section">
                    <div class="tieude"><?php echo $setting->name; ?></div>
                    <div class="text-ft">
                        <p><i class="fa fa-map-marker"></i> <?php echo $setting->address; ?></p>
                        <p><i class="fa fa-phone"></i> <?php echo $setting->phone; ?></p>
                        <p><i class="fa fa-envelope"></i> <?php echo $setting->email; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-section footer-cate">
                    <div class="tieude">DANH MỤC</div>
                    <div class="text-ft">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="<?php echo e(route('store')); ?>">Sản phẩm</a></li>
                            <li><a href="<?php echo e(route('certificate')); ?>">Chứng nhận chất lượng</a></li>
                            <li><a href="<?php echo e(route('health-advice')); ?>">Tư vấn sức khỏe</a></li>
                            <li><a href="<?php echo e(route('article-detail', ['slug' => 'khuyen-mai'])); ?>">Khuyến mãi</a></li>
                            <li><a href="<?php echo e(route('policy')); ?>">Chính sách giá</a></li>
                            <li><a href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-section">
                    <div class="tieude">HỖ TRỢ KHÁCH HÀNG</div>
                    <div class="text-ft">
                        <ul>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách đại lý</a></li>
                            <li><a href="#">Điều khoản sử dụng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-section">
                    <div class="tieude">KẾT NỐI VỚI CHÚNG TÔI</div>
                    <div class="text-ft">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTh%E1%BB%A7y-M%E1%BB%99c-tr%C3%A0-105945831083619&tabs=272&width=262&height=217&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="262" height="217" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="full-width footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>Copyright © 2020 thuymoctra.com.vn. All rights reserved</p>
            </div>
        </div>
    </div>
</div>