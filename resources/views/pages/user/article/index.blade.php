@extends('layouts.user.master')

@section('page')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp
@stop

@section('description')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('keywords')tin tức, thiết bị vệ sinh, phong thủy nhà bếp, tin tức thiết bị vệ sinh
@stop

@section('canonical'){{ route('article') }}
@stop

@section('alternate'){{ route('article') }}
@stop

@section('propName')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('propDesc')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogTitle')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogDesc')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogUrl'){{ route('article') }}
@stop

@section('pageCss')
  <style type="text/css">
    .blog-post article img {
        height: auto;
    }
    .cs-flex {
        display: flex;
    }
    .list-view {
        background: #fbfbfb;
        border-radius: 3px;
        width: 100%;
    }
    .list-view .item {
        border: 1px solid #e5e5e5;
        margin-bottom: -1px;
        padding: 5px 0;
    }
    .list-view .item .image {
        width: 60px;
        height: 70px;
        background: #fafafa;
    }
    .list-view .item .about {
        padding: 0 10px;
        width: 190px;
    }
    .list-view .item .about .title {
        font-size: 14px;
        margin: 0;
        padding: 15px 0 2px;
        font-weight: 700;
    }
    .list-view .item .about .description {
        font-size: 14px;
    }

    .hotline-footer {
        width: 100%;
        margin-top: 0px;
    }
    .hotline-footer strong {
        line-height: 25px;
        text-align: left;
    }
    .hotline-right {
        line-height: 25px;
        text-align: left;
    }
    .hotline-right a {
        position: relative;
        background: #804d00;
        color: #fff!important;
        font-size: 16px;
        border-radius: 50px;
        padding: 8px 8px 8px 0px;
        display: block;
        width: 100%;
    }
    .phone {
        position: absolute;
        top: 1px;
        left: 1px;
    }
    .phone span {
        position: absolute;
        top: 7px;
        left: 6px;
        width: 25px;
        height: 25px;
        background: url(/frontend/images/phone0.png) no-repeat top;
    }
    .phone+div {
        border: 1px solid #fff;
        width: 38px;
        height: 38px;
        position: absolute;
        border-radius: 126px;
        left: 2px;
        top: 2px;
    }
    @media (max-width: 768px) {
        .image-block {
            margin-bottom: 15px;
        }
    }
  </style>
@stop

@section('content')
<!-- Linking -->
<div class="linking">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}">Trang chủ</a></li>
      <li class="active">Tin tức</li>
  </ol>
</div>
</div>

<!-- Blog -->
@if (count($articles) > 0)
<section class="blog-page padding-top-20 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-md-9"> 

        <!-- Blog Post -->
        @foreach ($articles as $article)
        <div class="blog-post">
            <article class="row">
                <div class="image-block col-lg-7 col-md-7 col-sm-7 col-xs-12"> 
                    <img class="img-responsive" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}" > 
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"> 
                    <span><i class="fa fa-bookmark-o"></i> {{ $article->created_at }}</span> 
                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="tittle">{{ $article->title }}</a>
                    {!! $article->intro !!}
                    <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">Đọc thêm</a>
                </div>
            </article>
        </div>
        @endforeach
      
      <!-- pagination -->
      {{ $articles->appends(request()->query())->links() }}
  </div>

  <!-- Side Bar -->
  <div class="col-md-3">
    <div class="shop-side-bar"> 

      <!-- <h6>Recent Posts</h6>
      <div class="recent-post"> 

        <div class="media">
          <div class="media-left"> <a href=""><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="">It’s why there’s
          nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
        </div>
      </div> -->

      <div class="hotline-footer">
          <div class="chattuvan" style="margin-bottom: 15px;">
              <strong class="hotline-right">
                  <a href="http://zalo.me/0943180888" style="background:#0C599C;padding-left:35px;" rel="nofollow">
                      <img style="width:41px;border-radius:126px;position:absolute;left:0px;top:0;" src="{{ asset('frontend/images/zalo.png') }}" alt="Chat với Thạch Vũ"> &emsp;Chat zalo với chúng tôi
                  </a>
              </strong>
          </div>
          <div class="gopy-phananh" style="margin-bottom: 15px;">
              <strong class="hotline-right">
                  <a href="tel:0943180888" style="padding-left:30px;" rel="nofollow"> 
                      <div class="phone"><span>&nbsp;</span></div><div></div> &emsp; Hotline: 0943 180 888
                  </a>
              </strong>
          </div>
      </div>

      <div class="cs-flex">
        <!-- List View. -->
        <div class="list-view">
            <div class="item cs-flex" style="padding-bottom: 15px;">
                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/shiper1.png) no-repeat center">
                </div>
                <div class="about">
                    <h3 class="title">Giao hàng toàn quốc</h3>
                    <span class="description">Nhận hàng &amp; thanh toán tiền tại nhà, ship hàng siêu nhanh</span>
                </div>
            </div>
            <div class="item cs-flex" style="padding-bottom: 15px;">
                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/change1.png) no-repeat center">
                </div>
                <div class="about">
                    <h3 class="title">Đổi trả nhanh gọn</h3>
                    <span class="description">Đổi trả hàng trong vòng 30 ngày, chấp nhận bất kỳ lý do</span>
                </div>
            </div>
            <div class="item cs-flex" style="padding-bottom: 15px;">
                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/phone.png) no-repeat center">
                </div>
                <div class="about">
                    <h3 class="title">Tư vấn nhiệt tình</h3>
                    <span class="description">Đội ngũ chuyên viên tư vấn có kiến thức chuẩn và body đẹp</span>
                </div>
            </div>
            <div class="item cs-flex" style="padding-bottom: 15px;">
                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/gift-icon.png) no-repeat center">
                </div>
                <div class="about">
                    <h3 class="title">Giá tốt kèm quà tặng</h3>
                    <span class="description">Nhiều chương trình giảm giá, tặng quà cực giá trị</span>
                </div>
            </div>
        </div>
        <!-- End List View -->
    </div>
  
    </div>
</div>
</div>
</div>
</section>
@endif
@stop

@section('pageJs')
  <script type="text/javascript">
      $(function () {
        // $('.blog-post p').each(function (v, k) {
        //     var trim = trimText($(k).text(), 30);
        //     $(k).text(trim);
        // });
      });
  </script>
@stop