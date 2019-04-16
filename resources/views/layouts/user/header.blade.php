<header>
    <div class="container">
      <div class="logo"> <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt="Logo Thạch Vũ" ></a> </div>
      <div class="search-cate">
        <select class="selectpicker">
          <option>Chậu rửa bát đá nhân tạo</option>
          <option>Chậu rửa bát inox 201</option>
          <option>Kệ tủ bếp</option>
          <option>Tủ lavabo</option>
          <option>Vòi hoa sen</option>
      </select>
      <input type="search" placeholder="Tìm kiểm sản phẩm bạn muốn...">
      <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
  </div>

  <!-- Cart Part -->
  <ul class="nav navbar-right cart-pop">
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">3</span> <i class="flaticon-shopping-bag"></i> <strong>Giỏ hàng</strong> <br>
      <span>3 sản phẩm</span></a>
      <ul class="dropdown-menu">
        <li>
          <div class="media-left"> <a href="javascript:void(0)" class="thumb"> <img src="{{ asset('frontend/images/item-img-1-1.jpg') }}" class="img-responsive" alt="" > </a> </div>
          <div class="media-body"> <a href="javascript:void(0)" class="tittle">Funda Para Ebook 7" 128GB full HD</a> <span>250 x 1</span> </div>
      </li>
      <li>
          <div class="media-left"> <a href="javascript:void(0)" class="thumb"> <img src="{{ asset('frontend/images/item-img-1-2.jpg') }}" class="img-responsive" alt="" > </a> </div>
          <div class="media-body"> <a href="javascript:void(0)" class="tittle">Funda Para Ebook 7" full HD</a> <span>250 x 1</span> </div>
      </li>
      <li class="btn-cart"> <a href="javascript:void(0)" class="btn-round">Xem giỏ hàng</a> </li>
  </ul>
</li>
</ul>
</div>

<!-- Nav -->
<nav class="navbar ownmenu">
  <div class="container"> 

    <!-- Categories -->
    <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Danh mục sản phẩm </a>
      <div class="cate-bar-in">
        <div id="cater" class="collapse">
          <ul>
              <li><a href="#.">Chậu rửa bát đá nhân tạo</a></li>
              <li><a href="#.">Chậu rửa bát inox 201</a></li>
              <li><a href="#.">Kệ tủ bếp</a></li>
              <li><a href="#.">Tủ lavabo</a></li>
              <li><a href="#.">Vòi hoa sen</a></li>
          </ul>
      </div>
  </div>
</div>

<!-- Navbar Header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false">
        <span><i class="fa fa-navicon"></i></span> 
    </button>
</div>
<!-- NAV -->
<div class="collapse navbar-collapse" id="nav-open-btn">
  <ul class="nav">
    <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
    <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Các trang</a>
      <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
        <li><a href="{{ route('getSignIn') }}">Đăng nhập</a></li>
        <li><a href="{{ route('getSignUp') }}">Đăng ký</a></li>
        <li><a href="{{ route('store') }}">Cửa hàng</a></li>
        <li><a href="{{ route('product-detail') }}">Chi tiết sản phẩm</a></li>
        <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
        <li><a href="PaymentMethods.html">Phương thức thanh toán</a></li>
        <li><a href="DeliveryMethods.html">Phương thức vận chuyển</a></li>
        <li><a href="Confirmation.html">Xác nhận đơn hàng</a></li>
        <li><a href="{{ route('checkout-success') }}">Đặt hàng thành công</a></li>
        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
        <li class="dropdown-submenu"><a href="javascript:void(0)">Menu đa cấp</a>
          <ul class="dropdown-menu animated-2s fadeInRight">
            <li><a href="javascript:void(0)">Cấp 1</a></li>
        </ul>
    </li>
</ul>
</li>
<li class="dropdown"> <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Tin tức</a>
  <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
    <li><a href="Blog.html">Danh sách</a></li>
    <li><a href="Blog_details.html">Chi tiết</a></li>
  </ul>
</li>
</ul>
</div>

<!-- NAV RIGHT -->
<div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> 098 345 678</span> </div>
</div>
</nav>
</header>