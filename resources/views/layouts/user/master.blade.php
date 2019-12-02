<!DOCTYPE html">
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page') | CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG</title>
    
    <meta name="description" content="TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập" />
    <meta name="keywords" content="taseco, công ty taseco,hàng không thăng long" />
    <meta name="robots" content="index, follow">
    <meta name="copyright" content=" Công ty TNHH Giải pháp Công nghệ Vinastar">
    <meta property="og:title" content="CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG" />
    <meta property="og:site_name" content="CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG" />
    <meta property="og:url" content="https://taseco.vn/" />
    <meta property="og:image" content="https://taseco.vn/logo.jpg" />
    <meta property="og:description" content="TASECO Hoạt động trong lĩnh vực Bất động sản, hàng không, khách sạn, công ty Taseco với hơn 10 năm thành lập" />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="https://taseco.vn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox-buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/jquery.fancybox-thumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/vinastar.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/themes/default/css/viewport.css') }}" />    
    
    @section('pageCss')
        
    @show
</head>

<body>
    <div id="wrapper_all">
        <header id="header">
            <div class="header_top w_gr clearfix">
                <div class="header_logo">
                    <a href="https://taseco.vn/"><img src="https://taseco.vn/upload/advert/15516689051538281901logo web (2).png" alt="" class="img-responsive"></a>
                </div>
                <div class="header_slg">
                    <div class="tlt">
                        <ul class="texts" style="display: none">
                            <li>CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG</li>
                        </ul>
                    </div>
                </div>
                <div class="header_searchw">
                    <div class="header_search">
                        <form method="post" action="https://taseco.vn/timkiem">
                            <div class="form-group">
                                <input type="text" name="p" class="form-control" placeholder="Tìm kiếm">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="header_language">
                        <a href="https://taseco.vn/index.php?lang=Vietnamese"><img src="https://taseco.vn/themes/default/images/vn.jpg" alt="vn"></a>
                        <a href="https://taseco.vn/index.php?lang=English"><img src="https://taseco.vn/themes/default/images/emn.jpg" alt="en"></a>
                    </div>
                </div>
            </div>
            <div class="nav_w">
                <div class="navbar navbar-default navbar_ed">
                    <div class="w_gr">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_rps">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="menu_rps">
                            <ul class="navbar-nav nav">
                                <li class="menu_ichome"><a href="https://taseco.vn/" style="border:none"><i class="fa fa-home fa-2x"></i></a></li>
                                <li><a href="https://taseco.vn/#.html">Giới thiệu<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/gioi-thieu.html">Tổng quan</a>
                                        </li>
                                        <li><a href="https://taseco.vn/triet-ly-kinh-doanh.html">Triết lý kinh doanh</a>
                                        </li>
                                        <li><a href="https://taseco.vn/co-cau-to-chuc.html">Cơ cấu tổ chức</a>
                                        </li>
                                        <li><a href="https://taseco.vn/thanh-tich-va-giai-thuong.html">Thành tích và giải thưởng</a>
                                        </li>
                                        <li><a href="https://taseco.vn/thu-vien-anh.html">Thư viện hình ảnh</a>
                                        </li>
                                        <li><a href="https://taseco.vn/video.html">Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://taseco.vn/#.html">Tin tức - Sự kiện<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/tin-taseco.html">Tin Taseco</a>
                                        </li>
                                        <li><a href="https://taseco.vn/bao-chi-va-taseco.html">Báo chí và Taseco</a>
                                        </li>
                                        <li><a href="https://taseco.vn/tin-lien-quan.html">Tin liên quan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://taseco.vn/#.html">Lĩnh vực đầu tư<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/kinh-doanh-bat-dong-san.html">Kinh doanh Bất động sản</a>
                                        </li>
                                        <li><a href="https://taseco.vn/dich-vu-phi-hang-khongkhach-san.html">DV phi hàng không, khách sạn</a>
                                        </li>
                                        <li><a href="https://taseco.vn/dau-tu-tai-chinh.html">Đầu tư tài chính</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://taseco.vn/#.html">Đơn vị thành viên<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/taseco-land.html">Taseco Land</a>
                                        </li>
                                        <li><a href="https://taseco.vn/taseco-airs.html">Taseco Airs</a>
                                        </li>
                                        <li><a href="https://taseco.vn/cong-ty-lien-ket.html">Công ty liên kết</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://taseco.vn/#.html">Văn hóa Taseco<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/cac-hoat-dong-doan-the.html">Các hoạt động đoàn thể</a>
                                        </li>
                                        <li><a href="https://taseco.vn/trach-nhiem-xa-hoi.html">Trách nhiệm xã hội</a>
                                        </li>
                                        <li><a href="https://taseco.vn/hoc-bong-taseco.html">Học bổng Taseco</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://taseco.vn/#.html">Tuyển dụng<span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu_ed">
                                        <li><a href="https://taseco.vn/thong-tin-tuyen-dung.html">Thông tin tuyển dụng</a>
                                        </li>
                                        <li><a href="https://taseco.vn/nop-ho-so-truc-tuyen.html">Nộp hồ sơ trực tuyến</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="https://taseco.vn/lien-he.html">Liên hệ</a></li>
                                <!--<li class="menu_icfb"><a href="https://taseco.vn/lien-he.html"><i class="fa fa-facebook-official fa-2x"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


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
        <div class="box_dttaseco clearfix w_gr">
            <h3>CÁC ĐƠN VỊ THÀNH VIÊN, LIÊN Kết:</h3>
            <div id="owl_carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1508921287logo cty lien ket.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://pml.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1461397070Untitled-2.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://greenparkmongcai.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459824703iudt.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://imcs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1479875820Untitled-1.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://www.alacartedanangbeach.com/vi/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520398069logo alacarte nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397525logo cty nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459825340jalux.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://acsv.com.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844082ACSV.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://danangairportterminal.vn/vi/corporate/about-us/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/14605224631234.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://vinacs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844811vinacs.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://tasecoairs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397571logo nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1557304639taseco invest.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1508921287logo cty lien ket.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://pml.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1461397070Untitled-2.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://greenparkmongcai.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459824703iudt.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://imcs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1479875820Untitled-1.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://www.alacartedanangbeach.com/vi/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520398069logo alacarte nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397525logo cty nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459825340jalux.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://acsv.com.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844082ACSV.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://danangairportterminal.vn/vi/corporate/about-us/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/14605224631234.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://vinacs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844811vinacs.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://tasecoairs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397571logo nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1557304639taseco invest.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1508921287logo cty lien ket.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://pml.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1461397070Untitled-2.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://greenparkmongcai.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459824703iudt.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://imcs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1479875820Untitled-1.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://www.alacartedanangbeach.com/vi/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520398069logo alacarte nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397525logo cty nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459825340jalux.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://acsv.com.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844082ACSV.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://danangairportterminal.vn/vi/corporate/about-us/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/14605224631234.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://vinacs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844811vinacs.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://tasecoairs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397571logo nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1557304639taseco invest.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1508921287logo cty lien ket.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://pml.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1461397070Untitled-2.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://greenparkmongcai.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459824703iudt.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://imcs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1479875820Untitled-1.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://www.alacartedanangbeach.com/vi/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520398069logo alacarte nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397525logo cty nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459825340jalux.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://acsv.com.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844082ACSV.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://danangairportterminal.vn/vi/corporate/about-us/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/14605224631234.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://vinacs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844811vinacs.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://tasecoairs.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397571logo nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1557304639taseco invest.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1508921287logo cty lien ket.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://pml.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1461397070Untitled-2.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://greenparkmongcai.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459824703iudt.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://imcs.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1479875820Untitled-1.png"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://www.alacartedanangbeach.com/vi/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520398069logo alacarte nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397525logo cty nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459825340jalux.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://acsv.com.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844082ACSV.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://danangairportterminal.vn/vi/corporate/about-us/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/14605224631234.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://vinacs.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1459844811vinacs.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="http://tasecoairs.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1520397571logo nho.jpg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="item_w">
                        <a href="https://tasecoland.vn/" target="_blank" class="owlitem_img"><img src="https://taseco.vn/upload/partner/1557304639taseco invest.jpg"></a>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="footer_w w_gr">

                <div class="addcpn clearfix">
                    <div class="add">
                        <p>
                            <h3>
                                <span style="font-size:14px;"><strong><span style="font-family:arial,helvetica,sans-serif;">C&Ocirc;NG TY CỔ PHẦN DỊCH VỤ H&Agrave;NG KH&Ocirc;NG THĂNG LONG</span></strong></span></h3>
                            <p>
                                <span style="font-size:14px;"><strong>Thang Long Air Services Corporation</strong></span></p>
                            <p>
                                ---------------------------------------------------------------------------------------------------------------------------</p>
                            <h3>
                                T&ograve;a nh&agrave; N02-T1, khu Đo&agrave;n Ngoại Giao, phố Đỗ Nhuận, phường Xu&acirc;n Tảo,</h3>
                            <h3>
                                quận Bắc Từ Li&ecirc;m, TP H&agrave; Nội.</h3>
                            <p>
                                <span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;">Điện thoại:&nbsp;<a href="tel:0437675168">+84. 24 3767 5168</a>&nbsp;-&nbsp;Fax:&nbsp;+84. 24 3767 5169</span></span></p>
                            <p>
                                <span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;">Website:&nbsp;<a href="http://taseco.com.vn/">www.taseco.vn</a>&nbsp;-&nbsp;Email:&nbsp;<a href="mailto:info@taseco.vn">info@taseco.vn</a></span></span></p>
                            <h2 id="kumop" style="position: fixed;right:-900px; top: -800px; overflow: hidden;width:250px">
                                <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa xơ gan cổ trướng">chữa xơ gan cổ trướng</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park">River Park</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park ">Villa Park </a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="biểu hiện của xơ gan">biểu hiện của xơ gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside">Park Riverside</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio Vista">Rio Vista</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa bệnh xơ gan cổ chướng">c&aacute;ch chữa bệnh xơ gan cổ chướng</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park MIK">Villa Park MIK</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park MIK">River Park MIK</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside MIK">Park Riverside MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa bệnh xơ gan cổ trướng">c&aacute;ch chữa bệnh xơ gan cổ trướng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách trị bệnh ung thư gan">c&aacute;ch trị bệnh ung thư gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio vista MIK">Rio vista MIK</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biệt thự Park Riverside">Biệt thự Park Riverside</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="trị xơ gan">trị xơ gan</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biệt thự Villa Park">Biệt thự Villa Park</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biệt thự River Park">Biệt thự River Park</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biệt thự Rio Vista ">Biệt thự Rio Vista </a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa xơ gan">c&aacute;ch chữa xơ gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biet thu Park Riverside">Biet thu Park Riverside</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biet thu Villa Park">Biet thu Villa Park</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="biểu hiện u gan lành tính">biểu hiện u gan l&agrave;nh t&iacute;nh</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="bệnh ung thư gan">bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa bệnh ung thư gan giai đoạn cuối">c&aacute;ch chữa bệnh ung thư gan giai đoạn cuối</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biet thu River Park">Biet thu River Park</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biet thu Rio vista">Biet thu Rio vista</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách điều trị bệnh xơ gan">c&aacute;ch điều trị bệnh xơ gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa bệnh ung thư gan giai đoạn đầu">c&aacute;ch chữa bệnh ung thư gan giai đoạn đầu</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nhà phố river Park">Nh&agrave; phố river Park</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park Quan 9">Villa Park Quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu bệnh ung thư gan">dấu hiệu bệnh ung thư gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nhà phố Park Riverside">Nh&agrave; phố Park Riverside</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nhà phố Rio Vista">Nh&agrave; phố Rio Vista</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách điều trị xơ gan cổ chướng">c&aacute;ch điều trị xơ gan cổ chướng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa bệnh ung thư gan giai đoạn cuối">chữa bệnh ung thư gan giai đoạn cuối</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách trị ung thư gan">c&aacute;ch trị ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="trị bệnh ung thư gan">trị bệnh ung thư gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nha pho Park Riverside">Nha pho Park Riverside</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng của xơ gan">triệu chứng của xơ gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nha pho Rio Vista">Nha pho Rio Vista</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park quận 9">Villa Park quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách chữa bệnh u gan">c&aacute;ch chữa bệnh u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="trị ung thư gan">trị ung thư gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nha pho River Park">Nha pho River Park</a> | <a href="http://villaparkquan9.net" target="_blank" title="Dự án Villa Park">Dự &aacute;n Villa Park</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách trị bệnh xơ gan">c&aacute;ch trị bệnh xơ gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="trị ung thư gan giai đoạn cuối">trị ung thư gan giai đoạn cuối</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc chữa bệnh ung thư gan">thuốc chữa bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc điều trị bệnh ung thư gan">thuốc điều trị bệnh ung thư gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio Vista quan 9">Rio Vista quan 9</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside quan 9">Park Riverside quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa bệnh xơ gan cổ trướng">chữa bệnh xơ gan cổ trướng</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio Vista quận 9">Rio Vista quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="biểu hiện xơ gan">biểu hiện xơ gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside quận 9">Park Riverside quận 9</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biet thu Rio Vista quan 9">Biet thu Rio Vista quan 9</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biệt thự Rio Vista quận 9">Biệt thự Rio Vista quận 9</a> | <a href="http://villaparkquan9.net" target="_blank" title="Du an Villa Park">Du an Villa Park</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách điều trị bệnh u gan">c&aacute;ch điều trị bệnh u gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park quan 9">River Park quan 9</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biệt thự Rio Vista Dương Đình Hội">Biệt thự Rio Vista Dương Đ&igrave;nh Hội</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa xơ gan">chữa xơ gan</a> | <a href="http://villaparkquan9.net" target="_blank" title="Dự án Bưng Ông Thoàn">Dự &aacute;n Bưng &Ocirc;ng Tho&agrave;n</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park quận 9">River Park quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa u gan">chữa u gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Dự án Park Riverside">Dự &aacute;n Park Riverside</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa xơ gan cổ chướng">chữa xơ gan cổ chướng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị ung thư gan">điều trị ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách điều trị bệnh ung thư gan">c&aacute;ch điều trị bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cách điều trị bệnh ung thư gan giai đoạn cuối">c&aacute;ch điều trị bệnh ung thư gan giai đoạn cuối</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Dự án Rio Vista">Dự &aacute;n Rio Vista</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Du an Park Riverside">Du an Park Riverside</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa u gan bằng thuốc nam">chữa u gan bằng thuốc nam</a> | <a href="http://villaparkquan9.net" target="_blank" title="Du an Bung Ong Thoan">Du an Bung Ong Thoan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa xơ gan hiệu quả">chữa xơ gan hiệu quả</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc điều trị ung thư gan giai đoạn cuối">thuốc điều trị ung thư gan giai đoạn cuối</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc mới điều trị ung thư gan">thuốc mới điều trị ung thư gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Du an Rio Vista">Du an Rio Vista</a> | <a href="http://riverparkquan9.com " target="_blank" title="Dự án River Park">Dự &aacute;n River Park</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan">điều trị u gan</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biet thu Villa Park MIK">Biet thu Villa Park MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="u gan và phương pháp điều trị">u gan v&agrave; phương ph&aacute;p điều trị</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nha pho Park Riverside MIK">Nha pho Park Riverside MIK</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Dự án Dương Đình Hội">Dự &aacute;n Dương Đ&igrave;nh Hội</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị bệnh xơ gan">điều trị bệnh xơ gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan">điều trị xơ gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Du an Duong Dinh Hoi">Du an Duong Dinh Hoi</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nhà phố Park Riverside MIK">Nh&agrave; phố Park Riverside MIK</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nha pho Rio Vista quan 9">Nha pho Rio Vista quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc nam chữa bệnh u gan">thuốc nam chữa bệnh u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng của bệnh ung thư gan">triệu chứng của bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng ung thư gan giai đoạn cuối ">triệu chứng ung thư gan giai đoạn cuối </a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng ung thư gan thời kỳ đầu">triệu chứng ung thư gan thời kỳ đầu</a> | <a href="http://riverparkquan9.com " target="_blank" title="Du an River Park">Du an River Park</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biệt thự Villa Park MIK">Biệt thự Villa Park MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan bằng đông y">điều trị xơ gan bằng đ&ocirc;ng y</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biệt thự Park Riverside Bưng Ông Thoàn">Biệt thự Park Riverside Bưng &Ocirc;ng Tho&agrave;n</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biệt thự Villa Park Bưng Ông Thoàn">Biệt thự Villa Park Bưng &Ocirc;ng Tho&agrave;n</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="cây thuốc chữa bệnh u gan">c&acirc;y thuốc chữa bệnh u gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biet thu River Park Vo chi Cong">Biet thu River Park Vo chi Cong</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan cổ chướng">điều trị xơ gan cổ chướng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan giai đoạn cuối">điều trị xơ gan giai đoạn cuối</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Du an Duong Dinh Hoi quan 9">Du an Duong Dinh Hoi quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc đông y chữa bệnh u gan">thuốc đ&ocirc;ng y chữa bệnh u gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biet thu Rio Vista Duong Dinh Hoi">Biet thu Rio Vista Duong Dinh Hoi</a> | <a href="http://villaparkquan9.net" target="_blank" title="Du an Bung Ong Thoan quan 9">Du an Bung Ong Thoan quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng bị u gan">triệu chứng bị u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng của bệnh u gan">triệu chứng của bệnh u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc điều trị bệnh u gan">thuốc điều trị bệnh u gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Dự án Park Riverside quận 9">Dự &aacute;n Park Riverside quận 9</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biet thu villa Park Bung Ong Thoan">Biet thu villa Park Bung Ong Thoan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu xơ gan">dấu hiệu xơ gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biet thu Park Riverside MIK">Biet thu Park Riverside MIK</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biet Thu Rio Vista Khang Dien">Biet Thu Rio Vista Khang Dien</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nhà phố River Park Võ Chí Công">Nh&agrave; phố River Park V&otilde; Ch&iacute; C&ocirc;ng</a> | <a href="http://riverparkquan9.com " target="_blank" title="Dự án Võ Chí Công">Dự &aacute;n V&otilde; Ch&iacute; C&ocirc;ng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan lành tính">điều trị u gan l&agrave;nh t&iacute;nh</a> | <a href="http://riverparkquan9.com " target="_blank" title="Du an Vo Chi Cong">Du an Vo Chi Cong</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan mất bù">điều trị xơ gan mất b&ugrave;</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nha pho Rio Vista MIK">Nha pho Rio Vista MIK</a> | <a href="http://riverparkquan9.com " target="_blank" title="Du an Vo Chi Cong quan 9">Du an Vo Chi Cong quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu bệnh xơ gan">dấu hiệu bệnh xơ gan</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park Bung Ong Thoan">Villa Park Bung Ong Thoan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nhà phố Rio Vista MIK">Nh&agrave; phố Rio Vista MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan đa ổ">điều trị u gan đa ổ</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biệt thự Park Riverside MIK">Biệt thự Park Riverside MIK</a> | <a href="http://villaparkquan9.net" target="_blank" title="Villa Park Bưng Ông Thoàn ">Villa Park Bưng &Ocirc;ng Tho&agrave;n </a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị xơ gan rượu">điều trị xơ gan rượu</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biet thu Rio Vista MIK">Biet thu Rio Vista MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="đông y chữa xơ gan cổ trướng">đ&ocirc;ng y chữa xơ gan cổ trướng</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside Bung Ong Thoan">Park Riverside Bung Ong Thoan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="biểu hiện của bệnh u gan">biểu hiện của bệnh u gan</a> | <a href="http://villaparkquan9.net" target="_blank" title="Dự án Villa Park quận 9">Dự &aacute;n Villa Park quận 9</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nha pho River Park MIK">Nha pho River Park MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan bằng phương pháp toce">điều trị u gan bằng phương ph&aacute;p toce</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nhà phố river Park MIK">Nh&agrave; phố river Park MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="phương pháp mới trong điều trị ung thư gan">phương ph&aacute;p mới trong điều trị ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị bệnh ung thư gan">điều trị bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị bệnh ung thư gan giai đoạn cuối">điều trị bệnh ung thư gan giai đoạn cuối</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Park Riverside Bưng Ông Thoàn ">Park Riverside Bưng &Ocirc;ng Tho&agrave;n </a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="đông y trị xơ gan cổ trướng">đ&ocirc;ng y trị xơ gan cổ trướng</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park Võ Chí Công">River Park V&otilde; Ch&iacute; C&ocirc;ng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc chữa bệnh xơ gan cổ chướng">thuốc chữa bệnh xơ gan cổ chướng</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nha pho River Park Vo chi Cong">Nha pho River Park Vo chi Cong</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nhà phố Park Riverside Bưng Ông Thoàn">Nh&agrave; phố Park Riverside Bưng &Ocirc;ng Tho&agrave;n</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="các phương pháp điều trị ung thư gan">c&aacute;c phương ph&aacute;p điều trị ung thư gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nha pho Park Riverside Bung Ong Thoan">Nha pho Park Riverside Bung Ong Thoan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio Vista Dương Đình Hội">Rio Vista Dương Đ&igrave;nh Hội</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Rio Vista Duong Dinh Hoi">Rio Vista Duong Dinh Hoi</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng của bệnh xơ gan">triệu chứng của bệnh xơ gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biet thu River Park MIK">Biet thu River Park MIK</a> | <a href="http://villaparkquan9.net" target="_blank" title="Du an Villa Park quan 9">Du an Villa Park quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc chữa bệnh xơ gan cổ trướng">thuốc chữa bệnh xơ gan cổ trướng</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biệt thự River Park MIK">Biệt thự River Park MIK</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nha pho Park Riverside quan 9">Nha pho Park Riverside quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng bệnh xơ gan cổ chướng">triệu chứng bệnh xơ gan cổ chướng</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="chữa ung thư gan bằng đông y">chữa ung thư gan bằng đ&ocirc;ng y</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biệt thự Rio Vista MIK">Biệt thự Rio Vista MIK</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng xơ gan cổ trướng">triệu chứng xơ gan cổ trướng</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Nhà phố Park Riverside quận 9">Nh&agrave; phố Park Riverside quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng xơ gan">triệu chứng xơ gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="các loại thuốc điều trị ung thư gan">c&aacute;c loại thuốc điều trị ung thư gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="River Park Vo Chi Cong">River Park Vo Chi Cong</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biet thu villa Park quan 9">Biet thu villa Park quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng xơ gan rượu">triệu chứng xơ gan rượu</a> | <a href="http://villaparkquan9.net" target="_blank" title="Dự án Bưng Ông Thoàn quận 9">Dự &aacute;n Bưng &Ocirc;ng Tho&agrave;n quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan ác tính">điều trị u gan &aacute;c t&iacute;nh</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nhà phố Rio Vista quận 9">Nh&agrave; phố Rio Vista quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan bằng đông y">điều trị u gan bằng đ&ocirc;ng y</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan bằng thuốc nam">điều trị u gan bằng thuốc nam</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Du an Park Riverside quan 9">Du an Park Riverside quan 9</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nha pho River Park quan 9">Nha pho River Park quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="thuốc nam điều trị u gan">thuốc nam điều trị u gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="Nhà phố River Park quận 9">Nh&agrave; phố River Park quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan thứ phát">điều trị u gan thứ ph&aacute;t</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="điều trị u gan giai đoạn 3">điều trị u gan giai đoạn 3</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nha pho Rio Vista Khang Dien">Nha pho Rio Vista Khang Dien</a> | <a href="http://villaparkquan9.net" target="_blank" title="Biệt thự Villa Park quận 9">Biệt thự Villa Park quận 9</a> | <a href="http://riverparkquan9.com " target="_blank" title="Dự án River Park quận 9">Dự &aacute;n River Park quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng u gan lành tính">triệu chứng u gan l&agrave;nh t&iacute;nh</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng u gan">triệu chứng u gan</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biệt thự Park Riverside quận 9">Biệt thự Park Riverside quận 9</a> | <a href="http://riverparkquan9.com " target="_blank" title="Du an River Park quan 9">Du an River Park quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu bệnh u gan">dấu hiệu bệnh u gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Biệt Thự Rio Vista Khang Điền">Biệt Thự Rio Vista Khang Điền</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nhà phố Rio Vista Dương Đình Hội">Nh&agrave; phố Rio Vista Dương Đ&igrave;nh Hội</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu của u gan">dấu hiệu của u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu bị u gan">dấu hiệu bị u gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nhà phố Rio Vista Khang Điền">Nh&agrave; phố Rio Vista Khang Điền</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biệt thự River Park quận 9">Biệt thự River Park quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu của bệnh u gan">dấu hiệu của bệnh u gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Dự án Dương Đình Hội quận 9">Dự &aacute;n Dương Đ&igrave;nh Hội quận 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng u gan giai đoạn cuối">triệu chứng u gan giai đoạn cuối</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng u gan ác tính">triệu chứng u gan &aacute;c t&iacute;nh</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biet thu Park Riverside Bung Ong Thoan">Biet thu Park Riverside Bung Ong Thoan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng bệnh u gan">triệu chứng bệnh u gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="triệu chứng của u gan">triệu chứng của u gan</a> | <a href="http://riverparkquan9.com " target="_blank" title="Biet thu River Park quan 9">Biet thu River Park quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu của bệnh ung thư gan">dấu hiệu của bệnh ung thư gan</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Nha pho Rio Vista Duong Dinh Hoi">Nha pho Rio Vista Duong Dinh Hoi</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu của ung thư gan">dấu hiệu của ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu nhận biết ung thư gan">dấu hiệu nhận biết ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu ung thư gan">dấu hiệu ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="dấu hiệu ung thư gan giai đoạn cuối">dấu hiệu ung thư gan giai đoạn cuối</a> | <a href="http://riverparkquan9.com " target="_blank" title="Dự án Võ Chí Công quận 9">Dự &aacute;n V&otilde; Ch&iacute; C&ocirc;ng quận 9</a> | <a href="http://nhaphoparkriverside.com" target="_blank" title="Biet thu Park Riverside quan 9">Biet thu Park Riverside quan 9</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="Phương pháp điều trị bệnh ung thư gan">Phương ph&aacute;p điều trị bệnh ung thư gan</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="Phương pháp điều trị bệnh ung thư gan mới">Phương ph&aacute;p điều trị bệnh ung thư gan mới</a> | <a href="https://chuyengiagan.com/benh-xo-gan-dau-hieu-nguyen-nhan-trieu-chung-cach-dieu-tri-xo-gan-co-truong" target="_blank" title="Phương pháp điều trị bệnh ung thư gan tốt nhất">Phương ph&aacute;p điều trị bệnh ung thư gan tốt nhất</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Dự án Rio Vista quận 9">Dự &aacute;n Rio Vista quận 9</a> | <a href="http://riovistaquan9.com.vn" target="_blank" title="Du an Rio Vista quan 9">Du an Rio Vista quan 9</a> |</h2>
                        </p>

                    </div>
                    <div class="footer_tkct">
                        <div class="tkct clearfix">
                            <ul>
                                <li><a href="https://taseco.vn/">Trang chủ</a></li>
                                <li><a href="https://taseco.vn/tin-tuyen-dung.html">Tuyển dụng</a></li>
                                <li><a style="border:none" href="https://taseco.vn/lien-he.html">Liên hệ</a></li>
                            </ul>
                        </div>


                        <p><span class="tkct_txt">Số người truy cập</span><span style="color:#F00; display:inline-block; margin:0 5px">2287390</span></p>
                        <p>Designed by <a href="https://vinastar.net/">Vinastar.</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--  -->

    <a id='backTop'><i class="fa fa-chevron-up"></i></a>
    <script src="{{ asset('frontend/themes/default/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.popup.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.bootstrap-responsive-tabs.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.smartmenus.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.smartmenus.bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.lettering.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.textillate.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.bootstrap.newsbox.min.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.mousewheel-3.0.6.pack.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox.js') }}"></script>
    <!--<script src="http://demo1.vinastar.net/agrioil/themes/default/js/jquery.fancybox.pack.js"></script>-->
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-buttons.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('frontend/themes/default/js/jquery.fancybox-thumbs.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox-thumbs").fancybox({
                openEffect: 'elastic',
                openSpeed: 650,
                arrows: true,
                closeEffect: 'elastic',
                closeSpeed: 650,
                closeBtn: true,
                closeClick: false,
                nextClick: false,
                prevEffect: 'elastic',
                prevSpeed: 650,
                nextEffect: 'elastic',
                nextSpeed: 650,
                helpers: {
                    title: {
                        type: 'outside'
                    },
                    thumbs: {
                        width: 50,
                        height: 50
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox-media').fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    media: {}
                }
            });
        });
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $("area[rel^='prettyPhoto']").prettyPhoto();
            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                allow_resize: true,
                autoplay_slideshow: false
            });
            $(".gallery1:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast',
                slideshow: 10000,
                hideflash: true
            });
        });
    </script>

    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic:latin,vietnamese']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            document.cookie = popunder1 = "adf";
            $('#myModal').vinastar($('#myModal').data());
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#backTop').backTop({
                'position': 100,
                'speed': 500,
                'color': 'red',
            });
        });
    </script>
    <script>
        $('.responsive-tabs').responsiveTabs({
            accordionOn: ['xs', 'sm']
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $("#owl_carousel");
            owl.owlCarousel({
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: 4000,
                autoplayTimeout: 100
            });
            $('[data-toggle="tooltip"]').tooltip();
            $(".owl-next").click(function() {
                owl.trigger('owl.next');
            })
            $(".owl-prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

            var owl = $("#owl_slgtaseco");

            owl.owlCarousel({
                items: 1, //10 items above 1000px browser width
                itemsDesktop: [1000, 1], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 1], // betweem 900px and 601px
                itemsTablet: [600, 1], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: 4000,
                autoplayTimeout: 100
            });
            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })
        });

        $(document).ready(function() {
            $("#owl_1506").owlCarousel({
                navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
                // "singleItem:true" is a shortcut for:
                // items : 1, 
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false
            });
        });
    </script>
    <script type="text/javascript">
        $('.tlt').textillate({
            // the default selector to use when detecting multiple texts to animate
            selector: '.texts',

            // enable looping
            loop: true,

            // sets the minimum display time for each text before it is replaced
            minDisplayTime: 2000,

            // sets the initial delay before starting the animation
            // (note that depending on the in effect you may need to manually apply 
            // visibility: hidden to the element before running this plugin)
            initialDelay: 0,

            // set whether or not to automatically start animating
            autoStart: true,

            // custom set of 'in' effects. This effects whether or not the 
            // character is shown/hidden before or after an animation  
            inEffects: [],

            // custom set of 'out' effects
            outEffects: ['hinge'],

            // in animation settings
            in: {
                // set the effect name
                effect: 'fadeIn',

                // set the delay factor applied to each consecutive character
                delayScale: 1.5,

                // set the delay between each character
                delay: 50,

                // set to true to animate all the characters at the same time
                sync: false,

                // randomize the character sequence 
                // (note that shuffle doesn't make sense with sync = true)
                shuffle: false,

                // reverse the character sequence 
                // (note that reverse doesn't make sense with sync = true)
                reverse: false,

                // callback that executes once the animation has finished
                callback: function() {}
            },

            // out animation settings.
            out: {
                effect: 'flash',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function() {}
            },

            // callback that executes once textillate has finished 
            callback: function() {},

            // set the type of token to animate (available types: 'char' and 'word')
            type: 'char'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $("#owl_fie");
            owl.owlCarousel({
                autoPlay: 4000,
                itemsCustom: [
                    [0, 1],
                    [450, 2],
                    [600, 2],
                    [700, 2],
                    [1000, 3],
                    [1200, 3],
                    [1400, 3],
                    [1600, 3]
                ],
                navigation: true
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $(".newstb_dv3003").bootstrapNews({
                newsPerPage: 3,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 2000,
                onToDo: function() {
                    //console.log(this);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(".news_tb").bootstrapNews({
                newsPerPage: 6,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 2000,
                onToDo: function() {
                    //console.log(this);
                }
            });
        });
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#carousel_main,#carousel_pri').carousel({
                interval: 3000
            })
        });
    </script>

</body>

</html>