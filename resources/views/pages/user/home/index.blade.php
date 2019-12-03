@extends('layouts.user.master')

@section('page')Trang chủ
@stop

@section('description')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('keywords')taseco, công ty taseco,hàng không thăng long
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('propDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogTitle')CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG
@stop

@section('ogDesc')TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    
@stop

@section('content')
    <div class="slider_w">
        <div id="carousel_pri" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/156584134015.8.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/150114405620.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/150242156222.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1542169361alacate.jpg" alt="PHỐI CẢNH ALACARTE HẠ LONG BAY"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>PHỐI CẢNH ALACARTE HẠ LONG BAY</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1522289295alacarte ha long 2.jpg" alt="PHỐI CẢNH ALACARTE HẠ LONG BAY"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>PHỐI CẢNH ALACARTE HẠ LONG BAY</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1542012277N02T1 3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1542179387NĐ3.jpg" alt="Khu ĐT dệt may Nam Định"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>Khu ĐT dệt may Nam Định</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1543473293alacarte.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/146501482412.jpg" alt="Lucky Restaurant nhà ga T2 - CHK Quốc Tế Nội Bài"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>Lucky Restaurant nhà ga T2 - CHK Quốc Tế Nội Bài</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1519890751san bay aht 2.jpg" alt="Cảng Hàng không Quốc tế Đà Nẵng"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>Cảng Hàng không Quốc tế Đà Nẵng</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1519890787san bay aht.jpg" alt="Cảng Hàng không Quốc tế Đà Nẵng"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>Cảng Hàng không Quốc tế Đà Nẵng</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/1505356866vinacs1.jpg" alt="VINACS NỘI BÀI"></a>
                    <div class="carousel-caption caption_ed">
                        <h3>VINACS NỘI BÀI</h3>
                    </div>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/15541939782019 2.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="https://taseco.vn/upload/slideshow/15511703302019.jpg" alt=""></a>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel_pri" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel_pri" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="slg_taseco">
        <div class="w_gr slg_tasecow">
            <div id="owl_slgtaseco" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>TẦM NHÌN</h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="https://taseco.vn/tam-nhin.htm"><img src="https://taseco.vn/upload/about/thumb/14591347111457542094tamnhin.jpg"></a>
                                <div class="txt_trading">
                                    <p>
                                        <p style="text-align: justify;">
                                            Trở th&agrave;nh tập đo&agrave;n đầu tư, kinh doanh chuy&ecirc;n nghiệp h&agrave;ng đầu Việt Nam hoạt động đa ng&agrave;nh, trong đ&oacute; lấy kinh doanh dịch vụ phi h&agrave;ng kh&ocirc;ng &nbsp;tại c&aacute;c s&acirc;n bay quốc tế, dịch vụ kh&aacute;ch sạn; Đầu tư kinh doanh bất...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>SỨ MỆNH</h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="https://taseco.vn/su-menh.htm"><img src="https://taseco.vn/upload/about/thumb/1466664537Untitled-4.jpg"></a>
                                <div class="txt_trading">
                                    <p>
                                        <p style="text-align: justify;">
                                            <span style="font-size:12px;">Kh&ocirc;ng&nbsp;ngừng&nbsp;s&aacute;ng&nbsp;tạo,&nbsp;đổi mới, phấn&nbsp;đấu&nbsp;tạo&nbsp;ra&nbsp;những sản phẩm v&agrave; dịch vụ phong ph&uacute;, chất lượng cao l&agrave;m h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng;&nbsp;chia sẻ lợi &iacute;ch, đồng...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-slgtaseco">
                        <div class="item_tasecotlt">
                            <h3>Giá trị cốt lõi</h3>
                        </div>
                        <div class="box_trading">
                            <div class="box_trading1">
                                <a class="img_trading" href="https://taseco.vn/gia-tri-cot-loi.htm"><img src="https://taseco.vn/upload/about/thumb/146580014114591347911457541564gia-tri-cot-loi.jpg"></a>
                                <div class="txt_trading">
                                    <p>
                                        <p>
                                            <span style="font-size:12px;">- Coi trọng chất lượng sản phẩm, dịch vụ v&agrave; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng, đặt lợi &iacute;ch kh&aacute;ch h&agrave;ng l&ecirc;n h&agrave;ng đầu.</span></p>
                                        <p>
                                            <span style="font-size:12px;">- Giữ uy t&iacute;n, bảo đảm niềm tin của kh&aacute;ch...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="customNavigation">
              <a class="btn prev">Previous</a>
              <a class="btn next">Next</a>
              <a class="btn play">Autoplay</a>
              <a class="btn stop">Stop</a>
            </div>-->
        </div>
    </div>
    <div class="fie_w">
        <div class="w_gr">
            <div class="fie_top">
                <h1>Lĩnh vực đầu tư</h1>
            </div>
            <div id="owl_fie" class="owl-carousel owl-theme">

                <div class="item">
                    <div class="thumbnail">
                        <a href="https://taseco.vn/kinh-doanh-bat-dong-san.html" class="thumbnail_img"><img src="https://taseco.vn/upload/grouptintuc/1543473851avartar kinh doanh BDS.jpg" alt="Kinh doanh Bất động sản"></a>
                        <div class="caption">
                            <h3><a href="https://taseco.vn/kinh-doanh-bat-dong-san.html">Kinh doanh Bất động sản</a></h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <a href="https://taseco.vn/dich-vu-phi-hang-khongkhach-san.html" class="thumbnail_img"><img src="https://taseco.vn/upload/grouptintuc/152466833814592223880814-AJS-A-La-Carte-Danang-4549.jpg" alt="DV phi hàng không, khách sạn"></a>
                        <div class="caption">
                            <h3><a href="https://taseco.vn/dich-vu-phi-hang-khongkhach-san.html">DV phi hàng không, khách sạn</a></h3>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <a href="https://taseco.vn/dau-tu-tai-chinh.html" class="thumbnail_img"><img src="https://taseco.vn/upload/grouptintuc/1459332897investment.jpg" alt="Đầu tư tài chính"></a>
                        <div class="caption">
                            <h3><a href="https://taseco.vn/dau-tu-tai-chinh.html">Đầu tư tài chính</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box_news2303">
        <div class="w_gr box_news2303w clearfix">
            <div class="box_newsw">
                <div class="box_newsw1">
                    <div class="head_news_2013">
                        <h2><a href="https://taseco.vn/#.html">Tin tức - Sự kiện</a></h2>
                    </div>
                    <div class="hotsiteleft">
                        <a class="thumbnail" href="https://taseco.vn/tin-taseco/phat-dong-cuoc-thi-tim-kiem-tai-nang-tasecos-gottalent.html"><img src="https://taseco.vn/upload/tintuc/156871348871508737_2177218862570870_2032073294026375168_n.jpg"></a>
                        <h2><a href="https://taseco.vn/tin-taseco/phat-dong-cuoc-thi-tim-kiem-tai-nang-tasecos-gottalent.html">PHÁT ĐỘNG CUỘC THI TÌM KIẾM TÀI NĂNG TASECOS GOT TALENT</a></h2>
                        <h3>Hướng tới kỷ niệm 15 năm thành lập Công ty Cổ phần Dịch vụ Hàng không Thăng Long (24/2/2005-24/2/2019), Taseco đã và đang tổ chức các hoạt động đẩy mạnh...</h3>
                    </div>
                </div>

                <div class="bnews_bootstrap">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <ul class="news_tb news_tded">
                                <li class="news-item">
                                    <a href="https://taseco.vn/bao-chi-va-taseco/taseco-landthuong-hieu-dinh-hinh-tu-uy-tin.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15681020181.jpg" /></a>
                                    <a href="https://taseco.vn/bao-chi-va-taseco/taseco-landthuong-hieu-dinh-hinh-tu-uy-tin.html" class="news_item_txt">TASECO Land: Thương hiệu định hình từ uy tín
                                        <!--<span class="date_newsty"><span class="date_newsty">(10/09/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/mua-chi-phoi-cong-ty-hang-mien-thuetaseco-airs-bao-lai-quy-2-2019-tang-77-so-voi-cung-ky-nam-truoc.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1564640993taseco20airs-thue-vnf-1549964942446502811166-crop-1549964948186219703544-15646256040501058499412-crop-15646256773171952195765.jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/mua-chi-phoi-cong-ty-hang-mien-thuetaseco-airs-bao-lai-quy-2-2019-tang-77-so-voi-cung-ky-nam-truoc.html" class="news_item_txt">MUA CHI PHỐI CÔNG TY HÀNG MIỄN THUẾ, TASECO AIRS BÁO LÃI QUÝ 2/2019 TĂNG 77% SO VỚI CÙNG KỲ NĂM TRƯỚC
                                        <!--<span class="date_newsty"><span class="date_newsty">(01/08/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/cong-ty-co-phan-dich-vu-hang-khong-taseco-(taseco-airsvinh-du-duoc-cong-nhẬn-la-mot-trong-500-dn-tang-truong-va-thinh-vuong-nam-2019.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15584942001(100).jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/cong-ty-co-phan-dich-vu-hang-khong-taseco-(taseco-airsvinh-du-duoc-cong-nhẬn-la-mot-trong-500-dn-tang-truong-va-thinh-vuong-nam-2019.html" class="news_item_txt">CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG TASECO (TASECO AIRS) VINH DỰ ĐƯỢC CÔNG NHẬN LÀ MỘT TRONG 500 DN TĂNG TRƯỞNG VÀ THỊNH VƯỢNG NĂM 2019
                                        <!--<span class="date_newsty"><span class="date_newsty">(22/05/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/dich-vu-suat-an-hang-khong-kinh-doanh-co-laitaseco-airs-bao-lai-tang-truong-23-trong-quy-1-2019.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1556848357IMG_5887(2).jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/dich-vu-suat-an-hang-khong-kinh-doanh-co-laitaseco-airs-bao-lai-tang-truong-23-trong-quy-1-2019.html" class="news_item_txt">DỊCH VỤ SUẤT ĂN HÀNG KHÔNG KINH DOANH CÓ LÃI, TASECO AIRS BÁO LÃI TĂNG TRƯỞNG 23% TRONG QUÝ 1/2019
                                        <!--<span class="date_newsty"><span class="date_newsty">(03/05/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/vinacs-vinh-du-don-nhẬn-cu-dup-danh-heu-best-global-network-caterer-va-best-caterer-in-asia-pacific-do-qatar-airways-trao-tang.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15554881491(98).jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/vinacs-vinh-du-don-nhẬn-cu-dup-danh-heu-best-global-network-caterer-va-best-caterer-in-asia-pacific-do-qatar-airways-trao-tang.html" class="news_item_txt">VINACS VINH DỰ ĐÓN NHẬN CÚ ĐÚP DANH HIỆU BEST GLOBAL NETWORK CATERER VÀ BEST CATERER IN ASIA PACIFIC DO QATAR AIRWAYS TRAO TẶNG
                                        <!--<span class="date_newsty"><span class="date_newsty">(17/04/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/bao-chi-va-taseco/hoan-tat-dam-phan-voi-doi-tac-jalux-nhẬt-banast-chinh-thuc-nang-ty-le-so-huu-tai-chuoi-cua-hang-mien-thue-nhẬt-len-51.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1553067451img_201903200836104984.jpg" /></a>
                                    <a href="https://taseco.vn/bao-chi-va-taseco/hoan-tat-dam-phan-voi-doi-tac-jalux-nhẬt-banast-chinh-thuc-nang-ty-le-so-huu-tai-chuoi-cua-hang-mien-thue-nhẬt-len-51.html" class="news_item_txt">HOÀN TẤT ĐÀM PHÁN VỚI ĐỐI TÁC JALUX - NHẬT BẢN, AST CHÍNH THỨC NÂNG TỶ LỆ SỞ HỮU TẠI CHUỖI CỬA HÀNG MIỄN THUẾ NHẬT LÊN 51%
                                        <!--<span class="date_newsty"><span class="date_newsty">(20/03/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/hoi-nghi-tong-ket-cong-tac-dang-nam-2018-va-trien-khai-nhiem-vu-nam-2019..html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15519436663.jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/hoi-nghi-tong-ket-cong-tac-dang-nam-2018-va-trien-khai-nhiem-vu-nam-2019..html" class="news_item_txt">HỘI NGHỊ TỔNG KẾT CÔNG TÁC ĐẢNG NĂM 2018 VÀ TRIỂN KHAI NHIỆM VỤ NĂM 2019.
                                        <!--<span class="date_newsty"><span class="date_newsty">(07/03/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/chao-xuan-moivinacs-don-chao-bamboo-airways.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15482080824.jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/chao-xuan-moivinacs-don-chao-bamboo-airways.html" class="news_item_txt">CHÀO XUÂN MỚI, VINACS ĐÓN CHÀO BAMBOO AIRWAYS
                                        <!--<span class="date_newsty"><span class="date_newsty">(23/01/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/mot-nam-tren-hosetaseco-airs-tro-thanh--ngoi-saocua-nhom-co-phieu-dich-vu-hang-khong.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1546912206a1bast-anh.png" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/mot-nam-tren-hosetaseco-airs-tro-thanh--ngoi-saocua-nhom-co-phieu-dich-vu-hang-khong.html" class="news_item_txt">MỘT NĂM TRÊN HOSE, TASECO AIRS TRỞ THÀNH "NGÔI SAO" CỦA NHÓM CỔ PHIẾU DỊCH VỤ HÀNG KHÔNG
                                        <!--<span class="date_newsty"><span class="date_newsty">(08/01/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/bao-chi-va-taseco/-tan-binhtaseco-airs-lot-top-100-doanh-nghiep-niem-yet-quan-tri-tai-chinh-tot-nhat-2018.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1543671602b1eimg2479-enternews-1543636026.JPG" /></a>
                                    <a href="https://taseco.vn/bao-chi-va-taseco/-tan-binhtaseco-airs-lot-top-100-doanh-nghiep-niem-yet-quan-tri-tai-chinh-tot-nhat-2018.html" class="news_item_txt">"TÂN BINH" TASECO AIRS LỌT TOP 100 DOANH NGHIỆP NIÊM YẾT QUẢN TRỊ TÀI CHÍNH TỐT NHẤT 2018
                                        <!--<span class="date_newsty"><span class="date_newsty">(01/12/2018)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/bao-chi-va-taseco/cac-cua-hang-hoat-dong-on-dinhlai-mang-cot-loi-cua-taseco-airs-tang-38-trong-nua-dau-2018.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1533797427LONG7125.jpg" /></a>
                                    <a href="https://taseco.vn/bao-chi-va-taseco/cac-cua-hang-hoat-dong-on-dinhlai-mang-cot-loi-cua-taseco-airs-tang-38-trong-nua-dau-2018.html" class="news_item_txt">CÁC CỬA HÀNG HOẠT ĐỘNG ỔN ĐỊNH, LÃI MẢNG CỐT LÕI CỦA TASECO AIRS TĂNG 38% TRONG NỬA ĐẦU 2018
                                        <!--<span class="date_newsty"><span class="date_newsty">(09/08/2018)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-taseco/tung-bung-gap-goruc-ro-don-xuan.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15499434031.jpg" /></a>
                                    <a href="https://taseco.vn/tin-taseco/tung-bung-gap-goruc-ro-don-xuan.html" class="news_item_txt">TƯNG BỪNG GẶP GỠ, RỰC RỠ ĐÓN XUÂN
                                        <!--<span class="date_newsty"><span class="date_newsty">(12/02/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-lien-quan/hop-tac-toan-dien-giua-vinacs-va-vietjet-air.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/1546484147a1.jpg" /></a>
                                    <a href="https://taseco.vn/tin-lien-quan/hop-tac-toan-dien-giua-vinacs-va-vietjet-air.html" class="news_item_txt">HỢP TÁC TOÀN DIỆN GIỮA VINACS VÀ VIETJET AIR
                                        <!--<span class="date_newsty"><span class="date_newsty">(03/01/2019)</span></span>--></a>
                                </li>
                                <li class="news-item">
                                    <a href="https://taseco.vn/tin-taseco/taseco-airs-khai-truong-mo-lai-cac-diem-kinh-doanh.html" class="news_item_img"><img src="https://taseco.vn/upload/tintuc/thumb/15415605914.jpg" /></a>
                                    <a href="https://taseco.vn/tin-taseco/taseco-airs-khai-truong-mo-lai-cac-diem-kinh-doanh.html" class="news_item_txt">TASECO AIRS KHAI TRƯƠNG MỞ LẠI CÁC ĐIỂM KINH DOANH
                                        <!--<span class="date_newsty"><span class="date_newsty">(07/11/2018)</span></span>--></a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="box_news2303_qc">
                <a href="https://taseco.vn/thu-vien-anh.html" class="thumbnail"><img src="https://taseco.vn/upload/grouptintuc/1543474581video-1.gif" alt="Thư viện hình ảnh" class="img-responsive"><span class="box_news2303_tlt">Thư viện hình ảnh</span></a>
                <a href="https://taseco.vn/video.html" class="thumbnail"><img src="https://taseco.vn/upload/grouptintuc/1543474825avarta video.jpg" alt="Video" class="img-responsive"><span class="box_news2303_tlt">Video</span></a>
            </div>
        </div>
    </div>
@stop

@section('pageJs')
	<script type="text/javascript">
	   	
	</script>
@stop