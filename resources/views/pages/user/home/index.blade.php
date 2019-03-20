@extends('layouts.user.master')

@section('page')Mua đồng hồ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch
@stop

@section('pageCss')

@stop

@section('content')
<div class="page-main">
    <section class="banner section">
        <div class="swiper swiper-pagination-inside">
            <div class="swiper-container" data-plugin="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url({{ asset('frontend/images/ex/home/banner/slider-1.jpg') }})">
                        <div class="container d-flex justify-content-md-end justify-content-center">
                            <div class="align-self-center text-center text-md-right">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/seamaster.png') }}" alt="" width="188">
                                </a>
                                <h2 class="section-heading mb-4">DIVER 300M</h2>
                                <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="#">xem thông tin</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url({{ asset('frontend/images/ex/home/banner/slider-1.jpg') }})">
                        <div class="container d-flex justify-content-md-end justify-content-center">
                            <div class="align-self-center text-center text-md-right">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/seamaster.png') }}" alt="" width="188">
                                </a>
                                <h2 class="section-heading mb-4">DIVER 300M</h2>
                                <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="#">xem thông tin</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url({{ asset('frontend/images/ex/home/banner/slider-1.jpg') }})">
                        <div class="container d-flex justify-content-md-end justify-content-center">
                            <div class="align-self-center text-center text-md-right">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/seamaster.png') }}" alt="" width="188">
                                </a>
                                <h2 class="section-heading mb-4">DIVER 300M</h2>
                                <a class="btn btn-lg btn-block btn-outline-white rounded-0 btn-style-1" href="#">xem thông tin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="swiper swiper-fullwidth">
        <div class="container">
            <h2 class="section-heading text-center text-md-left">Top Sales</h2>
        </div>
        <div class="swiper-container" data-plugin="swiper" data-slidesperview="4" data-breakpoints-lg="3" data-breakpoints-md="2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-product">
                        <div class="card-body d-flex flex-wrap fs-sm pb-2">
                            <div class="card-deal deal mr-2 mb-2">
                                <span class="deal-label">deal</span>
                                <span class="deal-text">20%</span>
                            </div>
                            <div class="card-price-border mb-2">240.000.000 VND</div>
                        </div>
                        <a class="thumbnail" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title fs-base text-center mb-0">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                        </div>
                    </div>
                </div>
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
    <section class="section py-0">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-4 mb-md-0">Sản phẩm nổi bật</h2>
                <nav class="tabs tabs-simple fs-sm ml-md-auto">
                    <ul class="nav nav-tabs mb-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-toggle="tab">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tab">Đồng hồ nam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="tab">Đồng hồ nam</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <div class="card-option">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="product-radio-1" type="radio" name="radio-1" checked>
                                    <label class="custom-control-label" for="product-radio-1">42mm</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" id="product-radio-2" type="radio" name="radio-1">
                                    <label class="custom-control-label" for="product-radio-2">38mm</label>
                                </div>
                            </div>
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider my-5">
    <section class="section py-0">
        <div class="container">
            <header class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 class="section-heading mb-0">các thương hiệu nổi tiếng</h2>
            </header>
            <div class="brands row gutter-1 gutter-md-2 gutter-lg-3 mb-5">
                <div class="col">
                    <a class="brands-item" href="#">
                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/casio.png') }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="brands-item active" href="#">
                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/casio.png') }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="brands-item" href="#">
                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/casio.png') }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="brands-item" href="#">
                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/casio.png') }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="brands-item" href="#">
                        <img class="img-fluid" src="{{ asset('frontend/images/ex/brands/casio.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <img class="img-fluid w-100 align-self-baseline align-self-md-auto" src="{{ asset('frontend/images/ex/omega.jpg') }}" alt="">
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <img class="img-fluid w-100 align-self-baseline align-self-md-auto" src="{{ asset('frontend/images/ex/omega.jpg') }}" alt="">
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex mb-4">
                    <div class="card card-product">
                        <a class="thumbnail mb-4" href="#">
                            <img class="thumbnail-img" src="{{ asset('frontend/images/ex/product-1.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <a class="d-inline-block mb-1" href="#">
                                <img class="card-logo img-fluid" src="{{ asset('frontend/images/ex/brands/omega.png') }}" alt="">
                            </a>
                            <h3 class="card-title mb-2">
                                <a href="#">Speedmaster Triple Date Chronograph Yellow Gold 18k</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mb-2">
                                <span class="card-price mr-2">240.000.000 VND</span>
                                <del class="card-price card-price-old mr-2">360.000.000 VND</del>
                                <span class="card-sale">20%</span>
                            </div>
                            <div class="card-status text-primary">
                                <i class="fa fa-check mr-1"></i>Còn hàng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</div>
@stop

@section('pageJs')

@stop