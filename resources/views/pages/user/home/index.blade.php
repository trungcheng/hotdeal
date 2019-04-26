@extends('layouts.user.master')

@section('page')Chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại
@stop

@section('description')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('keywords')chậu rửa bát, cửa hàng chậu rửa bát tại Hà Nội, chậu rửa inox, chậu rửa đá nhân tạo, chậu rửa inox 201, chậu rửa inox 304
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')Chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại.
@stop

@section('propDesc')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('ogTitle')Chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại.
@stop

@section('ogDesc')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    <style type="text/css">
        .swiper .swiper-container {
            position: static;
        }
        .swiper-container[class*=swiper-container-] {
            height: auto;
        }
        .swiper-container[class*=swiper-container-]>* {
            visibility: visible;
        }
        .swiper-container>* {
            /*visibility: hidden;*/
            transition: all .2s ease-in-out;
        }
        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            /*display: -ms-flexbox;*/
            display: flex;
            /*transition-property: transform;*/
            box-sizing: content-box;
        }
        .banner {
            margin-bottom: 4.5rem !important;
            padding: 0;
            color: #fff;
            flex-grow: 1;
            background: #fff;
        }
        .banner .swiper-slide {
            position: relative;
            display: flex;
            height: 300px;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: repeat;
            overflow: hidden;
            z-index: 0;
        }
        .banner .swiper .swiper-pagination-bullets .swiper-pagination-bullet-active {
            background-color: #fff !important;
        }
        .banner .swiper .swiper-pagination-bullets .swiper-pagination-bullet {
            height: .625rem;
            width: .625rem;
            background-color: transparent;
            border: 2px solid #fff;
            display: inline-block;
            border-radius: 100%;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 4px;
        }
        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }
        .banner .section-heading {
            font-size: 35px;
            font-weight: 300;
            text-transform: uppercase;
            line-height: 1;
            color: #fff;
        }
        .align-self-center {
            align-self: center!important;
            margin-top: 100px;
        }
        .text-md-right {
            text-align: right!important;
        }
        .btn-style-1 {
            padding: 1rem 1rem;
            text-transform: uppercase;
            font-size: 13px !important;
        }
        .btn-outline-white {
            color: #fff;
            border-color: #fff;
        }
        .rounded-0 {
            border-radius: 0!important;
        }
        .btn-block {
            display: block;
            width: 100%;
            line-height: 1.5;
        }
        .btn-outline-white:not(:disabled):not(.disabled).active, .btn-outline-white:not(:disabled):not(.disabled):active, .show>.btn-outline-white.dropdown-toggle {
            color: #212529;
            background-color: #fff;
            border-color: #fff;
        }
        @media (min-width: 768px) {
            .banner .btn-style-1 {
                max-width: 26.8125rem;
                margin-left: auto;
            }
        }
        article {
            display: block !important;
            justify-content: space-between;
            flex-grow: 1;
            border-radius: 0;
            border-color: transparent;
            position: relative;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
        }
        article .thumb {
            padding-top: 100%;
            position: relative;
            display: block;
            z-index: 0;
        }
        .thumb .img-responsive {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            max-width: 100%;
            transition: all .2s ease-in-out;
            vertical-align: middle;
        }
        .product {
            display: flex;
        }
    </style>
@stop

@section('content')
<h1 class="hide">Mua chậu rửa bát chất lượng, uy tín tại Thạch Vũ</h1>
<!-- Slid Sec -->
<section class="banner section">
    <div class="container">
        <div class="swiper swiper-pagination-inside">
            <div class="swiper-container" data-plugin="swiper">
                <div class="swiper-wrapper">
                    @foreach ($slides as $slide)
                        <div class="swiper-slide" style="background-image:url({{ asset($slide->image) }})">
                            <div class="container d-flex justify-content-md-end justify-content-center">
                                <div class="align-self-center text-center text-md-right">
                                    <h3 style="font-size:35px;" class="section-heading mb-4">{{ $slide->title }}</h3>
                                    @if ($slide->target_type == 'product')
                                        <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="{{ ($slide->product) ? route('product-detail', ['cate' => $slide->product->category->slug, 'slug' => $slide->product->slug]) : 'javascript:void(0)' }}">xem thông tin</a>
                                    @else
                                        <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="{{ ($slide->article) ? route('article-detail', ['slug' => $slide->article->slug]) : 'javascript:void(0)' }}">xem thông tin</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- Shipping Info -->

