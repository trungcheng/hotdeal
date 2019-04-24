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
	      		<li><a href="{{ route('home') }}">Trang chủ</a></li>
	      		<li class="active">Thanh toán</li>
	      		<li class="active">Thông tin giao hàng / thanh toán</li>
	    	</ol>
	  	</div>
	</div>

    <section class="padding-bottom-60">
      <form role="form" action="{{ route('postStep2') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ \Auth::id() }}">
      <div class="container"> 
        <!-- Payout Method -->
        <div class="pay-method">
          <div class="row">
            @foreach (['danger', 'warning', 'success', 'info'] as $key)
              @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
              @endif
            @endforeach
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li style="list-style:none">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="col-md-6"> 
              
              <!-- Your information -->
              <div class="heading">
                <h2>Thông tin giao hàng</h2>
                <hr>
              </div>
                <div class="row"> 
                  
                  <div class="col-sm-12">
                    <label> Họ tên khách hàng
                      <input name="customer_name" class="form-control" type="text" placeholder="Họ tên đầy đủ...">
                    </label>
                  </div>

                  <div class="col-sm-12">
                    <label> Email
                      <input name="customer_email" class="form-control" type="email" placeholder="Địa chỉ email...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Địa chỉ giao hàng
                      <input name="customer_address" class="form-control" type="text" placeholder="Địa chỉ giao hàng chính xác...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Số điện thoại
                      <input name="customer_phone" class="form-control" type="text" placeholder="Số điện thoại...">
                    </label>
                  </div>
                  
                  <div class="col-sm-12">
                    <label> Ghi chú thêm
                      <textarea name="note" class="form-control" placeholder="Ghi chú về đơn hàng..."></textarea>
                    </label>
                  </div>

                </div>
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
                  <select id="delivery" class="hide" name="delivery_method">
                    <option selected value="Vận chuyển miễn phí">Vận chuyển miễn phí</option>
                    <option value="Vận chuyển chuyển nhanh">Vận chuyển chuyển nhanh</option>
                  </select>
                  <div class="col-sm-6">
                    <div class="deli-method charges select">
                      <h6>Vận chuyển miễn phí</h6>
                      <br>
                      <span>7 - 12 ngày</span> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="deli-method charges">
                      <h6>Vận chuyển nhanh</h6>
                      <br>
                      <span>4 - 7 ngày</span> 
                      <span class="deli-charges"> +25k </span>
                  	</div>
                  </div>
                </div>
                <div class="row"> 
                  <p style="font-size:15px;padding-left:15px;">Hình thức thanh toán</p>
                  <select id="payment" class="hide" name="payment_method">
                    <option selected value="Thanh toán tiền mặt khi nhận hàng">Thanh toán tiền mặt khi nhận hàng</option>
                  </select>
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
        	<button style="border:none" type="submit" class="btn-round">Tiến hành đặt hàng</button> 
        </div>
      </div>
      </form>
    </section>
@stop

@section('pageJs')
  <script type="text/javascript">
    $('.deli-method').on('click', function () {
        $('.deli-method').removeClass('select');
        $(this).addClass('select');
        $('#delivery').val($(this).find('h6').text());
    });
  </script>
@stop