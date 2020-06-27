@extends('layouts.user.master')

@section('page'){{ trans('general.partner') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('partners') }}/
@stop

@section('alternate'){{ route('partners') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('partners') }}/
@stop

@section('ogImage'){{ asset('frontend/images/visci-vector-web-white.svg') }}
@stop

@section('pageCss')
    <style>
        .navbar-container .nav-button, .navbar-container a {
            transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg) !important;
        }
    </style>
@stop

@section('home')

@stop

@section('content')
<div class="section hero">
    <div class="container align-center">
        <h1 class="heading center">{{ trans('general.our_partner') }}</h1>
    </div>
    <div class="lead">{{ trans('general.partner_thank') }}</div>
    @if (count(json_decode($setting['partner_logos'])) > 0)
    <div class="partner-list">
        @foreach (json_decode($setting['partner_logos']) as $logo)
        <div class="brand-logo-block show-list">
            <a href="{{ $logo->link }}" target="_blank" class="w-inline-block"><img src="{{ $logo->image }}"
                    width="200" alt="{{ $logo->link }}" class="brand-img"></a>
        </div>
        @endforeach
    </div>
    @endif
</div>
@stop

@section('pageJs')

@stop