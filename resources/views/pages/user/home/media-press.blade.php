@extends('layouts.user.master')

@section('page'){{ trans('general.media_press') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('media-press') }}/
@stop

@section('alternate'){{ route('media-press') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('media-press') }}/
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
<div class="section">
    <div class="section-container full-width">
        <section class="content-heading align-left">
            <h2 class="content-heading-home-black-bg">{{ trans('general.media_press') }}</h2>
        </section>
        @if (count($medias) > 0)
        <div class="w-layout-grid grid-full-big">
            @foreach ($medias as $media)
            <div class="holder-journal-big-columns full-grid">
                <a href="{{ route('detail-post', ['slug' => $media->slug]) }}" class="image-filled-featured full-grid w-inline-block">
                    <img src="{{ $media->image }}" width="1280" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>{{ $media->category->getTranslation(app()->getLocale())->name }}</div>
                            <div class="caption-dot">·</div>
                            <div>{{ $media->created_at }}</div>
                        </div>
                        <h5 class="heading grid-full">{{ $media->getTranslation(app()->getLocale())->title }}</h5>
                    </div><img src="{{ asset('frontend/images/Image-Square-Ratio.svg') }}" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="section shortlink">
    <div class="section-container">
        <div class="content-heading">
            <h4 class="heading">{{ trans('general.see_more_visci') }}</h4>
            <div class="content-sapo">{{ trans('general.see_more_visci_desc') }}</div>
        </div>
        <div class="b-category-listing content-sapo-large">
            <a href="{{ route('about') }}" class="button-style large-categories w-inline-block">
                <div class="button-label">{{ trans('general.about') }}</div>
                <div class="hover-shape"></div>
            </a>
            <a href="{{ route('projects') }}" class="button-style large-categories w-inline-block">
                <div class="button-label">{{ trans('general.project') }}</div>
                <div class="hover-shape"></div>
            </a>
            <a href="{{ route('partners') }}" class="button-style large-categories w-inline-block">
                <div class="button-label">{{ trans('general.partner') }}</div>
                <div class="hover-shape"></div>
            </a>
            <a href="{{ route('media-press') }}" class="button-style large-categories w-inline-block">
                <div class="button-label">{{ trans('general.media_press') }}</div>
                <div class="hover-shape"></div>
            </a>
        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop