@extends('layouts.user.master')

@section('page'){{ trans('general.project') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('projects') }}/
@stop

@section('alternate'){{ route('projects') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('projects') }}/
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
<section class="section">
    <div class="content-wrap project-featured-space">
        <section class="content-heading black-bg">
            <h2 class="heading">Recently Projects</h2>
        </section>
        @if (count($recentlyProjects) > 0)
        <div class="w-layout-grid _2-columns">
            @foreach ($recentlyProjects as $recent)
            <div class="holderjournal-small-columns full-sapo">
                <a href="{{ route('detail-post', ['slug' => $recent->slug]) }}" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ $recent->image }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper black-bg">
                                <div>{{ $recent->category->getTranslation(app()->getLocale())->name }}</div>
                            </div>
                            <h5 class="heading white">{{ $recent->getTranslation(app()->getLocale())->title }}</h5>
                            <div class="post-summary quick-story full white">
                                <div>{!! $recent->getTranslation(app()->getLocale())->intro !!}<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    @if (count($projects) > 0)
    <div class="content-wrap project-space">
        <div class="w-layout-grid _3-columns">
            @foreach ($projects as $project)
            <div class="holderjournal-small-columns full-sapo">
                <a href="{{ route('detail-post', ['slug' => $project->slug]) }}" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ $project->image }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>{{ $project->category->getTranslation(app()->getLocale())->name }}</div>
                                <div class="caption-dot">·</div>
                                <div>{{ $project->created_at }}</div>
                            </div>
                            <h6 class="heading small-post">{{ $project->getTranslation(app()->getLocale())->title }}</h6>
                            <div class="post-summary quick-story">
                                <div>{!! $project->getTranslation(app()->getLocale())->intro !!}<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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