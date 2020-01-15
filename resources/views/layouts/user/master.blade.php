<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('page') | Ant Kitchen</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="robots" content="noodp,index,follow" />

    <meta itemprop="name" content="@yield('propName')">
    <meta itemprop="description" content="@yield('propDesc')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:image" content="@yield('ogImage')">
    <meta property="og:image:secure_url" content="@yield('ogImage')">
    <meta property="og:description" content="@yield('ogDesc')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:site_name" content="Ant Kitchen">

    <link rel="icon" href="{{ asset('frontend/images/icons/favicon.png') }}" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="alternate" href="@yield('alternate')">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Build Main CSS -->
    <link href="{{ asset('frontend/css/base.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet" type="text/css" />

    @section('pageCss')
    @show

    <!-- Header JS -->
    <script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    
    <!-- Bizweb javascript customer -->
	<!-- Bizweb conter for header -->
	<script> var Bizweb = Bizweb || {}; Bizweb.store = 'ant-kitchen.mysapo.net'; Bizweb.id='270860'; Bizweb.theme = {"id":606449,"role":"main","name":"Ant Kitchen"}; Bizweb.template = 'product';</script>
	<script>
		(function() {
			function asyncLoad() {
				var urls = ["//productreviews.sapoapps.vn/assets/js/productreviews.min.js?store=ant-kitchen.mysapo.net"];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			}
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script>

	<script type='text/javascript'>
		(function() {
		var log = document.createElement('script'); log.type = 'text/javascript'; log.async = true;
		log.src = '//stats.bizweb.vn/delivery/270860.js?lang=vi';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(log, s);
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109602908-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-109602908-1');
	</script>
	<script>
		var ProductReviewsAppUtil = ProductReviewsAppUtil || {};
	</script>
</head>

<body class="{{ \Route::currentRouteName() == 'home' ? 'bg-index' : '' }}">
    <div id="box-wrapper">
        
        @include('layouts.user.header')
        
        @yield('content')

        @include('layouts.user.footer')
        
    </div>
    
    <div class="ajax-load">
        <span class="loading-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </span>
    </div>

    <div class="loading awe-popup">
        <div class="overlay"></div>
        <div class="loader" title="2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                    <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                    <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>

    </div>

    <div id="myModal" class="modal fade" role="dialog">
    </div>

    <div id="menu-mobile">
        <div class="clearfix">
            <div class="account_mobile" style="">
                <div class="text-center">
                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/user.svg?1576740881097" alt="Tài khoản" />
                </div>
                <ul class="account_text text-center">

                    <li><a class="register_account" href="/account/register" title="Đăng ký">Đăng ký</a></li>
                    <li>|</li>
                    <li><a class="login_account" href="/account/login" title="Đăng nhập">Đăng nhập</a></li>

                </ul>
            </div>
            <ul class="menu-mobile">


                <li class="">
                    <a class="submenu-level1-children-a" href="/tivi-loa-am-thanh" title="Tivi, Loa, Âm thanh">Tivi, Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/tivi" title="Tivi">Tivi <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a>
                                </li>

                                <li>
                                    <a href="/doi-moi-2017">Đời mới 2017</a>
                                </li>

                                <li>
                                    <a href="/sony">Sony</a>
                                </li>

                                <li>
                                    <a href="/samsung">Samsung</a>
                                </li>

                                <li>
                                    <a href="/lg">LG</a>
                                </li>

                                <li>
                                    <a href="/tu-32-43-inch">Từ 32-43 inch</a>
                                </li>

                                <li>
                                    <a href="/tu-44-55-inch">Từ 44-55 inch</a>
                                </li>

                                <li>
                                    <a href="/duoi-5-trieu">Dưới 5 triệu</a>
                                </li>

                                <li>
                                    <a href="/tivi-cao-cap">Tivi cao cấp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/loa-am-thanh" title="Loa, Âm thanh">Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/loa-thanh-soundbar">Loa thanh (Soundbar)</a>
                                </li>

                                <li>
                                    <a href="/dan-am-thanh">Dàn âm thanh</a>
                                </li>

                                <li>
                                    <a href="/dau-dvd">Đầu DVD</a>
                                </li>

                                <li>
                                    <a href="/cap-hdmi-cap-tivi">Cáp HDMI, cáp Tivi</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/" title="Thương hiệu">Thương hiệu</a>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/tu-lanh" title="Tủ lạnh">Tủ lạnh</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/may-giat-may-say-quan-ao" title="Máy giặt, Máy sấy quần áo">Máy giặt, Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/may-giat" title="Máy giặt">Máy giặt <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/doi-moi-2017-1">Đời mới 2017</a>
                                </li>

                                <li>
                                    <a href="/toshiba">Toshiba</a>
                                </li>

                                <li>
                                    <a href="/lg-1">LG</a>
                                </li>

                                <li>
                                    <a href="/panasonic">Panasonic</a>
                                </li>

                                <li>
                                    <a href="/samsung-1">Samsung</a>
                                </li>

                                <li>
                                    <a href="/electrolux">Electrolux</a>
                                </li>

                                <li>
                                    <a href="/may-giat-cao-cap">Máy giặt cao cấp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/may-say-quan-ao" title="Máy sấy quần áo">Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/gia-duoi-5-trieu">Giá dưới 5 triệu</a>
                                </li>

                                <li>
                                    <a href="/gia-tu-5-10-trieu">Giá từ 5 - 10 triệu</a>
                                </li>

                                <li>
                                    <a href="/electrolux-1">Electrolux</a>
                                </li>

                                <li>
                                    <a href="/beko">Beko</a>
                                </li>

                                <li>
                                    <a href="/kangaroo">Kangaroo</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/may-lanh" title="Máy lạnh">Máy lạnh</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/dien-gia-dung" title="Điện gia dụng">Điện gia dụng <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/gia-dung-nha-bep" title="Gia dụng nhà bếp">Gia dụng nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/bep-gas">Bếp gas</a>
                                </li>

                                <li>
                                    <a href="/bep-tu">Bếp từ</a>
                                </li>

                                <li>
                                    <a href="/bep-hong-ngoai">Bếp hồng ngoại</a>
                                </li>

                                <li>
                                    <a href="/lo-nuong">Lò nướng</a>
                                </li>

                                <li>
                                    <a href="/lo-vi-song">Lò vi sóng</a>
                                </li>

                                <li>
                                    <a href="/lau-dien">Lẩu điện</a>
                                </li>

                                <li>
                                    <a href="/noi-ap-suat">Nồi áp suất</a>
                                </li>

                                <li>
                                    <a href="/noi-com-dien">Nồi cơm điện</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/thiet-bi-gia-dinh" title="Thiết bị gia đình">Thiết bị gia đình <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/ban-ui">Bàn ủi</a>
                                </li>

                                <li>
                                    <a href="/may-hut-mui">Máy hút mùi</a>
                                </li>

                                <li>
                                    <a href="/may-hut-bui">Máy hút bụi</a>
                                </li>

                                <li>
                                    <a href="/may-say-toc">Máy sấy tóc</a>
                                </li>

                                <li>
                                    <a href="/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                </li>

                                <li>
                                    <a href="/quat">Quạt</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-nha-bep" title="Điện nhà bếp">Điện nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/binh-dun-sieu-toc">Bình đun siêu tốc</a>
                                </li>

                                <li>
                                    <a href="/binh-thuy-dien">Bình thủy điện</a>
                                </li>

                                <li>
                                    <a href="/may-danh-trung">Máy đánh trứng</a>
                                </li>

                                <li>
                                    <a href="/may-ep-trai-cay">Máy ép trái cây</a>
                                </li>

                                <li>
                                    <a href="/may-lam-sua-dau-nanh">Máy làm sữa đậu nành</a>
                                </li>

                                <li>
                                    <a href="/may-xay-sinh-to">Máy xay sinh tố</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/do-dung-gia-dinh" title="Đồ dùng gia đình">Đồ dùng gia đình <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/dung-cu-ban-an" title="Dụng cụ bàn ăn">Dụng cụ bàn ăn <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dua-muong">Đũa muỗng</a>
                                </li>

                                <li>
                                    <a href="/ly-bo-ly">Ly - Bộ ly</a>
                                </li>

                                <li>
                                    <a href="/binh-giu-nhiet">Bình giữ nhiệt</a>
                                </li>

                                <li>
                                    <a href="/binh-dung-nuoc">Bình đựng nước</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/do-dung-nha-bep" title="Đồ dùng nhà bếp">Đồ dùng nhà bếp <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/va-san-chien-xao">Vá - Sạn chiên xào</a>
                                </li>

                                <li>
                                    <a href="/thau-ro">Thau - Rổ</a>
                                </li>

                                <li>
                                    <a href="/hop-dung-thuc-pham">Hộp đựng thực phẩm</a>
                                </li>

                                <li>
                                    <a href="/bo-noi">Bộ nồi</a>
                                </li>

                                <li>
                                    <a href="/chao-chong-dinh">Chảo chống dính</a>
                                </li>

                                <li>
                                    <a href="/bo-lau-nha">Bộ lau nhà</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/dien-thoai-laptop-may-tinh-bang" title="Điện thoại, Laptop, Tablet">Điện thoại, Laptop, Tablet <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/dien-thoai" title="Điện thoại">Điện thoại <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/iphone">iPhone</a>
                                </li>

                                <li>
                                    <a href="/samsung-2">Samsung</a>
                                </li>

                                <li>
                                    <a href="/oppo">Oppo</a>
                                </li>

                                <li>
                                    <a href="/sony-1">Sony</a>
                                </li>

                                <li>
                                    <a href="/nokia">Nokia</a>
                                </li>

                                <li>
                                    <a href="/dien-thoai-tu-1-den-3-trieu">Điện thoại từ 1 đến 3 triệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/laptop" title="Laptop">Laptop <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dell">Dell</a>
                                </li>

                                <li>
                                    <a href="/asus">Asus</a>
                                </li>

                                <li>
                                    <a href="/macbook">Macbook</a>
                                </li>

                                <li>
                                    <a href="/hp">HP</a>
                                </li>

                                <li>
                                    <a href="/laptop-duoi-10-trieu">Laptop dưới 10 triệu</a>
                                </li>

                                <li>
                                    <a href="/laptop-tu-10-den-15-trieu">Laptop từ 10 đến 15 triệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/tablet" title="Tablet">Tablet <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/ipad">iPad</a>
                                </li>

                                <li>
                                    <a href="/samsung-2">Samsung</a>
                                </li>

                                <li>
                                    <a href="/asus-1">Asus</a>
                                </li>

                                <li>
                                    <a href="/lenovo">Lenovo</a>
                                </li>

                                <li>
                                    <a href="/may-tinh-bang-duoi-3-trieu">Máy tính bảng dưới 3 triệu</a>
                                </li>

                                <li>
                                    <a href="/may-tinh-bang-tu-3-den-8-trieu">Máy tính bảng từ 3 đến 8 triệu</a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/phu-kien" title="Thể thao & Dã ngoại">Thể thao & Dã ngoại</a>
                </li>



                <li class="">
                    <a href="/may-loc-nuoc-may-nuoc-nong" title="Phụ kiện số">Phụ kiện số</a>
                </li>



                <li class="">
                    <a href="/sim-so-the-cao" title="Nạp thẻ cào, thẻ game">Nạp thẻ cào, thẻ game</a>
                </li>



                <li class="">
                    <a href="/dung-cu-lam-banh" title="Dụng cụ làm bánh">Dụng cụ làm bánh</a>
                </li>




                <li class="">
                    <a class="submenu-level1-children-a" href="/collections/all" title="Tính năng nổi bật">Tính năng nổi bật <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien" title="Sản phẩm liên quan trong tin tức">Sản phẩm liên quan trong tin tức</a>
                        </li>



                        <li>
                            <a href="/" title="Tìm kiếm nâng cao">Tìm kiếm nâng cao</a>
                        </li>



                        <li>
                            <a href="/tivi-loa-am-thanh" title="Danh mục thông minh">Danh mục thông minh</a>
                        </li>



                        <li>
                            <a href="/collections/all" title="Tìm kiếm bộ lọc">Tìm kiếm bộ lọc</a>
                        </li>



                        <li>
                            <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Khuyến mãi cho từng sản phẩm">Khuyến mãi cho từng sản phẩm</a>
                        </li>



                        <li>
                            <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                        </li>


                    </ul>
                </li>



                <li class="current">
                    <a href="/" title="Trang chủ">Trang chủ</a>
                </li>



                <li class="">
                    <a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                </li>



                <li class="">
                    <a class="submenu-level1-children-a" href="/collections/all" title="Sản phẩm">Sản phẩm <i class="fa fa-angle-right"></i></a>
                    <ul class="dropdown-menu submenu-level1-children" role="menu">


                        <li>
                            <a class="submenu-level2-children-a" href="/tivi-loa-am-thanh" title="Tivi, Loa, Âm thanh">Tivi, Loa, Âm thanh <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/tivi">Tivi</a>
                                </li>

                                <li>
                                    <a href="/loa-am-thanh">Loa, Âm thanh</a>
                                </li>

                                <li>
                                    <a href="/">Thương hiệu</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/tu-lanh" title="Tủ lạnh">Tủ lạnh</a>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/may-giat-may-say-quan-ao" title="Máy giặt, Máy sấy quần áo">Máy giặt, Máy sấy quần áo <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/may-giat">Máy giặt</a>
                                </li>

                                <li>
                                    <a href="/may-say-quan-ao">Máy sấy quần áo</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/may-lanh" title="Máy lạnh">Máy lạnh</a>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-gia-dung" title="Điện gia dụng">Điện gia dụng <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/gia-dung-nha-bep">Gia dụng nhà bếp</a>
                                </li>

                                <li>
                                    <a href="/thiet-bi-gia-dinh">Thiết bị gia đình</a>
                                </li>

                                <li>
                                    <a href="/dien-nha-bep">Điện nhà bếp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/do-dung-gia-dinh" title="Đồ dùng gia đình">Đồ dùng gia đình <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dung-cu-ban-an">Dụng cụ bàn ăn</a>
                                </li>

                                <li>
                                    <a href="/do-dung-nha-bep">Đồ dùng nhà bếp</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a class="submenu-level2-children-a" href="/dien-thoai-laptop-may-tinh-bang" title="Điện thoại, Laptop, Tablet">Điện thoại, Laptop, Tablet <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu submenu-level2-children" role="menu">

                                <li>
                                    <a href="/dien-thoai">Điện thoại</a>
                                </li>

                                <li>
                                    <a href="/laptop">Laptop</a>
                                </li>

                                <li>
                                    <a href="/tablet">Tablet</a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="/phu-kien" title="Thể thao & Dã ngoại">Thể thao & Dã ngoại</a>
                        </li>



                        <li>
                            <a href="/may-loc-nuoc-may-nuoc-nong" title="Phụ kiện số">Phụ kiện số</a>
                        </li>



                        <li>
                            <a href="/sim-so-the-cao" title="Nạp thẻ cào, thẻ game">Nạp thẻ cào, thẻ game</a>
                        </li>



                        <li>
                            <a href="/dung-cu-lam-banh" title="Dụng cụ làm bánh">Dụng cụ làm bánh</a>
                        </li>


                    </ul>
                </li>



                <li class="">
                    <a href="/tin-tuc" title="Tin tức">Tin tức</a>
                </li>



                <li class="">
                    <a href="/lien-he" title="Liên hệ">Liên hệ</a>
                </li>


            </ul>
        </div>
    </div>

    <div class="support-online">
        <div class="support-content" style="display: none;">

            <a href="tel:0982362509" class="call-now" rel="nofollow">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div class="animated infinite zoomIn kenit-alo-circle"></div>
                <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                <span>Gọi ngay: 0982 362 509</span>
            </a>


            <a class="mes" href="https://www.messenger.com/t/561797710650232" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Chat qua Messenger</span>
            </a>


            <a class="zalo" href="mailto:baotrung304@gmail.com" target="_blank">
                <i class="fa fa-envelope"></i>
                <span>baotrung304@gmail.com</span>
            </a>


            <a class="sms" href="sms:0982362509">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                <span>SMS: 0982 362 509</span>
            </a>

        </div>
        <a class="btn-support">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
        </a>
    </div>

    <script src="{{ asset('frontend/js/rx.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/option-selectors.js') }}" type="text/javascript"></script>
    <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>

    @section('pageJs')
    @show
</body>
</html>