@extends('layouts.user.master')

@section('page')Trang chủ
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

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
@stop

@section('content')
    <h1 class="hidden">Thủy Mộc Trà</h1>

    @if (count($slides) > 0)
    <div class="full-width">
        <div class="slides">
            <div id="owl-demo" class="owl-carousel">
                @foreach ($slides as $slide)
                <div class="item">
                    @if ($slide->target_type == 'product')
                        <a title="{{ $slide->title }}" href="{{ ($slide->product) ? route('product-detail', ['slug' => $slide->product->slug]) : 'javascript:void(0)' }}" target="_self"><img src="{{ $slide->image }}" width="533" height="362" alt="{{ $slide->title }}" /></a>
                    @else
                        <a title="{{ $slide->title }}" href="{{ ($slide->article) ? route('article-detail', ['slug' => $slide->article->slug]) : 'javascript:void(0)' }}" target="_self"><img src="{{ $slide->image }}" width="533" height="362" alt="{{ $slide->title }}" /></a>
                    @endif
                    <div class="slide-text" style="display:none;">
                        <div class="slide-text-header">{{ $slide->title }}</div>
                        <div class="slide-text-line"></div>
                        <div class="slide-text-view"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end slide-->
    </div>
    @endif

    <div class="full-width box-hone about-us">
        <div class="container-site">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="box-about-us">
                        <div class="tt-home">
                            <a class="view-name" href="{{ route('about') }}" title="Giới thiệu công ty TNHH phát triển Thủy mộc trà">Giới thiệu công ty TNHH phát triển Thủy mộc trà</a>
                        </div>
                        <div class="body-news">
                            <div class="view-short">
                                 {!! $page->introduce !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="body-video">
                        <div id="myElement">
                            <iframe width="100%" height="280" src="{{ $setting->youtube_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width box-hone gtsanpham">
        <div class="container-site">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tt-home">
                        <div class="tt-home-text">
                            THỰC PHẨM BẢO VỆ SỨC KHỎE
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img alt="" src="{{ asset('backend/uploads/images/sp1.jpg') }}" style="width: 1600px; height: 1113px;" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="text-tit" style="text-align:justify;">
                        Thực phẩm bảo vệ sức khỏe l&agrave; sản phẩm được chế biến dưới dạng vi&ecirc;n nang, vi&ecirc;n ho&agrave;n, vi&ecirc;n n&eacute;n, cao, cốm, bột, lỏng v&agrave; c&aacute;c dạng chế biến kh&aacute;c c&oacute; chứa một hoặc hỗn hợp của c&aacute;c chất: Vitamin, kho&aacute;ng chất, axit amin, axit b&eacute;o, enzym, probiotic v&agrave; chất c&oacute; hoạt t&iacute;nh sinh học kh&aacute;c; Hoạt chất sinh học c&oacute; nguồn gốc tự nhi&ecirc;n từ động vật, chất kho&aacute;ng v&agrave; nguồn gốc thực vật ở c&aacute;c dạng như chiết xuất, ph&acirc;n lập, c&ocirc; đặc v&agrave; chuyển h&oacute;a. Sức khỏe l&agrave; t&agrave;i sản v&ocirc; gi&aacute; của con người v&agrave; rất cần thiết để n&acirc;ng cao sức khỏe, ch&iacute;nh v&igrave; vậy hiện nay thực phẩm bảo vệ sức khỏe đang được nhiều người quan t&acirc;m, t&igrave;m hiểu để sử dụng cho bản th&acirc;n v&agrave; những người th&acirc;n trong gia đ&igrave;nh nhằm mục đ&iacute;ch bảo vệ v&agrave; n&acirc;ng cao sức khỏe.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width box-hone dathang">
        <div class="container-site">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tt-home">
                        <div class="tt-home-text">
                            ĐẶT HÀNG VÀ KIỂM TRA SẢN PHẨM<br />
                            ĐỂ TRỞ THÀNH ĐẠI LÝ PHÂN PHỐI CỦA CHÚNG TÔI
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="text-tit" style="text-align:justify;">
                        CÔNG TY TNHH PHÁT TRIỂN THỦY MỘC TRÀ cam kết sẽ đem đến những sản phẩm tự nhiên, chất lượng cao, thân thiện với môi trường, an toàn cho người tiêu dùng. Qua đó, khơi gợi đam mê làm đẹp của người phụ nữ Việt, giúp các bạn tỏa sáng và trở nên khác biệt. Chúng tôi mong rằng sẽ đưa những giá trị tốt đẹp và chất lượng nhất của sản phẩm đến tận tay người tiêu dùng trên cả nước và vươn xa hơn nữa.
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="lienhevoichungtoi" href="{{ route('contact') }}" title="Liên hệ với chúng tôi">Liên hệ với chúng tôi
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if (count($featureArticles) > 0)
    <div class="full-width box-hone news-home-footer">
        <div class="container-site">
            <div class="row">
                <div class="box-news-event">
                    <div class="tt-home">
                        <div class="tt-home-text"> Tin tức - sự kiện</div>
                    </div>
                    <ul class="body-news">
                        <div class="row">
                            @foreach ($featureArticles as $article)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <li class="item-list">
                                    <div class="img-view">
                                        <a title="{{ $article->title }}" href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                            <img style="width:100% !important;height:100% !important;object-fit:cover;" src="{{ $article->image }}" alt="{{ $article->title }}" />
                                        </a>
                                    </div>
                                    <h5 style="margin-top:15px">
                                        <a class="link-view" title="{{ $article->title }}" href="{{ route('article-detail', ['slug' => $article->slug]) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h5>
                                    <div class="div-news-container" style="display:none;"></div>
                                </li>
                            </div>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="full-width box-hone taisao">
        <div class="container-site">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tt-home">
                        <div class="tt-home-text">
                            Tại sao chọn thủy mộc tr&agrave;
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="itemtaisaochon">
                        <div class="khunganh">
                            <div class="khungAnhCrop" href="" title="Chất lượng tuyệt vời">
                                <img alt="Chất lượng tuyệt vời" class="tall" src="{{ asset('frontend/images/icons/icon-why1.png') }}" style="width: 69px; height: 69px;" />
                            </div>
                        </div>
                        <div class="noidung_taisaochon">
                            <div class="title_taisaochon" href="" title="Chất lượng tuyệt vời">
                                Chất lượng tuyệt vời</div>
                            <div class="note_taisaochon">
                                Sản phẩm sử dụng nguy&ecirc;n liệu 100% từ thi&ecirc;n nhi&ecirc;n, kh&ocirc;ng sử dụng h&oacute;a chất, đạt ti&ecirc;u chuẩn HACCP v&agrave; v&agrave; ISO 9001:2005
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="itemtaisaochon">
                        <div class="khunganh">
                            <div class="khungAnhCrop" href="" title="Chất lượng tuyệt vời">
                                <img alt="Chất lượng tuyệt vời" class="tall" src="{{ asset('frontend/images/icons/icon-why2.png') }}" style="width: 69px; height: 69px;" />
                            </div>
                        </div>
                        <div class="noidung_taisaochon">
                            <div class="title_taisaochon" href="" title="Chất lượng tuyệt vời">
                                Tinh t&uacute;y nhất từ thi&ecirc;n nhi&ecirc;n
                            </div>
                            <div class="note_taisaochon">
                                Một đơn vị chuy&ecirc;n sản xuất c&aacute;c mặt h&agrave;ng sản phẩm, thực phẩm chức năng, thực phẩm hỗ trợ v&agrave; bảo vệ sức khỏe.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="itemtaisaochon">
                        <div class="khunganh">
                            <div class="khungAnhCrop" href="" title="Chất lượng tuyệt vời">
                                <img alt="Chất lượng tuyệt vời" class="tall" src="{{ asset('frontend/images/icons/icon-why3.png') }}" style="width: 69px; height: 69px;" />
                            </div>
                        </div>
                        <div class="noidung_taisaochon">
                            <div class="title_taisaochon" href="" title="Chất lượng tuyệt vời">
                                An to&agrave;n với người ti&ecirc;u d&ugrave;ng
                            </div>
                            <div class="note_taisaochon">
                                Đơn vị lu&ocirc;n đặt chữ &quot; T&acirc;m &quot; l&ecirc;n h&agrave;ng đầu để mang đến sự lựa chọn số một cho kh&aacute;ch h&agrave;ng.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="itemtaisaochon">
                        <div class="khunganh">
                            <div class="khungAnhCrop" href="" title="Chất lượng tuyệt vời">
                                <img alt="Chất lượng tuyệt vời" class="tall" src="{{ asset('frontend/images/icons/icon-why1.png') }}" style="width: 69px; height: 69px;" /></div>
                        </div>
                        <div class="noidung_taisaochon">
                            <div class="title_taisaochon" href="" title="Chất lượng tuyệt vời">
                                Gi&aacute; cả hợp l&yacute;</div>
                            <div class="note_taisaochon">
                                Đơn vị lu&ocirc;n hướng đến sự h&agrave;i l&ograve;ng nhất gi&agrave;nh cho kh&aacute;ch h&agrave;ng.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pageJs')
    
@stop