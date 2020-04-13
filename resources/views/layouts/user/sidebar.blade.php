<div class="body-left col-lg-4 col-md-4 col-sm-12 col-xs-12">
    @if (isset($type) && $type == 'product' && count($categories) > 0)
    <div class="box-support" style="padding:0">
        <div class="header">Danh mục sản phẩm</div>
        <div class="box-body" style="padding:0">
            <ul class="product-cates">
                @foreach ($categories as $cate)
                    <li><a href="{{ route('product-detail', ['slug' => $cate->slug]) }}">{{ $cate->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="box-support">
        <div class="header">Hỗ trợ trực tuyến</div>
        <div class="box-body">
            <div class="chattuvan" style="margin-bottom: 15px;">
                <strong class="hotline-right">
                    <a href="http://zalo.me/{{ $setting->phone }}" style="background:#0C599C;" rel="nofollow">
                        <img style="width:35px;border-radius:126px;position:absolute;left:0px;top:0;" src="{{ asset('frontend/images/zalo.png') }}" alt="Chat với Thủy Mộc Trà"> 
                        <span>Chat zalo với chúng tôi</span>
                    </a>
                </strong>
            </div>
            <div class="gopy-phananh">
                <strong class="hotline-right">
                    <a href="tel:{{ $setting->phone }}" rel="nofollow">
                        <div class="phone"><span></span></div>
                        <div></div> 
                        <span>Hotline: {{ $setting->phone }}</span>
                    </a>
                </strong>
            </div>
        </div>
    </div>

    @if (count($sidebarArticles) > 0)
    <div class="box-news-hot">
        <div class="header">Tin mới</div>
        <ul class="body-news" style="min-height:347px">
            @foreach ($sidebarArticles as $article)
            <li class="item-list">
                <div class="img-view" style="float:left">
                    <a title="{{ $article->title }}" href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                        <img src="{{ $article->image }}" alt="{{ $article->title }}">
                    </a>
                </div>
                <h5>
                    <a class="link-view" title="{{ $article->title }}" href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                        {{ $article->title }}
                    </a>
                </h5>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>