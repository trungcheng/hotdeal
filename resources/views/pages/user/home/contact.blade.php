@extends('layouts.user.master')

@section('page')Liên hệ
@stop

@section('description')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('keywords')taseco, công ty taseco,hàng không thăng long
@stop

@section('canonical'){{ route('contact') }}/
@stop

@section('alternate'){{ route('contact') }}/
@stop

@section('propName')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('propDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogTitle')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('ogDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogUrl'){{ route('contact') }}/
@stop

@section('pageCss')

@stop

@section('content')
    <div class="main_w w_gr clearfix">

        <div class="bread">

            <ol class="breadcrumb">

                <li><a href="{{ url('') }}">Trang chủ</a></li>

                <li class="active">Liên hệ</li>

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

                    <h2>
                        CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG</h2>
                    <p>
                        <b>Địa chỉ:</b><span style="font-family: arial, sans-serif; font-size: 12.8px;">&nbsp;Tòa nhà NO2-T1, khu Đoàn Ngoại Giao, phố Đỗ Nhuận, phường Xuân Tảo, quận Bắc Từ Liêm, TP Hà Nội.</span></p>
                    <p>
                        <strong>Điện thoại:&nbsp;</strong><a href="tel:0437675168">+84. 24 3767 5168</a>&nbsp;- Fax: +84. 24 3767 5169&nbsp;</p>
                    <p>
                        <strong>Website:</strong><a href="{{ url('') }}">{{ url('') }}</a></p>
                    <p>
                        <strong>Email:</strong><a href="mailto:info@taseco.vn">info@taseco.vn</a></p>


                </div>

                <div class="taseco_form2">

                    <h3>Để tiện liên hệ, xin vui lòng cung cấp các thông tin sau:</h3>

                    <form name="frm_contact" style="display:block" method="post" onsubmit="return validateForm(this);">
                        <div class="form-group clearfix">

                            <label>Họ và Tên:<span>*</span></label>

                            <input type="text" name="txt_name" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>Email:<span>*</span></label>

                            <input type="text" name="txt_email" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>Điện thoại:<span>*</span></label>

                            <input type="text" name="txt_phone" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>Địa chỉ:<span>*</span></label>

                            <input type="text" name="txt_address" class="form-control" placeholder="">

                        </div>

                        <div class="form-group clearfix">

                            <label>Nội dung:<span>*</span></label>

                            <textarea name="txt_content" class="form-control" rows="6"></textarea>

                        </div>

                        <div class="form-group captcha clearfix">

                            <label>Mã bảo mật:<span>*</span></label>

                            <input class="form-control" name="txt_captcha" type="text">

                            <img src="https://taseco.vn/lib/captcha/captcha.class.php" align="left" border="1" id="imgCaptcha" onclick="refreshImage(this)">

                        </div>

                        <div class="form-group form_btn clearfix">

                            <input type="reset" value="Làm lại" name="" class="btn btn-default">

                            <input type="submit" value="Gửi liên hệ" name="" class="btn btn-primary">

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