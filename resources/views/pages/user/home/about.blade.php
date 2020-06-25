@extends('layouts.user.master')

@section('page'){{ $article->getTranslation(app()->getLocale())->title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ url('/') }}/{{ $article->slug }}.html/
@stop

@section('alternate'){{ url('/') }}/{{ $article->slug }}.html/
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ url('/') }}{{ $article->slug }}.html/
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
<div class="container w-container">
    <h3>{{ $article->getTranslation(app()->getLocale())->title }}</h3>
    {!! $article->getTranslation(app()->getLocale())->fulltext !!}
</div>
@stop

@section('pageJs')

@stop