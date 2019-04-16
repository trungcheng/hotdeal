@extends('layouts.user.master')

@section('page')Không tìm thấy trang
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Error Page -->
    <section>
      <div class="container">
        <div class="order-success error-page"> <img src="{{ asset('frontend/images/error-img.jpg') }}" alt="" >
          <h3>Lỗi <span>404</span> Không tìm thấy trang</h3>
          <p>Không tìm thấy trang bạn đang truy cập.<br>
            bạn hãy chuyển tới <a href="#.">trang chủ</a></p>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop