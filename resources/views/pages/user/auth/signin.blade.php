@extends('layouts.user.master')

@section('page')Đăng nhập | Vincom Retail
@stop

@section('description')Đăng nhập.
@stop

@section('keywords')Đăng nhập
@stop

@section('canonical'){{ route('getSignIn') }}
@stop

@section('alternate'){{ route('getSignIn') }}
@stop

@section('propName')Đăng nhập.
@stop

@section('propDesc')Đăng nhập.
@stop

@section('ogTitle')Đăng nhập.
@stop

@section('ogDesc')Đăng nhập.
@stop

@section('ogUrl'){{ route('getSignIn') }}
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">Đăng nhập</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3"> 
            <!-- Login Your Account -->
            <h5 class="text-uppercase">Đăng nhập</h5>
            <!-- FORM -->
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
            <form action="" method="POST">
              {{ csrf_field() }}
              <ul class="row">
                <li class="col-sm-12">
                  <label>Email / Số điện thoại
                    <input autofocus type="text" class="form-control" name="email" placeholder="Nhập email hoặc số điện thoại">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Mật khẩu
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                  </label>
                </li>
                <li class="col-sm-6">
                  <div class="checkbox checkbox-primary">
                    <input id="cate1" class="styled" type="checkbox">
                    <label for="cate1"> Nhớ mật khẩu </label>
                  </div>
                </li>
                <li class="col-sm-6"> <a href="#." class="forget">Quên mật khẩu?</a> </li>
                <li class="col-sm-12 text-left">
                  <button style="width:100%;margin-top:30px;" type="submit" class="btn-round">Đăng nhập</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop