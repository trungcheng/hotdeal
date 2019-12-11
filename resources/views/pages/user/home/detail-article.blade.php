@extends('layouts.user.master')

@section('page'){{ $article->getTranslation(app()->getLocale())->title }}
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
        .carousel-inner .item img {
            height: 257px !important;
            width: 100%;
            object-fit: cover;
        }
    </style>
@stop

@section('content')
<div class="main_w w_gr clearfix">

    @if ($parent->sliders != '' && $parent->sliders != null)
        <div class="carousel slide" id="carousel_main">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach (explode(',', $parent->sliders) as $slide)
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <img alt="slide" src="{{ $slide }}">
                    </div>
                @endforeach
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
    @endif

    <div class="bread">
        <ol class="breadcrumb">
            <li><a href="{{ url('') }}">{{ trans('general.home_page') }}</a></li>
            @if ($parentOfParent)
                <li><a href="">{{ $parentOfParent->getTranslation(app()->getLocale())->name }}</a></li>
            @endif
            <li class="active">{{ $parent->getTranslation(app()->getLocale())->name }}</li>
        </ol>
    </div>

    <div class="main">
        @if ($article->cat_id != 19 && $article->cat_id != 20)
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
        @else
            <div class="main_col4">
            	<div class="gallery_w">
                <h1 class="gallery_tlt" style="padding-left:7px;"><b>{{ trans('general.album_photo') }}:</b>{{ $article->getTranslation(app()->getLocale())->title }}</h1>
					<ul class="gallery clearfix">
                        @foreach (explode(',', $article->photos) as $photo)
                            <li>
                                <a href="{{ $photo }}" rel="Album-taseco" title="Ảnh" class="fancybox-thumbs">
                                    <img src="{{ $photo }}" alt="{{ $article->getTranslation('vi')->title }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

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
                            @else
                                <ul>
                                    <li>
                                    <a style="font-weight:bold" href="{{ route('detail', ['slug' => $parent->slug]) }}">{{ $parent->getTranslation(app()->getLocale())->name }}</a>
                                    </li>
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