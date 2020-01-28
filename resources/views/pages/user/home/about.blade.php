@extends('layouts.user.master')

@section('page')Giới thiệu
@stop

@section('description')
@stop

@section('keywords')Giới thiệu, Ant Kitchen, ant-kitchen.mysapo.net
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
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li><strong itemprop="title">Giới thiệu</strong></li>

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
                        <h1 class="title-head"><a href="#">Giới thiệu</a></h1>
                    </div>
                    <div class="content-page rte">

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')

@stop