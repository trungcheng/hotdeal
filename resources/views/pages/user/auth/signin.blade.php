@extends('layouts.user.master')

@section('page')Đăng nhập
@stop

@section('description')Đăng nhập
@stop

@section('keywords')Đăng nhập
@stop

@section('robots')noodp,noindex,nofollow
@stop

@section('canonical'){{ route('signin') }}
@stop

@section('alternate'){{ route('signin') }}
@stop

@section('propName')Đăng nhập
@stop

@section('propDesc')Đăng nhập
@stop

@section('ogTitle')Đăng nhập
@stop

@section('ogDesc')Đăng nhập
@stop

@section('ogUrl'){{ route('signin') }}
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
              <li><strong itemprop="title">Đăng nhập tài khoản</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="container mr-bottom-20">
      <h1 class="title-head text-center"><span>Đăng nhập tài khoản</span></h1>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
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
          <div class="page-login margin-bottom-30">
            <div id="login">
              {{--<span>
                Nếu bạn đã có tài khoản, đăng nhập tại đây.
              </span>
              <div class="social-login margin-top-15 margin-bottom-10">
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
              <form accept-charset="UTF-8" action="" id="customer_login" method="post">
                {{ csrf_field() }}
                <div class="form-signup clearfix">
                  <fieldset class="form-group">
                    <label>Email / Số điện thoại</label>
                    <input type="text" class="form-control form-control-lg" name="email" id="customer_email" placeholder="Email hoặc số điện thoại" required />
                  </fieldset>
                  <fieldset class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="customer_password" placeholder="Mật khẩu" required />
                  </fieldset>
                  <div class="pull-xs-left" style="margin-top: 15px;">
                    <input class="btn btn-style btn-blues" type="submit" value="Đăng nhập" />
                    <a href="{{ route('signup') }}" class="btn-link-style btn-register" style="margin-left: 20px;color:#e85997;text-decoration:underline;">Đăng ký</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        {{--<div class="col-lg-6">
          <div id="recover-password" class="form-signup">
            <span>
              Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
            </span>
            <form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
              <input name="FormType" type="hidden" value="recover_customer_password" />
              <input name="utf8" type="hidden" value="true" />
              <div class="form-signup aaaaaaaa">

              </div>

              <div class="form-signup clearfix">
                <fieldset class="form-group">
                  <label>Email: </label>
                  <input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" />
                </fieldset>
              </div>
              <div class="action_bottom">
                <input class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit" value="Lấy lại mật khẩu" />
              </div>
            </form>
          </div>
        </div>--}}
      </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
      function showRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'block';
        document.getElementById('login').style.display = 'none';
      }

      function hideRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'none';
        document.getElementById('login').style.display = 'block';
      }
    </script>
@stop