@extends('layouts.user.master')

@section('page'){{ $title }}
@stop

@section('description'){{ $title }} về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
@stop

@section('keywords')trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
@stop

@section('canonical'){{ ($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai']) }}
@stop

@section('alternate'){{ ($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai']) }}
@stop

@section('propName'){{ $title }}
@stop

@section('propDesc'){{ $title }} về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
@stop

@section('ogTitle'){{ $title }}
@stop

@section('ogDesc'){{ $title }} về trà hoa, trà huyết đằng nhụy hoa nghệ tây, trà nụ hoa tam thất, trà thảo dược thiên nhiên
@stop

@section('ogUrl'){{ ($title == 'Tin tức') ? route('article') : route('article-detail', ['slug' => 'khuyen-mai']) }}
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    <style>
        .blog-post {
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .blog-post:last-child {
            border: none;
        }
        .blog-post img {
            width: 100%;
            height: 200px;
            margin-bottom: 0px;
            object-fit: cover;
        }
        .blog-post .tittle {
            font-weight: bold;
            font-size: 16px;
            display: inline-block;
            width: 100%;
            margin-bottom: 10px;
            margin-top: 10px;
            color: #333333 !important;
        }
        .blog-post a {
            color: #0088cc;
            text-decoration: none;
        }
        .blog-post a:hover {
            text-decoration: none;
        }
        .pagination {
            margin-bottom: 70px;
        }
        .blog-post .date {
            margin-top: -7px;
            margin-bottom: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>
@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">{{ $title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:50px;">
        <div class="row">
            <div class="body-right col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>{{ $title }}</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix">
                        <p style="margin-bottom:20px">Cập nhật {{ strtolower($title) }} về <strong>trà hoa</strong>, <strong>trà thảo mộc</strong>. Mời các bạn đón đọc các bài viết về trà thảo dược thiên nhiên. Các kinh nghiệm, phương pháp được ứng dụng hàng ngày để bảo vệ sức khỏe của bạn.
                            Chia sẻ {{ strtolower($title) }} về các loại trà hoa, trà thảo mộc, thảo dược được triết xuất 100% từ tự nhiên, cách bảo quản, cách sử dụng <strong><a href="/tra-huyet-dang">trà huyết đằng</a></strong>, trà nụ hoa tam thất, saffon... tại <strong>Thủy Mộc Trà</strong>.</p>
                        <!-- Blog Post -->
                        @if (count($articles) > 0)
                            @foreach ($articles as $article)
                            <div class="blog-post">
                                <article class="row">
                                    <div class="image-block col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                            <img class="img-responsive" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="tittle">{{ $article->title }}</a>
                                        <p class="date">{{ $article->created_at }}</p>
                                        {!! $article->intro !!}
                                        <a style="margin-top:10px;display:block;" href="{{ route('article-detail', ['slug' => $article->slug]) }}">Chi tiết</a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            <!-- pagination -->
                            {{ $articles->appends(request()->query())->links() }}
                        @else
                            <p>Chưa có bài viết nào!</p>
                        @endif
                    </div>
                </div>
            </div>

            @include('layouts.user.sidebar')

        </div>
    </div>
    @stop

    @section('pageJs')

    @stop