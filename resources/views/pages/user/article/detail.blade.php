@extends('layouts.user.master')

@section('page'){{ $article->seo_title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('alternate'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('ogImage'){{ $article->image }}
@stop

@section('pageCss')
    <style>
        .blog-post .date {
            margin-bottom: 15px;
            font-size: 13px;
            color: #666;
        }
        .register {
            margin-top: 20px;
        }
        .register .btn-round {
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: #0088cc;
            color: #fff;
        }
        .register .btn-round:hover {
            text-decoration: none;
        }
    </style>
@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container-site">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a href="{{ route('article') }}">Tin tức</a><span>»</span></li>
                        <li><a id="title" class="active">{{ $article->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-site">
        <div class="row">
            <div class="body-right col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="box-body homepage clearfix">
                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article>
                                <h1 style="font-size:25px;margin-top:0px;margin-bottom:5px;">{{ $article->title }}</h1>
                                <p class="date">{{ $article->created_at }}</p>
                                <hr style="margin-top:-10px;">
                                {!! $article->intro !!}
                                {!! $article->fulltext !!}
                                @if ($article->category->slug == 'khuyen-mai')
                                <div class="register">
                                    <a href="#" target="_blank" class="btn-round">Đăng ký nhận khuyến mãi tại đây</a>
                                </div>
                                @endif
                                <div class="fb-like" data-href="{{ route('article-detail', ['slug' => $article->slug]) }}" data-width="850" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </article>

                            <!-- Comments -->
                            <div class="comments">
                                <div class="fb-comments" data-href="{{ route('article-detail', ['slug' => $article->slug]) }}" data-width="850" data-numposts="10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.user.sidebar')

        </div>
    </div>
</div>
@stop

@section('pageJs')
    <script type="text/javascript">
		var trim = trimText($("#title").text(), 6);
        $("#title").text(trim);
	</script>
@stop