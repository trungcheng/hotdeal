@extends('layouts.user.master')

@section('page'){{ $category->name }}
@stop

@section('description')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('keywords')taseco, công ty taseco,hàng không thăng long
@stop

@section('canonical'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('alternate'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('propName')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('propDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogTitle')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('ogDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogUrl'){{ route('detail', ['slug' => $category->slug]) }}/
@stop

@section('pageCss')

@stop

@section('content')
<div class="main_w w_gr clearfix">
    <div class="carousel slide" id="carousel_main">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661516424.jpg">
            </div>
            <div class="item">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/14661516332.jpg">
            </div>
            <div class="item active">
                <img alt="slide3" src="https://taseco.vn/upload/grouptintuc/146615162012.jpg">
            </div>
        </div>
        <!-- Controls -->
        <a data-slide="prev" href="#carousel_main" class="left carousel-control">
            <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a data-slide="next" href="#carousel_main" class="right carousel-control">
            <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bread">
        <ol class="breadcrumb">
            <li><a href="https://taseco.vn/">Trang chủ</a></li>

            <li><a href="https://taseco.vn/#.html">Tin tức - Sự kiện</a></li>

            <li class="active">Báo chí và Taseco</li>
        </ol>
    </div>
    <div class="main">
        <div class="main_col4">
            <div class="news_dtw">
                <h1>TASECO Land: Thương hiệu định hình từ uy tín</h1>


                <div class="content-detail">
                    <p style="text-align: justify;">
                        <span style="font-size:14px;"><strong>TP - Hơn 10 năm tham gia vào thị trường bất động sản,
                                TASECO Land đã khẳng định được thương hiệu của mình đến từ chính chất lượng của các sản
                                phẩm dự án.</strong></span></p>
                    <p style="text-align: center;">
                        <strong><img alt="" src="https://taseco.vn/upload/userfiles/images/1(159).jpg"
                                style="width: 665px; height: 449px;"></strong></p>
                    <p style="text-align: center;">
                        <em><span style="font-size:14px;"><span font-style:="" helvetica=""
                                    style="color: rgb(119, 119, 119); font-family: roboto, ">Tòa nhà An Bình Complex -
                                    Khu đô thị Đoàn Ngoại giao</span></span></em></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <strong><span style="font-size:14px;">Hành trình phát triển của Taseco Land</span></strong></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;">
                        <span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 11.5pt;">Công ty
                            Cổ phần đầu tư Bất động sản TASECO (TASECO Land) được thành lập từ năm 2009, là đơn vị thành
                            viên của TASECO Group. Theo đó, hoạt động cốt lõi của công ty chủ yếu tập trung vào các lĩnh
                            vực xây dựng, đầu tư, kinh doanh và phát triển bất động sản. Tính đến nay, TASECO Land đã có
                            vốn điều lệ lên tới 900 tỷ đồng với hệ thống 7 đơn vị thành viên.</span></p>
                    <p style="text-align: center;">
                        <img alt="" src="https://taseco.vn/upload/userfiles/images/2(164).jpg"
                            style="width: 665px; height: 886px;"></p>
                    <p style="text-align: center;">
                        <em><span style="font-size:14px;"><span font-style:="" helvetica=""
                                    style="font-family: roboto, ">Dự án À La Carte Hạ Long vừa được vinh danh là một
                                    trong những “Thiết kế Khách sạn” tốt nhất Việt Nam 2019 tại Lễ trao giải IPAX Châu Á
                                    Thái Bình Dương</span></span></em></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Nhìn lại một chặng đường hơn 10 năm hình thành và phát triển, đến
                            nay, TASECO Land đã đạt được nhiều thành tựu mang tính đột phá, từng bước tiến tới mô hình
                            hoạt động của một Tổng Công ty đầu tư, phát triển bất động sản chuyên nghiệp tại Việt Nam.
                            Thành công hơn đó là các dự án của TASECO Land luôn dẫn đầu trên thị trường về tỷ lệ thanh
                            khoản lớn. Hơn 1 thập kỷ trôi qua, những dấu ấn của doanh nghiệp này để lại trên bản đồ bất
                            động sản Việt Nam ngày càng đậm nét.</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Đến nay, TASECO Land đã và đang triển khai 12 dự án trên các địa
                            bàn tỉnh và thành phố lớn trên cả nước như dự án An Bình Complex, TASECO Complex, Phú Mỹ
                            Complex tại Khu đoàn ngoại giao, thành phố Hà Nội; dự án Khu nhà ở thấp tầng TT32, TT84,
                            TT164 tại Khu đô thị Nam An Khánh tại Hoài Đức, Hà Nội; Khu phố Shophouse mặt đường Trần Phú
                            thuộc Khu đô thị Dệt may tại thành phố Nam Định; dự án Khu đô thị kết hợp Công viên Cây xanh
                            Green Park tại thành phố Móng Cái, tỉnh Quảng Ninh; 04 dự án khu đô thị tại Thanh Hóa; dự án
                            Green Park tại Phú Quốc…</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;"><strong>Uy tín đến từ chất lượng</strong></span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Mặc dù sở hữu bảng dài các dự án có tên tuổi, nhưng có một điều lạ
                            rằng, trên thị trường TASECO Land vẫn còn là cái tên hiếm hoi xuất hiện trên các phương tiện
                            thông tin đại chúng. Trong khi đó, với giới đầu tư, TASECO Land lại trở thành cái tên “đắt”
                            hàng nhất.</span></p>
                    <p class="article-sapo cms-desc" color:="" font-size:="" font-weight:="" helvetica=""
                        line-height:="" style="box-sizing: border-box; margin: 0px 0px 10px; text-align: center;"
                        text-align:="">
                        <img alt="" src="https://taseco.vn/upload/userfiles/images/3(134).jpg"
                            style="width: 665px; height: 443px;"></p>
                    <p style="text-align: center;">
                        <span style="font-size:14px;"><em>Công ty Cổ phần Quản lý BĐS Quốc tế - IMCS góp phần quan trọng
                                vào sự phát triển của tập đoàn</em></span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Giới quan sát cho rằng, yếu tố làm nên thương hiệu của TASECO Land
                            đó chính là chất lượng sản phẩm. Ngay từ thời điểm bước chân vào lĩnh vực bất động sản,
                            những người lãnh đạo của TASECO Land đã luôn định hình dòng sản phẩm theo dòng cao cấp, đảm
                            bảo chất lượng 5 sao.</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Vị lãnh đạo của TASECO Land từng chia sẻ rằng, với sản phẩm bất
                            động sản, chất lượng là yếu tố tiên quyết đầu tiên giúp khách hàng đến với mình. Và để giữ
                            chân được khách hàng lâu dài cũng như tạo dựng thương hiệu thì chính sách “hậu mãi” là điều
                            vô cùng quan trọng.&nbsp;</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Trên quan điểm đó,TASECO Land đã có sự đầu tư bài bản và chuyên
                            nghiệp vào các công ty vận hành và quản lý tòa nhà. Trong một lần trò chuyện, vị lãnh đạo
                            của TASECO Land cũng cho biết, Công ty xác định chiến lược đầu tư dịch vụ quản lý tòa nhà sẽ
                            kiến tạo ra môi trường sống thực thụ cho cư dân và đặc biệt góp phần gia tăng giá trị sản
                            phẩm bất động sản. Bởi vậy mà TASECO Land đã có sự tuyển chọn những nhân sự cấp cao, có kinh
                            nghiệm làm việc để thành lập Công ty Cổ phần Quản lý Bất động sản Quốc tế - IMCS.</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Với việc đầu tư bài bản đó, những dự án mang tên TASECO Land dù đã
                            đi vào hoạt động nhiều năm nhưng chất lượng vẫn được đánh giá là còn nguyên giá trị. Đó cũng
                            là lý do vì sao các sản phẩm của TASECO Land ngay từ thời điểm tung ra thị trường luôn “đắt”
                            khách và dù cái tên “TASECO Land” hiếm xuất hiện trên kênh phương tiện truyền thông.</span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Hiện tại, TASECO Land đang triển khai xây dựng tòa nhà Căn hộ
                            khách sạn 42 tầng hiện đại nhất Hạ Long với thượng hiệu À La Carte Ha Long. Dự kiến công
                            trình sẽ chính thức đi vào hoạt động đầu năm 2022.</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Đặc biệt, TASECO Land hiện đang chuẩn bị các thủ tục đầu tư để
                            chính thức khởi công dự án tháp đôi 55 tầng trên diện tích đất 2,36 ha nằm trung tâm khu đô
                            thị Tây Hồ Tây (Star Lake) tại Hà Nội. Dự án bao gồm một tháp Khách sạn cao cấp 55 tầng, một
                            tháp văn phòng hạng A và trung tâm thương mại cao cấp 55 tầng. Đây là công trình cao nhất do
                            Doanh nghiệp Việt Nam là chủ Đầu tư.</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;"><strong>Dự án À La Carte Hạ Long - Ngọn hải đăng soi sáng vịnh kỳ
                                quan</strong></span></p>
                    <p style="text-align: justify;">
                        <span style="font-size:14px;">Là dự án condotel thứ 5 tại Quảng Ninh, dự án tòa nhà hỗn hợp
                            Thương mại dịch vụ và căn hộ chung cư À La Carte Hạ Long, Quảng Ninh (À La Carte Hạ Long) là
                            dự án duy nhất tính tới thời điểm này có vị trí nằm tại bán đảo trung tâm của khu đô thị
                            Marina Plaza, sở hữu tầm nhìn hướng Vịnh kỳ quan và nằm sát bãi biển. À La Carte Hạ Long
                            được thiết kế theo tiểu chuẩn 5 sao quốc tế hứa hẹn trở thành dự án sinh lời hấp dẫn
                            nhất.</span></p>
                    <p style="text-align: center;">
                        <img alt="" src="https://taseco.vn/upload/userfiles/images/4(110).jpg"
                            style="width: 660px; height: 670px;"></p>
                    <p style="text-align: center;">
                        <em><span style="font-size:14px;">Phối cảnh Alacarte Hạ Long</span></em></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span
                                style="font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Condotel
                                À La Carte Hạ Long nằm tại bán đảo trung tâm (bán đảo số 2) của khu đô thị Marina Plaza.
                                Tiếp giáp tuyến đường Hoàng Quốc Việt - Tuyến đường cửa ngõ thành phố Hạ Long, quảng
                                trường Time Square và bãi tắm Hùng Thắng. Lấy cảm hứng từ quảng trường thời đại NewYork
                                (Mỹ) và bến cảng Sydney (Úc), khu đô thị này được kỳ vòng trở thành một trung tâm tài
                                chính tầm cỡ không chỉ của Hạ Long mà còn cả khu vực.</span></span><span
                            style="font-size:11.5pt;font-family:">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span
                                style="font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Với
                                vị trí tiếp giáp biển - À La Carte Hạ Long trở thành condotel đầu tiên tại Hạ Long nằm
                                kế bên một bãi tắm. Do địa thế phức tạp bị ngăn cách bởi nhiều đồi núi thêm vào đó là
                                không có bãi tắm tự nhiên nên để một khách sạn tại Hạ Long có thể sở hữu vị trí sát bên
                                bãi tắm là vô cùng hiếm.</span></span><span style="font-size:11.5pt;font-family:
">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span
                                    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Đặc
                                    biệt với tầm view hướng trọn Vịnh Hạ Long, À La Carte Hạ Long được ví như một ngọn
                                    Hải Đăng soi sáng kỳ quan thiên nhiên thế giới. Với kỳ vọng tạo lên một công trình
                                    tiêu biểu và là biểu tượng cho sự phát triển của thành phố Hạ Long, chủ đầu tư đã
                                    lựa chọn đơn vị thiết kế là Aedas, một trong những đơn vị thiết kế hàng đầu thế
                                    giới. Dự án À La Carte Hạ Long vừa được vinh danh là một trong những “Thiết kế Khách
                                    sạn” tốt nhất Việt Nam 2019 tại Lễ trao giải IPAX Châu Á Thái Bình Dương, diễn ra
                                    tại Bangkok vào đầu tháng 8 vừa qua.</span></span></span><span style="font-size:11.5pt;font-family:
">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span
                                    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Được
                                    biết, Dự án Alacarte Hạ Long có tổng vốn xây dựng lên tới 2.500 tỷ, thời gian dự
                                    kiến hoàn thiện dự án vào Quý IV năm 2021 gồm 789 căn hộ cao
                                    cấp.</span></span></span><span style="font-size:11.5pt;
font-family:">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span
                                    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Khách
                                    quan nhìn nhận rằng, hơn một thập kỷ bước chân vào thị trường bất động sản,TASECO
                                    Land đã thực sự chinh phục được niềm tin và tình cảm của khách hàng bằng những sản
                                    phẩm bất động sản có chất lượng tốt, uy tín, được thị trường đánh giá
                                    cao.</span></span></span><span style="font-size:11.5pt;font-family:">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span
                                    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Mỗi
                                    dự án được TASECO Land đầu tư đều trở thành một khu cư dân với không gian sống chuẩn
                                    mực, lý tưởng với hàng loạt các tiện ích hoàn hảo và đẳng
                                    cấp.</span></span></span><span style="font-size:11.5pt;
font-family:">
                            <o:p></o:p>
                        </span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span
                                    style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">TASECO
                                    Land đã thực sự trở thành thương hiệu trong lòng khách
                                    hàng.&nbsp;</span></span></span></p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        &nbsp;</p>
                    <p
                        style="margin: 0cm 0cm 11.25pt; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size:14px;">
                            <o:p></o:p>
                        </span></p>
                    <p style="text-align: right;">
                        <span style="font-size:14px;"><strong>Theo tienphong.vn</strong></span></p>
                    <p style="text-align: right;">
                        &nbsp;</p>
                </div>
                <!----SHRE--->
                <div class="news_social clearfix">
                    <ul>
                        <li><a href="http://www.facebook.com/share.php?u=https://taseco.vn/bao-chi-va-taseco/taseco-landthuong-hieu-dinh-hinh-tu-uy-tin.html"
                                target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com/home?status=https://taseco.vn/bao-chi-va-taseco/taseco-landthuong-hieu-dinh-hinh-tu-uy-tin.html"
                                target="_blank" class="btn btn-primary"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/share?url=https://taseco.vn/bao-chi-va-taseco/taseco-landthuong-hieu-dinh-hinh-tu-uy-tin.html"
                                target="_blank" class="btn btn-primary"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div>
                <!----- end share--->
            </div>

            <div class="news_dtlq">
                <h4>Tin tức khác</h4>
                <ul>


                    <li><a title="Đất nền Green Park Thanh Hóa cháy hàng trong đợt mở bán đầu tiên"
                            href="https://taseco.vn/bao-chi-va-taseco/dat-nen-green-park-thanh-hoa-chay-hang-trong-dot-mo-ban-dau-tien.html">Đất
                            nền Green Park Thanh Hóa cháy hàng trong đợt mở bán đầu tiên
                            <!--<span>(15/11/2019)</span>--></a></li>


                    <li><a title="Thời điểm vàng sở hữu shophouse Green Park Thanh Hóa"
                            href="https://taseco.vn/bao-chi-va-taseco/thoi-diem-vang-so-huu-shophouse-green-park-thanh-hoa.html">Thời
                            điểm vàng sở hữu shophouse Green Park Thanh Hóa
                            <!--<span>(15/11/2019)</span>--></a></li>


                    <li><a title="Tháp đôi 55 tầng và tham vọng của Taseco"
                            href="https://taseco.vn/bao-chi-va-taseco/thap-doi-55-tang-va-tham-vong-cua-taseco.html">Tháp
                            đôi 55 tầng và tham vọng của Taseco
                            <!--<span>(01/10/2019)</span>--></a></li>


                    <li><a title="Công ty CP Dịch vụ hàng không Thăng Long (Taseco): NLĐ là tài sản quý"
                            href="https://taseco.vn/bao-chi-va-taseco/cong-ty-cp-dich-vu-hang-khong-thang-long-(taseco)nld-la-tai-san-quy.html">Công
                            ty CP Dịch vụ hàng không Thăng Long (Taseco): NLĐ là tài sản quý
                            <!--<span>(26/09/2019)</span>--></a></li>
                </ul>
            </div>

        </div>
        <div class="main_col3">
            <div class="sidebar">
                <div class="panel panel-success">
                    <div class="panel_icon">
                        <h1> Danh mục</h1>
                    </div>
                    <div class="panel-body">
                        <div class="sidebar_ul">
                            <ul>
                                <li><a href="https://taseco.vn/tin-taseco.html">Tin Taseco</a></li>
                                <li><a href="https://taseco.vn/bao-chi-va-taseco.html">Báo chí và Taseco</a></li>
                                <li><a href="https://taseco.vn/tin-lien-quan.html">Tin liên quan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('pageJs')
<script type="text/javascript">

</script>
@stop