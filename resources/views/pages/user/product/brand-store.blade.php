@extends('layouts.user.master')

@section('page')Đồng hồ nam, nữ chính hãng uy tín và chất lượng tại Donghoxachtay
@stop

@section('description')Donghoxachtay - Thương hiệu đồng hồ chính hãng uy tín và chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('keywords')đồng hồ chính hãng, thương hiệu đồng hồ, đồng hồ chất lượng, đồng hồ nam, đồng hồ nữ, đồng hồ đẳng cấp, đồng hồ thương hiệu, cửa hàng đồng hồ uy tín
@stop

@section('canonical'){{ route('product-store', ['sex' => 'c']) }}
@stop

@section('alternate'){{ route('product-store', ['sex' => 'c']) }}
@stop

@section('propName')Đồng hồ nam, nữ chính hãng uy tín và chất lượng tại Donghoxachtay.
@stop

@section('propDesc')Donghoxachtay - Thương hiệu đồng hồ chính hãng uy tín và chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogTitle')Đồng hồ nam, nữ chính hãng uy tín và chất lượng tại Donghoxachtay.
@stop

@section('ogDesc')Donghoxachtay - Thương hiệu đồng hồ chính hãng uy tín và chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogUrl'){{ route('product-store', ['sex' => 'c']) }}
@stop

@section('pageCss')

@stop

