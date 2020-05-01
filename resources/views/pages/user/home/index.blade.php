@extends('layouts.user.master')

@section('page'){{ $setting->seo_title }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    
@stop

@section('content')
    <h1 class="hidden">KingBep</h1>

    <section class="awe-section-1">
        <div class="container">
            <div class="col-md-3 no-padding"></div>
            <div class="col-md-9 no-padding">
                <div class="home-slider owl-carousel not-dqowl">
                    @foreach ($slides as $slide)
                        <div class="item">
                            @if ($slide->target_type == 'product')
                                <a href="{{ ($slide->product) ? route('product-detail', ['slug' => $slide->product->slug]) : 'javascript:void(0)' }}" class="clearfix">
                                    <img src="{{ $slide->image }}" alt="{{ $slide->title }}" class="img-responsive center-block" />
                                </a>
                            @else
                                <a href="{{ ($slide->article) ? route('article-detail', ['slug' => $slide->article->slug]) : 'javascript:void(0)' }}" class="clearfix">
                                    <img src="{{ $slide->image }}" alt="{{ $slide->title }}" class="img-responsive center-block" />
                                </a>
                            @endif
                        </div>
                    @endforeach
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

    @if (count($chauda) > 0)
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Chậu rửa bát đá nhân tạo</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="{{ route('product-detail', ['slug' => $chauda[0]->category->slug]) }}" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        @foreach ($chauda as $pro)
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        @if ($pro->discount > 0)
                                                            <div class="sale-flash">SALE</div>
                                                        @endif
                                                        <div class="product-image-flip">
                                                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">
                                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">{{ $pro->name }}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    {{ number_format($pro->price_sale, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @if ($pro->discount > 0)
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    {{ number_format($pro->price, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (count($chauinox) > 0)
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Chậu rửa inox</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="{{ route('product-detail', ['slug' => $chauinox[0]->category->slug]) }}" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        @foreach ($chauinox as $pro)
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        @if ($pro->discount > 0)
                                                            <div class="sale-flash">SALE</div>
                                                        @endif
                                                        <div class="product-image-flip">
                                                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">
                                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">{{ $pro->name }}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    {{ number_format($pro->price_sale, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @if ($pro->discount > 0)
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    {{ number_format($pro->price, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (count($voiruabat) > 0)
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">Vòi rửa bát</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="{{ route('product-detail', ['slug' => $voiruabat[0]->category->slug]) }}" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        @foreach ($voiruabat as $pro)
                                            <div class="item">
                                                <div class="product-box">
                                                    <div class="product-thumbnail">
                                                        @if ($pro->discount > 0)
                                                            <div class="sale-flash">SALE</div>
                                                        @endif
                                                        <div class="product-image-flip">
                                                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">
                                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive center-block" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info a-center">
                                                        <h3 class="product-name"><a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" title="{{ $pro->name }}">{{ $pro->name }}</a></h3>
                                                        <div class="price-box clearfix">
                                                            <div class="special-price">
                                                                <span class="price product-price">
                                                                    {{ number_format($pro->price_sale, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @if ($pro->discount > 0)
                                                            <div class="old-price">
                                                                <span class="price product-price-old">
                                                                    {{ number_format($pro->price, 0, 0, '.') }}đ
                                                                </span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (count($featureArticles) > 0)
    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="barbox clearfix">
                                    <h2 class="titlecate">Kinh nghiệm hay</h2>
                                    <a href="{{ route('article') }}" class="viewmoretext">Xem tất cả</a>
                                </div>
                                <div class="list-blogs-link">
                                    <div class="section_blogs_owl owl-carousel owl-theme not-dqowl">
                                        @foreach ($featureArticles as $article)
                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $article->image }}" alt="{{ $article->title }}" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                                    <div class="post-time">
                                                        <span>Đăng bởi <b>{{ $article->user->fullname }}</b> - {{ $article->created_at }}</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-5">{!! $article->intro !!}</p>
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @endif
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function () {
            $('.blog-item-contens p').each(function (v, k) {
                var trim = trimText($(k).text(), 20);
                $(k).text(trim);
            });
        });
    </script>
@stop