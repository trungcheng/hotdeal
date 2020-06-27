@extends('layouts.user.master')

@section('page'){{ $article->getTranslation(app()->getLocale())->title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ route('detail-post', ['slug' => $article->slug]) }}/
@stop

@section('alternate'){{ route('detail-post', ['slug' => $article->slug]) }}/
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route('detail-post', ['slug' => $article->slug]) }}/
@stop

@section('ogImage'){{ url('') }}{{ $article->image }}
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
                <h2 class="heading">{{ $article->getTranslation(app()->getLocale())->title }}</h2>
                <p>{!! $article->getTranslation(app()->getLocale())->intro !!}</p>
                <div class="category-wrapper">
                    <a href="#" class="link white-colour w-inline-block">
                        <div>{{ $article->category->getTranslation(app()->getLocale())->name }}</div>
                    </a>
                    <div class="caption-dot">·</div>
                    <div>{{ $article->created_at }}</div>
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
            <a target="_blank" href="http://www.facebook.com/share.php?u={{ route('detail-post', ['slug' => $article->slug]) }}" class="share-sticky-icon w-inline-block">
                <img src="{{ asset('frontend/images/facebook-with-circle-black.svg') }}" width="32" alt="facebook">
            </a>
            <a target="_blank" href="http://twitter.com/home?status={{ route('detail-post', ['slug' => $article->slug]) }}" class="share-sticky-icon w-inline-block">
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
            {!! $article->getTranslation(app()->getLocale())->fulltext !!}
        </main>
    </div>
</div>
<section class="section-container bg-colour-alternative">
    <div class="content-heading align-left no-padding">
        <h2 class="heading">{{ trans('general.related_new') }}</h2>
    </div>
    @if (count($relatedNews) > 0)
    <div class="content-wrap margin">
        <div class="w-layout-grid grid _2-col">
            <div class="_1st-column-journal pack-1---2 full">
                <div class="_1-column-2-on-mobile _2-col-pc">
                    @foreach ($relatedNews as $new)
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
                                    <h6 class="heading small-post">{{ $new->getTranslation(app()->getLocale())->title }}</h6>
                                    <div class="post-summary quick-story">
                                        <div>{!! $new->getTranslation(app()->getLocale())->intro !!}<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@stop

@section('pageJs')

@stop