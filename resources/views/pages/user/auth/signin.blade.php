@extends('layouts.user.master')

@section('page')Đăng nhập
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
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
            <form>
              <ul class="row">
                <li class="col-sm-12">
                  <label>Tên đăng nhập
                    <input type="text" class="form-control" name="name" placeholder="Tên đăng nhập hoặc email">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Mật khẩu
                    <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
                  </label>
                </li>
                <li class="col-sm-6">
                  <div class="checkbox checkbox-primary">
                    <input id="cate1" class="styled" type="checkbox" >
                    <label for="cate1"> Nhớ mật khẩu </label>
                  </div>
                </li>
                <li class="col-sm-6"> <a href="#." class="forget">Quên mật khẩu?</a> </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">Đăng nhập</button>
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