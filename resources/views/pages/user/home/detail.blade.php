@extends('layouts.user.master')

@section('page'){{ $category->name }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('alternate'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('propName'){{ $setting->slogan }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $category->name }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('ogImage'){{ $category->image }}
@stop

@section('pageCss')
    <style>
        .pagination li a {
            height: 30px !important;
        }
    </style>
@stop

@section('content')
<div class="main_w w_gr clearfix">
    <div class="carousel slide" id="carousel_main">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/146615238810.jpg">
            </div>
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/146615225012.jpg">
            </div>
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661522436.jpg">
            </div>
            <div class="item active">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661522385.jpg">
            </div>
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661522334.jpg">
            </div>
        </div>
    
        <!-- Controls -->
        <a data-slide="prev" href="#carousel_main" class="left carousel-control">
            <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a data-slide="next" href="#carousel_main" class="right carousel-control">
            <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bread">
        <ol class="breadcrumb">
            <li><a href="{{ url('') }}">{{ trans('general.home_page') }}</a></li>
            @if ($parentCate)
                @if ($parentCate->parent_id == 0)
                    <li><a href="{{ url('') }}">{{ $parentCate->getTranslation(app()->getLocale())->name }}</a></li>
                @else
                    <li><a href="{{ route('detail', ['slug' => $parentCate->slug]) }}">{{ $parentCate->getTranslation(app()->getLocale())->name }}</a></li>
                @endif
            @endif
            <li class="active">{{ $category->getTranslation(app()->getLocale())->name }}</li>
        </ol>
    </div>
    <div class="main">
        <div class="main_col4">
            <div class="main_list_news">
                <ul>
                    @foreach ($articles as $article)
                    <li>
                        <a class="panel_img" href="{{ ($type == 'article') ? route('detail-article', ['parent' => $category->slug, 'slug' => $article->slug]) : route('detail', ['slug' => $article->slug]) }}">
                            <img alt="{{ ($type == 'article') ? $article->title : $article->name }}" src="{{ $article->image }}">
                        </a>
                        <div class="panel_txt">
                            <h2 class="panel_tlt">
                                <a href="{{ ($type == 'article') ? route('detail-article', ['parent' => $category->slug, 'slug' => $article->slug]) : route('detail', ['slug' => $article->slug]) }}">{{ ($type == 'article') ? $article->getTranslation(app()->getLocale())->title : $article->getTranslation(app()->getLocale())->name }}
                                    @if ($type == 'article' && $article->is_feature == 1)
                                        <img src="{{ asset('frontend/themes/default/images/new.gif') }}">
                                    @endif
                                </a>
                            </h2>
                            {!! ($type == 'article') ? $article->getTranslation(app()->getLocale())->intro : $article->getTranslation(app()->getLocale())->description !!}
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="pagi">
                {{ $articles->links() }}
                {{--<ul class="pagination">
                    <link href="https://taseco.vn/lib/paging/style.css" rel="stylesheet" type="text/css"><span class="paging_div">&nbsp;<span class="span_select_class">&nbsp;1&nbsp;</span>&nbsp;</span>
                </ul>--}}
            </div>
        </div>
        <div class="main_col3">
            <div class="sidebar">
                <div class="panel panel-success">
                    <div class="panel_icon" style="background: url({{ asset('frontend/themes/default/images/col_left_detail.png') }}) no-repeat top">
                        <h1>{{ trans('general.category') }}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="sidebar_ul">
                            @if ($childCates)
                            <ul>
                                @foreach ($childCates as $cate)
                                <li>
                                    @if ($cate->id == $category->id)
                                        <a style="font-weight:bold" href="{{ route('detail', ['slug' => $cate->slug]) }}">
                                            {{ $cate->getTranslation(app()->getLocale())->name }}
                                        </a>
                                    @else
                                        <a href="{{ route('detail', ['slug' => $cate->slug]) }}">
                                            {{ $cate->getTranslation(app()->getLocale())->name }}
                                        </a>
                                    @endif
                                    @if ($cate->childrens)
                                    <ul>
                                        @foreach ($cate->childrens as $child)
                                            <li><a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->getTranslation(app()->getLocale())->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop

@section('pageJs')
<script type="text/javascript">

</script>
@stop