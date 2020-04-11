@extends('layouts.user.master')

@section('page')Giới thiệu
@stop

@section('description')Giới thiệu
@stop

@section('keywords')Giới thiệu
@stop

@section('canonical'){{ route('about') }}/
@stop

@section('alternate'){{ route('about') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('about') }}/
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
                        <li><a class="active">Giới thiệu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">
            <div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>Giới thiệu</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix">
                        <p>Đang cập nhật...</p>
                        <div class="shares">
                            <div class="fb-comments" data-href="http://thuymoctra.com.vn/chi-tiet-bai-viet/270/gioi-thieu-cong-ty-tnhh-phat-trien-thuy-moc-tra.html" data-colorscheme="" data-width="770" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.user.sidebar')
        
        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop