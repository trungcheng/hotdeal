@extends('layouts.user.master')

@section('page'){{ $product->name }}
@stop

@section('description'){{ $product->name }} là dòng đồng hồ cao cấp của {{ $product->category->name }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('keywords'){{ $product->name }}, {{ $product->category->name }}
@stop

@section('canonical'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('alternate'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('propName'){{ $product->name }}
@stop

@section('propDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ $product->category->name }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogTitle'){{ $product->name }}
@stop

@section('ogDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ $product->category->name }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogUrl'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('pageCss')

@stop

@section('content')
    <section class="product pt-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row mb-5">
                <div class="col-md-8">
                    <!-- row.flex-column-reverse.flex-md-row.gutter-2-->
                    <div class="gallery gallery-row mb-5">
                        <!--.col-thumb-->
                        <div class="swiper swiper-thumbs flex-grow-1">
                            <div class="swiper-container" data-plugin="swiper-gallery-row-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image: url({{ asset($product->image) }})"></div>
                                    @if (count(json_decode($product->image_list)) > 0)
                                    @foreach (json_decode($product->image_list) as $key => $image)
                                    <div class="swiper-slide" style="background-image: url({{ asset($image) }})"></div>
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
                                        <a href="{{ asset($product->image) }}" data-size="1300x1080">
                                            <img class="img-fluid" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                        </a>
                                    </figure>
                                    @if (count(json_decode($product->image_list)) > 0)
                                    @foreach (json_decode($product->image_list) as $key => $image)
                                    <figure class="swiper-slide">
                                        <a href="{{ asset($image) }}" data-size="1300x1080">
                                            <img class="img-fluid" src="{{ asset($image) }}" alt="{{ asset($image) }}">
                                        </a>
                                    </figure>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-4">
                    <img class="product-logo img-fluid mb-3" src="{{ asset($product->category->icon) }}" height="12">
                    <h1 class="product-title mb-3">{{ $product->name }}</h1>
                    {!! $product->short_desc !!}
                    <div class="mb-3">
                        <div class="product-price">{{ number_format($product->price_sale, 0, 0, '.') }} VND</div>
                        <div>
                            <del class="product-price-old">Giá retail: {{ number_format($product->price, 0, 0, '.') }} VND</del>
                        </div>
                    </div>
                    <a class="product-btn-addtocart btn btn-lg btn-block btn-secondary mb-3" href="#">tôi muốn mua sản phẩm này</a>
                    <p class="text-center fs-sm text-uppercase">Liên hệ đặt mua: <a href="tel:0945106656">0945 10 66 56</a> (Zalo, Viber)</p>
                    <hr class="divider">
                    <h6 class="text-secondary text-uppercase fs-sm">thông số kỹ thuật</h6>
                    <ul class="list list-mb-2 fs-sm mb-0">
                        <li class="list-item">
                            <strong>Between lugs:</strong> {{ ($product->between_lug) ? $product->between_lug.' mm' : '' }}
                        </li>
                        <li class="list-item">
                            <strong>Bracelet:</strong> {{ $product->bracelet }}
                        </li>
                        <li class="list-item">
                            <strong>Case:</strong> {{ $product->case }}
                        </li>
                        <li class="list-item">
                            <strong>Case diameter:</strong> {{ ($product->case_diameter) ? $product->case_diameter.' mm' : '' }}
                        </li>
                        <li class="list-item">
                            <strong>Dial colour:</strong> {{ $product->dial_color }}
                        </li>
                        <li class="list-item">
                            <strong>Crystal:</strong> {{ $product->crystal }}
                        </li>
                        <li class="list-item">
                            <strong>Water resistance:</strong> {{ $product->water_resistance }}
                        </li>
                    </ul>
                    <hr class="divider">
                </div>
            </div>
        </div>
        <div class="product-comment section bg-gray-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="product-comment-inner">
                            <h3 class="section-heading text-primary">hỏi đáp</h3>
                            <img class="img-fluid" src="{{ asset('frontend/images/ex/facebook-plugins.png') }}" alt="">
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
            <h2 class="section-heading text-center text-md-left">Sản phẩm TƯƠNG TỰ
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