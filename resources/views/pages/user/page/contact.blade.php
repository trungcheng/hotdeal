@extends('layouts.user.master')

@section('page')Liên hệ
@stop

@section('description')Liên hệ
@stop

@section('keywords')Liên hệ
@stop

@section('canonical'){{ route('contact') }}
@stop

@section('alternate'){{ route('contact') }}
@stop

@section('propName')Liên hệ
@stop

@section('propDesc')Liên hệ
@stop

@section('ogTitle')Liên hệ
@stop

@section('ogDesc')Liên hệ
@stop

@section('ogUrl'){{ route('contact') }}
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Trang chủ</a></li>
          <li class="active">Liên hệ</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <section class="map-block margin-bottom-40">
          <div class="map-container" style="height: 300px">
              <iframe frameborder="0" style="border:0; width: 100%; height: 100%;" src="https://maps.google.com/maps?q=s%E1%BB%91%201%20nguy%E1%BB%85n%20huy%20t%C6%B0%E1%BB%9Fng&t=&z=17&ie=UTF8&iwloc=&output=embed" allowfullscreen=""></iframe>
          </div>
        </section>
        
        <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Liên hệ với chúng tôi</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>Họ tên
                        <input type="fullname" class="form-control" name="name" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Email
                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Nội dung
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="proceed();">Gửi liên hệ</button>
                    </li>
                  </ul>
                </div>
                
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>{{ $setting->name }}</h5>
                    <p>{{ $setting->slogan }}</p>
                    <hr>
                    <h6> Địa chỉ:</h6>
                    <p>{!! $setting->address !!}</p>
                    <h6>Điện thoại:</h6>
                    <p>{!! $setting->phone !!}</p>
                    <h6>Email:</h6>
                    <p>{{ $setting->email }}</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop