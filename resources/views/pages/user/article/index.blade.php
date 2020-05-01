@extends('layouts.user.master')

@section('page')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp - King Bep
@stop

@section('description')Tin tức về nhà bếp, phong thủy nhà bếp, nội trợ. Mẹo lắp đặt thiết bị vệ sinh, chậu rửa.
@stop

@section('keywords')tin tức, thiết bị vệ sinh, phong thủy nhà bếp, nhà bếp, nội trợ
@stop

@section('canonical'){{ route('article') }}
@stop

@section('alternate'){{ route('article') }}
@stop

@section('propName')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp - King Bep
@stop

@section('propDesc')Tin tức về nhà bếp, phong thủy nhà bếp, nội trợ. Mẹo lắp đặt thiết bị vệ sinh, chậu rửa.
@stop

@section('ogTitle')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp - King Bep
@stop

@section('ogDesc')Tin tức về nhà bếp, phong thủy nhà bếp, nội trợ. Mẹo lắp đặt thiết bị vệ sinh, chậu rửa.
@stop

@section('ogUrl'){{ route('article') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
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
                        <li><strong itemprop="title">Tin tức</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container" itemscope itemtype="http://schema.org/Blog">
        <meta itemprop="name" content="Tin tức">
        <meta itemprop="description" content="Chủ đề không có mô tả">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head">Tin tức</h1>
                </div>

                @if (count($articles) > 0)
                <section class="list-blogs blog-main">
                    <div class="row">
                        @foreach ($articles as $article)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $article->image }}" alt="{{ $article->title }}" class="img-responsive center-block" />
                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                <div class="post-time">
                                    {{ $article->created_at }} - {{ $article->user->fullname }}
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
                                @foreach ($categories as $cate)
                                    <li class="nav-item "><a class="nav-link" href="{{ route('product-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head">Bài viết khác</h2>
                    </div>
                    <div class="list-blogs">
                        <div class="row">
                            @foreach ($otherArticles as $article)
                            <article class="blog-item blog-item-list col-md-12">
                                <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="panel-box-media">
                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="{{ $article->image }}" width="70" height="70" alt="{{ $article->title }}" />
                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                    <div class="post-time">{{ $article->created_at }}</div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>

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
        