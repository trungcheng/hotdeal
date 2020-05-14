@extends('layouts.user.master')

@section('page'){{ $setting->seo_title }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('robots')noodp,index,follow
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('schema'){{ $setting->seo_schema }}
@stop

@section('pageCss')
    <style type="text/css">
        .seo-content {
            padding: 5px;
        }
        .seo-content img {
            width: 100%;
        }
    </style>
@stop

@section('content')
    <h1 class="hidden">King Bếp</h1>

    <section class="awe-section-1">
        <div class="container">
            <div class="col-md-3 no-padding"></div>
            <div class="col-md-9 no-padding">
                <div class="home-slider owl-carousel not-dqowl">
                    @foreach ($slides as $slide)
                        <div class="item">
                            @if ($slide->target_type == 'product')
                                <?php
                                    $category = \App\Models\Category::where('id', $slide->product->cat_id)
                                        ->where('status', 1)->first();
                                    if ($category) {
                                        if ($category->parent_id == 0) {
                                            $cateRoot = $category;
                                        } else {
                                            $cateRoot = \App\Models\Category::find($category->parent_id);
                                        }

                                        ?>
                                        <a href="{{ ($slide->product) ? route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $slide->product->slug]) : 'javascript:void(0)' }}" class="clearfix">
                                            <img src="{{ $slide->image }}" alt="{{ $slide->title }}" class="img-responsive center-block" />
                                        </a>
                                        <?php
                                    }
                                ?>
                            @else
                                <a href="{{ ($slide->article) ? route('article-detail', ['slug' => $slide->article->slug]) : 'javascript:void(0)' }}" class="clearfix">
                                    <img src="{{ $slide->image }}" alt="{{ $slide->title }}" class="img-responsive center-block" />
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="awe-section-2">
        <div class="section_policy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-policy-mobile owl-carousel not-dqowl">

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="{{ asset('frontend/images/icons/policy-icon-1.svg') }}" alt="Bảo đảm chất lượng" />
                                    <div class="section-policy-padding">
                                        <h3>Bảo đảm chất lượng</h3>
                                        <div class="section_policy_title">Sản phẩm bảo đảm chất lượng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="{{ asset('frontend/images/icons/policy-icon-2.svg') }}" alt="Miễn phí giao hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Miễn phí giao hàng</h3>
                                        <div class="section_policy_title">Cho đơn hàng từ 2 triệu đồng.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="{{ asset('frontend/images/icons/policy-icon-3.svg') }}" alt="Hỗ trợ 24/7" />
                                    <div class="section-policy-padding">
                                        <h3>Hỗ trợ 24/7</h3>
                                        <div class="section_policy_title">Hotline: {{ $setting->phone }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="section_policy_content">
                                    <img src="{{ asset('frontend/images/icons/policy-icon-4.svg') }}" alt="Đổi trả hàng" />
                                    <div class="section-policy-padding">
                                        <h3>Đổi trả hàng</h3>
                                        <div class="section_policy_title">Trong vòng 7 ngày.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (count($categoryChosen) > 0)
    @foreach ($categoryChosen as $category)
    <section class="awe-section-4">
        <div class="section_group_product section_group_product_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-shock">
                            <div class="barbox clearfix">
                                <h2 class="titlecate">{{ $category->name }}</h2>
                                <div class="menu-button-edit">
                                    <i class="fa fa-navicon" aria-hidden="true"></i>
                                </div>
                                <ul>
                                    <li><a href="{{ route('cate-detail', ['slug' => $category->slug]) }}" class="viewmoretext">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_tab_product-owl owl-carousel owl-theme not-dqowl">
                                        <?php
                                            $products = \App\Models\Product::where('status', 1);

                                            if ($category->parent_id == 0) {
                                                $childCates = \App\Models\Category::where('parent_id', $category->id)->get();
                                                if (count($childCates) > 0) {
                                                    $arr = [];
                                                    foreach ($childCates as $child) {
                                                        $arr[] = $child->id;
                                                    }
                                                    $products->whereIn('cat_id', $arr);
                                                } else {
                                                    $products->where('cat_id', $category->id);    
                                                }
                                            } else {
                                                $products->where('cat_id', $category->id);
                                            }

                                            $results = $products->orderBy('created_at', 'desc')
                                                ->limit(7)
                                                ->get();
                                        ?>
                                        @if (count($results) > 0)
                                            @foreach ($results as $pro)
                                                <div class="item">
                                                    <div class="product-box">
                                                        <div class="product-thumbnail">
                                                            @if ($pro->discount > 0)
                                                                <div class="sale-flash">SALE</div>
                                                            @endif
                                                            <div class="product-image-flip">
                                                                <a href="{{ route('product-detail', ['cate' => $category->cateRoot->slug, 'slug' => $pro->slug]) }}" title="{{ $pro->name }}">
                                                                    <img src="{{ asset('frontend/images/icons/loaders.svg') }}" data-lazyload="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive center-block" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a href="{{ route('product-detail', ['cate' => $category->cateRoot->slug, 'slug' => $pro->slug]) }}" title="{{ $pro->name }}">{{ $pro->name }}</a></h3>
                                                            <div class="price-box clearfix">
                                                                <div class="special-price">
                                                                    <span class="price product-price">
                                                                        {{ number_format($pro->price_sale, 0, 0, '.') }}đ
                                                                    </span>
                                                                </div>
                                                                @if ($pro->discount > 0)
                                                                <div class="old-price">
                                                                    <span class="price product-price-old">
                                                                        {{ number_format($pro->price, 0, 0, '.') }}đ
                                                                    </span>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    @endif

    @if (count($featureArticles) > 0)
    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="barbox clearfix">
                                    <h2 class="titlecate">Kinh nghiệm hay</h2>
                                    <a href="{{ route('article') }}" class="viewmoretext">Xem tất cả</a>
                                </div>
                                <div class="list-blogs-link">
                                    <div class="section_blogs_owl owl-carousel owl-theme not-dqowl">
                                        @foreach ($featureArticles as $article)
                                        <div class="item">
                                            <article class="blog-item">
                                                <div class="blog-item-thumbnail">
                                                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                                        <img src="{{ asset('frontend/images/icons/loaders.svg') }}" data-lazyload="{{ $article->image }}" alt="{{ $article->title }}" class="img-responsive center-block" />
                                                    </a>
                                                </div>
                                                <div class="blog-item-contens">
                                                    <h3 class="blog-item-name margin-top-10"><a href="{{ route('article-detail', ['slug' => $article->slug]) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>
                                                    <div class="post-time">
                                                        <span>{{ $article->created_at }}</span>
                                                    </div>
                                                    <p class="blog-item-summary margin-bottom-10">{!! $article->intro !!}</p>
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @endif

    @if ($setting->seo_content != '' && $setting->seo_content != null)
    <section class="awe-section-10">
        <section class="section_group_product section-news">
            <div class="container">
                <div class="blogs-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-shock">
                                <div class="list-blogs-link seo-content">
                                    {!! $setting->seo_content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @endif
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function () {
            $('.blog-item-contens p').each(function (v, k) {
                var trim = trimText($(k).text(), 20);
                $(k).text(trim);
            });
        });

        $(".home-slider").owlCarousel({
            nav: false,
            slideSpeed: 600,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: false,
            autoHeight: false,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                543: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1300: {
                    items: 1,
                },
                1590: {
                    items: 1,
                }
            }
        });
    </script>
@stop