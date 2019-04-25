@extends('layouts.user.master')

@section('page'){{ $product->name }}
@stop

@section('description'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('keywords'){{ $product->name }}, {{ ($product->category) ? $product->category->name : 'Autwatch' }}
@stop

@section('canonical'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('alternate'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('propName'){{ $product->name }}
@stop

@section('propDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogTitle'){{ $product->name }}
@stop

@section('ogDesc'){{ $product->name }} là dòng đồng hồ cao cấp của {{ ($product->category) ? $product->category->name : 'Autwatch' }} mang lại sự trang trọng, lịch sử và đẳng cấp.
@stop

@section('ogUrl'){{ route('product-detail', ['slug' => $product->slug]) }}
@stop

@section('pageCss')

@stop

@section('content')
<section class="padding-top-40 padding-bottom-60">
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
                <span class="tags">{{ $product->category->name }}</span>
                <h5>{{ $product->name }}</h5>
                <span class="tags">Model: {!! $product->sku_id !!}</span>
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
    </div>
</div>
</div>
<!-- Details Tab Section-->
<div class="item-tabs-sec">
  <!-- Nav tabs -->
  <ul class="nav" role="tablist">
     <li role="presentation" class="active"><a href="#pro-detil"  role="tab" data-toggle="tab">Thông tin sản phẩm</a></li>
     <li role="presentation"><a href="#cus-rev"  role="tab" data-toggle="tab">Bình luận</a></li>
     <!-- <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">Shipping & Payment</a></li> -->
 </ul>
 <!-- Tab panes -->
 <div class="tab-content">
     <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
        {!! ($product->full_desc != '') ? $product->full_desc : '' !!}
     </div>
      <div role="tabpanel" class="tab-pane fade" id="cus-rev">
        <div class="fb-comments" data-href="{{ route('product-detail', ['slug' => $product->slug]) }}" data-width="850" data-numposts="5"></div>
      </div>
<!-- <div role="tabpanel" class="tab-pane fade" id="ship"></div> -->
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
        <article>
            <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
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
<script type="text/javascript">
    $(document).ready(function($) {
            //  Price Filter ( noUiSlider Plugin)
            $("#price-range").noUiSlider({
                range: {
                    'min': [0],
                    'max': [1000]
                },
                start: [40, 940],
                connect: true,
                serialization: {
                    lower: [
                    $.Link({
                        target: $("#price-min")
                    })
                    ],
                    upper: [
                    $.Link({
                        target: $("#price-max")
                    })
                    ],
                    format: {
                        // Set formatting
                        decimals: 2,
                        prefix: '$'
                    }
                }
            })
        });
    </script>
    @stop