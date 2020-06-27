@extends('layouts.user.master')

@section('page'){{ trans('general.newsletter') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('newsletter') }}/
@stop

@section('alternate'){{ route('newsletter') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('newsletter') }}/
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
<section class="section-container">
    <div class="content-heading align-left no-padding">
        <h2 class="content-heading-home">{{ trans('general.newsletter') }}</h2>
        <div class="content-sapo">{{ $catNew->getTranslation(app()->getLocale())->description }}</div>
    </div>
    @if (count($newsletters) > 0)
    <div class="content-wrap margin">
        <div class="w-layout-grid grid _2-col">
            <div class="_1st-column-journal pack-1---2 full">
                <div class="_1-column-2-on-mobile _1-col-all">
                    @foreach ($newsletters as $new)
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="{{ route('detail-post', ['slug' => $new->slug]) }}" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3">
                                <img src="{{ $new->image }}" width="960" alt="" class="bg-image">
                                    <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>{{ $new->category->getTranslation(app()->getLocale())->name }}</div>
                                        <div class="caption-dot">·</div>
                                        <div>{{ $new->created_at }}</div>
                                    </div>
                                    <h4 class="heading small-post">{{ $new->getTranslation(app()->getLocale())->title }}</h4>
                                    <div class="post-summary quick-story full">
                                        <div>{!! $new->getTranslation(app()->getLocale())->intro !!}<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="_w-pagination-wrapper">
                    <a href="{{ $newsletters->previousPageUrl() }}" class="button-style small w-inline-block">
                        <div class="button-style-w-icon"><img src="{{ asset('frontend/images/chevron-left.svg') }}" width="120" alt=""
                                class="b-archive-link__arrow cc-arrow-left">
                            <div class="button-label">{{ trans('general.previous') }}</div>
                        </div>
                        <div class="hover-shape"></div>
                    </a>
                    <div class="_w-page-count">{{ $newsletters->currentPage() }}/{{ $newsletters->lastPage() }}</div>
                    <a href="{{ $newsletters->nextPageUrl() }}" class="button-style small w-inline-block">
                        <div class="button-style-w-icon">
                            <div class="button-label">{{ trans('general.next') }}</div><img src="{{ asset('frontend/images/chevron-right.svg') }}" width="22"
                                alt="" class="b-archive-link__arrow cc-arrow-right">
                        </div>
                        <div class="hover-shape"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
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