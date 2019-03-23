@extends('layouts.user.master')

@section('page')Mua đồng hồ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch
@stop

@section('description')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('keywords')đồng hồ chính hãng, thương hiệu đồng hồ, đồng hồ chất lượng, đồng hồ nam, đồng hồ nữ, đồng hồ đẳng cấp, đồng hồ thương hiệu, cửa hàng đồng hồ uy tín
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')Mua đồng hồ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch.
@stop

@section('propDesc')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogTitle')Mua đồng hồ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch.
@stop

@section('ogDesc')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')

@stop

@section('content')
    <h1 class="hide">Mua đồng hồ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch</h1>
    <section class="banner section">
        <div class="swiper swiper-pagination-inside">
            <div class="swiper-container" data-plugin="swiper">
                <div class="swiper-wrapper">
                    @foreach ($slides as $slide)
                        <div class="swiper-slide" style="background-image:url({{ asset($slide->image) }})">
                            <div class="container d-flex justify-content-md-end justify-content-center">
                                <div class="align-self-center text-center text-md-right">
                                    <a href="javascript:void(0)">
                                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/seamaster.png') }}" alt="seamaster" width="188">
                                    </a>
                                    <h3 style="font-size:35px;" class="section-heading mb-4">{{ $slide->title }}</h3>
                                    @if ($slide->target_type == 'product')
                                        <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="{{ ($slide->product) ? route('product-detail', ['slug' => $slide->product->slug]) : 'javascript:void(0)' }}">xem thông tin</a>
                                    @else
                                        <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="#">xem thông tin</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @if (count($topSales) > 0)
    <section class="swiper swiper-fullwidth">
        <div class="container">
            <h2 class="section-heading text-center text-md-left">Top Sales</h2>
        </div>
        <div class="swiper-container" data-plugin="swiper" data-slidesperview="4" data-breakpoints-lg="3" data-breakpoints-md="2">
            <div class="swiper-wrapper">
                @foreach ($topSales as $top)
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">{{ $top->discount }}%</span>
                            </div>
                            <div class="card-price-border mb-2">{{ number_format($top->price_sale, 0, 0, '.') }} VND</div>
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
    @if (count($features) > 0)
    <section class="section py-0">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-4 mb-md-0">Sản phẩm nổi bật</h2>
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
            <div class="row" id="section-feature">
                @foreach ($features as $fea)
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="{{ route('product-detail', ['slug' => $fea->slug]) }}">
                            <img class="thumbnail-img" src="{{ asset($fea->image) }}" alt="{{ $fea->name }}">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset($fea->category->icon) }}" alt="{{ $fea->category->name }}">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="{{ route('product-detail', ['slug' => $fea->slug]) }}">{{ $fea->name }}</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">{{ number_format($fea->price_sale, 0, 0, '.') }} VND</span>
                                <del class="card-price card-price-old mr-2">{{ number_format($fea->price, 0, 0, '.') }} VND</del>
                                <span class="card-sale">{{ $fea->discount }}%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>{{ ($fea->status == 1) ? 'Còn hàng' : 'Hết hàng' }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <hr class="divider my-5">
    @endif
    @if (count($brands) > 0)
    <section class="section py-0">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-0">các thương hiệu nổi tiếng</h2>
            </header>
            <div class="brands row gutter-1 gutter-md-2 gutter-lg-3 mb-5">
                @foreach ($brands as $brand)
                <div class="col">
                    <a data-id="{{ $brand->id }}" class="brands-item {{ ($loop->first) ? 'active' : '' }}" href="javascript:void(0)">
                        <img class="img-fluid" src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}">
                    </a>
                </div>
                @endforeach
            </div>
            @if (count($proBrands) > 0)
            <div class="row mb-5" id="section-brand">
                @foreach ($proBrands as $pro)
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                            <img class="thumbnail-img" src="{{ asset($pro->image) }}" alt="{{ $pro->name }}">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset($pro->category->icon) }}" alt="{{ $pro->category->name }}">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">{{ $pro->name }}</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">{{ number_format($pro->price_sale, 0, 0, '.') }} VND</span>
                                <del class="card-price card-price-old mr-2">{{ number_format($pro->price, 0, 0, '.') }} VND</del>
                                <span class="card-sale">{{ $pro->discount }}%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>{{ ($pro->status == 1) ? 'Còn hàng' : 'Hết hàng' }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
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
        $(document).on('click', '.brands-item', function () {
            var catId = $(this).data('id');
            $('.brands-item').removeClass('active');
            $(this).addClass('active');
            $.get('/product/getProdByCate/' + catId, function (res) {
                $('#section-brand').html(res.html);
            });
        });
        $(document).on('click', '.nav-link', function () {
            var sex = $(this).data('sex');
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            $.get('/product/getProdBySex/' + sex, function (res) {
                $('#section-feature').html(res.html);
            });
        });
    </script>
@stop