@section('content')
    <h1 class="hide">Đồng hồ nam, nữ chính hãng uy tín và chất lượng tại Donghoxachtay</h1>
    <hr class="divider my-0">
    <div class="container-fluid pt-4">
        <div class="row">
            
            <div class="col-aside col-lg-3 mb-4 mb-lg-0">
                <aside class="product-filter">
                    <div class="text-center d-lg-none">
                        <button id="filter" class="btn btn-outline-gray-200 rounded-0 text-body text-uppercase fs-sm" data-toggle="collapse" data-target="#product-filter-collapse">bộ lọc</button>
                    </div>
                    <div class="product-filter-collapse collapse" id="product-filter-collapse">
                        <div class="accordions" id="toggle-default">
                            @if (count($conditions) > 0)
                            <div class="card bg-gray-200">
                                <div class="card-header cursor-auto">
                                    <h6 class="card-title text-secondary">bộ lọc</h6>
                                    <a href="{{ route('product-store', ['sex' => $sex]) }}" style="font-size:12px;text-transform:lowercase;color:#3a6389!important">
                                        <i style="padding-right:2px;font-size:9px !important;" class="fa fa-undo"></i> <span style="text-transform:uppercase;">Đ</span>ặt lại
                                    </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list list-mb-0 mb-0">
                                        @foreach ($conditions as $key => $con)
                                        <li class="list-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filtered" id="cbo-filter-{{ $key+1 }}" type="checkbox" checked>
                                                <label class="custom-control-label" for="cbo-filter-{{ $key+1 }}">{{ $con }}</label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
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
                                                @foreach ($brands as $key => $brand)
                                                <li class="list-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input value="{{ $brand->id }}" name="br[]" class="custom-control-input filter-brand filter-input" id="cbo-thuonghieu-{{ $key+1 }}" type="checkbox">
                                                        <label class="custom-control-label" for="cbo-thuonghieu-{{ $key+1 }}">{{ $brand->name }}</label>
                                                    </div>
                                                </li>
                                                @endforeach
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
                                                    <input value="0-10000000" name="pr[]" class="custom-control-input filter-price filter-input" id="cbo-gia-1" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-1">0 đ - 10.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="10000000-30000000" name="pr[]" class="custom-control-input filter-price filter-input" id="cbo-gia-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-2">10.000.000 đ - 30.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="30000000-80000000" name="pr[]" class="custom-control-input filter-price filter-input" id="cbo-gia-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-3">30.000.000 đ - 80.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="80000000-200000000" name="pr[]" class="custom-control-input filter-price filter-input" id="cbo-gia-4" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-gia-4">80.000.000 đ - 200.000.000 đ</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="200000000-10000000000" name="pr[]" class="custom-control-input filter-price filter-input" id="cbo-gia-5" type="checkbox">
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
                                                    <input value="1" name="wm[]" class="custom-control-input filter-wire filter-input" id="cbo-chatlieuday-1" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-1">Dây kim loại</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="2" name="wm[]" class="custom-control-input filter-wire filter-input" id="cbo-chatlieuday-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-2">Dây da</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="3" name="wm[]" class="custom-control-input filter-wire filter-input" id="cbo-chatlieuday-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-3">Dây nhựa/cao su</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="4" name="wm[]" class="custom-control-input filter-wire filter-input" id="cbo-chatlieuday-4" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieuday-4">Dây titanium</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="5" name="wm[]" class="custom-control-input filter-wire filter-input" id="cbo-chatlieuday-5" type="checkbox">
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
                                                    <input value="1" name="gm[]" class="custom-control-input filter-glass filter-input" id="cbo-chatlieumatkinh-1" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-1">Kính cứng</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="2" name="gm[]" class="custom-control-input filter-glass filter-input" id="cbo-chatlieumatkinh-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-2">Kính Sapphire</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="3" name="gm[]" class="custom-control-input filter-glass filter-input" id="cbo-chatlieumatkinh-3" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-chatlieumatkinh-3">Kính nhựa</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="4" name="gm[]" class="custom-control-input filter-glass filter-input" id="cbo-chatlieumatkinh-4" type="checkbox">
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
                                                    <input value="1" name="et[]" class="custom-control-input filter-energy filter-input" id="cbo-bomaynangluong-1" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-bomaynangluong-1">Pin (Quartz)</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="2" name="et[]" class="custom-control-input filter-energy filter-input" id="cbo-bomaynangluong-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-bomaynangluong-2">Cơ (Automatic)</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="3" name="et[]" class="custom-control-input filter-energy filter-input" id="cbo-bomaynangluong-3" type="checkbox">
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
                                                    <input value="1" name="v[]" class="custom-control-input filter-version filter-input" id="cbo-phienbandacbiet-1" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-phienbandacbiet-1">Phiên bản A</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="2" name="v[]" class="custom-control-input filter-version filter-input" id="cbo-phienbandacbiet-2" type="checkbox">
                                                    <label class="custom-control-label" for="cbo-phienbandacbiet-2">Phiên bản B</label>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input value="3" name="v[]" class="custom-control-input filter-version filter-input" id="cbo-phienbandacbiet-3" type="checkbox">
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
                        <h2 style="max-width:60%;" class="section-heading mb-3 mb-md-0">Tất cả sản phẩm <span class="fw-3">({{ count($results) }} mẫu)</span>
                        </h2>
                        <ul class="list-inline list-inline-borders fs-sm3 mb-md-0">
                            <li class="list-item">Xem: {{ count($results) }}</li>
                            <li class="list-item">
                                <a class="text-secondary" href="javascript:void(0)">Tất cả</a>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-outline-gray-200 rounded-0 text-body text-uppercase fs-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hiển thị: <span id="filter-order-display">Theo tên</span><i class="fa fa-angle-down text-muted ml-2"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right fs-sm">
                                <a class="dropdown-item filter-order" href="javascript:void(0)">THEO TÊN</a>
                                <input value="name" name="order" class="custom-control-input filter-input filter-order-cbx hide" id="cbo-phienbandacbiet-3" type="checkbox" checked>
                                <a class="dropdown-item filter-order" href="javascript:void(0)">THEO GIÁ TĂNG DẦN</a>
                                <input value="price-asc" name="order" class="custom-control-input filter-input filter-order-cbx hide" id="cbo-phienbandacbiet-3" type="checkbox">
                                <a class="dropdown-item filter-order" href="javascript:void(0)">THEO GIÁ GIẢM DẦN</a>
                                <input value="price-desc" name="order" class="custom-control-input filter-input filter-order-cbx hide" id="cbo-phienbandacbiet-3" type="checkbox">
                                <!-- <a class="dropdown-item" href="javascript:void(0)">Bán chạy nhất</a> -->
                            </div>
                        </div>
                    </header>
                    <div class="row">
                        @if (count($results) > 0)
                            @foreach ($results as $result)
                            <div class="col-md-6 col-xl-4 d-flex mb-4">
                                <div class="card card-product">
                                    <a class="thumbnail mb-4" href="{{ route('product-detail', ['slug' => $result->slug]) }}">
                                        <img class="thumbnail-img" src="{{ asset($result->image) }}" alt="{{ $result->name }}">
                                    </a>
                                    <div class="card-body">
                                        <a class="d-inline-block mb-1" href="javascript:void(0)">
                                            <img class="card-logo img-fluid" src="{{ ($result->category) ? asset($result->category->icon) : '' }}" alt="{{ ($result->category) ? $result->category->name : '' }}">
                                        </a>
                                        <h3 class="card-title mb-2">
                                            <a href="{{ route('product-detail', ['slug' => $result->slug]) }}">{{ $result->name }}</a>
                                        </h3>
                                        <div class="d-flex flex-wrap align-items-center mb-2">
                                            <span class="card-price mr-2">{{ number_format($result->price_sale, 0, 0, '.') }} VND</span>
                                            <del class="card-price card-price-old mr-2">{{ number_format($result->price, 0, 0, '.') }} VND</del>
                                            <span class="card-sale">{{ $result->discount }}%</span>
                                        </div>
                                        <div class="card-status text-primary">
                                            <i class="fa fa-check mr-1"></i>{{ ($result->status == 1) ? 'Còn hàng' : 'Hết hàng' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p style="padding-left:15px;">Không có sản phẩm nào !</p>
                        @endif
                    </div>
                </section>
            </div>

        </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function() {
            var filtered = $('.filtered').length;
            if (filtered > 0) {
                $('.filtered').each(function (v, k) {
                    var filteredCheckBox = $(k).next().text();
                    $('.filter-input').each(function (a, b) {
                        if ($(b).hasClass('filter-price')) {
                            if ($(b).val() == filteredCheckBox) {
                                $(b).prop('checked', true);
                            }
                        } else {
                            if ($(b).next().text() == filteredCheckBox) {
                                $(b).prop('checked', true);
                            }
                        }
                    });
                });
            }
            var sex = '{{ $sex }}';
            if (sex == 's') {
                var searchText = '{{ $searchText }}';
                $('.search-input').val(searchText);
            }
        });
        $(document).on('change', '.filter-input', function() {
            $('form').submit();
        });
        $(document).on('click', '#filter', function(e) {
            return false;
        });
        $(document).on('click', '.filter-order', function () {
            $('#filter-order-display').text($(this).text());
            $('.filter-order-cbx').prop('checked', false);
            $(this).next().prop('checked', true);
            $('form').submit(); 
        });
        var query = get_query(window.location.href);
        if (query.order !== undefined) {
            $('.filter-order-cbx').each(function (v, k) {
                if ($(k).val() == query.order) {
                    $('#filter-order-display').text($(k).prev().text());
                }
            });
        }
    </script>
@stop