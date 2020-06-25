@extends('layouts.user.master')

@section('page'){{ trans('general.partners') }}
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

@section('ogImage'){{ url('') }}{{ $setting->logo }}
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
        <h1 class="heading center">Our Partners</h1>
    </div>
    <div class="lead">They are now our partners and we thank them for their support.</div>
    <div class="partner-list">
        <div class="brand-logo-block show-list">
            <a href="http://nasa.gov" target="_blank" class="w-inline-block"><img src="images/logo-nasa2x.png"
                    width="200" alt="" class="brand-img"></a>
        </div>
        <div class="brand-logo-block show-list">
            <a href="http://nawapi.gov.vn" target="_blank" class="w-inline-block"><img src="images/logo-nawapi2x.png"
                    width="200" alt="" class="brand-img"></a>
        </div>
        <div class="brand-logo-block show-list">
            <a href="http://adpc.net" target="_blank" class="w-inline-block"><img src="images/logo-adpc2x.png"
                    width="200" alt="" class="brand-img"></a>
        </div>
        <div class="brand-logo-block show-list">
            <a href="http://servir.adpc.net" target="_blank" class="w-inline-block"><img
                    src="images/logo-sevirmekong2x.png" width="200" alt="" class="brand-img"></a>
        </div>
        <div class="brand-logo-block show-list">
            <a href="http://washington.edu" target="_blank" class="w-inline-block"><img
                    src="images/logo-w-university2x.png" width="200" alt="" class="brand-img"></a>
        </div>
        <div class="brand-logo-block show-list">
            <a href="http://usaid.gov" target="_blank" class="w-inline-block"><img src="images/logo-usaid2x.png" alt=""
                    class="brand-img"></a>
        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop