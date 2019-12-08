@extends('layouts.user.master')

@section('page'){{ trans('general.home_page') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
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

@section('ogImage'){{ url('') }}{{ $setting->logo }}
@stop

@section('pageCss')
    
@stop

@section('content')
    @if (count($slides) > 0)
    <div class="slider_w">
        <div id="carousel_pri" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($slides as $slide)
                <div class="item {!! $loop->first ? 'active': '' !!}">
                    <a href="#"><img src="{{ $slide->image }}" alt="{{ $slide->getTranslation(app()->getLocale())->title }}"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>{{ $slide->getTranslation(app()->getLocale())->title }}</h3>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel_pri" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel_pri" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    @endif

    <div class="slg_taseco">
        <div class="w_gr slg_tasecow">
            <div id="owl_slgtaseco" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>{!! trans('general.vision.title') !!}</h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="#"><img src="https://taseco.vn/upload/about/thumb/14591347111457542094tamnhin.jpg"></a>
                                <div class="txt_trading">
                                    {!! trans('general.vision.content') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>{!! trans('general.mission.title') !!}</h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="#"><img src="https://taseco.vn/upload/about/thumb/1466664537Untitled-4.jpg"></a>
                                <div class="txt_trading">
                                    {!! trans('general.mission.content') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>{!! trans('general.core_value.title') !!}</h3></h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="#"><img src="https://taseco.vn/upload/about/thumb/146580014114591347911457541564gia-tri-cot-loi.jpg"></a>
                                <div class="txt_trading">
                                    {!! trans('general.core_value.content') !!}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="customNavigation">
              <a class="btn prev">Previous</a>
              <a class="btn next">Next</a>
              <a class="btn play">Autoplay</a>
              <a class="btn stop">Stop</a>
            </div>-->
        </div>
    </div>

    @if (count($cateTypes) > 0)
        @foreach ($cateTypes as $cate)
            @if ($cate->layout == 1)
                <div class="fie_w">
                    <div class="w_gr">
                        <div class="fie_top">
                            <h1>{{ $cate->getTranslation(app()->getLocale())->name }}</h1>
                        </div>
                        @if (count($cate['childCates']) > 0)
                            <div id="owl_fie" class="owl-carousel owl-theme">
                                @foreach ($cate['childCates'] as $child)
                                    <div class="item">
                                        <div class="thumbnail">
                                            <a href="{{ route('detail', ['slug' => $child->slug]) }}" class="thumbnail_img">
                                                <img src="{{ $child->image }}" alt="{{ $child->name }}">
                                            </a>
                                            <div class="caption">
                                                <h3><a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->getTranslation(app()->getLocale())->name }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <div class="box_news2303">
                    <div class="w_gr box_news2303w clearfix">
                        <div class="box_newsw">
                            <div class="box_newsw1">
                                <div class="head_news_2013">
                                    <h2><a href="#">{{ $cate->getTranslation(app()->getLocale())->name }}</a></h2>
                                </div>
                                @if ($cate['hotNew'] && $cate['firstCate'])
                                <div class="hotsiteleft">
                                    <a class="thumbnail" href="{{ route('detail-article', ['parent' => $cate['firstCate']->slug, 'slug' => $cate['hotNew']->slug]) }}">
                                        <img src="{{ $cate['hotNew']->image }}">
                                    </a>
                                    <h2>
                                        <a class="title" href="{{ route('detail-article', ['parent' => $cate['firstCate']->slug, 'slug' => $cate['hotNew']->slug]) }}">{{ $cate['hotNew']->getTranslation(app()->getLocale())->title }}</a>
                                    </h2>
                                    <h3 class="intro">{!! $cate['hotNew']->getTranslation(app()->getLocale())->intro !!}</h3>
                                </div>
                                @endif
                            </div>
                            @if (count($cate['listNews']) > 0)
                            <div class="bnews_bootstrap">
                                <div class="panel panel-success">
                                    <div class="panel-body">
                                        <ul class="news_tb news_tded">
                                            @foreach ($cate['listNews'] as $new)
                                            <li class="news-item">
                                                <a href="{{ route('detail-article', ['parent' => $new->category->slug, 'slug' => $new->slug]) }}" class="news_item_img">
                                                    <img src="{{ $new->image }}" />
                                                </a>
                                                <a href="{{ route('detail-article', ['parent' => $new->category->slug, 'slug' => $new->slug]) }}" class="news_item_txt">
                                                    {{ $new->getTranslation(app()->getLocale())->title }}
                                                    <!--<span class="date_newsty"><span class="date_newsty">(10/09/2019)</span></span>-->
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="panel-footer">

                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="box_news2303_qc">
                            <a href="{{ route('detail', ['slug' => $tvHinhanh->slug]) }}" class="thumbnail">
                                <img src="https://taseco.vn/upload/grouptintuc/1543474581video-1.gif" alt="Thư viện hình ảnh" class="img-responsive">
                                <span class="box_news2303_tlt">{{ $tvHinhanh->getTranslation(app()->getLocale())->name }}</span>
                            </a>
                            <a href="{{ route('detail', ['slug' => $video->slug]) }}" class="thumbnail">
                                <img src="https://taseco.vn/upload/grouptintuc/1543474825avarta video.jpg" alt="Video" class="img-responsive">
                                <span class="box_news2303_tlt">{{ $video->getTranslation(app()->getLocale())->name }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
@stop

@section('pageJs')
    <script type="text/javascript">
        var title = $('.title').text();
        title = trimText(title, 20);
        var intro = $('.intro').text();
        intro = trimText(intro, 40);
        $('.title').text(title);
        $('.intro').text(intro);

        function trimText(str ,wordCount) {
            var strArray = str.split(' ');
            var subArray = strArray.slice(0, wordCount);
            var result = subArray.join(" ");
            if (strArray.length < wordCount) {
                return result;
            } else {
                return result + '...';
            }
        }
    </script>
@stop