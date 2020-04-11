@extends('layouts.user.master')

@section('page'){{ $cate == 'all' ? 'Tất cả sản phẩm' : $cate }}
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ route('store') }}/
@stop

@section('alternate'){{ route('store') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('store') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')

@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container-site">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">{{ $cate == 'all' ? 'Sản phẩm' : $cate }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">
            <form role="form" id="storeForm" action="" method="get">
                <div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
                    <div class="box-news-sub">
                        <div class="cate-header sub-top">
                            <div class="txt-name-sub">
                                <h2>{{ $cate == 'all' ? 'Tất cả sản phẩm' : $cate }}</h2>
                                <ul style="float:right;margin-top:5px;">
                                    <!-- Short  -->
                                    <li style="float:left">
                                        <select id="num" name="num" class="form-control filter-input filter-num">
                                            <option value="10" selected>Hiển thị 10</option>
                                            <option value="20">Hiển thị 20</option>
                                            <option value="50">Hiển thị 50</option>
                                            <option value="100">Hiển thị 100</option>
                                        </select>
                                    </li>
                                    <!-- by Default -->
                                    <li style="float:right;margin-left:10px">
                                        <select id="order" name="order" class="form-control filter-input filter-order">
                                            <option value="created_at-desc" selected>Mới nhất</option>
                                            <option value="price-asc">Giá thấp đến cao</option>
                                            <option value="price-desc">Giá cao đến thấp</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body homepage clearfix store" style="margin-top:20px">
                            <!-- Items -->
                            @if (count($results) > 0)
                            <div class="item-col-3">
                                <!-- Product -->
                                @foreach ($results as $result)
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <a href="{{ route('product-detail', ['slug' => $result->slug]) }}">
                                                <img class="img-responsive" src="{{ asset($result->image) }}" alt="{{ asset($result->image) }}">
                                            </a>
                                        </div>
                                        <h3><a href="{{ route('product-detail', ['slug' => $result->slug]) }}" class="tittle">{{ $result->name }}</a></h3>
                                        <div class="price">
                                            {{ number_format($result->price_sale, 0, 0, '.') }} VNĐ
                                            @if ($result->discount > 0)
                                                <span>{{ number_format($result->price, 0, 0, '.') }} VNĐ</span>
                                            @endif
                                        </div>
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
            </form>

            @include('layouts.user.sidebar')

        </div>
    </div>
</div>
@stop

@section('pageJs')
    <script type="text/javascript">
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