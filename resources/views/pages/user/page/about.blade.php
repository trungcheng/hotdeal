@extends('layouts.user.master')

@section('page'){{ $title }}
@stop

@section('description'){{ $title }}
@stop

@section('keywords'){{ $title }}
@stop

@section('canonical'){{ route($route) }}/
@stop

@section('alternate'){{ route($route) }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route($route) }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    <style>
        .register {
            margin-top: 20px;
        }
        .register .btn-round {
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: #0088cc;
            color: #fff;
        }
        .register .btn-round:hover {
            text-decoration: none;
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
                        <li><a class="active">{{ $title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="body-right col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>{{ $title }}</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix" style="text-align:justify">
                        @if ($route == 'about')
                            {!! $article->introduce !!}
                        @elseif ($route == 'certificate')
                            {!! $article->certificate !!}
                        @elseif ($route == 'health-advice')
                            {!! $article->health_advice !!}
                        @elseif ($route == 'policy')
                            {!! $article->policy !!}
                        @endif
                        <div class="register">
                            @if ($route == 'health-advice')
                                <a href="https://forms.gle/kDgts2mo4xdX6JgE6" target="_blank" class="btn-round">Đăng ký nhận tư vấn tại đây</a>
                            @elseif ($route == 'policy')
                                <a href="https://forms.gle/QtfB1zJGuM6U1vX2A" target="_blank" class="btn-round">Đăng ký nhận chính sách giá tại đây</a>
                            @endif
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