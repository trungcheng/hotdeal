@extends('layouts.user.master')

@section('page'){{ $cate ? $cate->seo_title : $page->seo_title }}
@stop

@section('description'){{ $cate ? $cate->seo_desc : $page->seo_desc }}
@stop

@section('keywords'){{ $cate ? $cate->seo_keyword : $page->seo_keyword }}
@stop

@section('robots')noodp,index,follow
@stop

@section('canonical'){{ $cate ? route('article-detail', ['slug' => $cate->slug]) : route('article') }}/
@stop

@section('alternate'){{ $cate ? route('article-detail', ['slug' => $cate->slug]) : route('article') }}/
@stop

@section('propName'){{ $cate ? $cate->seo_title : $page->seo_title }}
@stop

@section('propDesc'){{ $cate ? $cate->seo_desc : $page->seo_desc }}
@stop

@section('ogTitle'){{ $cate ? $cate->seo_title : $page->seo_title }}
@stop

@section('ogDesc'){{ $cate ? $cate->seo_desc : $page->seo_desc }}
@stop

@section('ogUrl'){{ $cate ? route('article-detail', ['slug' => $cate->slug]) : route('article') }}/
@stop

@section('ogImage'){{ count($articles) > 0 ? $articles[0]->image : $setting->logo }}
@stop

@section('schema'){{ $cate ? $cate->seo_schema : $page->seo_schema }}
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
                        @if ($cate)
                        <li>
                            <a itemprop="url" href="{{ route('article') }}" title="Tin tức"><span itemprop="title">Tin tức</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <strong><span itemprop="title">{{ $cate->name }}</span></strong>
                        </li>
                        @else
                        <li><strong itemprop="title">Tin tức</strong></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container" itemscope itemtype="http://schema.org/Blog">
        <meta itemprop="name" content="{{ $cate ? $cate->name : 'Tin tức' }}">
        <meta itemprop="description" content="{{ $cate ? $cate->seo_desc : $page->seo_desc }}">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head">{{ $cate ? $cate->name : 'Tin tức' }}</h1>
                </div>

                @if ($cate)
                    @if ($cate->seo_content != '' && $cate->seo_content != null)
                    <div class="margin-bottom-20">
                        {!! $cate->seo_content !!}
                    </div>
                    @endif
                @else
                    @if ($page->seo_content != '' && $page->seo_content != null)
                    <div class="margin-bottom-20">
                        {!! $page->seo_content !!}
                    </div>
                    @endif
                @endif

                @if (count($articles) > 0)
                <section class="list-blogs blog-main">
                    <div class="row">
                        @foreach ($articles as $article)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                        <img src="{{ asset('frontend/images/icons/loaders.svg') }}" data-lazyload="{{ $article->image }}" alt="{{ $article->title }}" class="img-responsive center-block" />
                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                <div class="post-time">
                                    {{ $article->created_at }}
                                </div>
                                <p class="blog-item-summary margin-bottom-5">{!! $article->intro !!}</p>
                            </article>
                        </div>
                        @endforeach
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{ $articles->appends(request()->query())->links() }}
                        </div>
                    </div>
                </section>
                @else
                <section class="list-blogs blog-main">
                    <div class="row">
                        <div class="col-md-12">Không có bài viết nào</div>
                    </div>
                </section>
                @endif

            </section>
            <aside class="left left-content col-md-3 col-md-pull-9">

                @if (count($articleCates) > 0)
                <aside class="aside-item collection-category blog-category">
                    <div class="heading">
                        <h2 class="title-head"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category  navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                {{--<li class="nav-item ">
                                    <a href="/tivi-loa-am-thanh" class="nav-link">Tivi, Loa, Âm thanh</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/tivi">Tivi</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/doi-moi-2017">Đời mới 2017</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/sony">Sony</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/samsung">Samsung</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lg">LG</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tu-32-43-inch">Từ 32-43 inch</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tu-44-55-inch">Từ 44-55 inch</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/duoi-5-trieu">Dưới 5 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tivi-cao-cap">Tivi cao cấp</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/loa-am-thanh">Loa, Âm thanh</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/loa-thanh-soundbar">Loa thanh (Soundbar)</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dan-am-thanh">Dàn âm thanh</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dau-dvd">Đầu DVD</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/cap-hdmi-cap-tivi">Cáp HDMI, cáp Tivi</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Thương hiệu</a>
                                        </li>
                                    </ul>
                                </li>--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('article') }}">Mới nhất</a>
                                </li>
                                @foreach ($articleCates as $cat)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('article-detail', ['slug' => $cat->slug]) }}">{{ $cat->name }}</a>
                                        @if (isset($cat->childrens))
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">
                                                @foreach ($cat->childrens as $child)
                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="{{ route('article-detail', ['slug' => $child->slug]) }}">{{ $child->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </aside>
                @endif

                @if (count($otherArticles) > 0)
                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head">Bài viết khác</h2>
                    </div>
                    <div class="list-blogs">
                        <div class="row">
                            @foreach ($otherArticles as $article)
                            <article class="blog-item blog-item-list col-md-12">
                                <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="panel-box-media">
                                    <img src="{{ asset('frontend/images/icons/loaders.svg') }}" data-lazyload="{{ $article->image }}" width="70" height="70" alt="{{ $article->title }}" />
                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                    {{--<div class="post-time">{{ $article->created_at }}</div>--}}
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

            </aside>
        </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function () {
            $('.blog-item p').each(function (v, k) {
                var trim = trimText($(k).text(), 20);
                $(k).text(trim);
            });
        });
    </script>
@stop
        