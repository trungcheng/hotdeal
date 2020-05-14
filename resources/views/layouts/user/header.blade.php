<header class="header">

    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-5 col-100-h">
                    <a href="/" class="logo-wrapper">
                        <img src="{{ $setting->logo }}" alt="Logo King Bếp" />
                    </a>
                </div>
                <div class="col-100-h col-sm-6 col-xs-7 hidden-lg hidden-md">
                    <div class="hotline">
                        <a href="tel:{{ str_replace(' ', '', $setting->phone) }}">{{ $setting->phone }}</a>
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="search-auto clearfix">
                        <form class="input-group search-bar search_form" action="{{ route('search') }}" method="get" role="search">
                            <input type="search" name="query" value="" placeholder="Bạn tìm gì..." class="input-group-field st-default-search-input search-text auto-search-ant" autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn icon-fallback-text">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </form>
                    </div>
                    <div class="mobile-cart visible-sm visible-xs">
                        <a href="{{ route('cart') }}" title="Giỏ hàng">
                            <img src="{{ asset('frontend/images/icons/shopping-cart.svg') }}" alt="Giỏ hàng" />
                            <div class="cart-right">
                                <span class="count_item_pr">{{ $countItemCart }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="hotline">
                        <a href="tel:{{ str_replace(' ', '', $setting->phone) }}">{{ $setting->phone }}</a>
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                    <div class="index-account">
                        <a href="javascript:void(0)">Tài khoản</a>
                        <span>Xin chào, {{ isset($authUser) ? $authUser->fullname : 'Khách' }}</span>
                        <ul>
                            @if (!isset($authUser))
                            <li><a href="{{ route('signin') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('signup') }}">Đăng ký</a></li>
                            @else
                            <li><a href="{{ route('getLogout') }}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="index-cart">
                        <a href="{{ route('cart') }}"><i class="fa fa-shopping-bag"></i></a>
                        <span class="cnt crl-bg count_item_pr">{{ $countItemCart }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <div class="container">
            <nav class="hidden-sm hidden-xs">
                <div class="col-md-3 no-padding">
                    <div class="mainmenu {{ \Route::currentRouteName() != 'home' ? 'mainmenu-other' : '' }}">
                        <div class="line"><i></i><i></i><i></i></div>
                        <span>Danh mục sản phẩm</span>
                        <div class="nav-cate">
                            <ul id="menu2017">
                                @foreach ($categories as $cate)
                                    <li class="menu-item-count {{ isset($cate->childrens) ? 'dropdown' : '' }}">
                                        <h3>
                                            <img src="{{ $cate->icon }}" alt="{{ $cate->name }}" />
                                            <a href="{{ route('cate-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a>
                                        </h3>
                                        @if (isset($cate->childrens))
                                            <div class="subcate gd-menu">
                                                <aside>
                                                    {{--<strong>
                                                        <a href="/dung-cu-ban-an" class="">Dụng cụ bàn ăn</a>
                                                    </strong>--}}
                                                    @foreach ($cate->childrens as $child)    
                                                        <a href="{{ route('cate-detail', ['slug' => $child->slug]) }}" class="">{{ $child->name }}</a>
                                                    @endforeach
                                                </aside>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 no-padding">
                    <ul id="nav" class="nav">
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>

                        <li class="nav-item "><a class="nav-link" href="{{ route('about') }}">Giới thiệu</a></li>

                        {{--<li class="nav-item has-mega">
                            <a href="{{ route('store') }}" class="nav-link">Cửa hàng
                                <!-- <i class="fa fa-angle-right" data-toggle="dropdown"></i> -->
                            </a>

                            <div class="mega-content">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">

                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/tivi-loa-am-thanh"><span>Tivi, Loa, Âm thanh</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/tivi"><span>Tivi</span></a> </li>

                                                    <li class="level2"> <a href="/loa-am-thanh"><span>Loa, Âm thanh</span></a> </li>

                                                    <li class="level2"> <a href="/"><span>Thương hiệu</span></a> </li>

                                                </ul>
                                            </li>

                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/tu-lanh"><span>Tủ lạnh</span></a> </h2>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/may-giat-may-say-quan-ao"><span>Máy giặt, Máy sấy quần áo</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/may-giat"><span>Máy giặt</span></a> </li>

                                                    <li class="level2"> <a href="/may-say-quan-ao"><span>Máy sấy quần áo</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/may-lanh"><span>Máy lạnh</span></a> </h2>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/dien-gia-dung"><span>Điện gia dụng</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/gia-dung-nha-bep"><span>Gia dụng nhà bếp</span></a> </li>

                                                    <li class="level2"> <a href="/thiet-bi-gia-dinh"><span>Thiết bị gia đình</span></a> </li>

                                                    <li class="level2"> <a href="/dien-nha-bep"><span>Điện nhà bếp</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/do-dung-gia-dinh"><span>Đồ dùng gia đình</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/dung-cu-ban-an"><span>Dụng cụ bàn ăn</span></a> </li>

                                                    <li class="level2"> <a href="/do-dung-nha-bep"><span>Đồ dùng nhà bếp</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 parent item">
                                                <h2 class="h4"><a href="/dien-thoai-laptop-may-tinh-bang"><span>Điện thoại, Laptop, Tablet</span></a></h2>
                                                <ul class="level1">

                                                    <li class="level2"> <a href="/dien-thoai"><span>Điện thoại</span></a> </li>

                                                    <li class="level2"> <a href="/laptop"><span>Laptop</span></a> </li>

                                                    <li class="level2"> <a href="/tablet"><span>Tablet</span></a> </li>

                                                </ul>
                                            </li>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/phu-kien"><span>Thể thao & Dã ngoại</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/may-loc-nuoc-may-nuoc-nong"><span>Phụ kiện số</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/sim-so-the-cao"><span>Nạp thẻ cào, thẻ game</span></a> </h2>



                                            <li class="level1 item">
                                                <h2 class="h4"><a href="/dung-cu-lam-banh"><span>Dụng cụ làm bánh</span></a> </h2>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>--}}

                        <li class="nav-item "><a class="nav-link" href="{{ route('article') }}">Tin tức</a></li>

                        <li class="nav-item "><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>