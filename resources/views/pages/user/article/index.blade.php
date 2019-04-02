@extends('layouts.user.master')

@section('page')Tin tức
@stop

@section('description')Tin tức.
@stop

@section('keywords')Tin tức
@stop

@section('canonical'){{ route('article') }}
@stop

@section('alternate'){{ route('article') }}
@stop

@section('propName')Tin tức.
@stop

@section('propDesc')Tin tức.
@stop

@section('ogTitle')Tin tức.
@stop

@section('ogDesc')Tin tức.
@stop

@section('ogUrl'){{ route('article') }}
@stop

@section('pageCss')

@stop

@section('content')
	<hr class="divider my-0">
    <div class="container my-4">
        <div class="row flex-column flex-lg-row justify-content-lg-between">
            <div class="col-lg-auto mb-3 mb-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="javascript:void(0)">Tin tức</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="col-lg-auto">
                <nav class="tabs tabs-simple fs-sm ml-md-auto">
                    <div class="tabs-responsive mb-0">
                        <div class="tabs-scroll">
                            <div class="tabs-scroll-inner">
                                <ul class="nav nav-tabs justify-content-center justify-content-md-start mb-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Tất cả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tin đồng hồ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tin khuyến mãi và sự kiện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tin khác</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div> -->
        </div>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
            	@foreach ($articles as $article)
                <article class="card card-news border-0 mb-4">
                    <div class="row gutter-2 gutter-lg-0">
                        <div class="col-4">
                            <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                <img class="card-img rounded-0" src="{{ asset($article->image) }}">
                            </a>
                        </div>
                        <div class="col-8 d-flex">
                            <div class="card-body d-flex flex-column justify-content-between p-0 p-lg-3">
                                <div class="mb-2">
                                    <!-- <p class="text-primary lh-heading mb-2">
                                        <small>Tin khuyến mãi và sự kiện</small>
                                    </p> -->
                                    <h4 class="card-title" style="margin-top:-0.5rem">
                                        <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                    </h4>
                                    <p class="card-text small font-italic text-muted text-intro">{!! $article->intro !!}</p>
                                </div>
                                <div class="d-none d-md-block">
                                    <a class="small font-italic text-secondary" href="{{ route('article-detail', ['slug' => $article->slug]) }}">Đọc tin tức >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@stop

@section('pageJs')
	<script type="text/javascript">
        $('p.text-intro').each(function (v, k) {
            var trim = trimText($(k).text(), 40);
            $(k).text(trim);
        });
    </script>
@stop