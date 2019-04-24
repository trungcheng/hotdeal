@extends('layouts.user.master')

@section('page')Đặt hàng thành công
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Oder-success -->
    <section>
      <div class="container"> 
        <!-- Payout Method -->
        <div class="order-success"> <i class="fa fa-check"></i>
          <h6>Chúc mừng! Đơn hàng của quý khách đã được xử lý</h6>
          <p>Chúng tôi đã gửi thông báo đơn hàng về email của quý khách, cảm ơn quý khách đã mua hàng tại Thạch Vũ!</p>
          <p>Nếu có bất kỳ thắc mắc gì, hãy gọi cho chúng tôi theo hotline 098.345.678</p>
          <a href="{{ route('home') }}" class="btn-round">Quay lại cửa hàng</a> </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop