@extends('layouts.user.master')

@section('page'){{ trans('general.coming_event') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('coming-events') }}/
@stop

@section('alternate'){{ route('coming-events') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('coming-events') }}/
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
<div class="section-container-black">
    <section class="content-heading black-bg">
        <h2 class="heading">{{ trans('general.running_coming_event') }}</h2>
    </section>
    @if (count($events) > 0)
    <div class="w-layout-grid grid-diamond">
        @foreach ($events as $event)
        <div id="w-node-656c873e833c-86d65b49" class="sticky-bottom z2">
            <div class="small-section">
                <div class="event-format-wrap">
                    <div class="event-format day">{{ date('m', strtotime($event->event_date_from)) }}</div>
                    <div class="event-format month">{{ date('F', strtotime($event->event_date_from)) }}</div>
                </div>
                <h5 class="heading">{{ $event->getTranslation(app()->getLocale())->title }}</h5>
                <p>{!! $event->getTranslation(app()->getLocale())->intro !!}</p>
                <a href="{{ route('detail-event', ['slug' => $event->slug]) }}" class="button-style small w-inline-block">
                    <div class="button-label">{{ trans('general.discover_more') }}</div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
        <div id="w-node-656c873e834e-86d65b49" class="section-parallax-images">
            <div class="image-size-parallax">
                <img src="{{ $event->image }}" width="1280" class="image">
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <div class="icon-container">
        <a href="{{ route('past-events') }}" class="button-style w-inline-block">
            <div class="button-style-w-icon">
                <div class="button-label">{{ trans('general.browse_past_event') }}</div><img src="{{ asset('frontend/images/chevron-right.svg') }}" width="150"
                    alt="" class="icon">
            </div>
            <div class="hover-shape"></div>
        </a>
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