@extends('layouts.user.master')

@section('page')Liên hệ với Thủy Mộc Trà
@stop

@section('description')Liên hệ với Thủy Mộc Trà
@stop

@section('keywords')Liên hệ, Thủy Mộc Trà
@stop

@section('canonical'){{ route('contact') }}
@stop

@section('alternate'){{ route('contact') }}
@stop

@section('propName')Liên hệ với Thủy Mộc Trà
@stop

@section('propDesc')Liên hệ với Thủy Mộc Trà
@stop

@section('ogTitle')Liên hệ với Thủy Mộc Trà
@stop

@section('ogDesc')Liên hệ với Thủy Mộc Trà
@stop

@section('ogUrl'){{ route('contact') }}
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    <style>
        .heading {
            margin-bottom: 40px;
        }
        .heading h2 {
            color: #222222;
            font-size: 20px;
            margin: 0px;
            margin-bottom: 20px;
        }
        #contact_form li label {
            color: #555555;
        }
        .contact-form label {
            color: #fff;
            font-size: 14px;
            width: 100%;
            margin: 0px;
            line-height: 26px;
            position: relative;
            background: none;
            font-weight: normal;
            text-align: left;
        }
        #contact_form li {
            margin-bottom: 20px;
            list-style: none;
        }
        #contact_form li .form-control {
            border: 1px solid #e4e4e4 !important;
            border-radius: 4px;
            color: #000;
            background: none;
            box-shadow: none;
            transition: all 0.4s ease-in-out;
        }
        #contact_form li textarea {
            height: 183px !important;
            text-transform: none;
            background: #f5f5f5;
            padding: 15px 20px !important;
            color: #fff;
            font-size: 12px;
        }
        #contact_form li input {
            display: inline-block;
            width: 100%;
            line-height: 40px;
            height: 40px;
            padding: 0px 20px;
        }
        .contact-form button {
            transition: all 0.4s ease-in-out;
        }
        .contact-form button {
            border: none;
            float: left;
        }
        .btn-round {
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: #0088cc;
            color: #fff;
        }
        .contact-info {
            padding: 40px 30px;
            border: 2px solid #eeeeee;
        }
        .contact-info h5 {
            font-weight: 600;
            margin: 0px;
            margin-bottom: 5px;
            font-size: 18px;
        }
        .contact-info p {
            margin: 0px;
            color: #323131;
            font-size: 14px;
        }
        .contact-info h6 {
            font-weight: 600;
            margin: 0px;
            margin-bottom: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
@stop

@section('content')
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:30px;margin-top:20px">
                <div class="map-container" style="height:300px">
                    <iframe frameborder="0" style="border:0;width:100%;height:100%;" src="{{ $setting->google_map_url }}" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form role="form" id="contact_form" class="contact-form" method="post" onsubmit="return false">
                <div class="body-right col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding-news">
                    <div class="box-news-sub">
                        <div class="box-body homepage clearfix">
                            <!-- Payment information -->
                            <div class="heading">
                                <h2>Liên hệ với chúng tôi</h2>
                            </div>
                            <ul class="row">
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Họ tên
                                        <input type="fullname" class="form-control" name="name" id="name" placeholder="">
                                    </label>
                                </li>
                                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Email
                                        <input type="email" class="form-control" name="email" id="email" placeholder="">
                                    </label>
                                </li>
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Nội dung
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                    </label>
                                </li>
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin">
                                    <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="process();">Gửi liên hệ</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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
            </form>

        </div>
    </div>
</div>
@stop

@section('pageJs')
    <script>
        function process() {
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (name == '') {
                alert('Bạn chưa nhập tên');
                return false;
            }
            if (email == '') {
                alert('Bạn chưa nhập email');
                return false;
            }
            if (message == '') {
                alert('Bạn chưa nhập nội dung');
                return false;
            }

            alert('Liên hệ của bạn đã được gửi đi, chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất!');
        }
    </script>
@stop