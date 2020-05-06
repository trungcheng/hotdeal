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
                        <li>
                            <a itemprop="url" href="{{ route('article') }}" title="Tin tức"><span itemprop="title">Tin tức</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{ $article->title }}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container article-wraper">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <article class="article-main" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="mainEntityOfPage" content="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien">
                    <meta itemprop="description" content="{{ $article->intro }}">
                    <meta itemprop="author" content="{{ $article->user->fullname }}">
                    <meta itemprop="headline" content="{{ $article->title }}">
                    <meta itemprop="image" content="{{ $article->image }}">
                    <meta itemprop="datePublished" content="{{ $article->created_at }}">
                    <meta itemprop="dateModified" content="{{ $article->created_at }}">
                    <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            <img src="{{ asset('frontend/images/logos/logo.png') }}" alt="King Bep" />
                            <meta itemprop="url" content="{{ asset('frontend/images/logos/logo.png') }}">
                            <meta itemprop="width" content="200">
                            <meta itemprop="height" content="49">
                        </div>
                        <meta itemprop="name" content="{{ $article->title }}">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-head">{{ $article->title }}</h1>
                            <div class="postby">
                                <span>{{ $article->created_at }}</span>
                            </div>
                            <div class="article-details">
                                <div class="article-content">
                                    <div class="rte">
                                        {!! $article->fulltext !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="tag_article col-md-12">
                            <span class="inline">Tags: </span>
                            <a href="blogs/all/tagged/product-noi-com-dien"><span>product_Nồi cơm điện</span></a>,
                            <a href="blogs/all/tagged/vao-bep"><span>vào bếp</span></a>
                        </div>

                        <div class="col-md-12">
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a099baca270babc"></script>
                            <div class="addthis_inline_share_toolbox_7dnb"></div>
                        </div>

                        <div class="col-md-12">
                            <div id="RelatedProducts">
                                <div class="related-product collections-container">
                                    <div class="feature_category_title text-center">
                                        <h2 class="title-head text-center">Sản phẩm gợi ý</h2>
                                    </div>
                                    <div class="products clearfix">
                                        <div class="col-md-3 col-sm-6 col-xs-6 no-padding">
                                            <div class="product-box">
                                                <div class="product-thumbnail">

                                                    <div class="product-image-flip">
                                                        <a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">
                                                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1-a6e423f0-382c-4789-aff6-2a98c42a31da.jpg?v=1509852063367" alt="Nồi cơm điện tử đa năng Philips HD3060" class="img-responsive center-block" />
                                                        </a>
                                                    </div>
                                                    <div class="prod-icons">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898349" enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="14166625" />
                                                            <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                            <a href="/noi-com-dien-tu-da-nang-philips-hd3060" data-handle="noi-com-dien-tu-da-nang-philips-hd3060" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">Nồi cơm điện tử đa năng Philips HD3060</a></h3>


                                                    <div class="price-box clearfix">
                                                        <div class="special-price">
                                                            <span class="price product-price">1.739.000₫</span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="col-md-12">
                            <div class="blog_related">
                                <h2>Bài viết liên quan</h2>
                                @foreach ($otherArticles as $article)
                                <article class="blog_entry clearfix">
                                    <h3 class="blog_entry-title"><a rel="bookmark" href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $article->title }}</a></h3>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="article-comments" class="clearfix">
                                <h5 class="title-form-comment">Bình luận</h5>
                                <div class="article-comment clearfix">
                                    <div class="fb-comments" data-href="{{ route('article-detail', ['slug' => $article->slug]) }}" data-width="100%" data-numposts="10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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
                                @foreach ($categories as $cat)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('product-detail', ['slug' => $cat->slug]) }}">{{ $cat->name }}</a>
                                        @if (isset($cat->childrens))
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">
                                                @foreach ($cat->childrens as $child)
                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="{{ route('product-detail', ['slug' => $child->slug]) }}">{{ $child->name }}</a>
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

            </aside>

        </div>
    </div>
@stop

@section('pageJs')

@stop