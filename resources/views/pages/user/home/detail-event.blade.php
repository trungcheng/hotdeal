@extends('layouts.user.master')

@section('page'){{ $event->getTranslation(app()->getLocale())->title }}
@stop

@section('description'){{ $event->seo_desc }}
@stop

@section('keywords'){{ $event->seo_keyword }}
@stop

@section('canonical'){{ route('detail-event', ['slug' => $event->slug]) }}/
@stop

@section('alternate'){{ route('detail-event', ['slug' => $event->slug]) }}/
@stop

@section('propName'){{ $event->seo_title }}
@stop

@section('propDesc'){{ $event->seo_desc }}
@stop

@section('ogTitle'){{ $event->seo_title }}
@stop

@section('ogDesc'){{ $event->seo_desc }}
@stop

@section('ogUrl'){{ route('detail-event', ['slug' => $event->slug]) }}/
@stop

@section('ogImage'){{ url('') }}{{ $event->image }}
@stop

@section('pageCss')
    <style>
        .navbar-container .nav-button, .navbar-container a {
            transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg) !important;
        }
        .cke_widget_wrapper .cke_reset {
            display: none !important;
        }
    </style>
@stop

@section('home')
<header class="post-hero">
    <figure class="post-hero-wrap">
        <div class="hero-content post">
            <figure class="hero-content-wrap">
                <div class="event-format-container">
                    <div class="event-format-wrap post-hero">
                        <div class="event-format day">{{ date('m', strtotime($event->event_date_from)) }}</div>
                        <div class="caption-dot">·</div>
                        <div class="event-format day">{{ date('F Y', strtotime($event->event_date_from)) }}</div>
                    </div>
                    <div class="event-format-wrap event-category">
                        <a href="#" class="link white-colour w-inline-block">
                            <div class="text-block">{{ $event->event_type }}</div>
                        </a>
                    </div>
                </div>
                <h2 class="post-hero-heading">{{ $event->getTranslation(app()->getLocale())->title }}</h2>
                <p>{!! $event->getTranslation(app()->getLocale())->intro !!}</p>
                <div class="category-wrapper">
                    <a href="#" class="link white-colour w-inline-block">
                        <!-- <div>Big Tent! Live Events!</div> -->
                    </a>
                </div>
            </figure>
        </div>
    </figure>
</header>
@stop

@section('content')
<div class="section-container">
    <div class="b-sticky-share__wrap">
        <div class="share-tool-box">
            <a target="_blank" href="http://www.facebook.com/share.php?u={{ route('detail-event', ['slug' => $event->slug]) }}" class="share-sticky-icon w-inline-block">
                <img src="{{ asset('frontend/images/facebook-with-circle-black.svg') }}" width="32" alt="facebook">
            </a>
            <a target="_blank" href="http://twitter.com/home?status={{ route('detail-event', ['slug' => $event->slug]) }}" class="share-sticky-icon w-inline-block">
                <img src="{{ asset('frontend/images/twitter-with-circle-black.svg') }}" width="32" alt="twitter">
            </a>
            <a href="#" class="share-sticky-icon w-inline-block">
                <img src="{{ asset('frontend/images/youtube-with-circle-black.svg') }}" width="32" alt="youtube">
            </a>
            <a href="#" class="share-sticky-icon w-inline-block">
                <img src="{{ asset('frontend/images/mail-with-circle-black.svg') }}" width="32" alt="mail">
            </a>
        </div>
    </div>
    <div class="content-wrap">
        <main class="post-content">
            <div class="event-infomation">
                <div class="w-layout-grid event-table">
                    <div class="event-table-type-item">{{ trans('general.event_date') }}</div>
                    <div>{{ date('d F Y', strtotime($event->event_date_from)) }}</div>
                    <div class="event-table-type-item">{{ trans('general.event_time') }}</div>
                    <div>{{ date('H:i', strtotime($event->event_date_from)) }} - {{ date('H:i', strtotime($event->event_date_to)) }}</div>
                    <div class="event-table-type-item">{{ trans('general.event_venue') }}</div>
                    <div>{{ $event->event_venue }}</div>
                    <div class="event-table-type-item">{{ trans('general.event_type') }}</div>
                    <div>{{ $event->event_type }}</div>
                    <div class="event-table-type-item">{{ trans('general.event_speaker') }}</div>
                    <div>{{ $event->event_speaker }}</div>
                    <div class="event-table-type-item">{{ trans('general.event_detail_information') }}</div>
                    {!! $event->event_detail_information !!}
                </div>
            </div>
            <div class="w-richtext">
                {!! $event->getTranslation(app()->getLocale())->fulltext !!}
            </div>
        </main>
    </div>
</div>
@stop

@section('pageJs')

@stop