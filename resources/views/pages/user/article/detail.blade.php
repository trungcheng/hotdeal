@extends('layouts.user.master')

@section('page'){{ $article->title }}
@stop

@section('description'){{ $article->title }}
@stop

@section('keywords'){{ $article->title }}
@stop

@section('canonical'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('alternate'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('propName'){{ $article->title }}
@stop

@section('propDesc'){{ $article->title }}
@stop

@section('ogTitle'){{ $article->title }}
@stop

@section('ogDesc'){{ $article->title }}
@stop

@section('ogUrl'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('pageCss')

@stop

@section('content')
	<hr class="divider my-0">
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('article') }}">Tin tức</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <article class="article">
                    <div class="article-header">
                        <h1 class="article-title">{{ $article->title }}</h1>
                        <p class="article-lead">{!! $article->intro !!}</p>
                    </div>
                    <div class="article-body">
                        <div class="article-content">
                            {!! $article->fulltext !!}
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    @if (count($others) > 0)
    <section class="mb-5">
        <div class="container">
            <h2 class="section-heading text-center text-md-left">
                <span class="line-bottom">Tin tức khác</span>
            </h2>
            <div class="swiper swiper-news-related">
                <div class="swiper-container" data-plugin="swiper" data-slidesperview="4" data-spacebetween="30">
                    <div class="swiper-wrapper">
                        @foreach ($others as $other)
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <a class="thumbnail mb-3" href="{{ route('article-detail', ['slug' => $other->slug]) }}">
                                    <img class="thumbnail-img" src="{{ asset($other->image) }}" alt="{{ asset($other->image) }}">
                                </a>
                                <div class="card-body p-0">
                                    <!-- <p class="text-primary mb-2">
                                        <small>Tin khuyến mãi và sự kiện</small>
                                    </p> -->
                                    <h4 class="card-title">
                                        <a href="{{ route('article-detail', ['slug' => $other->slug]) }}">{{ $other->title }}</a>
                                    </h4>
                                    <p class="card-text small font-italic text-muted text-intro">{!! $other->intro !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev">
                            <i class="icont-chevron-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="icont-chevron-right"></i>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-style-1 mt-5"></div>
                </div>
            </div>
        </div>
    </section>
    @endif
@stop

@section('pageJs')
    <script type="text/javascript">
        $('p.text-intro').each(function (v, k) {
            var trim = trimText($(k).text(), 40);
            $(k).text(trim);
        });
    </script>
@stop