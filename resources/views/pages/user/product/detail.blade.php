@extends('layouts.user.master')

@section('page'){{ $product->name }}
@stop

@section('description'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('keywords'){{ $product->name }}, {{ ($product->category) ? $product->category->name : 'Autwatch' }}
@stop

@section('canonical'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('alternate'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('propName'){{ $product->name }}
@stop

@section('propDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogTitle'){{ $product->name }}
@stop

@section('ogDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogUrl'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('pageCss')

@stop

@section('content')
    <h1 class="hide">{{ $product->name }}</h1>
    <hr class="divider my-0">
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                </li>
                <!--li.breadcrumb-item.active(aria-current='page') Data-->
            </ol>
        </nav>
    </div>
    <section class="product">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <!-- row.flex-column-reverse.flex-md-row.gutter-2-->
                    <div class="gallery gallery-row mb-5">
                        <!--.col-thumb-->
                        <div class="swiper swiper-thumbs flex-grow-1">
                            <div class="swiper-container" data-plugin="swiper-gallery-row-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image: url({{ asset($imageOriginal) }})"></div>
                                    @if (count($imageLists) > 0)
                                        @foreach ($imageLists as $image)
                                            <div class="swiper-slide" style="background-image: url({{ asset($image['link']) }})"></div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--.col-main.mb-3.mb-md-0-->
                        <div class="gallery-pswp swiper swiper-gallery swiper-button-position-inside mb-3 mb-lg-0">
                            <div class="swiper-container" data-plugin="swiper-gallery-row">
                                <div class="swiper-wrapper">
                                    <figure class="swiper-slide">
                                        <a href="{{ asset($imageOriginal) }}" data-size="{{ $product->image_width }}x{{ $product->image_height }}">
                                            <img class="img-fluid" src="{{ asset($imageOriginal) }}" alt="{{ $product->name }}">
                                        </a>
                                    </figure>
                                    @if (count($imageLists) > 0)
                                    @foreach ($imageLists as $image)
                                    <figure class="swiper-slide">
                                        <a href="{{ asset($image['link']) }}" data-size="{{ $image['width'] }}x{{ $image['height'] }}">
                                            <img class="img-fluid" src="{{ asset($image['link']) }}" alt="{{ asset($image['link']) }}">
                                        </a>
                                    </figure>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="product-logo img-fluid mb-3" src="{{ ($product->category) ? asset($product->category->icon) : '' }}" height="12">
                    <h1 class="product-title mb-3">{{ $product->name }}</h1>
                    <p class="product-info">Model: {!! $product->sku_id !!}</p>
                    {!! ($product->short_desc != '') ? $product->short_desc : '' !!}
                    <div class="mb-3">
                        <div class="product-price">{{ number_format($product->price_sale, 0, 0, '.') }} VND</div>
                        <div>
                            <del class="product-price-old">Giá retail: {{ number_format($product->price, 0, 0, '.') }} VND</del>
                        </div>
                    </div>
                    <a class="product-btn-addtocart btn btn-lg btn-block btn-secondary mb-3" data-plugin="mfp-popup" data-effect="mfp-zoom-in" href="#modal-product-detail">tôi muốn mua sản phẩm này</a>
                    <hr class="divider">
                </div>
                <div class="col-lg-8">
                    <div class="product-detail" id="product-detail">
                        <h4 class="text-uppercase text-primary mb-4">thông tin sản phẩm</h4>
                        <div></div>
                        <div id="nd_length">
                        {!! $product->full_desc !!}
                        </div>
                        <a class="product-detail-btn-more btn btn-sm btn-secondary rounded-0 text-uppercase" id="product-detail-btn-more" href="#">
                            <span class="sr-only">Đọc thêm</span>
                            <i class="fa fa-angle-down ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-comment section bg-gray-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-comment-inner">
                            <h3 class="section-heading text-primary">hỏi đáp</h3>
                            <div class="fb-comments" data-href="{{ route('product-detail', ['slug' => $product->slug]) }}" data-width="650" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Root element of PhotoSwipe. Must have class pswp.-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    @if (count($relatedProducts) > 0)
    <section class="swiper swiper-fullwidth mb-5">
        <div class="container">
            <h2 class="section-heading text-center text-md-left">
                <span class="line-bottom">Sản phẩm TƯƠNG TỰ</span>
            </h2>
        </div>
        <div class="swiper-container" data-plugin="swiper" data-slidesperview="4" data-breakpoints-lg="3" data-breakpoints-md="2">
            <div class="swiper-wrapper">
                @foreach ($relatedProducts as $pro)
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">{{ $pro->discount }}%</span>
                            </div>
                            <div class="card-price-border mb-2">{{ number_format($pro->price_sale, 0, 0, '.') }} VND</div>
                        </div>
                        <a class="thumbnail" href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                            <img class="thumbnail-img" src="{{ asset($pro->image) }}" alt="{{ $pro->name }}">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">{{ $pro->name }}</a>
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
    @endif

    <div class="white-popup mfp-with-anim mfp-hide modal-product-detail" id="modal-product-detail">
        <div class="modal-body">
            <div class="card card-product border-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-md-5 col-3">
                        <img class="img-fluid w-100" src="images/ex/product/slider-1.jpg">
                    </div>
                    <div class="col-md-7 col-9">
                        <div class="card-body p-3 p-md-4">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-body section-background" style="background-image: url(images/bg-newsletter.jpg)">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Tên">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Địa chỉ">
                    </div>
                    <a class="product-btn-addtocart btn btn-lg btn-block btn-secondary" data-plugin="mfp-popup" data-effect="mfp-zoom-in" href="#modal-product-success">Gửi liên hệ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="white-popup mfp-with-anim mfp-hide" id="modal-product-success">
        <div class="modal-body text-center">
            <h3 class="text-success">Success</h3>
        </div>
    </div>

@stop

@section('pageJs')
    <script type="text/javascript">
        $(function () {
            var element = document.getElementById('nd_length');
            if (element.offsetHeight < 500) {
                $('#product-detail-btn-more').hide();
            }
        })
    </script>
@stop