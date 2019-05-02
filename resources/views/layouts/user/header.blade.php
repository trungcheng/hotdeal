<header>
    <div class="container">
        <div class="logo"> 
            <a href="{{ route('home') }}">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo Thạch Vũ" >
            </a> 
        </div>
        <form style="display:inline" role="form" method="get" action="{{ route('search') }}">
            <div class="search-cate">
                <input type="text" name="key" placeholder="Tìm kiểm sản phẩm bạn muốn...">
                <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
            </div>
        </form>

        <!-- Cart Part -->
        <ul class="nav navbar-right cart-pop" style="min-width:150px !important">
            <li class="dropdown"> 
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="itm-cont">{{ $countItemCart }}</span>
                    <i class="flaticon-shopping-bag"></i> <strong>Giỏ hàng</strong> <br>
                    <span>{{ $countItemCart }} sản phẩm</span>
                </a>
                <ul class="dropdown-menu" style="min-height:75px !important;min-width:150px !important">
                    <li class="add-cart-status-message hide">
                        <i class="fa fa-check"></i>
                        Thêm vào giỏ hàng thành công
                    </li>
                    <li class="btn-cart"> <a href="{{ route('cart') }}" class="btn-round">Xem giỏ hàng</a> </li>
                </ul>
            </li>
        </ul>

        <!-- User Profile Part -->
        @if (isset($authUser))
            <ul class="nav navbar-right cart-pop profile" style="min-width:165px !important">
                <li class="dropdown"> 
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user tvicon"></i> <strong>Chào {{ $authUser->fullname }}</strong> <br>
                        <span>Tài khoản</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tài khoản của tôi</a></li>
                        <li><a href="#">Sản phẩm yêu thích</a></li>
                        <li><a href="{{ route('getLogout') }}">Thoát tài khoản</a></li>
                    </ul>
                </li>
            </ul>
        @else
            <ul class="nav navbar-right cart-pop profile" style="min-width:165px !important">
                <li class="dropdown"> 
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user tvicon"></i> <strong>Đăng nhập</strong> <br>
                        <span>Tài khoản</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('getSignIn') }}">Đăng nhập</a></li>
                        <li><a href="{{ route('getSignUp') }}">Tạo tài khoản</a></li>
                    </ul>
                </li>
            </ul>
        @endif

    </div>

    <!-- Nav -->
    <nav class="navbar ownmenu">
        <div class="container"> 
            <!-- Categories -->
            <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Danh mục sản phẩm </a>
                <div class="cate-bar-in">
                    <div id="cater" class="collapse">
                        <ul>
                            @foreach ($categories as $cate)
                                <li><a href="{{ route('product-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a></li>
                            @endforeach
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
                    <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                    {{--<li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Các trang</a>
                        <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
                            <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('getSignIn') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('getSignUp') }}">Đăng ký</a></li>
                            <li><a href="{{ route('store') }}">Cửa hàng</a></li>
                            <li><a href="">Chi tiết sản phẩm</a></li>
                            <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                            <li><a href="{{ route('step1') }}">Checkout 1</a></li>
                            <li><a href="{{ route('step2') }}">Checkout 2</a></li>
                            <li><a href="{{ route('checkout-success') }}">Đặt hàng thành công</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            <li class="dropdown-submenu"><a href="javascript:void(0)">Menu đa cấp</a>
                                <ul class="dropdown-menu animated-2s fadeInRight">
                                    <li><a href="javascript:void(0)">Cấp 1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Cửa hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('article') }}">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </div>

            <!-- NAV RIGHT -->
            <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> {!! $setting->phone !!}</span> </div>
        </div>
    </nav>
</header>