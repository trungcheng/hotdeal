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

@section('propName'){{ $title }}
@stop

@section('propDesc'){{ $title }}
@stop

@section('ogTitle'){{ $title }}
@stop

@section('ogDesc'){{ $title }}
@stop

@section('ogUrl'){{ route($route) }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
	
@stop

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{ $title }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title category-title">
                        <h1 class="title-head"><a href="#">{{ $title }}</a></h1>
                    </div>
                    <div class="content-page rte">
                        @if ($route == 'about')
                            {!! $article->about !!}
                        @elseif ($route == 'payment-method')
                            {!! $article->payment_method !!}
                        @elseif ($route == 'delivery-method')
                            {!! $article->delivery_method !!}
                        @elseif ($route == 'policy')
                            {!! $article->policy !!}
                        @elseif ($route == 'recruitment')
                            {!! $article->recruitment !!}
                        @elseif ($route == 'saleoff')
                            {!! $article->saleoff !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')

@stop