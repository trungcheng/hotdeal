@extends('layouts.user.master')

@section('page')Cửa hàng
@stop

@section('pageCss')

@stop

@section('content')
  <!-- Linking -->
<div class="linking">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="#">Trang chủ</a></li>
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
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href="#."> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="" > </a> </div>
                  <div class="media-body">
                    <p>E-book Reader Lector De Libros
                      Digitales 7''</p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60">200.000 VNĐ</td>
              <td class="text-center"><!-- Quinty -->
                
                <div class="quinty padding-top-20">
                  <input type="number" value="02">
                </div></td>
              <td class="text-center padding-top-60">400.000 VNĐ</td>
              <td class="text-center padding-top-60"><a href="#." class="remove">Xóa</a></td>
            </tr>
            
            <!-- Item Cart -->
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href="#."> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="" > </a> </div>
                  <div class="media-body">
                    <p>E-book Reader Lector De Libros
                      Digitales 7''</p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60">200.000 VNĐ</td>
              <td class="text-center"><div class="quinty padding-top-20">
                  <input type="number" value="02">
                </div></td>
              <td class="text-center padding-top-60">400.000 VNĐ</td>
              <td class="text-center padding-top-60"><a href="#." class="remove">Xóa</a></td>
            </tr>
          </tbody>
        </table>
      </div>
        
        <!-- Promotion -->
        <div class="promo" style="height:70px;">
          <!-- Grand total -->
          <div class="g-totel">
            <h5>Tổng hóa đơn: <span style="color:#f00">500.000 VNĐ</span></h5>
            <span style="float:right">(Đã bao gồm VAT)</span>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn"> <a href="#." class="btn-round btn-light">Tiếp tục mua sắm</a> <a href="#." class="btn-round">Tiến hành đặt hàng</a> </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop