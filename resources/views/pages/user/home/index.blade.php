@extends('layouts.user.master')

@section('page')Trang chủ
@stop

@section('description')
@stop

@section('keywords')Ant Kitchen, ant-kitchen.mysapo.net
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    
@stop

@section('content')
    <h1 class="hidden">Ant Kitchen</h1>

    <section class="awe-section-1">
        <div class="container">
            <div class="col-md-3 no-padding"></div>
            <div class="col-md-9 no-padding">
                <div class="home-slider owl-carousel not-dqowl">

                    <div class="item">
                        <a href="#" class="clearfix">
                            <img src="//bizweb.dktcdn.net/thumb/1024x1024/100/270/860/themes/606449/assets/slider_1.jpg?1576740881097" alt="New Collection" class="img-responsive center-block" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="clearfix">
                            <img src="//bizweb.dktcdn.net/thumb/1024x1024/100/270/860/themes/606449/assets/slider_2.jpg?1576740881097" alt="New Collection" class="img-responsive center-block" />
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <script>
            $(".home-slider").owlCarousel({
                nav: false,
                slideSpeed: 600,
                paginationSpeed: 400,
                singleItem: true,
                pagination: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4500,
                autoplayHoverPause: false,
                autoHeight: false,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    543: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    992: {
                        items: 1
                    },
                    1300: {
                        items: 1,
                    },
                    1590: {
                        items: 1,
                    }
                }
            });
        </script>
    </section>

    <section class="awe-section-2">
        <div class="section_policy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-policy-mobile owl-carousel not-dqowl">

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_1.svg?1576740881097" alt="Bảo đảm chất lượng" />
                                    <div class="section-policy-padding">
                                        <h3>Bảo đảm chất lượng</h3>
                                        <div class="section_policy_title">Sản phẩm bảo đảm chất lượng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_2.svg?1576740881097" alt="Miễn phí giao hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Miễn phí giao hàng</h3>
                                        <div class="section_policy_title">Cho đơn hàng từ 2 triệu đồng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_3.svg?1576740881097" alt="Hỗ trợ 24/7" />
                                    <div class="section-policy-padding">
                                        <h3>Hỗ trợ 24/7</h3>
                                        <div class="section_policy_title">Hotline: 0123 456 789</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/policy_image_4.svg?1576740881097" alt="Đổi trả hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Đổi trả hàng</h3>
                                        <div class="section_policy_title">Trong vòng 7 ngày.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-4">

        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Smart Tivi</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>

                                    {{--<li><a href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a></li>

                                    <li><a href="/doi-moi-2017">Đời mới 2017</a></li>

                                    <li><a href="/sony">Sony</a></li>

                                    <li><a href="/samsung">Samsung</a></li>

                                    <li><a href="/lg">LG</a></li>--}}

                                    <li><a href="giam-gia" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                    
                                                        <a href="{{ route('product-detail', ['slug' => 'android-tivi-sony-4k-49-inch-kd-49x7500e']) }}" title="Android Tivi Sony 4K 49 inch KD-49X7500E">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357" alt="Android Tivi Sony 4K 49 inch KD-49X7500E" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891917" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154614" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" data-handle="android-tivi-sony-4k-49-inch-kd-49x7500e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" title="Android Tivi Sony 4K 49 inch KD-49X7500E">Android Tivi Sony 4K 49 inch KD-49X7500E</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">19.900.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                22.000.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/internet-tivi-samsung-49-inch-ua49j5200" title="Internet Tivi Samsung 49 inch UA49J5200">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-49-inch-ua49j5200-1-4-org-1-org.jpg?v=1509778045413" alt="Internet Tivi Samsung 49 inch UA49J5200" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891890" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154582" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/internet-tivi-samsung-49-inch-ua49j5200" data-handle="internet-tivi-samsung-49-inch-ua49j5200" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/internet-tivi-samsung-49-inch-ua49j5200" title="Internet Tivi Samsung 49 inch UA49J5200">Internet Tivi Samsung 49 inch UA49J5200</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">13.400.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-lg-32-inch-32lj571d" title="Smart Tivi LG 32 inch 32LJ571D">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-lg-32lj571d-1-1-org.jpg?v=1509777885673" alt="Smart Tivi LG 32 inch 32LJ571D" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891883" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154575" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/smart-tivi-lg-32-inch-32lj571d" data-handle="smart-tivi-lg-32-inch-32lj571d" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-lg-32-inch-32lj571d" title="Smart Tivi LG 32 inch 32LJ571D">Smart Tivi LG 32 inch 32LJ571D</a></h3>
                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">6.990.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-samsung-43-inch-ua43m5500" title="Smart Tivi Samsung 43 inch UA43M5500">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-ua43m5500-1-org.jpg?v=1509777756160" alt="Smart Tivi Samsung 43 inch UA43M5500" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891852" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154538" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/smart-tivi-samsung-43-inch-ua43m5500" data-handle="smart-tivi-samsung-43-inch-ua43m5500" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-samsung-43-inch-ua43m5500" title="Smart Tivi Samsung 43 inch UA43M5500">Smart Tivi Samsung 43 inch UA43M5500</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">12.390.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-samsung-43-inch-ua43k5310" title="Smart Tivi Samsung 43 inch UA43K5310">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-ua43k5310-1-14-org.jpg?v=1509777542733" alt="Smart Tivi Samsung 43 inch UA43K5310" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891837" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154506" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/smart-tivi-samsung-43-inch-ua43k5310" data-handle="smart-tivi-samsung-43-inch-ua43k5310" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-samsung-43-inch-ua43k5310" title="Smart Tivi Samsung 43 inch UA43K5310">Smart Tivi Samsung 43 inch UA43K5310</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">10.390.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Android Tivi Sony 4K 43 inch KD-43X7500E">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kd-43x7500e-1-org.jpg?v=1509777350580" alt="Android Tivi Sony 4K 43 inch KD-43X7500E" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891812" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154468" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" data-handle="android-tivi-sony-4k-43-inch-kd-43x7500e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Android Tivi Sony 4K 43 inch KD-43X7500E">Android Tivi Sony 4K 43 inch KD-43X7500E</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">14.900.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/internet-tivi-sony-43-inch-kdl-43w750e" title="Internet Tivi Sony 43 inch KDL-43W750E">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kdl-43w750e-1-2-org.jpg?v=1509776984933" alt="Internet Tivi Sony 43 inch KDL-43W750E" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891805" enctype="multipart/form-data">


                                                            <a href="/internet-tivi-sony-43-inch-kdl-43w750e" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>



                                                            <a href="/internet-tivi-sony-43-inch-kdl-43w750e" data-handle="internet-tivi-sony-43-inch-kdl-43w750e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/internet-tivi-sony-43-inch-kdl-43w750e" title="Internet Tivi Sony 43 inch KDL-43W750E">Internet Tivi Sony 43 inch KDL-43W750E</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">12.400.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-5">

        <div class="section_group_product section_group_product_2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Gia dụng giảm sốc từ 10%-40%</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>

                                    {{--<li><a href="/gia-dung-nha-bep">Gia dụng nhà bếp</a></li>

                                    <li><a href="/thiet-bi-gia-dinh">Thiết bị gia đình</a></li>

                                    <li><a href="/dien-nha-bep">Điện nhà bếp</a></li>--}}

                                    <li><a href="gia-dung-giam-soc" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/may-danh-trung-de-ban-sinbo-smx-2725" title="Máy đánh trứng Sinbo">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/13.jpg?v=1509779054620" alt="Máy đánh trứng Sinbo" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891990" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154696" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/may-danh-trung-de-ban-sinbo-smx-2725" data-handle="may-danh-trung-de-ban-sinbo-smx-2725" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/may-danh-trung-de-ban-sinbo-smx-2725" title="Máy đánh trứng Sinbo">Máy đánh trứng Sinbo</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.020.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                1.120.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/may-pha-ca-phe-omi" title="Máy pha cà phê Omi">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/97c7738ac45e24c2b9388a3d74b8cf.jpg?v=1509779052763" alt="Máy pha cà phê Omi" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891987" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154693" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/may-pha-ca-phe-omi" data-handle="may-pha-ca-phe-omi" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/may-pha-ca-phe-omi" title="Máy pha cà phê Omi">Máy pha cà phê Omi</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">219.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                398.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/may-xay-thuc-pham-iruka" title="Máy xay thực phẩm Iruka">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/8.jpg?v=1509779051947" alt="Máy xay thực phẩm Iruka" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891986" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154692" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/may-xay-thuc-pham-iruka" data-handle="may-xay-thuc-pham-iruka" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/may-xay-thuc-pham-iruka" title="Máy xay thực phẩm Iruka">Máy xay thực phẩm Iruka</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">419.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                790.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/noi-chien-nuong-chan-khong-iruka" title="Nồi chiên nướng chân không">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/68d207138e5444a0c9da3f372451b5.jpg?v=1509779050600" alt="Nồi chiên nướng chân không" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891984" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154690" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/noi-chien-nuong-chan-khong-iruka" data-handle="noi-chien-nuong-chan-khong-iruka" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-chien-nuong-chan-khong-iruka" title="Nồi chiên nướng chân không">Nồi chiên nướng chân không</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">2.689.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                4.199.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/noi-chien-chan-khong-magic" title="Nồi chiên chân không Magic">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/52fd1141691b6410793c21688b6a5e.jpg?v=1509779049803" alt="Nồi chiên chân không Magic" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891983" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154689" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/noi-chien-chan-khong-magic" data-handle="noi-chien-chan-khong-magic" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-chien-chan-khong-magic" title="Nồi chiên chân không Magic">Nồi chiên chân không Magic</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">2.389.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                3.390.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/am-sieu-toc-fujishi" title="Ấm siêu tốc Fujishi">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/48212ca6f01ff46cc9839049ae749a.jpg?v=1509779049137" alt="Ấm siêu tốc Fujishi" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891982" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154688" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/am-sieu-toc-fujishi" data-handle="am-sieu-toc-fujishi" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/am-sieu-toc-fujishi" title="Ấm siêu tốc Fujishi">Ấm siêu tốc Fujishi</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">169.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                259.000₫
                                                            </span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/tu-lanh-hitachi-540-lit-r-w660fpgv3x-gbk" title="Tủ lạnh Hitachi 540 lít R-W660FPGV3X GBK">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tu-lanh-hitachi-r-w660fpgv3x-2-org-2.jpg?v=1509778729063" alt="Tủ lạnh Hitachi 540 lít R-W660FPGV3X GBK" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891956" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14154659" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/tu-lanh-hitachi-540-lit-r-w660fpgv3x-gbk" data-handle="tu-lanh-hitachi-540-lit-r-w660fpgv3x-gbk" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/tu-lanh-hitachi-540-lit-r-w660fpgv3x-gbk" title="Tủ lạnh Hitachi 540 lít R-W660FPGV3X GBK">Tủ lạnh Hitachi 540 lít R-W660FPGV3X GBK</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">31.090.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-6">

        <div class="section_group_product section_group_product_3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Đồ dùng gia đình</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>

                                    {{--<li><a href="/dung-cu-ban-an">Dụng cụ bàn ăn</a></li>

                                    <li><a href="/do-dung-nha-bep">Đồ dùng nhà bếp</a></li>--}}

                                    <li><a href="do-dung-gia-dinh" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-aca14940-b6ff-43cc-8306-ee4fc888caea.jpg?v=1510583505400" alt="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994391" enctype="multipart/form-data">


                                                            <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>



                                                            <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-handle="chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.000.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                5.000.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" title="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-28fb42cd-eb85-453c-a78f-b42789a45204.jpg?v=1510583367770" alt="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994383" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14330732" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" data-handle="chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" title="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm">Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">235.000₫</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" title="Chảo chống dính Scanpan IQ 64002800 28cm">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-882380bc-bf7c-479a-9241-e680ae3600fa.jpg?v=1510583234780" alt="Chảo chống dính Scanpan IQ 64002800 28cm" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994379" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14330728" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" data-handle="chao-chong-dinh-scanpan-iq-64002800-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" title="Chảo chống dính Scanpan IQ 64002800 28cm">Chảo chống dính Scanpan IQ 64002800 28cm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">3.610.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" title="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1.jpg?v=1510583146027" alt="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994369" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14330718" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" data-handle="chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" title="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm">Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">219.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                360.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/cap-long-com-inox-3-tang-lock-lock-620ml" title="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-6b2104e1-4aca-4333-b626-31d4a1e3bf27.jpg?v=1509876064447" alt="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900861" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14171371" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/cap-long-com-inox-3-tang-lock-lock-620ml" data-handle="cap-long-com-inox-3-tang-lock-lock-620ml" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/cap-long-com-inox-3-tang-lock-lock-620ml" title="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml">Cặp lồng cơm inox 3 tầng Lock&Lock 620ml</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">308.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                441.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" title="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-3a8aa53e-5af4-4c62-bf72-e93fbfd8b065.jpg?v=1509875934507" alt="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900852" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14171332" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" data-handle="bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" title="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)">Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">277.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                325.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" title="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-a0a2cfcc-d8b9-48b4-9568-ade768b6e828.jpg?v=1509875775257" alt="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900826" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14171302" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" data-handle="bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" title="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm">Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">40.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                41.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" title="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-1bc1236e-8fd9-42ef-be0c-136aa8e740ca.jpg?v=1509875659003" alt="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900822" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14171298" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" data-handle="bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" title="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm">Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">105.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                117.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bat-inox-hai-lop-zebra-124002-11cm" title="Bát inox hai lớp Zebra 124002 11cm">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat.jpg?v=1509875540417" alt="Bát inox hai lớp Zebra 124002 11cm" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900814" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14171290" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bat-inox-hai-lop-zebra-124002-11cm" data-handle="bat-inox-hai-lop-zebra-124002-11cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bat-inox-hai-lop-zebra-124002-11cm" title="Bát inox hai lớp Zebra 124002 11cm">Bát inox hai lớp Zebra 124002 11cm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">48.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                51.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/may-che-bien-thuc-an-da-nang-kenwood" title="Máy chế biến thức ăn đa năng Kenwood">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/49528xg7cjx01oz1ac5d0e4f94943f.jpg?v=1509779413703" alt="Máy chế biến thức ăn đa năng Kenwood" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892097" enctype="multipart/form-data">

                                                            <a href="/may-che-bien-thuc-an-da-nang-kenwood" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>
                                                            <a href="/may-che-bien-thuc-an-da-nang-kenwood" data-handle="may-che-bien-thuc-an-da-nang-kenwood" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/may-che-bien-thuc-an-da-nang-kenwood" title="Máy chế biến thức ăn đa năng Kenwood">Máy chế biến thức ăn đa năng Kenwood</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">4.100.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/may-lam-banh-tiross-ts820" title="Máy làm bánh Tiross TS820">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/kenwood1248276251zoom500db1bc9.jpg?v=1509779411883" alt="Máy làm bánh Tiross TS820" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892096" enctype="multipart/form-data">

                                                            <a href="/may-lam-banh-tiross-ts820" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>
                                                            <a href="/may-lam-banh-tiross-ts820" data-handle="may-lam-banh-tiross-ts820" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/may-lam-banh-tiross-ts820" title="Máy làm bánh Tiross TS820">Máy làm bánh Tiross TS820</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.985.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bat-su-da-nang-xanh-ngoc" title="Bát sứ đa năng xanh ngọc">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/7.png?v=1509779404470" alt="Bát sứ đa năng xanh ngọc" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892086" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154840" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bat-su-da-nang-xanh-ngoc" data-handle="bat-su-da-nang-xanh-ngoc" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bat-su-da-nang-xanh-ngoc" title="Bát sứ đa năng xanh ngọc">Bát sứ đa năng xanh ngọc</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">180.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                250.000₫
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-7">

        <div class="section_group_product section_group_product_4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Gia dụng nhà bếp</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>

                                    {{--<li><a href="/bep-gas">Bếp gas</a></li>

                                    <li><a href="/bep-tu">Bếp từ</a></li>

                                    <li><a href="/bep-hong-ngoai">Bếp hồng ngoại</a></li>

                                    <li><a href="/lo-nuong">Lò nướng</a></li>

                                    <li><a href="/lo-vi-song">Lò vi sóng</a></li>--}}

                                    <li><a href="gia-dung-nha-bep" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">

                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1-a6e423f0-382c-4789-aff6-2a98c42a31da.jpg?v=1509852063367" alt="Nồi cơm điện tử đa năng Philips HD3060" class="img-responsive center-block" />

                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898349" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14166625" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/noi-com-dien-tu-da-nang-philips-hd3060" data-handle="noi-com-dien-tu-da-nang-philips-hd3060" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">Nồi cơm điện tử đa năng Philips HD3060</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.739.000₫</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" title="Nồi cơm điện Cuckoo 040101CR-0331 0.5L">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1-72a4ebf4-48ab-4f3c-a9ca-3da97abd0d9f.jpg?v=1509851989550" alt="Nồi cơm điện Cuckoo 040101CR-0331 0.5L" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898347" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14166623" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" data-handle="noi-com-dien-cuckoo-040101cr-0331-0-5l" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" title="Nồi cơm điện Cuckoo 040101CR-0331 0.5L">Nồi cơm điện Cuckoo 040101CR-0331 0.5L</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.483.000₫</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" title="Nồi cơm điện tử Sharp KS-COM10V 625W 1L">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1.jpg?v=1509851872427" alt="Nồi cơm điện tử Sharp KS-COM10V 625W 1L" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898343" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14166619" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" data-handle="noi-com-dien-tu-sharp-ks-com10v-625w-1l" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" title="Nồi cơm điện tử Sharp KS-COM10V 625W 1L">Nồi cơm điện tử Sharp KS-COM10V 625W 1L</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.740.000₫</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-com-dien-cuckoo-cr-0661-1l-500w" title="Nồi cơm điện Cuckoo CR-0661 1L 500W">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com.jpg?v=1509851512440" alt="Nồi cơm điện Cuckoo CR-0661 1L 500W" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898257" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14166450" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/noi-com-dien-cuckoo-cr-0661-1l-500w" data-handle="noi-com-dien-cuckoo-cr-0661-1l-500w" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-com-dien-cuckoo-cr-0661-1l-500w" title="Nồi cơm điện Cuckoo CR-0661 1L 500W">Nồi cơm điện Cuckoo CR-0661 1L 500W</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.558.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/bo-noi-nhom-goldsun-ae11-5109ag" title="Bộ nồi nhôm Goldsun AE11-5109AG">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-df6d60bc-2d5a-40b7-9d0c-303da86faa29.jpg?v=1509780752823" alt="Bộ nồi nhôm Goldsun AE11-5109AG" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892264" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155218" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bo-noi-nhom-goldsun-ae11-5109ag" data-handle="bo-noi-nhom-goldsun-ae11-5109ag" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bo-noi-nhom-goldsun-ae11-5109ag" title="Bộ nồi nhôm Goldsun AE11-5109AG">Bộ nồi nhôm Goldsun AE11-5109AG</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">683.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/am-nuoc-inox-image-ii-zebra-113485-3-5l" title="Ấm nước inox Image II Zebra 113485 3.5L">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-5ee56de5-eb09-499e-8c69-77b2ad324e5f.jpg?v=1509780605737" alt="Ấm nước inox Image II Zebra 113485 3.5L" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892242" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155193" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/am-nuoc-inox-image-ii-zebra-113485-3-5l" data-handle="am-nuoc-inox-image-ii-zebra-113485-3-5l" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/am-nuoc-inox-image-ii-zebra-113485-3-5l" title="Ấm nước inox Image II Zebra 113485 3.5L">Ấm nước inox Image II Zebra 113485 3.5L</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">439.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-ap-suat-supor-safety-yh18n1ih-18cm" title="Nồi áp suất Supor Safety YH18N1IH 18cm">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-bef45d37-4429-49aa-8a82-24a212817d03.jpg?v=1509780468680" alt="Nồi áp suất Supor Safety YH18N1IH 18cm" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892212" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155099" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/noi-ap-suat-supor-safety-yh18n1ih-18cm" data-handle="noi-ap-suat-supor-safety-yh18n1ih-18cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-ap-suat-supor-safety-yh18n1ih-18cm" title="Nồi áp suất Supor Safety YH18N1IH 18cm">Nồi áp suất Supor Safety YH18N1IH 18cm</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">489.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/bo-tui-hop-com-thuy-tinh-chiu-nhiet-lock-lock" title="Bộ túi hộp cơm thủy tinh chịu nhiệt Lock&Lock">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-8ce89a89-b827-464e-96af-6090d0c423c9.jpg?v=1509780318737" alt="Bộ túi hộp cơm thủy tinh chịu nhiệt Lock&Lock" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892203" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155087" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bo-tui-hop-com-thuy-tinh-chiu-nhiet-lock-lock" data-handle="bo-tui-hop-com-thuy-tinh-chiu-nhiet-lock-lock" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bo-tui-hop-com-thuy-tinh-chiu-nhiet-lock-lock" title="Bộ túi hộp cơm thủy tinh chịu nhiệt Lock&Lock">Bộ túi hộp cơm thủy tinh chịu nhiệt Lock&Lock</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">499.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/combo-3-hop-com-thuy-tinh-cuong-luc-hinh-chu-nhat-luminarc" title="Combo 3 hộp cơm thủy tinh cường lực hình chữ nhật Luminarc">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-de3a91c7-ecc5-4837-9281-9405615530e6.jpg?v=1509780163717" alt="Combo 3 hộp cơm thủy tinh cường lực hình chữ nhật Luminarc" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892197" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155073" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/combo-3-hop-com-thuy-tinh-cuong-luc-hinh-chu-nhat-luminarc" data-handle="combo-3-hop-com-thuy-tinh-cuong-luc-hinh-chu-nhat-luminarc" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/combo-3-hop-com-thuy-tinh-cuong-luc-hinh-chu-nhat-luminarc" title="Combo 3 hộp cơm thủy tinh cường lực hình chữ nhật Luminarc">Combo 3 hộp cơm thủy tinh cường lực hình chữ nhật Luminarc</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">189.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/bo-3-hop-thuy-tinh-tron-va-tui-giu-nhiet-lock-lock" title="Bộ 3 hộp thủy tinh tròn và túi giữ nhiệt Lock&Lock">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/gd-431da5f2-9063-4115-8359-468eaa68fd77.jpg?v=1509779936607" alt="Bộ 3 hộp thủy tinh tròn và túi giữ nhiệt Lock&Lock" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8892166" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14155022" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/bo-3-hop-thuy-tinh-tron-va-tui-giu-nhiet-lock-lock" data-handle="bo-3-hop-thuy-tinh-tron-va-tui-giu-nhiet-lock-lock" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/bo-3-hop-thuy-tinh-tron-va-tui-giu-nhiet-lock-lock" title="Bộ 3 hộp thủy tinh tròn và túi giữ nhiệt Lock&Lock">Bộ 3 hộp thủy tinh tròn và túi giữ nhiệt Lock&Lock</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">285.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                399.000₫
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-8">

        <div class="section_group_product section_group_product_6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Đồ dùng gia đình</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    {{--<li><a href="/dung-cu-ban-an">Dụng cụ bàn ăn</a></li>

                                    <li><a href="/do-dung-nha-bep">Đồ dùng nhà bếp</a></li>--}}

                                    <li><a href="giam-gia" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="sale-flash">SALE</div>

                                                    <div class="product-image-flip">
                                                        <a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" title="Android Tivi Sony 4K 49 inch KD-49X7500E">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kd-49x7500e-1-org.jpg?v=1509778197357" alt="Android Tivi Sony 4K 49 inch KD-49X7500E" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891917" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154614" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" data-handle="android-tivi-sony-4k-49-inch-kd-49x7500e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/android-tivi-sony-4k-49-inch-kd-49x7500e" title="Android Tivi Sony 4K 49 inch KD-49X7500E">Android Tivi Sony 4K 49 inch KD-49X7500E</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">19.900.000₫</span>
                                                        </div>

                                                        <div class="old-price">
                                                            <span class="price product-price-old">
                                                                22.000.000₫
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/internet-tivi-samsung-49-inch-ua49j5200" title="Internet Tivi Samsung 49 inch UA49J5200">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-49-inch-ua49j5200-1-4-org-1-org.jpg?v=1509778045413" alt="Internet Tivi Samsung 49 inch UA49J5200" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891890" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154582" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/internet-tivi-samsung-49-inch-ua49j5200" data-handle="internet-tivi-samsung-49-inch-ua49j5200" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/internet-tivi-samsung-49-inch-ua49j5200" title="Internet Tivi Samsung 49 inch UA49J5200">Internet Tivi Samsung 49 inch UA49J5200</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">13.400.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-lg-32-inch-32lj571d" title="Smart Tivi LG 32 inch 32LJ571D">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-lg-32lj571d-1-1-org.jpg?v=1509777885673" alt="Smart Tivi LG 32 inch 32LJ571D" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891883" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154575" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/smart-tivi-lg-32-inch-32lj571d" data-handle="smart-tivi-lg-32-inch-32lj571d" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-lg-32-inch-32lj571d" title="Smart Tivi LG 32 inch 32LJ571D">Smart Tivi LG 32 inch 32LJ571D</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">6.990.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-samsung-43-inch-ua43m5500" title="Smart Tivi Samsung 43 inch UA43M5500">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-ua43m5500-1-org.jpg?v=1509777756160" alt="Smart Tivi Samsung 43 inch UA43M5500" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891852" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154538" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/smart-tivi-samsung-43-inch-ua43m5500" data-handle="smart-tivi-samsung-43-inch-ua43m5500" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-samsung-43-inch-ua43m5500" title="Smart Tivi Samsung 43 inch UA43M5500">Smart Tivi Samsung 43 inch UA43M5500</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">12.390.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/smart-tivi-samsung-43-inch-ua43k5310" title="Smart Tivi Samsung 43 inch UA43K5310">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-samsung-ua43k5310-1-14-org.jpg?v=1509777542733" alt="Smart Tivi Samsung 43 inch UA43K5310" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891837" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154506" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/smart-tivi-samsung-43-inch-ua43k5310" data-handle="smart-tivi-samsung-43-inch-ua43k5310" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/smart-tivi-samsung-43-inch-ua43k5310" title="Smart Tivi Samsung 43 inch UA43K5310">Smart Tivi Samsung 43 inch UA43K5310</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">10.390.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Android Tivi Sony 4K 43 inch KD-43X7500E">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kd-43x7500e-1-org.jpg?v=1509777350580" alt="Android Tivi Sony 4K 43 inch KD-43X7500E" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891812" enctype="multipart/form-data">

                                                            <input type="hidden" name="variantId" value="14154468" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>
                                                            <a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" data-handle="android-tivi-sony-4k-43-inch-kd-43x7500e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/android-tivi-sony-4k-43-inch-kd-43x7500e" title="Android Tivi Sony 4K 43 inch KD-43X7500E">Android Tivi Sony 4K 43 inch KD-43X7500E</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">14.900.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">

                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/internet-tivi-sony-43-inch-kdl-43w750e" title="Internet Tivi Sony 43 inch KDL-43W750E">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/tivi-sony-kdl-43w750e-1-2-org.jpg?v=1509776984933" alt="Internet Tivi Sony 43 inch KDL-43W750E" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    {{--<div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8891805" enctype="multipart/form-data">

                                                            <a href="/internet-tivi-sony-43-inch-kdl-43w750e" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>
                                                            <a href="/internet-tivi-sony-43-inch-kdl-43w750e" data-handle="internet-tivi-sony-43-inch-kdl-43w750e" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>--}}
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/internet-tivi-sony-43-inch-kdl-43w750e" title="Internet Tivi Sony 43 inch KDL-43W750E">Internet Tivi Sony 43 inch KDL-43W750E</a></h3>

                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">12.400.000₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="barbox clearfix">
                                    <h2 class="titlecate">Kinh nghiệm hay</h2>
                                    <a href="/tin-tuc" class="viewmoretext">Xem tất cả</a>
                                </div>
                                <div class="list-blogs-link">
                                    <div class="section_blogs_owl owl-carousel owl-theme not-dqowl">

                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/cach-lam-banh-bong-lan-trung-muoi-bang-noi-com-dien5.jpg?v=1509856050450" alt="Cách làm bánh bông lan cực dễ bằng nồi cơm điện" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien" title="Cách làm bánh bông lan cực dễ bằng nồi cơm điện">Cách làm bánh bông lan cực dễ bằng nồi cơm điện</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>Nguyễn Chánh Bảo Trung</b> - 01/11/2017</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"> Không cần phải có lò nướng, bạn cũng có thể làm bánh bông lan bằng nồi cơm điện. Chúng tôi sẽ má...</p>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/lam-banh-pancake-toc-hanh-8.jpg?v=1509857723953" alt="Làm bánh pancake “tốc hành” bằng chảo chống dính" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh" title="Làm bánh pancake “tốc hành” bằng chảo chống dính">Làm bánh pancake “tốc hành” bằng chảo chống dính</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>Nguyễn Chánh Bảo Trung</b> - 01/11/2017</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"> Pancake là loại bánh không yêu cầu nguyên liệu quá cầu kỳ, cách làm cũng khá đơn giản, chỉ cần t...</p>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/kho-ca-dua.jpg?v=1509547868160" alt="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat" title="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất">Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>Nguyễn Chánh Bảo Trung</b> - 01/11/2017</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"> Mùa nóng ăn món gì cũng cảm thấy “nhạt” miệng, làm sao để tăng khẩu vị cho gia đình? Hãy làm nga...</p>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/dinh-duong-cho-be.jpg?v=1509547786227" alt="Mẹo vặt hay từ muối có thể bạn chưa biết?" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet" title="Mẹo vặt hay từ muối có thể bạn chưa biết?">Mẹo vặt hay từ muối có thể bạn chưa biết?</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>Nguyễn Chánh Bảo Trung</b> - 01/11/2017</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"> Muối ăn một gia vị quá quen thuộc và hầu như gia đình nào cũng có trong gian bếp. Thế nhưng ngoà...</p>
                                                </div>
                                            </article>
                                        </div>

                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="/cach-lam-trung-ca-kho-to-ngon-ba-chay">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/hinh-anh-cach-lam-ca-kho-khoai-ngon-dung-bai-don-gian-va-de-lam-1.jpg?v=1509547653017" alt="Cách làm trứng cá kho tộ ngon bá cháy" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="/cach-lam-trung-ca-kho-to-ngon-ba-chay" title="Cách làm trứng cá kho tộ ngon bá cháy">Cách làm trứng cá kho tộ ngon bá cháy</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>Nguyễn Chánh Bảo Trung</b> - 01/11/2017</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5"> Nếu bạn đang phân vân chưa biết nấu món gì cho bữa cơm tối của cả nhà thì hãy thử trứng cá kho t...</p>
                                                </div>
                                            </article>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('pageJs')
    
@stop