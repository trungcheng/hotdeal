@extends('layouts.user.master')

@section('page'){{ trans('general.past_event') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('past-events') }}/
@stop

@section('alternate'){{ route('past-events') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('past-events') }}/
@stop

@section('ogImage'){{ asset('frontend/images/visci-vector-web-white.svg') }}
@stop

@section('pageCss')
<style>
    .navbar-container .nav-button,
    .navbar-container a {
        transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg) !important;
    }
</style>
@stop

@section('home')

@stop

@section('content')
<section class="section-container">
    <div class="content-heading align-left no-padding">
        <h2 class="content-heading-home">{{ trans('general.past_event') }}</h2>
        <!-- <div class="content-sapo">Our latest tips, tricks, insights, and resources, hot off the presses.</div> -->
    </div>
    <div class="content-wrap margin">
        <div class="w-layout-grid grid _2-col">
            <div class="_1st-column-journal pack-1---2 full">
                @if (count($events) > 0)
                <div class="_1-column-2-on-mobile _2-col-pc">
                    @foreach ($events as $event)
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="{{ route('detail-event', ['slug' => $event->slug]) }}" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3">
                                    <img src="{{ $event->image }}" width="960" alt="" class="bg-image">
                                    <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="event-format-container">
                                        <div class="event-format-wrap">
                                            <div class="event-format day">{{ date('m', strtotime($event->event_date_from)) }}</div>
                                            <div class="event-format month">{{ date('F', strtotime($event->event_date_from)) }}</div>
                                        </div>
                                        <div class="event-format-heading">
                                            <div class="category-wrapper">
                                                <div>{{ $event->event_type }}</div>
                                            </div>
                                            <h5 class="heading small-post">{{ $event->getTranslation(app()->getLocale())->title }}</h5>
                                        </div>
                                    </div>
                                    <div class="post-summary quick-story">
                                        <div>{!! $event->getTranslation(app()->getLocale())->intro !!}<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="_w-pagination-wrapper">
                    <a href="{{ $events->previousPageUrl() }}" class="button-style small w-inline-block">
                        <div class="button-style-w-icon"><img src="{{ asset('frontend/images/chevron-left.svg') }}" width="120" alt=""
                                class="b-archive-link__arrow cc-arrow-left">
                            <div class="button-label navigate-button">Previous</div>
                        </div>
                        <div class="hover-shape"></div>
                    </a>
                    <div class="_w-page-count">{{ $events->currentPage() }}/{{ $events->lastPage() }}</div>
                    <a href="{{ $events->nextPageUrl() }}" class="button-style small w-inline-block">
                        <div class="button-style-w-icon">
                            <div class="button-label navigate-button">Next</div>
                                <img src="{{ asset('frontend/images/chevron-right.svg') }}" width="22" alt="" class="b-archive-link__arrow cc-arrow-right">
                            </div>
                        <div class="hover-shape"></div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
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