@extends('layouts.user.master')

@section('page')Cửa hàng
@stop

@section('description')Cửa hàng
@stop

@section('keywords')Cửa hàng
@stop

@section('canonical'){{ route('cart') }}
@stop

@section('alternate'){{ route('cart') }}
@stop

@section('propName')Cửa hàng
@stop

@section('propDesc')Cửa hàng
@stop

@section('ogTitle')Cửa hàng
@stop

@section('ogDesc')Cửa hàng
@stop

@section('ogUrl'){{ route('cart') }}
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}">Trang chủ</a></li>
      <li class="active">Giỏ hàng</li>
  </ol>
</div>
</div>

<!-- Ship Process -->
    <!-- <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <li class="col-sm-3 current">
            <div class="media-left"> <i class="flaticon-shopping"></i> </div>
            <div class="media-body"> <span>Bước 1</span>
              <h6>Giỏ hàng</h6>
            </div>
          </li>
          
          <li class="col-sm-3">
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body"> <span>Bước 2</span>
              <h6>Phương thức thanh toán</h6>
            </div>
          </li>
          
          <li class="col-sm-3">
            <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
            <div class="media-body"> <span>Bước 3</span>
              <h6>Phương thức vận chuyển</h6>
            </div>
          </li>
          
          <li class="col-sm-3">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Bước 4</span>
              <h6>Xác nhận thông tin</h6>
            </div>
          </li>
        </ul>
      </div>
  </div> -->
  <!-- Shopping Cart -->
  <section class="shopping-cart padding-bottom-60">
      <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
      @endif
      <h5 class="text-uppercase padding-bottom-10">Giỏ hàng</h5>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th class="text-center">Giá</th>
              <th class="text-center">Số lượng</th>
              <th class="text-center">Tổng giá</th>
              <th>&nbsp; </th>
          </tr>
      </thead>
      <tbody>

        <!-- Item Cart -->
        @foreach($cart as $item)
        <tr>
          <td><div class="media">
              <div class="media-left"> <a href="{{ route('product-detail', ['cate' => $item->options->cate, 'slug' => $item->options->slug]) }}"> <img class="img-responsive" src="{{ asset($item->options->image) }}" alt="" > </a> </div>
              <div class="media-body">
                <p>{{ $item->name }}</p>
            </div>
        </div></td>
        <td class="text-center padding-top-60">{{ number_format($item->price, 0, 0, '.') }} VNĐ</td>
        <td class="text-center"><!-- Quinty -->
            <div class="quinty padding-top-20">
                <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="decrease" value="1">
                    <button style="width:20px;" type="submit">
                        <i class="fa fa-minus"></i>
                    </button>
                </form>
                <input style="width:40%;margin:0 5px;" type="text" value="{{ $item->qty }}" autocomplete="off" size="2">
                <form style="display:inline" method="POST" action="{{ route('cartUpdate') }}">
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="increment" value="1">
                    <button style="width:20px;" type="submit">
                        <i class="fa fa-plus"></i>
                    </button>
                </form>
          </div></td>
          <td class="text-center padding-top-60">{{ number_format($item->subtotal, 0, 0, '.') }} VNĐ</td>
          <form method="POST" action="{{ route('cartDelete') }}">
            <input type="hidden" name="product_id" value="{{ $item->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <td class="text-center padding-top-60">
                <button style="width:40px;" type="submit">Xóa</button>
            </td>
          </form>
      </tr>
      @endforeach


  </tbody>
</table>
</div>

    <!-- Promotion -->
    <div class="promo" style="height:70px;">
        <!-- Grand total -->
        @if (count($cart) > 0)
            <div class="g-totel">
                <h5>Tổng hóa đơn: <span style="color:#f00">{{ $total }} VNĐ</span></h5>
                <span style="float:right">(Đã bao gồm VAT)</span>
            </div>
        @else
            <h6 style="font-size:15px;" class="text-center">Chưa có sản phẩm nào trong giỏ hàng</h6>
        @endif
    </div>

    <!-- Button -->
    <div class="pro-btn"> 
        <a href="{{ route('home') }}" class="btn-round btn-light">Tiếp tục mua sắm</a> 
        @if (count($cart) > 0)
        <a href="{{ route('step1') }}" class="btn-round">Tiến hành đặt hàng</a> 
        @endif
    </div>
</div>
</section>
@stop

@section('pageJs')

@stop