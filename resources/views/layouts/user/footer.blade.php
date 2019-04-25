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
      <h4>Liên hệ {{ $setting->name }}!</h4>
      <p>Địa chỉ: {!! $setting->address !!}</p>
      <p>Điện thoại: {!! $setting->phone !!}</p>
      <p>Email: {!! $setting->email !!}</p>
      <div class="social-links"> 
        <a href="#."><i class="fa fa-facebook"></i></a> 
        <!-- <a href="#."><i class="fa fa-twitter"></i></a>  -->
        <!-- <a href="#."><i class="fa fa-linkedin"></i></a>  -->
        <!-- <a href="#."><i class="fa fa-pinterest"></i></a>  -->
         <!-- <a href="#."><i class="fa fa-instagram"></i></a>  -->
         <a href="#."><i class="fa fa-google"></i></a>
      </div>
    </div>

  <!-- Categories -->
  <div class="col-md-3">
      <h4>Danh mục</h4>
      <ul class="links-footer">
        @foreach ($categories as $cate)
        <li><a href="{{ route('store', ['br[]' => $cate->id]) }}">{{ $cate->name }}</a></li>
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
  <h4>Thông tin khác</h4>
  <ul class="links-footer">
    <li><a href="{{ route('article') }}">Tin tức</a></li>
    <li><a href="{{ route('store') }}">Cửa hàng</a></li>
</ul>
</div>
</div>
</div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright © 2019 <a href="#." class="ri-li"> thachvu.com</a>. All rights reserved</p>
      </div>
      <div class="col-sm-6 text-right"> <img src="{{ asset('frontend/images/card-icon.png') }}" alt=""> </div>
  </div>
</div>
</div>