@extends('layouts.user.master')

@section('page')Cửa hàng chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại
@stop

@section('description')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('keywords')chậu rửa bát, cửa hàng chậu rửa bát tại Hà Nội, chậu rửa inox, chậu rửa đá nhân tạo, chậu rửa inox 201, chậu rửa inox 304
@stop

@section('canonical'){{ route('store') }}
@stop

@section('alternate'){{ route('store') }}
@stop

@section('propName')Cửa hàng chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại
@stop

@section('propDesc')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('ogTitle')Cửa hàng chậu rửa bát giá rẻ - Chậu rửa bát inox đẹp và hiện đại
@stop

@section('ogDesc')Được thành lập từ 2007, chúng tôi chuyên sản xuất chậu rửa bát đá nhân tạo cao cấp và phân phối chậu rửa bát inox 304, 201 giá rẻ nhưng chất lượng tại Hà Nội.
@stop

@section('ogUrl'){{ route('store') }}
@stop

@section('pageCss')
    <style type="text/css">
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
        article h3 {
            margin: 0px !important;
        }
    </style>
@stop

@section('content')
<!-- Linking -->
<div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Trang chủ</a></li>
        <li class="active">Cửa hàng</li>
    </ol>
</div>
</div>
<form role="form" id="storeForm" action="" method="get">
<!-- Products -->
<section class="padding-top-40 padding-bottom-60">
  <div class="container">
    <div class="row"> 

      <!-- Shop Side Bar -->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="shop-side-bar"> 

        <!-- Categories -->
        @if (count($conditions) > 0)
        <div>
            <h6 style="display:inline">Bộ lọc</h6>
            <div style="float:right;font-size:11px;">
                <i class="fa fa-refresh"></i>  
                <a style="margin-left:5px;" href="{{ route('store') }}"> Đặt lại</a>
            </div>
        </div>
        <div class="checkbox checkbox-primary">
            <ul>
                @foreach ($conditions as $key => $con)
                <li>
                    <input id="cate{{ $key+1 }}" class="styled filtered" type="checkbox" checked>
                    <label for="cate{{ $key+1 }}">{{ $con }}</label>
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Categories -->
        <h6>Danh mục</h6>
        <div class="checkbox checkbox-primary">
            <ul>
                @foreach ($categories as $key => $cate)
                <li>
                    <input value="{{ $cate->id }}" name="br[]" id="cate{{ $key+1 }}" class="styled filter-input" type="checkbox">
                    <label for="cate{{ $key+1 }}">{{ $cate->name }}</label>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Categories -->
        <h6>Giá sản phẩm</h6>
        <!-- PRICE -->
        <div class="checkbox checkbox-primary">
            <ul>
                <li>
                    <input value="0-1000000" name="pr[]" id="price1" class="styled filter-input filter-price" type="checkbox" >
                    <label for="price1"> 0 đ - 1.000.000 đ </label>
                </li>
                <li>
                    <input value="1000000-3000000" name="pr[]" id="price2" class="styled filter-input filter-price" type="checkbox" >
                    <label for="price2"> 1.000.000 đ - 3.000.000 đ </label>
                </li>
                <li>
                    <input value="3000000-5000000" name="pr[]" id="price3" class="styled filter-input filter-price" type="checkbox" >
                    <label for="price3"> 3.000.000 đ - 5.000.000 đ </label>
                </li>
                <li>
                    <input value="5000000-10000000" name="pr[]" id="price4" class="styled filter-input filter-price" type="checkbox" >
                    <label for="price4"> 5.000.000 đ+ </label>
                </li>
            </ul>
        </div>
    </div>
</div>

    <!-- Products -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 

        <!-- Short List -->
        <div class="short-lst">
            <h2 class="text-uppercase" style="display:inline;">Cửa hàng</h2>
            <ul style="float:right;margin-top:5px;">
                <!-- Short  -->
                <li>
                    <select id="num" name="num" class="selectpicker filter-input filter-num">
                        <option value="12" selected>Hiển thị 12</option>
                        <option value="24">Hiển thị 24</option>
                        <option value="48">Hiển thị 48</option>
                    </select>
                </li>
                <!-- by Default -->
                <li>
                    <select id="order" name="order" class="selectpicker filter-input filter-order">
                        <option value="created_at-desc" selected>Mới nhất</option>
                        <option value="price-asc">Giá thấp đến cao</option>
                        <option value="price-desc">Giá cao đến thấp</option>
                    </select>
                </li>

            </ul>
        </div>

        <!-- Items -->
        @if (count($results) > 0)
            <div class="item-col-3" style="display:inline-block;"> 
                <!-- Product -->
                @foreach ($results as $result)
                <div class="product">
                    <article> 
                        <a class="thumb" href="{{ route('product-detail', ['slug' => $result->slug]) }}">
                            <img class="img-responsive" src="{{ asset($result->image) }}" alt="{{ asset($result->image) }}">
                        </a> 
                        <!-- <span class="sale-tag">-25%</span>  -->
                        <!-- Content --> 
                        <!-- <span class="tag">Tablets</span> --> 
                        <h3><a href="{{ route('product-detail', ['slug' => $result->slug]) }}" class="tittle">{{ $result->name }}</a></h3>
                        <!-- Reviews -->
                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                        <div class="price">{{ number_format($result->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($result->price, 0, 0, '.') }} VNĐ</span></div>
                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
                    </article>
                </div>
                @endforeach
            </div>
        @else
            <p style="padding-left:15px;">Không có sản phẩm nào !</p>
        @endif
        <!-- pagination -->
        {{ $results->appends(request()->query())->links() }}
    </div>
</div>
</div>
</section>
</form>
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function () {
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
        });
        $(document).on('change', '.filter-input', function() {
            $('#storeForm').submit();
        });
        var query = get_query(window.location.href);
        if (query.order !== undefined) {
            $('#order').val(query.order);
        }
        if (query.num !== undefined) {
            $('#num').val(query.num);
        }
    </script>
@stop