@extends('layouts.user.master')

@section('page')Thông tin giao hàng / thanh toán
@stop

@section('description')Thông tin giao hàng / thanh toán
@stop

@section('keywords')Thông tin giao hàng, thanh toán
@stop

@section('canonical'){{ route('step2') }}
@stop

@section('alternate'){{ route('step2') }}
@stop

@section('propName')Thông tin giao hàng / thanh toán
@stop

@section('propDesc')Thông tin giao hàng, thanh toán
@stop

@section('ogTitle')Thông tin giao hàng / thanh toán
@stop

@section('ogDesc')Thông tin giao hàng, thanh toán
@stop

@section('ogUrl'){{ route('step2') }}
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
<style>
    
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
                        <li><a class="active">Thông tin giao hàng / thanh toán</a></li>
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
                            <h2>Thông tin giao hàng / thanh toán</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix" style="margin-top:20px;">

                        <form role="form" action="{{ route('postStep2') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="1">
                            <!-- Payout Method -->
                            <div class="pay-method">
                                <div class="row">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $key)
                                        @if (Session::has($key))
                                        <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                                        @endif
                                    @endforeach
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="list-style:none">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="col-md-6">

                                        <!-- Your information -->
                                        <div class="heading">
                                            <h2>Thông tin giao hàng</h2>
                                            <hr>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <label> Họ tên khách hàng
                                                    <input name="customer_name" class="form-control" type="text" placeholder="Họ tên đầy đủ...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Email
                                                    <input name="customer_email" class="form-control" type="email" placeholder="Địa chỉ email...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Địa chỉ giao hàng
                                                    <input name="customer_address" class="form-control" type="text" placeholder="Địa chỉ giao hàng chính xác...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Số điện thoại
                                                    <input name="customer_phone" class="form-control" type="text" placeholder="Số điện thoại...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Ghi chú thêm
                                                    <textarea name="note" class="form-control" placeholder="Ghi chú về đơn hàng..."></textarea>
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Select Your Transportation -->
                                    <div class="col-md-6">
                                        <div class="heading">
                                            <h2>Thông tin thanh toán</h2>
                                            <hr>
                                        </div>
                                        <div class="transportation">
                                            <div class="row">
                                                <p style="font-size:15px;padding-left:15px;">Phương thức vận chuyển</p>
                                                <!-- Free Delivery -->
                                                <select id="delivery" class="hide" name="delivery_method">
                                                    <option value="Vận chuyển miễn phí">Vận chuyển miễn phí</option>
                                                    <option value="Vận chuyển nhanh">Vận chuyển nhanh</option>
                                                </select>
                                                <div class="col-sm-6">
                                                    <div class="deli-method charges select">
                                                        <h6>Vận chuyển miễn phí</h6>
                                                        <br>
                                                        <span>7 - 12 ngày</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="deli-method charges">
                                                        <h6>Vận chuyển nhanh</h6>
                                                        <br>
                                                        <span>4 - 7 ngày</span>
                                                        <span class="deli-charges"> +25k </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p style="font-size:15px;padding-left:15px;">Hình thức thanh toán</p>
                                                <select id="payment" class="hide" name="payment_method">
                                                    <option selected value="Thanh toán tiền mặt khi nhận hàng">Thanh toán tiền mặt khi nhận hàng</option>
                                                </select>
                                                <div class="col-sm-6">
                                                    <div class="charges select">
                                                        <h6>Thanh toán tiền mặt khi nhận hàng</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="pro-btn">
                                    <a href="{{ route('cart') }}" class="btn-round btn-light">Trở lại</a>
                                    <button style="border:none" type="submit" class="btn-round">Tiến hành đặt hàng</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop