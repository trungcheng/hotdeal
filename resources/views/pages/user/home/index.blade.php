@extends('layouts.user.master')

@section('page'){{ trans('general.home_page') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('ogImage'){{ asset('frontend/images/visci-vector-web-white.svg') }}
@stop

@section('pageCss')

@stop

@section('home')
<header wp="frontend-editor" style="opacity:0" class="section-hero">
    <div style="-webkit-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="hero-container">
        <div data-delay="8000" data-animation="outin" data-autoplay="1" data-easing="linear" data-duration="800"
            data-infinite="1" class="hero-slider w-slider">
            <div class="w-slider-mask">
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">{!! trans('general.slide_title') !!}
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">{!! trans('general.slide_desc') !!}</p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-1"></figure>
                    </div>
                </figure>
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">{!! trans('general.slide_title') !!}
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">{!! trans('general.slide_desc') !!}</p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-2"></figure>
                    </div>
                </figure>
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">{!! trans('general.slide_title') !!}
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">{!! trans('general.slide_desc') !!}</p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-3"></figure>
                    </div>
                </figure>
            </div>
            <div style="opacity:0" class="button-style arrow previous w-slider-arrow-left">
                <div class="button-label w-icon-slider-left"></div>
                <div class="hover-shape"></div>
            </div>
            <div style="opacity:0" class="button-style arrow next w-slider-arrow-right">
                <div class="button-label w-icon-slider-right"></div>
                <div class="hover-shape"></div>
            </div>
            <div class="hero-slider-nav w-slider-nav"></div>
        </div>
    </div>
</header>
@stop

@section('content')
<section class="section">
    <div class="section-container full-slider">
        <section class="content-heading">
            <h2 class="heading">{{ trans('general.smarthome_solution') }}</h2>
        </section>
        <div class="content-wrap show-grid">
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_1.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.technology_40') }}</h4>
                    <div class="content-sapo">{{ trans('general.technology_40_desc') }}</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_2.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.bring_change') }}</h4>
                    <div class="content-sapo">{{ trans('general.bring_change_desc') }}</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_3.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.subtainable') }}</h4>
                    <div class="content-sapo">{{ trans('general.subtainable_desc') }}</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_4.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.a_kid') }}</h4>
                    <div class="content-sapo">{{ trans('general.a_kid_desc') }}</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_5.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.smart') }}</h4>
                    <div class="content-sapo">{{ trans('general.smart_desc') }}</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_6.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">{{ trans('general.understand') }}</h4>
                    <div class="content-sapo">{{ trans('general.understand_desc') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@if (count($projects) > 0)
<section class="section gray-background">
    <div class="section-container full-slider">
        <section class="content-heading">
            <h2 class="heading center">{{ trans('general.our_project') }}</h2>
            <div class="content-subheading">
                <h4 class="heading-effect center">{!! trans('general.project_slogan') !!}</h4>
                <div class="content-sapo">{{ trans('general.project_desc') }}</div>
            </div>
        </section>
        <div class="content-wrap slider">
            <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
                <div class="w-slider-mask">
                    @foreach ($projects as $project)
                    <div class="w-slide">
                        <div class="section-vertical-slider">
                            <div class="slide-vertical-move">
                                <h4 class="heading">{{ $project->getTranslation(app()->getLocale())->title }}</h4>
                                <p>{!! $project->getTranslation(app()->getLocale())->intro !!}</p>
                                <a href="{{ route('detail-post', ['slug' => $project->slug]) }}" class="hero-slider-link w-inline-block w-clearfix">
                                    <div class="hero-line white-bg"></div>
                                    <div class="card-link">{{ trans('general.project_readmore') }}</div>
                                </a>
                            </div>
                            <img src="{{ $project->image }}" sizes="100vw" alt="" class="bg-image">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="button-slider-style left-arrow w-slider-arrow-left">
                    <div class="button-label white w-icon-slider-left"></div>
                    <div class="hover-shape-left"></div>
                </div>
                <div class="button-slider-style right-arrow w-slider-arrow-right">
                    <div class="button-label white w-icon-slider-right"></div>
                    <div class="hover-shape-right"></div>
                </div>
                <div class="slide-nav w-slider-nav w-round"></div>
            </div>
        </div>
    </div>
</section>
@endif
@if (count(json_decode($setting['partner_logos'])) > 0)
<section class="section">
    <div class="section-container logo-fix-height">
        <section class="content-heading">
            <h2 class="heading center">{{ trans('general.our_partner') }}</h2>
            <div class="content-subheading">
                <div class="content-sapo">{{ trans('general.partner_desc') }}</div>
            </div>
        </section>
    </div>
    <section class="content-wrap slider-content">
        <section class="brand-slider-container">
            <div class="html-embed w-embed">
                <style>
                .parent {
                    width: 100vw;
                    height: 204px;
                    margin: 20px auto;
                    overflow: hidden
                }

                .parent .child {
                    width: 20000px;
                    display: inline-block;
                    animation: marquee 60s linear infinite;
                }

                @keyframes marquee {
                    0% {
                        margin-left: 0;
                    }

                    100% {
                        margin-left: calc(-1835px + 608px);
                    }
                }

                .parent .child:hover {
                    -webkit-animation-play-state: paused;
                    -moz-animation-play-state: paused;
                    -o-animation-play-state: paused;
                    animation-play-state: paused;
                }
                </style>
            </div>
            <div class="parent">
                <div class="child">
                    @foreach (json_decode($setting['partner_logos']) as $logo)
                    <a href="{{ $logo->link }}" target="_blank" class="logo-washington w-inline-block">
                        <img src="{{ $logo->image }}" width="200" height="200" alt="" class="logo-image-slider">
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
</section>
@endif
<section class="section gray-background">
    <div class="section-container">
        <div class="_2-columns-2-to-1">
            @if ($featureEvent)
            <div id="w-node-d6fcca430ea3-cef3f7a9" class="sticky-top-5vh">
                <a href="{{ route('detail-event', ['slug' => $featureEvent->slug]) }}" class="image-filled-featured w-inline-block">
                    <img src="{{ $featureEvent->image }}" width="1280" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card">
                        <div class="category-wrapper">
                            <div>{{ $featureEvent->event_type }}</div>
                            <div class="caption-dot">·</div>
                            <div>{{ $featureEvent->event_date_from }}</div>
                        </div>
                        <h4 class="heading">{{ $featureEvent->getTranslation(app()->getLocale())->title }}</h4>
                        <div class="post-summary">
                            <div>{!! $featureEvent->getTranslation(app()->getLocale())->intro !!}<br></div>
                        </div>
                    </div>
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            @endif
            @if (count($news) > 0)
            <div id="w-node-d6fcca430eae-cef3f7a9" class="_1-column-2-on-mobile">
                @foreach ($news as $new)
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
                            <h6 class="heading small-post">{{ $new->getTranslation(app()->getLocale())->title }}</h6>
                        </div>
                    </div>
                </a>
                @endforeach
                <a href="{{ route('news-events') }}" class="button-style w-inline-block">
                    <div class="button-style-w-icon">
                        <div class="button-label">{{ trans('general.browse_new_event') }}</div>
                            <img src="{{ asset('frontend/images/chevron-right.svg') }}" width="120" alt="" class="icon">
                        </div>
                    <div class="hover-shape"></div>
                </a>
            </div>
            @endif
        </div>
    </div>
</section>
@stop

@section('pageJs')

@stop