@extends('layouts.user.master')

@section('page'){{ $article->seo_title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ route($article->route) }}/
@stop

@section('alternate'){{ route($article->route) }}/
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route($article->route) }}/
@stop

@section('ogImage'){{ $setting->logo }}
@stop

@section('schema'){{ $article->seo_schema }}
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
                    {{--<div class="logos text-xs-left">
                        <a href="/" class="logo-wrapper">
                            <img src="{{ $setting->logo }}" alt="Logo KingBep" class="img-responsive" />
                        </a>
                    </div>
                    <p></p>--}}
                    <!-- End .widget-title -->
                    <ul class="widget-menu contact-info-page">
                        <li>
                            <h3 style="font-size:1.42857em;font-weight:700;">{!! $setting->name !!}</h3>
                            <p style="margin-top:-5px;display:block;">{!! $setting->slogan !!}</p> 
                        </li>
                        <li>
                            <i class="fa fa-map-marker color-x" aria-hidden="true"></i> 
                            {!! $setting->address !!}
                        </li>
                        <li>
                            <i class="fa fa-phone color-x" aria-hidden="true"></i> 
                            <a href="tel:{{ str_replace(' ', '', $setting->phone) }}">{{ $setting->phone }}</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> 
                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </li>
                    </ul>
                    <!-- End .widget-menu -->
                </div>
            </div>
            <div class="col-md-9 col-md-pull-3">
                <div class="page-login">
                    <div id="login">
                        <h1 class="title-head">Liên hệ</h1>
                        <span>Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                        <form accept-charset="UTF-8" action="/lien-he" id="contact" method="post">
                            <input name="FormType" type="hidden" value="contact" />
                            <input name="utf8" type="hidden" value="true" />
                            <input type="hidden" id="Token-233e305034e94956ab72a9813d0d3026" name="Token" />
                            
                            <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                            <script>
                                grecaptcha.ready(function() {
                                    grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                            action: "/lien-he"
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
        <iframe src="{{ $setting->google_map_url }}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@stop

@section('pageJs')

@stop