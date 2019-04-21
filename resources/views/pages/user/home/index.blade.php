@extends('layouts.user.master')

@section('page')Mua chậu rửa bát chất lượng, uy tín tại Thạch Vũ
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
    </div>
</section>
<!-- Shipping Info -->

<!-- tab Section -->
<section class="featur-tabs padding-bottom-30">
    <div class="container"> 

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">NỔI BẬT</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">KHUYẾN MÃI</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Featured -->
            <div role="tabpanel" class="tab-pane active fade in" id="tab1"> 
                <!-- Items Slider -->
                <div class="with-nav" id="owl1"> 
                    <!-- Product -->
                    @foreach ($featureProducts as $pro)
                    <div class="product">
                        <article>
                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                            </a>
                            <!-- Content --> 
                            <!-- <span class="tag">Latop</span> --> 
                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
                            <!-- Reviews -->
                            <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                            <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ</div>
                            <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> --> 
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- On sale -->
            <div role="tabpanel" class="tab-pane fade" id="tab2"> 
                <!-- Items Slider -->
                <div class="with-nav" id="owl2"> 
                    <!-- Product -->
                    @foreach ($saleProducts as $pro)
                    <div class="product">
                        <article>
                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                            </a>
                            <span class="sale-tag">-{{ $pro->discount }}%</span>
                            <!-- Content --> 
                            <!-- <span class="tag">Latop</span> --> 
                            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
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

<section class="light-gry-bg padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2>CHẬU RỬA BÁT ĐÁ NHÂN TẠO</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            @foreach ($chauda as $list)
            <div class="item-col-4"> 
                @foreach ($list as $pro)
                <div class="product">
                    <article> 
                        <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                            <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}">
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a>
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

<section class="padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2 class="text-uppercase">Chậu rửa bát inox 201</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            <div class="item-col-4"> 
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="" >
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="" class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="" > 
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-3.jpg') }}" alt="" > 
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-4.jpg') }}" alt="" >
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-5.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-6.jpg') }}" alt="" >
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-7.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-8.jpg') }}" alt="" >
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
            </div>
            
            <div class="item-col-4"> 
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="" class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="">
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-3.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-4.jpg') }}" alt="">
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-5.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-6.jpg') }}" alt="">
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-7.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-8.jpg') }}" alt="">
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="light-gry-bg padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2 class="text-uppercase">Kệ tủ bếp</h2>
            <hr>
        </div>
        <div class="singl-slide with-nav">
            <div class="item-col-4"> 
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="" >
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="" class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="" > 
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-3.jpg') }}" alt="" > 
                        </a>
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-4.jpg') }}" alt="" >
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-5.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-6.jpg') }}" alt="" >
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-7.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-8.jpg') }}" alt="" >
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
            </div>
            
            <div class="item-col-4"> 
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Latop</span> --> 
                        <a href="" class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article> 
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="">
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-3.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-4.jpg') }}" alt="">
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-5.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-6.jpg') }}" alt="">
                        </a>
                        <span class="sale-tag">-25%</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <a href="" class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ<span>200.000 VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-7.jpg') }}" alt="">
                        </a> 
                        <!-- Content --> 
                        <!-- <span class="tag">Appliances</span> --> 
                        <a href="" class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
                    </article>
                </div>
                <div class="product">
                    <article>
                        <a href="">
                            <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-8.jpg') }}" alt="">
                        </a>
                        <span class="new-tag">New</span> 
                        <!-- Content --> 
                        <!-- <span class="tag">Accessories</span> --> 
                        <a href="" class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">350.000 VNĐ</div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Selling Week -->
<section class="padding-top-30 padding-bottom-30">
    <div class="container"> 
        <!-- heading -->
        <div class="heading">
            <h2>TIN TỨC NỔI BẬT</h2>
            <hr>
        </div>
        <div id="blog-slide" class="with-nav"> 
            <!-- Blog Post -->
            <div class="blog-post">
                <article>
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-1.jpg') }}" alt="">
                    </a>
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a> 
                </article>
            </div>
            <!-- Blog Post -->
            <div class="blog-post">
                <article> 
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt="">
                    </a>
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">Get the power to take your business to the next level. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a>
                </article>
            </div>
            <!-- Blog Post -->
            <div class="blog-post">
                <article>
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-3.jpg') }}" alt="">
                    </a> 
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a> 
                </article>
            </div>
            <!-- Blog Post -->
            <div class="blog-post">
                <article> 
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-4.jpg') }}" alt="">
                    </a>
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a> 
                </article>
            </div>
            <!-- Blog Post -->
            <div class="blog-post">
                <article> 
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-5.jpg') }}" alt="">
                    </a> 
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a> 
                </article>
            </div>
            <!-- Blog Post -->
            <div class="blog-post">
                <article> 
                    <a href="{{ route('article-detail') }}">
                        <img class="img-responsive" src="{{ asset('frontend/images/blog-img-6.jpg') }}" alt="">
                    </a>
                    <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> 
                    <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
                    <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
                    <a href="{{ route('article-detail') }}">Readmore</a> 
                </article>
            </div>
        </div>
    </div>
</section>
@stop

@section('pageJs')
<script type="text/javascript">
    $(function () {
        initialize_owl($('#owl1'));
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
    });
</script>
@stop