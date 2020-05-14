{{--<div class="search-more">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label>Tìm kiếm nhiều: </label>

                <a href="/">• Bếp ga</a>

                <a href="/">• Lò nướng</a>

                <a href="/">• Nồi áp suất</a>

                <a href="/">• Bình thủy điện</a>

                <a href="/">• Bếp từ</a>

            </div>
        </div>
    </div>
</div>--}}
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
                                    <span>{!! $setting->address !!}<span>
                                </li>
                                <li>
                                    <i class="fa fa-phone color-x" aria-hidden="true"></i> 
                                    <a href="tel:{{ str_replace(' ', '', $setting->phone) }}">{{ $setting->phone }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                                    <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 
                                    <span>{{ $setting->time_work }}</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-widget">
                            <h4><span>Danh mục</span></h4>
                            <ul class="list-menu">
                                @foreach ($categories as $cate)
                                    <li>
                                        <a href="{{ route('cate-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="footer-widget">
                            <h4><span>Dịch vụ khách hàng</span></h4>
                            <ul class="list-menu">

                                <li><a href="{{ route('payment-method') }}">Phương thức thanh toán</a></li>

                                <li><a href="{{ route('delivery-method') }}">Phương thức vận chuyển</a></li>

                                <li><a href="{{ route('policy-exchange') }}">Chính sách đổi trả</a></li>

                                <li><a href="{{ route('policy-security') }}">Chính sách bảo mật</a></li>

                                <li><a href="{{ route('term-of-service') }}">Điều khoản dịch vụ</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class="footer-widget no-border">
                            <h4><span>Kết nối</span></h4>
                            <ul class="list-menu list-menu-social">
                                <li>
                                    <a href="{{ $setting->facebook_url }}" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $setting->twitter_url }}" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $setting->youtube_url }}" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i> Youtube
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $setting->instagram_url }}" target="_blank">
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
                        <span>Copyright © 2020 <b>kingbep.vn</b>. All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>