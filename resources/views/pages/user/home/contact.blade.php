@extends('layouts.user.master')

@section('page')Liên hệ
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('contact') }}/
@stop

@section('alternate'){{ route('contact') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('contact') }}/
@stop

@section('ogImage'){{ url('') }}{{ $setting->logo }}
@stop

@section('pageCss')

@stop

@section('content')
    <div class="main_w w_gr clearfix">

        <div class="bread">

            <ol class="breadcrumb">

                <li><a href="{{ url('') }}">{{ trans('general.home_page') }}</a></li>

                <li class="active">{{ trans('general.contact') }}</li>

            </ol>

        </div>

        <div class="contact">

            <div class="taseco_map">

                <div id="googleMap">
                    <div id="div_id">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.1672175156677!2d105.79628451501985!3d21.06598253597826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab580015eee1%3A0xb37d836e04880c4d!2sTASECO+GROUP+N02-T1!5e0!3m2!1svi!2sus!4v1525237837268" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!--end googleMap-->

            </div>

            <div class="taseco_form">

                <div class="taseco_form1">

                    <h2>{{ $setting->slogan }}</h2>
                    <p>
                        <b>Địa chỉ:</b><span style="font-family: arial, sans-serif; font-size: 12.8px;">&nbsp;{!! $setting->address !!}</span></p>
                    <p>
                        <strong>{{ trans('general.mobile') }}:&nbsp;</strong><a href="tel:{!! $setting->mobile !!}">{!! $setting->mobile !!}</a>&nbsp;- {{ trans('general.fax') }}: {!! $setting->fax !!}&nbsp;</p>
                    <p>
                        <strong>{{ trans('general.website') }}:</strong><a href="{!! $setting->website !!}">{!! $setting->website !!}</a></p>
                    <p>
                        <strong>{{ trans('general.email') }}:</strong><a href="mailto:{!! $setting->email !!}">{!! $setting->email !!}</a></p>


                </div>

                <div class="taseco_form2">

                    <h3>{{ trans('general.contact_title') }}:</h3>

                    <form name="frm_contact" style="display:block" method="post" onsubmit="return validateForm(this);">
                        <div class="form-group clearfix">

                            <label>{{ trans('general.contact_fullname') }}:<span>*</span></label>

                            <input type="text" name="txt_name" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>{{ trans('general.email') }}:<span>*</span></label>

                            <input type="text" name="txt_email" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>{{ trans('general.mobile') }}:<span>*</span></label>

                            <input type="text" name="txt_phone" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>{{ trans('general.contact_address') }}:<span>*</span></label>

                            <input type="text" name="txt_address" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>{{ trans('general.contact_content') }}:<span>*</span></label>

                            <textarea name="txt_content" class="form-control" rows="6"></textarea>

                        </div>

                        <div class="form-group captcha clearfix">

                            <label>{{ trans('general.security_code') }}:<span>*</span></label>

                            <input class="form-control" name="txt_captcha" type="text">

                            <img src="https://taseco.vn/lib/captcha/captcha.class.php" align="left" border="1" id="imgCaptcha" onclick="refreshImage(this)">

                        </div>

                        <div class="form-group form_btn clearfix">

                            <input type="reset" value="{{ trans('general.contact_reset') }}" name="" class="btn btn-default">

                            <input type="submit" value="{{ trans('general.contact_send') }}" name="" class="btn btn-primary">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@stop

@section('pageJs')
    <script type="text/javascript">

    </script>
@stop