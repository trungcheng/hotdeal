@extends('layouts.user.master')

@section('page')Đặt hàng thành công
@stop

@section('pageCss')
  <style>
    .order-success {
        max-width: 600px;
        margin: 50px auto;
        text-align: center;
    }
    .order-success i {
        border: 2px solid #008854;
        color: #008854;
        height: 97px;
        width: 97px;
        border-radius: 50%;
        font-size: 30px;
        line-height: 93px;
    }
    .order-success h6 {
        font-weight: 600;
        margin-top: 40px;
        margin-bottom: 20px;
        font-size: 18px;
    }
    .order-success p {
        color: #323131;
        font-size: 14px;
        letter-spacing: 0px;
        line-height: 20px;
        font-weight: 500;
        text-rendering: optimizeLegibility;
    }
    .order-success .btn-round {
        margin-top: 50px;
        font-size: 14px;
        font-weight: bold;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 50px;
        background: #0088cc;
        color: #fff;
        text-decoration: none;
    }
    .order-success .btn-round:hover {
      text-decoration: none;
    }
  </style>
@stop

@section('content')
<!-- Oder-success -->
<div class="full-width" style="margin-bottom:50px">

  <div class="box-breadcumb">
    <div class="container">
        <div class="row">
            <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcum">
                    <li><a href="/">Trang chủ</a><span>»</span></li>
                    <li><a class="active">Đặt hàng thành công</a></li>
                </ul>
            </div>
        </div>
    </div>
  </div>

  <div class="container">
    <!-- Payout Method -->
    <div class="order-success"> <i class="fa fa-check"></i>
      <h6>Đặt hàng thành công! Đơn hàng {{ $order_id }} của quý khách đã được xử lý</h6>
      <p>Chúng tôi đã gửi thông báo đơn hàng về email của quý khách, cảm ơn quý khách đã mua hàng tại <b>Thủy Mộc Trà!</b></p>
      <p style="margin-top:10px">Nếu có bất kỳ thắc mắc gì, hãy gọi cho chúng tôi theo hotline <b>{!! $setting->phone !!}</b></p>
      <a href="{{ route('home') }}" class="btn-round">Quay lại cửa hàng</a>
    </div>
  </div>
</div>
@stop

@section('pageJs')

@stop