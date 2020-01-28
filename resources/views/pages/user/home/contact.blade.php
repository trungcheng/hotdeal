@extends('layouts.user.master')

@section('page')Liên hệ
@stop

@section('description')
@stop

@section('keywords')Liên hệ, Ant Kitchen, ant-kitchen.mysapo.net
@stop

@section('canonical'){{ route('contact') }}/
@stop

@section('alternate'){{ route('contact') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('contact') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
@stop

@section('pageCss')
    <style>
        footer.footer-other {
            margin-top: 0;
        }

        .search-more {
            margin-top: 0;
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

                        <li><strong itemprop="title">Liên hệ</strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container contact">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                <div class="widget-item info-contact in-fo-page-content">
                    <div class="logos text-xs-left">

                        <a href="/" class="logo-wrapper ">
                            <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/logo-contact.png?1576740881097" alt="logo Ant Kitchen" class="img-responsive" />
                        </a>

                    </div>
                    <p></p>
                    <!-- End .widget-title -->
                    <ul class="widget-menu contact-info-page">

                        <li><i class="fa fa-map-marker color-x" aria-hidden="true"></i> 175 Lý Thường Kiệt, Phường 6, Quận Tân Bình, TP. Hồ Chí Minh.</li>
                        <li><i class="fa fa-phone color-x" aria-hidden="true"></i> <a href="tel:0982362509">0982 362 509</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:baotrung304@gmail.com">baotrung304@gmail.com</a></li>

                    </ul>
                    <!-- End .widget-menu -->
                </div>
            </div>
            <div class="col-md-9 col-md-pull-3">
                <div class="page-login">
                    <div id="login">
                        <h1 class="title-head">Liên hệ</h1>
                        <span>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                        <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
                            <input name="FormType" type="hidden" value="contact" />
                            <input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-233e305034e94956ab72a9813d0d3026" name="Token" />
                            <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                            <script>
                                grecaptcha.ready(function() {
                                    grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                            action: "/contact"
                                        })
                                        .then(function(token) {
                                            document.getElementById("Token-233e305034e94956ab72a9813d0d3026").value = token
                                        });
                                });
                            </script>


                            <div class="form-signup clearfix">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <fieldset class="form-group">
                                            <label>Họ tên<span class="required">*</span></label>
                                            <input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <fieldset class="form-group">
                                            <label>Email<span class="required">*</span></label>
                                            <input type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <fieldset class="form-group">
                                            <label>Điện thoại<span class="required">*</span></label>
                                            <input type="tel" name="contact[tel]" data-validation="tel" data-validation-error-msg="Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required />
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <fieldset class="form-group">
                                            <label>Nội dung<span class="required">*</span></label>
                                            <textarea name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg="Không được để trống" data-validation="required" required></textarea>
                                        </fieldset>
                                        <div class="pull-xs-left" style="margin-top:20px;">
                                            <button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
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

    <div class="box-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3660844155734!2d106.65262831405934!3d10.78324826201816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec84dbc2ab5%3A0xe952d650e50b188f!2zMTc1IEzDvSBUaMaw4budbmcgS2nhu4d0LCBwaMaw4budbmcgNiwgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1500909626466" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@stop

@section('pageJs')

@stop