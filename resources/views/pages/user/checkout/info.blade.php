@extends('layouts.user.master')

@section('page')Thông tin giao hàng / thanh toán
@stop

@section('pageCss')
	
@stop

@section('content')
	<!-- Linking -->
	<div class="linking">
	  	<div class="container">
	    	<ol class="breadcrumb">
	      		<li><a href="#">Trang chủ</a></li>
	      		<li class="active">Thanh toán</li>
	      		<li class="active">Thông tin giao hàng / thanh toán</li>
	    	</ol>
	  	</div>
	</div>

    <section class="padding-bottom-60">
      <div class="container"> 
        <!-- Payout Method -->
        <div class="pay-method">
          <div class="row">
            <div class="col-md-6"> 
              
              <!-- Your information -->
              <div class="heading">
                <h2>Thông tin giao hàng</h2>
                <hr>
              </div>
              <form>
                <div class="row"> 
                  
                  <div class="col-sm-12">
                    <label> Họ tên đầy đủ
                      <input name="full_name" class="form-control" type="text" placeholder="Họ tên đầy đủ...">
                    </label>
                  </div>

                  <div class="col-sm-12">
                    <label> Email
                      <input name="email" class="form-control" type="email" placeholder="Email...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Địa chỉ giao hàng
                      <input name="address" class="form-control" type="text" placeholder="Địa chỉ giao hàng chính xác...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Số điện thoại
                      <input name="phone" class="form-control" type="text" placeholder="Số điện thoại...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Ghi chú thêm
                      <textarea name="note" class="form-control" placeholder="Ghi chú về đơn hàng..."></textarea>
                    </label>
                  </div>

                </div>
              </form>
            </div>
            
            <!-- Select Your Transportation -->
            <div class="col-md-6">
              <div class="heading">
                <h2>Thông tin thanh toán</h2>
                <hr>
              </div>
              <div class="transportation">
                <div class="row"> 
                  <p style="font-size:15px;padding-left:15px;">Phương thức vận chuyển</p>
                  <!-- Free Delivery -->
                  <div class="col-sm-6">
                    <div class="charges select">
                      <h6>Vận chuyển miễn phí</h6>
                      <br>
                      <span>7 - 12 ngày</span> </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="charges">
                      <h6>Vận chuyển nhanh</h6>
                      <br>
                      <span>4 - 7 ngày</span> 
                      <span class="deli-charges"> +25k </span>
                  	</div>
                  </div>
                </div>
                <div class="row"> 
                  <p style="font-size:15px;padding-left:15px;">Hình thức thanh toán</p>
                  <div class="col-sm-6">
                    <div class="charges select">
                      <h6>Thanh toán tiền mặt khi nhận hàng</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn"> 
        	<a href="{{ route('cart') }}" class="btn-round btn-light">Trở lại</a> 
        	<a href="#." class="btn-round">Xác nhận đặt hàng</a> 
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop