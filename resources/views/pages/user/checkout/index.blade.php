@extends('layouts.user.master')

@section('page')Khách hàng mới / đăng nhập
@stop

@section('description')Khách hàng mới / đăng nhập
@stop

@section('keywords')Khách hàng mới, đăng nhập
@stop

@section('robots')noodp,noindex,nofollow
@stop

@section('canonical'){{ route('step1') }}
@stop

@section('alternate'){{ route('step1') }}
@stop

@section('propName')Khách hàng mới / đăng nhập
@stop

@section('propDesc')Khách hàng mới, đăng nhập
@stop

@section('ogTitle')Khách hàng mới / đăng nhập
@stop

@section('ogDesc')Khách hàng mới, đăng nhập
@stop

@section('ogUrl'){{ route('step1') }}
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('schema'){{ $setting->seo_schema }}
@stop

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}" />
	<style type="text/css">
		* {box-sizing: border-box}
		.tab {
		  float: left;
		  border-right: 1px solid #ccc;
		  background: #f8f8f8;
		  width: 30%;
		  height: 100%;
		}
		/* Style the buttons that are used to open the tab content */
		.tab button {
		  display: block;
		  background: inherit;
		  color: black;
		  padding: 16px 16px;
		  width: 100%;
		  border: none;
		  outline: none;
		  text-align: left;
		  cursor: pointer;
		  transition: 0.3s;
		  border-bottom: 1px solid #ccc;
		}
		/* Change background color of buttons on hover */
		.tab button:hover {
		  background: #fff;
    	  border-left: 4px solid #7e0c0c;
		}
		/* Create an active/current "tab button" class */
		.tab button.active {
		  background: #fff;
		  border-left: 4px solid #7e0c0c;
		}
		.tab button span {
			display: block;
		    width: 100%;
		    font-size: 16px;
		    text-transform: uppercase;
		}
		.tab button i {
			color: #818181;
		    font-size: 11px;
		    font-style: normal;
		}
		/* Style the tab content */
		.tabcontent {
		  float: left;
		  padding: 15px 12px;
		  /*border: 1px solid #ccc;*/
		  width: 70%;
		  border-left: none;
		}
		.tab-wrapper {
			border: 1px solid #ccc;
		    width: 100%;
		    height: 280px;
		    display: inline-table;
		}
	</style>
@stop

@section('content')

	<section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
							<strong itemprop="title">Thanh toán</strong>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
                        <li><strong itemprop="title">Khách hàng mới / đăng nhập</strong></li>
                    </ul>
                </div>
            </div>
        </div>
	</section>
	
	<section class="shopping-cart padding-bottom-60">
      	<div class="container">
        	<h5 class="text-uppercase padding-bottom-10">Khách hàng mới / Đăng nhập</h5>
        	<div class="tab-wrapper">
				<div class="tab">
					<button id="defaultOpen" class="tablinks" onclick="openCity(event, 'Login')">
						<span>Đăng nhập</span>
						<i>Đã là thành viên kingbep</i>
					</button>
					<button class="tablinks" onclick="openCity(event, 'Register')">
						<span>Tạo tài khoản</span>
						<i>Dành cho khách hàng mới</i>
					</button>
				</div>

				<div id="Login" class="tabcontent">
					<div id="login-form" class="col-md-10 col-md-offset-1" style="display:block;">
	                    <form method="POST" onsubmit="return false;" action="" id="login_popup_form" novalidate="novalidate">
	                    	{{ csrf_field() }}
	                        <div class="form-group has-feedback" id="popup_login">
	                            <label class="control-label">Email</label>
	                            <input autofocus id="popup-login-email" type="text" class="form-control login focus-input" name="email" placeholder="Nhập email">
	                            <span class="help-block ajax-message"></span>
	                        </div>
	                        <div class="form-group has-feedback" id="popup_password">
	                            <label class="control-label">Mật khẩu</label>
	                            <input type="password" id="login_password" class="form-control login" name="password" placeholder="Nhập mật khẩu" autocomplete="off" data-bv-field="password"><i class="form-control-feedback" data-bv-icon-for="password" style="display: none;"></i>
	                            <span class="help-block ajax-message"></span>
	                        </div>
	                        <div class="form-group">
	                            {{--<p style="max-width:100%" class="reset">Quên mật khẩu? Khôi phục mật khẩu 
	                            	<a style="color:#337ab7" data-toggle="modal" data-target="#reset-password-form" href="#">tại đây</a>
	                        	</p>--}}
	                            <button style="width:100%;margin-top:10px;border:none" type="submit" id="login_popup_submit" class="button btn btn-blues btn-large btn-block btn-danger btn-checkout">Đăng nhập</button>
	                        </div>
	                    </form>
	                </div>
				</div>

				<div id="Register" class="tabcontent">
					<div id="register-form" class="col-md-10 col-md-offset-1" style="display:block;">
	                    <form id="register_popup_form" onsubmit="return false;" class="content bv-form" method="POST" action="" novalidate="novalidate">
	                    	{{ csrf_field() }}
	                    	<div class="form-group" id="register_name">
	                            <label class="control-label"><strong>Họ tên</strong></label>
	                            <div class="input-wrap has-feedback">
	                                <input type="text" class="form-control register" name="fullname" id="fullname" placeholder="Nhập họ tên" data-bv-field="fullname">
	                                <span class="help-block ajax-message"></span>
	                        	</div>
	                        </div>
	                        <div class="form-group" id="register_email">
	                            <label class="control-label" for="email"><strong>Email</strong></label>
	                            <div class="input-wrap has-feedback">
	                                <input autofocus type="text" class="form-control register register-email-input focus-input" name="email" id="email_for_register" placeholder="Nhập email" data-bv-field="email">
	                                <span class="help-block ajax-message"></span>
	                        </div>
	                        <div class="form-group" id="register_name">
	                            <label class="control-label"><strong>Số điện thoại</strong></label>
	                            <div class="input-wrap has-feedback">
	                                <input type="text" class="form-control register" name="mobile" id="mobile" placeholder="Nhập số điện thoại" data-bv-field="mobile">
	                                <span class="help-block ajax-message"></span>
	                        	</div>
	                        </div>
	                        <div class="form-group" id="register_password">
	                            <label class="control-label" for="pasword"><strong>Mật khẩu</strong></label>
	                            <div class="input-wrap has-feedback">
	                                <input type="password" class="form-control register" name="password" placeholder="Mật khẩu từ 6 đến 32 ký tự" autocomplete="off" data-bv-field="password">
	                                <span class="help-block ajax-message"></span>
	                        	</div>
	                        </div>
	                        <div class="form-group policy-group">
	                            <div class="input-wrap">
	                                <p style="max-width:100%" class="policy">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a style="color:#337ab7" target="_blank" href="{{ route('term-of-service') }}">điều khoản dịch vụ</a> và <a style="color:#337ab7" target="_blank" href="{{ route('policy-security') }}">chính sách bảo mật</a> của King Bếp.</p>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <button style="width:100%;margin-top:10px;border:none" type="submit" id="register_popup_submit" class="button btn btn-blues btn-large btn-block btn-danger btn-checkout">Đăng ký</button>
	                        </div>
	                    </form>
	                </div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('pageJs')
	<script src="{{ asset('backend/js/toastr.min.js?').time() }}"></script>
	<script type="text/javascript">
        $(function () {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
        });
    </script>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		  	var i, tabcontent, tablinks;
		  	tabcontent = document.getElementsByClassName("tabcontent");
		  	for (i = 0; i < tabcontent.length; i++) {
		    	tabcontent[i].style.display = "none";
		  	}
		  	tablinks = document.getElementsByClassName("tablinks");
		  	for (i = 0; i < tablinks.length; i++) {
		    	tablinks[i].className = tablinks[i].className.replace(" active", "");
		  	}
		  	document.getElementById(cityName).style.display = "block";
		  	evt.currentTarget.className += " active";
		  	$('.focus-input').focus();
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();

		$('#login_popup_form').on('submit', function (e) {
			e.preventDefault();

            var formData = new FormData($(this)[0]);
            $.ajax({
                url: '{{ route("ajax-signin") }}',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'json',
                crossDomain: true,
                data: formData,
                success: function (response) {
                    if (!response.status) {
                        toastr.error(response.message, 'ERROR');
                    } else {
                    	window.location.href = "{{ route('step2') }}";
                    }
                }
            });
		});

		$('#register_popup_form').on('submit', function (e) {
			e.preventDefault();

            var formData = new FormData($(this)[0]);
            $.ajax({
                url: '{{ route("ajax-signup") }}',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                dataType: 'json',
                crossDomain: true,
                data: formData,
                success: function (response) {
                    if (!response.status) {
                        toastr.error(response.message, 'ERROR');
                    } else {
                    	window.location.href = "{{ route('step2') }}";
                    }
                }
            });
		});

	</script>
@stop