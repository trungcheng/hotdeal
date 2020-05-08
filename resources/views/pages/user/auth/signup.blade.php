@extends('layouts.user.master')

@section('page')Đăng ký
@stop

@section('description')Đăng ký
@stop

@section('keywords')Đăng ký
@stop

@section('robots')noodp,noindex,nofollow
@stop

@section('canonical'){{ route('signup') }}
@stop

@section('alternate'){{ route('signup') }}
@stop

@section('propName')Đăng ký
@stop

@section('propDesc')Đăng ký
@stop

@section('ogTitle')Đăng ký
@stop

@section('ogDesc')Đăng ký
@stop

@section('ogUrl'){{ route('signup') }}
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('pageCss')
	
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

              <li><strong itemprop="title">Đăng ký tài khoản</strong></li>

            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="container mr-bottom-20">
      <h1 class="title-head text-center">Đăng ký tài khoản</h1>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="page-login">
            <div id="login">
              {{--<div class="text-center"><span>Nếu chưa có tài khoản vui lòng đăng ký tại đây</span></div>
              <div class="social-login text-center margin-bottom-10 margin-top-15">
                <script>
                  function loginFacebook() {
                    var a = {
                        client_id: "947410958642584",
                        redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                        state: JSON.stringify({
                          redirect_url: window.location.href
                        }),
                        scope: "email",
                        response_type: "code"
                      },
                      b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                    window.location.href = b
                  }

                  function loginGoogle() {
                    var a = {
                        client_id: "885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com",
                        redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                        scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                        access_type: "online",
                        state: JSON.stringify({
                          redirect_url: window.location.href
                        }),
                        response_type: "code"
                      },
                      b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                    window.location.href = b
                  }

                  function encodeURIParams(a, b) {
                    var c = [];
                    for (var d in a)
                      if (a.hasOwnProperty(d)) {
                        var e = a[d];
                        null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                      } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                  }
                </script>
                <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
              </div>--}}
              <form accept-charset="UTF-8" action="" id="customer_register" method="post">
                {{ csrf_field() }}
                <div class="form-signup clearfix">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li style="list-style:none">{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      <div class="row">
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control form-control-lg" value="" name="fullname" id="fullname" placeholder="Họ tên" required>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required />
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="Số điện thoại" required />
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Mật khẩu" required>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Xác nhận mật khẩu</label>
                            <input type="password" class="form-control form-control-lg" name="repassword" id="repassword" placeholder="Xác nhận mật khẩu" required>
                          </fieldset>
                        </div>
                      </div>
                      <div class="col-xs-12 text-center" style="margin-top:15px; padding: 0">
                        <button type="submit" value="Đăng ký" class="btn btn-style btn-blues">Đăng ký</button>
                        <a href="{{ route('signin') }}" class="btn-link-style btn-register" style="margin-left: 20px;color:#e85997;text-decoration:underline;">Đăng nhập</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

@section('pageJs')
    
@stop