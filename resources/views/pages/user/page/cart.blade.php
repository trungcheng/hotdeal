@extends('layouts.user.master')

@section('page')Giỏ hàng
@stop

@section('description')Giỏ hàng
@stop

@section('keywords')Giỏ hàng
@stop

@section('canonical'){{ route('cart') }}
@stop

@section('alternate'){{ route('cart') }}
@stop

@section('propName')Giỏ hàng
@stop

@section('propDesc')Giỏ hàng
@stop

@section('ogTitle')Giỏ hàng
@stop

@section('ogDesc')Giỏ hàng
@stop

@section('ogUrl'){{ route('cart') }}
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
<style>
    .padding-top-60 {
        padding-top: 60px !important;
    }

    .padding-top-20 {
        padding-top: 20px !important;
    }

    .shopping-cart .table>thead>tr>th {
        border: none;
        border: 1px solid #e8e8e8 !important;
        background: #fafafa;
        padding: 10px 30px;
        font-size: 16px;
    }

    .shopping-cart .media {
        max-width: 400px;
        display: inline-block;
    }

    .shopping-cart .table>tbody>tr>td {
        border: 1px solid #e8e8e8;
        padding: 30px;
    }

    .shopping-cart .quinty {
        display: inline-block;
        width: 100px;
    }

    .shopping-cart .quinty input {
        border-radius: 4px;
        height: 40px;
        width: 100%;
        font-size: 15px;
        text-align: center;
        border: 1px solid #e0e0e0;
    }

    .media-body,
    .media-left,
    .media-right {
        display: table-cell;
        vertical-align: top;
    }

    .shopping-cart .media-left a {
        display: inline-block;
        width: 84px;
        height: 62px;
        padding: 4px;
        margin-right: 10px;
        border: 1px solid #eeeeee;
    }

    .shopping-cart p {
        margin-top: 15px;
        max-width: 500px;
        color: #555555;
    }

    .shopping-cart .promo {
        border: 1px solid #e8e8e8;
        border-top: none;
        padding: 10px;
        position: relative;
    }

    .shopping-cart .g-totel {
        float: right;
        margin-top: 15px;
    }

    .shopping-cart .g-totel h5 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 2px !important;
    }

    .shopping-cart .g-totel h5 span {
        font-size: 16px;
        margin-left: 20px;
    }

    .pro-btn {
        text-align: center;
        margin-top: 30px;
    }

    .pro-btn .btn-light {
        background: #bbbbbb;
        margin-bottom: 15px;
    }

    .pro-btn a {
        margin: 0 10px;
    }

    .pro-btn a:hover {
        text-decoration: none;
        color: #fff;
    }

    .btn-round {
        font-size: 14px;
        font-weight: bold;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 50px;
        background: #0088cc;
        color: #fff;
    }
</style>
@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container-site">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">

            <div class="body-right col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>Giỏ hàng</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix shopping-cart" style="margin-top:20px;">

                        <div class="table-responsive" style="margin-bottom:-18px">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th class="text-center">Giá</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-center">Tổng giá</th>
                                        <th>&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item Cart -->
                                    @foreach($cart as $item)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media-left"> <a href="{{ route('product-detail', ['slug' => $item->options->slug]) }}"> <img class="img-responsive" src="{{ asset($item->options->image) }}" alt=""> </a> </div>
                                                <div class="media-body">
                                                    <p>{{ $item->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center padding-top-60">{{ number_format($item->price, 0, 0, '.') }} VNĐ</td>
                                        <td class="text-center">
                                            <!-- Quinty -->
                                            <div class="quinty padding-top-20">
                                                <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="decrease" value="1">
                                                    <button style="width:20px;" type="submit">
                                                        <i style="position:relative;left:-3px" class="fa fa-minus"></i>
                                                    </button>
                                                </form>
                                                <input style="width:40%;margin:0 5px;" type="text" value="{{ $item->qty }}" autocomplete="off" size="2">
                                                <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="increment" value="1">
                                                    <button style="width:20px;" type="submit">
                                                        <i style="position:relative;left:-3px" class="fa fa-plus"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="text-center padding-top-60">{{ number_format($item->subtotal, 0, 0, '.') }} VNĐ</td>
                                        <form method="POST" action="{{ route('cartDelete') }}">
                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <td class="text-center padding-top-60">
                                                <button style="width:40px;" type="submit">Xóa</button>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Promotion -->
                        <div class="promo" style="height:70px;">
                            <!-- Grand total -->
                            @if (count($cart) > 0)
                            <div class="g-totel">
                                <h5>Tổng hóa đơn: <span style="color:#f00">{{ $total }} VNĐ</span></h5>
                                <span style="float:right">(Đã bao gồm VAT)</span>
                            </div>
                            @else
                            <h6 style="font-size:15px;" class="text-center">Chưa có sản phẩm nào trong giỏ hàng</h6>
                            @endif
                        </div>

                        <!-- Button -->
                        <div class="pro-btn">
                            <a href="{{ route('home') }}" class="btn-round btn-light">Tiếp tục mua sắm</a>
                            @if (count($cart) > 0)
                            <a href="{{ route('step2') }}" class="btn-round">Tiến hành đặt hàng</a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop