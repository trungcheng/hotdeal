@extends('layouts.user.master')

@section('page'){{ $product->seo_title }}
@stop

@section('description'){{ $product->seo_desc }}
@stop

@section('keywords'){{ $product->seo_keyword }}
@stop

@section('canonical'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('alternate'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('propName'){{ $product->seo_title }}
@stop

@section('propDesc'){{ $product->seo_desc }}
@stop

@section('ogTitle'){{ $product->seo_title }}
@stop

@section('ogDesc'){{ $product->desc }}
@stop

@section('ogUrl'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('pageCss')
  <style type="text/css">
    .relate {
        display: block !important;
        justify-content: space-between;
        flex-grow: 1;
        border-radius: 0;
        border-color: transparent;
        position: relative;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
    }
    .relate .thumb {
        padding-top: 100%;
        position: relative;
        display: block;
        z-index: 0;
    }
    .thumb .img-responsive {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        object-fit: cover;
        max-width: 100%;
        transition: all .2s ease-in-out;
        vertical-align: middle;
    }
    
    .cs-flex {
        display: flex;
        margin-top: 20px;
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
        width: 290px;
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
        max-width: 350px;
        display: flex;
        line-height: 25px;
        margin-top: 30px;
    }
    .hotline-footer>div {
        columns: 164px 2;
    }
    .hotline-footer strong {
        display: inline-block;
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
        width: 125px;
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
        width: 25px;
        height: 25px;
        position: absolute;
        border-radius: 50px;
        left: 7px;
        top: 7px;
    }
    .fb-like {
        display: block !important;
        margin-top: 20px;
    }
    img.cke_widget_element, .cke_image_resizer_wrapper img {
        width: 100%;
        height: auto;
    }
    .sidebar h4 {
        display: block;
        overflow: hidden;
        font-size: 20px;
        line-height: 1.3em;
        margin-top: 0px;
        margin-bottom: 5px;
    }
    .sidebar ul li {
        display: block;
        overflow: hidden;
        padding: 8px 0;
    }
    .sidebar ul li a {
        display: block;
        overflow: hidden;
    }
    .sidebar ul li a img {
        float: left;
        width: 100px;
        height: 60px;
        margin-right: 10px;
        display: block;
    }
    .sidebar ul li a h3 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        font-size: 14px;
        margin-top: 2px;
    }
    .tab-content h2 {
        display: block;
        overflow: hidden;
        font-size: 20px;
        margin-bottom: 10px;
        line-height: 1.3em;
        font-weight: bold;
        margin-top: 0;
    }
    .tab-content h3 {
        display: block;
        line-height: 1.3em;
        font-size: 20px;
        margin-bottom: 0;
    }
    #pro-detail article {
        font-size: 16px;
    }
    @media (max-width: 992px) {
        .sidebar {
            margin-top: 50px;
        }
    }
    @media (min-width: 992px) {
        .sidebar {
            width: 31.333333%;
            float: right;
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
      <li><a href="{{ route('product-detail', ['slug' => $product->category->slug]) }}">{{ $product->category->name }}</a></li>
      <li class="active">{{ $product->name }}</li>
    </ol>
  </div>
</div>
<section class="padding-top-20 padding-bottom-60">
   <div class="container">
      <div class="row">

        <!-- Products -->
        <div class="col-md-12">
            <div class="product-detail">
               <div class="product">
                  <div class="row">
                     <!-- Slider Thumb -->
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <article class="slider-item on-nav">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                  <li>
                                    <img src="{{ asset($product->image) }}" alt="">
                                </li>
                                @foreach ($image_list as $image)
                                <li>
                                    <img src="{{ asset($image) }}" alt="">
                                </li>
                                @endforeach
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider" style="margin-top:20px;">
                            <ul class="slides">
                              <li>
                                <img src="{{ asset($product->image) }}" alt="">
                            </li>
                            @foreach ($image_list as $image)
                            <li>
                                <img src="{{ asset($image) }}" alt="">
                            </li>
                            @endforeach
                            <!-- items mirrored twice, total of 12 -->
                        </ul>
                    </div>
                </article>
            </div>
            <!-- Item Content -->
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <!-- <span class="tags">{{ $product->category->name }}</span> -->
                <h1 style="font-size:25px;margin-top:10px;">{{ $product->name }}</h1>
                <span class="tags">Mã sản phẩm: {!! $product->sku_id !!}</span>
                <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                <div class="row" style="margin-top:10px;">
                   <div class="col-sm-6">
                      <span class="price">{{ number_format($product->price_sale, 0, 0, '.') }} VNĐ</span>
                      <div>
                        <del class="product-price-old">Giá retail: {{ number_format($product->price, 0, 0, '.') }} VNĐ</del>
                      </div>
                    </div>
                   <div class="col-sm-6">
                      <p style="line-height:30px;">Tình trạng: <span class="in-stock">{{ ($product->status == 1) ? 'Còn hàng' : 'Hết hàng' }}</span></p>
                  </div>
              </div>
              <!-- List Details -->
              <div style="margin-top:10px;">
              {!! ($product->short_desc != '') ? $product->short_desc : '' !!}
              </div>

           <!-- Compare Wishlist -->
           <ul class="cmp-list">
               <li><a href="javascript:void(0)"><i class="fa fa-heart"></i> Thêm vào danh sách yêu thích</a></li>
               <!-- <li><a href="#."><i class="fa fa-navicon"></i> Add to Compare</a></li> -->
               <!-- <li><a href="#."><i class="fa fa-envelope"></i> Email to a friend</a></li> -->
           </ul>
            <!-- Quinty -->
            <form method="POST" action="{{ route('cartAdd') }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="quinty">
                    <input name="quantity" type="number" value="1">
                </div>
                <button style="border:none" type="submit" id="btnAddCart" class="btn-round">
                    <i class="icon-basket-loaded margin-right-5"></i> Đặt mua ngay
                </button>
            </form>

            <div class="hotline-footer">
                <div class="chattuvan">
                    <strong class="hotline-right">
                        <a href="http://zalo.me/0943180888" style="background:#0C599C;padding-left:35px;width:160px;" rel="nofollow">
                            <img style="width:41px;border-radius:126px;position:absolute;left:0px;top:0;" src="{{ asset('frontend/images/zalo.png') }}" alt="Chat với Thạch Vũ"> &emsp;Chat tư vấn
                        </a>
                    </strong>
                </div>
                <div class="gopy-phananh">
                    <strong class="hotline-right">
                        <a href="tel:0943180888" style="padding-left:20px;width:160px;" rel="nofollow"> 
                            <div class="phone"><span>&nbsp;</span></div><div></div> &emsp; 0943 180 888
                        </a>
                    </strong>
                </div>
            </div>

    </div>
</div>
</div>
<!-- Details Tab Section-->
<div class="item-tabs-sec">
  <!-- Nav tabs -->
  <ul class="nav" role="tablist">
     <li role="presentation" class="active"><a href="#pro-detail" role="tab" data-toggle="tab">Thông tin sản phẩm</a></li>
     <li role="presentation"><a href="#cus-rev" role="tab" data-toggle="tab">Bình luận</a></li>
     <!-- <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping & Payment</a></li> -->
 </ul>
 <!-- Tab panes -->
 <div class="tab-content">
     <div role="tabpanel" class="tab-pane fade in active" id="pro-detail">
        <div class="row">
            <div class="col-md-8">
                <article>
                    {!! ($product->full_desc != '') ? $product->full_desc : '' !!}
                </article>
                <div class="fb-like" data-href="{{ route('product-detail', ['slug' => $product->slug]) }}" data-width="850" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="sidebar col-md-4">
                <h4>Tin tức nổi bật</h4>
                <ul>
                    @foreach ($featureArticles as $fea)
                    <li>
                        <a href="{{ route('article-detail', ['slug' => $fea->slug]) }}">
                            <img class="lazy" src="{{ asset($fea->image) }}" style="display: block;">
                            <h3>{{ $fea->title }}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
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
    <div role="tabpanel" class="tab-pane fade" id="cus-rev">
        <div class="fb-comments" data-href="{{ route('product-detail', ['slug' => $product->slug]) }}" data-width="780" data-numposts="10"></div>
    </div>
</div>
</div>
</div>
<!-- Related Products -->
<section class="padding-top-30 padding-bottom-0">
   <!-- heading -->
   <div class="heading">
      <h2>Sản phẩm liên quan</h2>
      <hr>
  </div>
  <!-- Items Slider -->
  <div class="item-slide-4 with-nav">
      <!-- Product -->
      @foreach ($relatedProducts as $pro)
      <div class="product">
        <article class="relate">
            <a class="thumb" href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="">
            </a> 
            <!-- Content --> 
            <!-- <span class="tag">Latop</span>  -->
            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a> 
            <!-- Reviews -->
            <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
            <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ</div>
            <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
        </article>
    </div>
    @endforeach
</div>
</section>
</div>
</div>
</div>
</section>
@stop

@section('pageJs')

@stop