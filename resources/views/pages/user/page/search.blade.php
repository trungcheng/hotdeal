@extends('layouts.user.master')

@section('page'){{ $setting->seo_title }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('robots')noodp,noindex,nofollow
@stop

@section('canonical'){{ route('search') }}/
@stop

@section('alternate'){{ route('search') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('search') }}/
@stop

@section('ogImage'){{ asset($setting->logo) }}
@stop

@section('schema'){{ $setting->seo_schema }}
@stop

@section('pageCss')
    <style>
        .pagination li a {
            height: 30px !important;
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

    <div class="bread">
        <ol class="breadcrumb">
            <li><a href="{{ url('') }}">{{ trans('general.home_page') }}</a></li>
            <li class="active">{{ trans('general.search') }}</li>
        </ol>
    </div>
    <div class="main">
        <div class="main_col4">
            <h1 style="font-size:20px;margin:0">{{ trans('general.title_search') }} "{{ $keyword }}"</h1>
            @if (count($articles) > 0)
                <div class="main_list_news" style="margin-top:20px">
                    <ul>
                        @foreach ($articles as $article)
                        <li>
                            <a class="panel_img" href="{{ route('detail-article', ['parent' => $article->category->slug, 'slug' => $article->slug]) }}">
                                <img alt="{{ $article->title }}" src="{{ $article->image }}">
                            </a>
                            <div class="panel_txt">
                                <h2 class="panel_tlt">
                                    <a href="{{ route('detail-article', ['parent' => $article->category->slug, 'slug' => $article->slug]) }}">{{ $article->getTranslation(app()->getLocale())->title }}
                                        @if ($article->is_feature == 1)
                                            <img src="{{ asset('frontend/themes/default/images/new.gif') }}">
                                        @endif
                                    </a>
                                </h2>
                                {!! $article->getTranslation(app()->getLocale())->intro !!}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pagi">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
        

        <div class="main_col3">
            <div class="sidebar">
                <div class="panel panel-success">
                    <div class="panel_icon" style="background: url({{ asset('frontend/themes/default/images/col_left_detail.png') }}) no-repeat top">
                        <h1>{{ trans('general.category') }}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="sidebar_ul">
                            @if (count($cates) > 0)
                                <ul>
                                    @foreach ($cates as $cate)
                                        <li>
                                            <a style="font-weight:bold" href="{{ route('detail', ['slug' => $cate->slug]) }}">
                                                {{ $cate->getTranslation(app()->getLocale())->name }}
                                            </a>
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