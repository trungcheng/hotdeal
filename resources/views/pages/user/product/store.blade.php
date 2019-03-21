@extends('layouts.user.master')

@section('page')Đồng hồ nam nữ chính hãng, thương hiệu, chất lượng và uy tín tại Autwatch
@stop

@section('pageCss')

@stop

@section('content')
    <hr class="divider my-0">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-aside col-lg-3 mb-4 mb-lg-0">
                <aside class="product-filter">
                    <div class="text-center d-lg-none">
                        <button class="btn btn-outline-gray-200 rounded-0 text-body text-uppercase fs-sm" data-toggle="collapse" data-target="#product-filter-collapse">bộ lọc</button>
                    </div>
                    <div class="product-filter-collapse collapse" id="product-filter-collapse">
                        <div class="accordions" id="toggle-default">
                            <div class="card bg-gray-200">
                                <div class="card-header cursor-auto">
                                    <h6 class="card-title text-secondary">bộ lọc</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list list-mb-0 mb-0">
                                        <li class="list-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="cbo-filter-1" type="checkbox" checked>
                                                <label class="custom-control-label" for="cbo-filter-1">80.000.000 đ - 200.000.000 đ</label>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="cbo-filter-2" type="checkbox" checked>
                                                <label class="custom-control-label" for="cbo-filter-2">Dây titanium</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-thuonghieu" aria-expanded="true">
                                    <h6 class="card-title">Thương hiệu</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-thuonghieu">
                                    <div class="card-body">
                                        <input class="form-control form-control-sm mb-3" type="text" placeholder="Tìm thương hiệu">
                                        <div class="mcs">
                                            <ul class="list list-mb-0 mb-0">
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-1" type="checkbox" checked>
                                                        <label class="custom-control-label" for="cbo-thuonghieu-1">Federique Constant</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-2" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-2">Claude Berrnard</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-3" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-3">Tissot</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-4" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-4">Omega</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-5" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-5">Movado</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-6" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-6">Longines</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-7" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-7">Grand Seiko</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-8" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-8">Seiko</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-9" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-9">Federique Constant</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-10" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-10">Claude Berrnard</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-11" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-11">Tissot</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-12" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-12">Omega</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-13" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-13">Movado</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-14" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-14">Longines</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-15" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-15">Grand Seiko</label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="cbo-thuonghieu-16" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-16">Seiko</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-gia" aria-expanded="true">
                                    <h6 class="card-title">lọc theo giá</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-gia">
                                    <div class="card-body">
                                        <ul class="list list-mb-0 mb-0">
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-gia-1" type="checkbox" checked>
                                                    <label class="custom-control-label" for="cbo-gia-1">0 đ - 10.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-gia-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-2">10.000.000 đ - 30.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-gia-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-3">30.000.000 đ - 80.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-gia-4" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-4">80.000.000 đ - 200.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-gia-5" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-5">200.000.000 đ+</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-chatlieuday" aria-expanded="true">
                                    <h6 class="card-title">chất liệu dây</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-chatlieuday">
                                    <div class="card-body">
                                        <ul class="list list-mb-0 mb-0">
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieuday-1" type="checkbox" checked>
                                                    <label class="custom-control-label" for="cbo-chatlieuday-1">Dây kim loại</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieuday-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-2">Dây da</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieuday-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-3">Dây nhựa/cao su</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieuday-4" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-4">Dây titanium</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieuday-5" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-5">Dây vải</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-chatlieumatkinh" aria-expanded="true">
                                    <h6 class="card-title">Chất liệu mặt kính</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-chatlieumatkinh">
                                    <div class="card-body">
                                        <ul class="list list-mb-0 mb-0">
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieumatkinh-1" type="checkbox" checked>
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-1">Kính cứng</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieumatkinh-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-2">Kính Sapphire</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieumatkinh-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-3">Kính nhựa</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-chatlieumatkinh-4" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-4">Kính Hardlex (Seiko)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-bomaynangluong" aria-expanded="true">
                                    <h6 class="card-title">Bộ máy &amp; năng lượng</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-bomaynangluong">
                                    <div class="card-body">
                                        <ul class="list list-mb-0 mb-0">
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-bomaynangluong-1" type="checkbox" checked>
                                                    <label class="custom-control-label" for="cbo-bomaynangluong-1">Pin (Quartz)</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-bomaynangluong-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-bomaynangluong-2">Cơ (Automatic)</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-bomaynangluong-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-bomaynangluong-3">Năng lượng ánh sáng</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" data-toggle="collapse" data-target="#toggle-phienbandacbiet" aria-expanded="true">
                                    <h6 class="card-title">Phiên bản đặc biệt</h6>
                                    <i class="icont-plus ml-3"></i>
                                </div>
                                <div class="collapse show" id="toggle-phienbandacbiet">
                                    <div class="card-body">
                                        <ul class="list list-mb-0 mb-0">
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-phienbandacbiet-1" type="checkbox" checked>
                                                    <label class="custom-control-label" for="cbo-phienbandacbiet-1">Phiên bản A</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-phienbandacbiet-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-phienbandacbiet-2">Phiên bản B</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="cbo-phienbandacbiet-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-phienbandacbiet-3">Phiên bản C</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-main col-lg-9">
                <section class="section py-0">
                    <header class="section-header d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <h2 class="section-heading mb-3 mb-md-0">Sản phẩm nổi bật <span class="fw-3">(128+ mẫu)</span>
                        </h2>
                        <ul class="list-inline list-inline-borders fs-sm3 mb-md-0">
                            <li class="list-item">Xem: 15</li>
                            <li class="list-item">
                                <a class="text-secondary" href="#">Tất cả</a>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-outline-gray-200 rounded-0 text-body text-uppercase fs-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiển thị: Theo tên<i class="fa fa-angle-down text-muted ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right fs-sm">
                                <a class="dropdown-item" href="#">Bán chạy nhất</a>
                                <a class="dropdown-item" href="#">Giá bán từ thấp đến cao</a>
                                <a class="dropdown-item" href="#">Giá bán từ cao đến thấp</a>
                                <a class="dropdown-item" href="#">Theo tên</a>
                            </div>
                        </div>
                    </header>
                    <div class="row">
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
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
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                        <div class="col-md-6 col-xl-4 d-flex mb-4">
                            <div class="card card-product">
                                <a class="thumbnail mb-4" href="#">
                                    <img class="thumbnail-img" src="images/ex/product-1.jpg" alt="">
                                </a>
                                <div class="card-body">
                                    <a class="d-inline-block mb-1" href="#">
                                        <img class="card-logo img-fluid" src="images/ex/brands/omega.png" alt="">
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
                </section>
            </div>
        </div>
    </div>
@stop

@section('pageJs')
    
@stop