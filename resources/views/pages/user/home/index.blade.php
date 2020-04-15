@extends('layouts.user.master')

@section('page')Mua đồng hồ chính hãng uy tín và chất lượng tại Donghoxachtay
@stop

@section('description')Donghoxachtay - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('keywords')đồng hồ chính hãng, thương hiệu đồng hồ, đồng hồ chất lượng, đồng hồ nam, đồng hồ nữ, đồng hồ đẳng cấp, đồng hồ thương hiệu, cửa hàng đồng hồ uy tín
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')Mua đồng hồ chính hãng uy tín và chất lượng tại Donghoxachtay.
@stop

@section('propDesc')Donghoxachtay - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogTitle')Mua đồng hồ chính hãng uy tín và chất lượng tại Donghoxachtay.
@stop

@section('ogDesc')Donghoxachtay - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')

@stop

@section('content')
    <h1 class="hide">Mua đồng hồ chính hãng uy tín và chất lượng tại Donghoxachtay</h1>
    {{--<section class="banner section">
        <div class="swiper swiper-pagination-inside">
            <div class="swiper-container" data-plugin="swiper">
                <div class="swiper-wrapper">
                    @foreach ($slides as $slide)
                        <div class="swiper-slide" style="background-image:url({{ asset($slide->image) }})">
                            <div class="container d-flex justify-content-md-end justify-content-center">
                                <div class="align-self-center text-center text-md-right">
                                    <h3 style="font-size:35px;" class="section-heading mb-4">{{ $slide->title }}</h3>
                                    @if ($slide->target_type == 'product')
                                        <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="{{ ($slide->product) ? route('product-detail', ['slug' => $slide->product->slug]) : 'javascript:void(0)' }}">xem thông tin</a>
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
    </section>--}}
    @if (count($topSales) > 0)
    <section class="swiper swiper-fullwidth mb-5" style="margin-top: 1.5rem !important;">
        <div class="container">
            <h2 class="section-heading text-center text-md-left">
                <span class="line-bottom">Top Sales</span>
            </h2>
        </div>
        <div class="swiper-container" data-plugin="swiper" data-slidesperview="4" data-breakpoints-lg="3" data-breakpoints-md="2">
            <div class="swiper-wrapper">
                @foreach ($topSales as $top)
                <div class="swiper-slide top-sale">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">{{ $top->discount }}%</span>
                            </div>
                            <div class="card-price-border mb-2">{{ number_format($top->price_sale, 0, 0, '.') }} VNĐ</div>
                        </div>
                        <a class="thumbnail" href="{{ route('product-detail', ['slug' => $top->slug]) }}">
                            <img class="thumbnail-img" src="{{ asset($top->image) }}" alt="{{ $top->name }}">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="{{ route('product-detail', ['slug' => $top->slug]) }}">{{ $top->name }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-buttons">
                <div class="swiper-button-prev">
                    <i class="icont-chevron-left"></i>
                </div>
                <div class="swiper-button-next">
                    <i class="icont-chevron-right"></i>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-style-1 mt-5"></div>
        </div>
    </section>
    <hr class="divider my-5">
    @endif
    <section class="section py-0" style="margin-top: 1.5rem !important;">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-4 mb-md-0">
                    <span class="line-bottom">Sản phẩm nổi bật</span>
                </h2>
                <nav class="tabs tabs-simple fs-sm ml-md-auto">
                    <ul class="nav nav-tabs mb-0">
                        <li class="nav-item">
                            <a data-sex="all" class="nav-link active" href="javascript:void(0)" data-toggle="tab">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a data-sex="m" class="nav-link" href="javascript:void(0)" data-toggle="tab">Đồng hồ nam</a>
                        </li>
                        <li class="nav-item">
                            <a data-sex="f" class="nav-link" href="javascript:void(0)" data-toggle="tab">Đồng hồ nữ</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="row gutter-2 gutter-md-3" id="section-feature">
                
            </div>
            <div class="text-center">
                <a id="feature-loadmore" class="btn btn-secondary text-uppercase rounded-0 px-4" href="javascript:void(0)">Xem thêm</a>
            </div>
        </div>
    </section>
    <hr class="divider my-5">
    @if (count($brands) > 0)
    <section class="section py-0">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-0">
                    <span class="line-bottom">các thương hiệu nổi tiếng</span>
                </h2>
            </header>
            <div class="swiper swiper-button-simple brands mb-5">
                <div class="swiper-container" data-plugin="swiper" data-slidesperview="5" data-breakpoints-xs="3" data-spacebetween="20">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $brand)
                        <div class="swiper-slide">
                            <a data-id="{{ $brand->id }}" class="brands-item {{ ($loop->first) ? 'active' : '' }}" href="javascript:void(0)">
                                <img class="img-fluid" src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev">
                            <i class="icont-chevron-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="icont-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-2 gutter-md-3 mb-5" id="section-brand">
                
            </div>
            <div class="text-center">
                <a id="probrand-loadmore" class="btn btn-secondary text-uppercase rounded-0 px-4" href="javascript:void(0)">Xem thêm</a>
            </div>
        </div>
    </section>
    @endif
    <section class="section section-newsletter section-background text-white mb-0" style="background-image:url({{ asset('frontend/images/bg-newsletter.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <p class="section-lead text-center mb-4">Đăng ký ngay để nhận những tin tức về những mẫu đồng hồ mới nhất từ chúng tôi</p>
                    <div class="input-group input-group-lg input-group-newsletter">
                        <input class="search-input form-control" type="text" placeholder="Địa chỉ email">
                        <div class="input-group-append">
                            <button class="search-btn btn btn-secondary" type="button">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')
    <script type="text/javascript">
        var pageFeature = 1;
        var pageProBrand = 1;
        $(function () {
            getAllFeatureProd('all', pageFeature, 'btn-sex');
            var countBrand = '{{ count($brands) }}';
            if (countBrand > 0) {
                var catId = $('.brands-item.active').data('id');
                getAllCateProd(catId, pageProBrand, 'btn-cate');
            }
            // Order div randomly
            var cards = $('.top-sale');
            for (var i = 0; i < cards.length; i++) {
                var target = Math.floor(Math.random() * cards.length -1) + 1;
                var target2 = Math.floor(Math.random() * cards.length -1) +1;
                cards.eq(target).before(cards.eq(target2));
            }
        });
        $(document).on('click', '.nav-link', function () {
            var sex = $(this).data('sex');
            getAllFeatureProd(sex, 1, 'btn-sex');
            pageFeature = 1;
        });
        $(document).on('click', '#feature-loadmore', function () {
            pageFeature++;
            var sex = $('.nav-link.active').data('sex');
            getAllFeatureProd(sex, pageFeature, 'btn-load');
        });
        $(document).on('click', '.brands-item', function () {
            var catId = $(this).data('id');
            $('.brands-item').removeClass('active');
            $(this).addClass('active');
            getAllCateProd(catId, 1, 'btn-cate');
        });
        $(document).on('click', '#probrand-loadmore', function () {
            pageProBrand++;
            var catId = $('.brands-item.active').data('id');
            getAllCateProd(catId, pageProBrand, 'btn-load');
        });
        function getAllFeatureProd(sex, page, type) {
            $.get('/product/getAllFeatureProd?sex='+sex+'&page='+page, function (res) {
                if (type == 'btn-sex') {
                    $('#section-feature').html(res.html);
                } else {
                    $('#section-feature').append(res.html);
                }
                if (res.products.current_page >= res.products.last_page) {
                    $('#feature-loadmore').addClass('hide');
                } else {
                    $('#feature-loadmore').removeClass('hide');
                }
            });
        }
        function getAllCateProd(catId, page, type) {
            $.get('/product/getAllCateProd?catId='+catId+'&page='+page, function (res) {
                if (type == 'btn-cate') {
                    $('#section-brand').html(res.html);
                } else {
                    $('#section-brand').append(res.html);
                }
                if (res.products.current_page >= res.products.last_page) {
                    $('#probrand-loadmore').addClass('hide');
                } else {
                    $('#probrand-loadmore').removeClass('hide');
                }
            });
        }
    </script>
@stop