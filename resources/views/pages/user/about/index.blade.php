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
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Về chúng tôi</a>
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
@stop

@section('pageJs')
    <script type="text/javascript">
        $('.swiper-slide p').each(function (v, k) {
            var trim = trimText($(k).text(), 30);
            $(k).text(trim);
        });
    </script>
@stop