@extends('layouts.user.master')

@section('page'){{ trans('general.new_event') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('news-events') }}/
@stop

@section('alternate'){{ route('news-events') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('news-events') }}/
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
<div class="section-container full-width">
    <section class="content-heading align-left">
        <h2 class="heading">{{ trans('general.new') }}</h2>
        <a href="{{ route('news') }}" class="hero-slider-link white-bg w-inline-block w-clearfix">
            <div class="hero-line white-bg"></div>
            <div>{{ trans('general.see_all_new') }}</div>
        </a>
    </section>
    <div data-w-id="a4e9ad61-b012-545e-f00a-9f28c8e5c7fc" class="w-layout-grid grid-new">
        @if (count($highlightNews) > 0)
        <div class="_1st-column-journal">
            <div class="absolute-parallax-section">
                <div class="w-layout-grid thumb-info-large-grid">
                    <h6 class="heading">{{ trans('general.highlight') }}</h6>
                    <div class="_1-column">
                        @foreach ($highlightNews as $highlight)
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block">
                                <img src="{{ $highlight->image }}" width="1280" alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>{{ $highlight->category->getTranslation(app()->getLocale())->name }}</div>
                                        <div class="caption-dot">·</div>
                                        <div>{{ $highlight->created_at }}</div>
                                    </div>
                                    <h4 class="heading">{{ $highlight->getTranslation(app()->getLocale())->title }}</h4>
                                    <div class="post-summary">
                                        <div>{!! $highlight->getTranslation(app()->getLocale())->intro !!}<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (count($recentlyNews) > 0)
        <div class="_2nd-column-journal">
            <div class="w-layout-grid thumb-info-large-grid">
                <h6 class="heading">{{ trans('general.recently') }}</h6>
                <div id="w-node-44b4c142fd1b-4af3f7b4" class="_1-column-2-on-mobile">
                    @foreach ($recentlyNews as $recent)
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3">
                                    <img src="{{ $recent->image }}" width="960" alt="" class="bg-image">
                                    <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>{{ $recent->category->getTranslation(app()->getLocale())->name }}</div>
                                        <div class="caption-dot">·</div>
                                        <div>{{ $recent->created_at }}</div>
                                    </div>
                                    <h6 class="heading small-post">{{ $recent->getTranslation(app()->getLocale())->title }}</h6>
                                    <div class="post-summary quick-story">
                                        <div>{!! $recent->getTranslation(app()->getLocale())->intro !!}<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if (count($explorerTopics) > 0)
        <div class="_3rd-column-journal">
            <div class="sticky-3rd-column">
                <div class="holder-journal-columns">
                    <div class="thumb-info-large-grid">
                        <h6 class="heading">{{ trans('general.explore_topic') }}</h6>
                        <div class="horizontal">
                            @foreach ($explorerTopics as $topic)
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">{{ $topic->getTranslation(app()->getLocale())->name }}</div>
                                <div class="hover-shape"></div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="holder-journal-columns">
                    <div class="grid-about-small">
                        <div class="intro-brand-wrap"><img src="{{ asset('frontend/images/visci-vector-web.svg') }}" height="" alt=""
                                class="brand-visci full"></div>
                        <div id="w-node-13c80a42dcfe-4af3f7b4" class="post-summary-center">
                            <div>{{ $setting->slogan }}<br></div>
                            <a href="{{ route('contact') }}" class="link-block w-inline-block">
                                <div>{{ trans('general.read_about_us') }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@if (count($events) > 0)
<div class="section-container-black">
    <section class="content-heading black-bg">
        <h2 class="heading">{{ trans('general.event') }}</h2>
        <a href="{{ route('coming-events') }}" class="hero-slider-link black-bg w-inline-block w-clearfix">
            <div class="hero-line"></div>
            <div>{{ trans('general.see_all_event') }}</div>
        </a>
    </section>
    <div class="w-layout-grid grid-diamond">
        @foreach ($events as $key => $event)
        <div id="w-node-37269e34cf8a-4af3f7b4" class="sticky-bottom z{{ $key + 1 }}">
            <div class="small-section">
                <div class="event-format-wrap">
                    <div class="event-format day">{{ date('m', strtotime($event->event_date_from)) }}</div>
                    <div class="event-format month">{{ date('F', strtotime($event->event_date_from)) }}</div>
                </div>
                <h5 class="heading">{{ $event->getTranslation(app()->getLocale())->title }}</h5>
                <p>{!! $event->getTranslation(app()->getLocale())->intro !!}</p>
                <a href="#" class="button-style small w-inline-block">
                    <div class="button-label">{{ trans('general.discover_more') }}</div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
        <div id="w-node-79f3cf1c8f53-4af3f7b4" class="section-parallax-images">
            <div class="image-size-parallax">
                <img src="{{ $event->image }}" width="1280" class="image">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
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