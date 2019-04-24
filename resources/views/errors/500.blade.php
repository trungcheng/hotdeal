@extends('layouts.user.master')

@section('page')Có lỗi xảy ra
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Error Page -->
    <section>
      <div class="container">
        <div class="order-success error-page"> <img src="{{ asset('frontend/images/error-img.jpg') }}" alt="" >
          <h3>Lỗi <span>500</span> Oops!</h3>
          <p>Có lỗi xảy ra trong quá trình xử lý<br>
            Quay lại <a href="{{ route('home') }}">trang chủ</a></p>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop