@extends('layouts.user.master')

@section('page'){{ trans('general.search') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('search') }}/
@stop

@section('alternate'){{ route('search') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('search') }}/
@stop

@section('ogImage'){{ url('') }}{{ $setting->logo }}
@stop

@section('pageCss')

@stop

@section('home')
    <style>
        .navbar-container .nav-button, .navbar-container a {
            transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg) !important;
        }
    </style>
@stop

@section('content')
<div class="container w-container">
    <h3>Search results</h3>
    <form action="/search" class="search w-form"><input type="search" class="search-fill-field w-input" autofocus="true"
            maxlength="256" name="query" placeholder="Search…" id="search"><input type="submit" value="Search"
            class="cta-button w-button">
    </form>
</div>
@stop

@section('pageJs')

@stop