<!-- tab Section -->
<section class="featur-tabs padding-bottom-30">
    <div class="container"> 

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">KHUYẾN MÃI</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">NỔI BẬT</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- On sale -->
            <div role="tabpanel" class="tab-pane active fade in" id="tab1"> 
                <!-- Items Slider -->
                <div class="item-slide-4 with-nav" id="owl1"> 
                    <!-- Product -->
                    @foreach ($saleProducts as $pro)
                    <div class="product">
                        <article>
                            <a class="thumb" href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}">
                                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                            </a>
                            <span class="sale-tag">-{{ $pro->discount }}%</span>
                            <!-- Content --> 
                            <!-- <span class="tag">Latop</span> --> 
                            <a href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
                            <!-- Reviews -->
                            <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                            <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span></div>
                            <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> --> 
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Featured -->
            <div role="tabpanel" class="tab-pane fade" id="tab2"> 
                <!-- Items Slider -->
                <div class="with-nav" id="owl2"> 
                    <!-- Product -->
                    @foreach ($featureProducts as $pro)
                    <div class="product">
                        <article>
                            <a class="thumb" href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}">
                                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                            </a>
                            <!-- Content --> 
                            <!-- <span class="tag">Latop</span> --> 
                            <a href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
                            <!-- Reviews -->
                            <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                            <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span></div>
                            <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> --> 
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

@if (count($chauda) > 0)
<section class="light-gry-bg padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2 class="text-uppercase">Chậu rửa đá nhân tạo</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            @foreach ($chauda as $list)
            <div class="item-col-4"> 
                @foreach ($list as $pro)
                <div class="product">
                    <article> 
                        <a class="thumb" href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}">
                            <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a>
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (count($chauinox) > 0)
<section class="padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2 class="text-uppercase">Chậu rửa inox</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            @foreach ($chauinox as $list)
            <div class="item-col-4"> 
                @foreach ($list as $pro)
                <div class="product">
                    <article> 
                        <a class="thumb" href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}">
                            <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}" >
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (count($voiruabat) > 0)
<section class="light-gry-bg padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2 class="text-uppercase">Vòi rửa bát</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            @foreach ($voiruabat as $list)
            <div class="item-col-4"> 
                @foreach ($list as $pro)
                <div class="product">
                    <article> 
                        <a class="thumb" href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}">
                            <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}" >
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="{{ route('product-detail', ['cate' => $pro->category->slug, 'slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if (count($featureArticles) > 0)
<section class="padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2>TIN TỨC NỔI BẬT</h2>
            <hr>
        </div>
        <div id="blog-slide" class="with-nav"> 
            @foreach ($featureArticles as $article)
            <div class="blog-post">
                <article>
                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                        <img class="img-responsive" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}">
                    </a>
                    <span><i class="fa fa-bookmark-o"></i>{{ $article->created_at }}</span>
                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="tittle">{{ $article->title }}</a>
                    <p>{!! $article->intro !!}</p>
                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">Đọc thêm</a> 
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@stop

@section('pageJs')
<script type="text/javascript">
    $(function () {
        $('a[href="#tab1"]').on('shown.bs.tab', function () {
            initialize_owl($('#owl1'));
        }).on('hide.bs.tab', function () {
                // destroy_owl($('#owl1'));
        });
        $('a[href="#tab2"]').on('shown.bs.tab', function () {
            initialize_owl($('#owl2'));
        }).on('hide.bs.tab', function () {
                // destroy_owl($('#owl2'));
        });
        $('.blog-post p').each(function (v, k) {
            var trim = trimText($(k).text(), 30);
            $(k).text(trim);
        });
    });
</script>
@stop