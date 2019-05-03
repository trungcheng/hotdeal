<footer>
    <div class="container"> 

      <!-- Footer Upside Links -->
      <!-- <div class="foot-link">
        <ul>
          <li><a href="#.">Về chúng tôi</a></li>
          <li><a href="#.">Dịch vụ khách hàng</a></li>
          <li><a href="#.">Chính sách công ty</a></li>
          <li><a href="#.">Bản đồ</a></li>
          <li><a href="#.">Liên hệ</a></li>
        </ul>
    </div> -->
    <div class="row"> 

        <!-- Contact -->
        <div class="col-md-4">
          <h4>Liên hệ {{ $setting->name }}</h4>
          <p>Địa chỉ: {!! $setting->address !!}</p>
          <p>Điện thoại: {!! $setting->phone !!}</p>
          <p>Email: {!! $setting->email !!}</p>
          <!-- <div class="social-links">  -->
            <!-- <a href="#."><i class="fa fa-facebook"></i></a>  -->
            <!-- <a href="#."><i class="fa fa-twitter"></i></a>  -->
            <!-- <a href="#."><i class="fa fa-linkedin"></i></a>  -->
            <!-- <a href="#."><i class="fa fa-pinterest"></i></a>  -->
            <!-- <a href="#."><i class="fa fa-instagram"></i></a>  -->
            <!-- <a href="#."><i class="fa fa-google"></i></a> -->
            <!-- </div> -->
        </div>

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Danh mục</h4>
          <ul class="links-footer">
            @foreach ($categories as $cate)
            <li><a href="{{ route('product-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a></li>
            @endforeach
            <!-- <li><a href="#."> Video Games</a></li> -->
            <!-- <li><a href="#."> Bluetooth & Wireless</a></li> -->
        </ul>
    </div>

    <!-- Categories -->
    <div class="col-md-3">
      <h4>Dịch vụ khách hàng</h4>
      <ul class="links-footer">
        <li><a href="#">Phương thức thanh toán</a></li>
        <li><a href="#">Phương thức vận chuyển</a></li>
        <li><a href="#">Chính sách đổi trả</a></li>
        <li><a href="#">Thông tin tuyển dụng</a></li>
        <li><a href="{{ route('contact') }}">Liên hệ chúng tôi</a></li>
    </ul>
</div>

<!-- Categories -->
<div class="col-md-2">
    <h4>Kết nối</h4>
    <ul class="links-footer">
        <li>
            <a href="https://www.facebook.com/thachvuvietnam" rel="nofollow" style="text-decoration:none;position:relative;padding-left:20px;">Facebook
                <span style="position:absolute;left:0;top:29%;" class="fa fa-facebook-official"></span>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/thachvuvn" rel="nofollow" style="text-decoration:none;position:relative;padding-left:20px;">Twitter
                <span style="position:absolute;left:0;top:29%;" class="fa fa-twitter"></span>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/thachvuvn/" rel="nofollow" style="text-decoration:none;position:relative;padding-left:20px;">Instagram
                <span style="position:absolute;left:0;top:29%;" class="fa fa-instagram"></span>
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/channel/UCruMTUGSSu2BtPxUZ8Z7_kw?view_as=subscriber" rel="nofollow" style="text-decoration:none;position:relative;padding-left:20px;">Youtube
                <span style="position:absolute;left:0;top:29%;" class="fa fa-youtube-play"></span>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</footer>

<!-- Rights -->
<div class="rights" align="center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="footer-wslogo">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo Thạch Vũ">
                </div>
                <div style="font-size:0.8em">
                    <p class="margin-top-10 margin-bottom-10">Thiết bị vệ sinh cao cấp giá rẻ. Copyright © 2019 thachvu.com. All rights reserved</p>
                </div>
                <div id="ws-footer-marketing">
                    <p>Thiết bị vệ sinh Thạch Vũ phôi phối các thiết bị nhà bếp, phòng tắm chính hãng, cao cấp giá rẻ. Mang lại rất nhiều thuận tiện cho các sự lựa chọn thiết bị nội thất cho gia đình bạn với dịch vụ giao hàng tận nhà miễn phí. Chúng tôi cung cấp các sản phẩm như: <a style="color:#337ab7 !important" href="{{ route('product-detail', ['slug' => 'chau-rua-bat-bang-da']) }}">Chậu rửa bát</a> (bồn rửa chén) bằng đá nhân tạo, <a style="color:#337ab7 !important" href="{{ route('product-detail', ['slug' => 'chau-rua-inox']) }}">chậu rửa inox</a> 304, <a style="color:#337ab7 !important" href="{{ route('product-detail', ['slug' => 'voi-rua-bat']) }}">vòi rửa bát</a>, <a style="color:#337ab7 !important" href="{{ route('product-detail', ['slug' => 'voi-sen-tam']) }}">vòi hoa sen</a>... Với những thiết kế sang trọng, kiểu dáng phong phú nhất trên thị trường hiện nay.</p>
                </div>
            </div>
        </div>
    </div>
</div>