@extends('layouts.user.master')

@section('page'){{ $article->title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}/
@stop

@section('alternate'){{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}/
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}/
@stop

@section('ogImage'){{ $article->image }}
@stop

@section('pageCss')
    <style>
        .cke_widget_drag_handler_container {
            display: none !important;
        }
        .cke_widget_editable {
            margin-top: -10px;
            margin-bottom: 15px;
        }
    </style>
@stop

@section('content')
<div class="main_w w_gr clearfix">
    <div class="carousel slide" id="carousel_main">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661516424.jpg">
            </div>
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661516332.jpg">
            </div>
            <div class="item active">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/146615162012.jpg">
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
            <li><a href="">{{ $parentOfParent->getTranslation(app()->getLocale())->name }}</a></li>
            <li class="active">{{ $parent->getTranslation(app()->getLocale())->name }}</li>
        </ol>
    </div>
    <div class="main">
        <div class="main_col4">
            <div class="news_dtw">
                <h1>{{ $article->getTranslation(app()->getLocale())->title }}</h1>
                <div class="content-detail">    
                    {!! $article->getTranslation(app()->getLocale())->fulltext !!}
                </div>
                <!----SHRE--->
                <div class="news_social clearfix">
                    <ul>
                        <li><a href="http://www.facebook.com/share.php?u={{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}"
                                target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/home?status={{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}"
                                target="_blank" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url={{ route('detail-article', ['parent' => $parent->slug, 'slug' => $article->slug]) }}"
                                target="_blank" class="btn btn-primary"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div>
                <!----- end share--->
            </div>

            <div class="news_dtlq">
                <h4 style="background: url({{ asset('frontend/themes/default/images/tin_bai_lienquan.png') }}) no-repeat bottom left">{{ trans('general.other_new') }}</h4>
                <ul>
                    @foreach ($relatedArticles as $relate)
                    <li>
                        <a title="{{ $relate->title }}" href="{{ route('detail-article', ['parent' => $parent->slug, 'slug' => $relate->slug]) }}">
                            {{ $relate->getTranslation(app()->getLocale())->title }}
                            <!--<span>(15/11/2019)</span>-->
                        </a>
                    </li>
                    @endforeach
                </ul>
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
                            <ul>
                                @foreach ($childCates as $child)
                                    <li>
                                        @if ($child->id == $parent->id)
                                            <a style="font-weight:bold" href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->getTranslation(app()->getLocale())->name }}</a>
                                        @else
                                            <a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->getTranslation(app()->getLocale())->name }}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
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