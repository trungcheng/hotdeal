@extends('layouts.user.master')

@section('page')404 Not Found
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ URL::current() }}
@stop

@section('alternate'){{ URL::current() }}
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    <style>
        .order-success {
            max-width: 570px;
            margin: 50px auto;
            text-align: center;
        }
        .order-success.error-page h3 {
            font-size: 36px;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .order-success.error-page h3 span {
            color: #0088cc;
        }
        .order-success p {
            color: #323131;
            font-size: 14px;
            letter-spacing: 0px;
            line-height: 20px;
            font-weight: 500;
            text-rendering: optimizeLegibility;
        }
        .order-success.error-page a {
            color: #0088cc;
        }
    </style>
@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">404 Not Found</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="order-success error-page"> 
            <img src="{{ asset('frontend/images/error-img.jpg') }}" alt="">
            <h3>Lỗi <span>404</span> Không tìm thấy trang</h3>
            <p>Không tìm thấy trang bạn đang truy cập.<br>
            Quay lại <a href="/">trang chủ</a></p>
        </div>
    </div>
</div>
@stop

@section('pageJs')
    
@stop