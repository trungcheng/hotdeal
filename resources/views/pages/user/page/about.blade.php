@extends('layouts.user.master')

@section('page'){{ $article->seo_title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('robots')noodp,index,follow
@stop

@section('canonical'){{ route($article->route) }}/
@stop

@section('alternate'){{ route($article->route) }}/
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route($article->route) }}/
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('schema'){{ $article->seo_schema }}
@stop

@section('pageCss')
	
@stop

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{ $article->title }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title category-title">
                        <h1 class="title-head"><a href="#">{{ $article->title }}</a></h1>
                    </div>
                    <div class="content-page rte">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')

@stop