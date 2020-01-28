@extends('layouts.user.master')

@section('page')Tin tức
@stop

@section('description')
@stop

@section('keywords')Tin tức, Ant Kitchen, ant-kitchen.mysapo.net
@stop

@section('canonical'){{ route('post') }}/
@stop

@section('alternate'){{ route('post') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('post') }}/
@stop

@section('ogImage'){{ asset('frontend/images/logos/logo.png') }}
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


                        <li><strong itemprop="title">Tin tức</strong></li>


                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container" itemscope itemtype="http://schema.org/Blog">
        <meta itemprop="name" content="Tin tức">
        <meta itemprop="description" content="Chủ đề không có mô tả">
        <div class="row">
            <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head">Tin tức</h1>
                </div>

                <section class="list-blogs blog-main">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="{{ route('post-detail', ['slug' => 'cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien']) }}">

                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/cach-lam-banh-bong-lan-trung-muoi-bang-noi-com-dien5.jpg?v=1509856050450" alt="Cách làm bánh bông lan cực dễ bằng nồi cơm điện" class="img-responsive center-block" />

                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="{{ route('post-detail', ['slug' => 'cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien']) }}" title="Cách làm bánh bông lan cực dễ bằng nồi cơm điện">Cách làm bánh bông lan cực dễ bằng nồi cơm điện</a></h3>
                                <div class="post-time">
                                    01/11/2017 - Nguyễn Chánh Bảo Trung
                                </div>
                                <p class="blog-item-summary margin-bottom-5"> Không cần phải có lò nướng, bạn cũng có thể làm bánh bông lan bằng nồi cơm điện. Chúng...</p>
                            </article>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh">

                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/lam-banh-pancake-toc-hanh-8.jpg?v=1509857723953" alt="Làm bánh pancake “tốc hành” bằng chảo chống dính" class="img-responsive center-block" />

                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh" title="Làm bánh pancake “tốc hành” bằng chảo chống dính">Làm bánh pancake “tốc hành” bằng chảo chống dính</a></h3>
                                <div class="post-time">
                                    01/11/2017 - Nguyễn Chánh Bảo Trung
                                </div>
                                <p class="blog-item-summary margin-bottom-5"> Pancake là loại bánh không yêu cầu nguyên liệu quá cầu kỳ, cách làm cũng khá đơn giản,...</p>
                            </article>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat">

                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/kho-ca-dua.jpg?v=1509547868160" alt="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất" class="img-responsive center-block" />

                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat" title="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất">Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất</a></h3>
                                <div class="post-time">
                                    01/11/2017 - Nguyễn Chánh Bảo Trung
                                </div>
                                <p class="blog-item-summary margin-bottom-5"> Mùa nóng ăn món gì cũng cảm thấy “nhạt” miệng, làm sao để tăng khẩu vị cho gia đình? H...</p>
                            </article>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet">

                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/dinh-duong-cho-be.jpg?v=1509547786227" alt="Mẹo vặt hay từ muối có thể bạn chưa biết?" class="img-responsive center-block" />

                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet" title="Mẹo vặt hay từ muối có thể bạn chưa biết?">Mẹo vặt hay từ muối có thể bạn chưa biết?</a></h3>
                                <div class="post-time">
                                    01/11/2017 - Nguyễn Chánh Bảo Trung
                                </div>
                                <p class="blog-item-summary margin-bottom-5"> Muối ăn một gia vị quá quen thuộc và hầu như gia đình nào cũng có trong gian bếp. Thế ...</p>
                            </article>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
                            <article class="blog-item">
                                <div class="blog-item-thumbnail">
                                    <a href="/cach-lam-trung-ca-kho-to-ngon-ba-chay">

                                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/articles/hinh-anh-cach-lam-ca-kho-khoai-ngon-dung-bai-don-gian-va-de-lam-1.jpg?v=1509547653017" alt="Cách làm trứng cá kho tộ ngon bá cháy" class="img-responsive center-block" />

                                    </a>
                                </div>
                                <h3 class="blog-item-name"><a href="/cach-lam-trung-ca-kho-to-ngon-ba-chay" title="Cách làm trứng cá kho tộ ngon bá cháy">Cách làm trứng cá kho tộ ngon bá cháy</a></h3>
                                <div class="post-time">
                                    01/11/2017 - Nguyễn Chánh Bảo Trung
                                </div>
                                <p class="blog-item-summary margin-bottom-5"> Nếu bạn đang phân vân chưa biết nấu món gì cho bữa cơm tối của cả nhà thì hãy thử trứn...</p>
                            </article>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">

                        </div>
                    </div>
                </section>

            </section>
            <aside class="left left-content col-md-3 col-md-pull-9">

                <aside class="aside-item collection-category blog-category">
                    <div class="heading">
                        <h2 class="title-head"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category  navbar-toggleable-md">
                            <ul class="nav navbar-pills">


                                <li class="nav-item ">
                                    <a href="/tivi-loa-am-thanh" class="nav-link">Tivi, Loa, Âm thanh</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/tivi">Tivi</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/doi-moi-2017">Đời mới 2017</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/sony">Sony</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/samsung">Samsung</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lg">LG</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tu-32-43-inch">Từ 32-43 inch</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tu-44-55-inch">Từ 44-55 inch</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/duoi-5-trieu">Dưới 5 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/tivi-cao-cap">Tivi cao cấp</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/loa-am-thanh">Loa, Âm thanh</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/loa-thanh-soundbar">Loa thanh (Soundbar)</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dan-am-thanh">Dàn âm thanh</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dau-dvd">Đầu DVD</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/cap-hdmi-cap-tivi">Cáp HDMI, cáp Tivi</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Thương hiệu</a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="/tu-lanh">Tủ lạnh</a></li>



                                <li class="nav-item ">
                                    <a href="/may-giat-may-say-quan-ao" class="nav-link">Máy giặt, Máy sấy quần áo</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/may-giat">Máy giặt</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/doi-moi-2017-1">Đời mới 2017</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/toshiba">Toshiba</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lg-1">LG</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/panasonic">Panasonic</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/samsung-1">Samsung</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/electrolux">Electrolux</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-giat-cao-cap">Máy giặt cao cấp</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/may-say-quan-ao">Máy sấy quần áo</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/gia-duoi-5-trieu">Giá dưới 5 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/gia-tu-5-10-trieu">Giá từ 5 - 10 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/electrolux-1">Electrolux</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/beko">Beko</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/kangaroo">Kangaroo</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="/may-lanh">Máy lạnh</a></li>



                                <li class="nav-item ">
                                    <a href="/dien-gia-dung" class="nav-link">Điện gia dụng</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/gia-dung-nha-bep">Gia dụng nhà bếp</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/bep-gas">Bếp gas</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/bep-tu">Bếp từ</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/bep-hong-ngoai">Bếp hồng ngoại</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lo-nuong">Lò nướng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lo-vi-song">Lò vi sóng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lau-dien">Lẩu điện</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/noi-ap-suat">Nồi áp suất</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/noi-com-dien">Nồi cơm điện</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/thiet-bi-gia-dinh">Thiết bị gia đình</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/ban-ui">Bàn ủi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-hut-mui">Máy hút mùi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-hut-bui">Máy hút bụi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-say-toc">Máy sấy tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/quat">Quạt</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/dien-nha-bep">Điện nhà bếp</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/binh-dun-sieu-toc">Bình đun siêu tốc</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/binh-thuy-dien">Bình thủy điện</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-danh-trung">Máy đánh trứng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-ep-trai-cay">Máy ép trái cây</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-lam-sua-dau-nanh">Máy làm sữa đậu nành</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-xay-sinh-to">Máy xay sinh tố</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="/do-dung-gia-dinh" class="nav-link">Đồ dùng gia đình</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/dung-cu-ban-an">Dụng cụ bàn ăn</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dua-muong">Đũa muỗng</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/ly-bo-ly">Ly - Bộ ly</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/binh-giu-nhiet">Bình giữ nhiệt</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/binh-dung-nuoc">Bình đựng nước</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/do-dung-nha-bep">Đồ dùng nhà bếp</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/va-san-chien-xao">Vá - Sạn chiên xào</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/thau-ro">Thau - Rổ</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/hop-dung-thuc-pham">Hộp đựng thực phẩm</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/bo-noi">Bộ nồi</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/chao-chong-dinh">Chảo chống dính</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/bo-lau-nha">Bộ lau nhà</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="/dien-thoai-laptop-may-tinh-bang" class="nav-link">Điện thoại, Laptop, Tablet</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">


                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/dien-thoai">Điện thoại</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/iphone">iPhone</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/samsung-2">Samsung</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/oppo">Oppo</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/sony-1">Sony</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/nokia">Nokia</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dien-thoai-tu-1-den-3-trieu">Điện thoại từ 1 đến 3 triệu</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/laptop">Laptop</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/dell">Dell</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/asus">Asus</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/macbook">Macbook</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/hp">HP</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/laptop-duoi-10-trieu">Laptop dưới 10 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/laptop-tu-10-den-15-trieu">Laptop từ 10 đến 15 triệu</a>
                                                </li>

                                            </ul>
                                        </li>



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/tablet">Tablet</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/ipad">iPad</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/samsung-2">Samsung</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/asus-1">Asus</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/lenovo">Lenovo</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-tinh-bang-duoi-3-trieu">Máy tính bảng dưới 3 triệu</a>
                                                </li>

                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="/may-tinh-bang-tu-3-den-8-trieu">Máy tính bảng từ 3 đến 8 triệu</a>
                                                </li>

                                            </ul>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item "><a class="nav-link" href="/phu-kien">Thể thao & Dã ngoại</a></li>



                                <li class="nav-item "><a class="nav-link" href="/may-loc-nuoc-may-nuoc-nong">Phụ kiện số</a></li>



                                <li class="nav-item "><a class="nav-link" href="/sim-so-the-cao">Nạp thẻ cào, thẻ game</a></li>



                                <li class="nav-item "><a class="nav-link" href="/dung-cu-lam-banh">Dụng cụ làm bánh</a></li>


                            </ul>
                        </nav>
                    </div>
                </aside>


                <div class="aside-item">
                    <div class="heading">
                        <h2 class="title-head">Bài viết khác</h2>
                    </div>
                    <div class="list-blogs">
                        <div class="row">

                            <article class="blog-item blog-item-list col-md-12">
                                <a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien" class="panel-box-media">

                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/270/860/articles/cach-lam-banh-bong-lan-trung-muoi-bang-noi-com-dien5.jpg?v=1509856050450" width="70" height="70" alt="Cách làm bánh bông lan cực dễ bằng nồi cơm điện" />

                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="/cach-lam-banh-bong-lan-cuc-de-bang-noi-com-dien" title="Cách làm bánh bông lan cực dễ bằng nồi cơm điện">Cách làm bánh bông lan cực dễ bằng nồi cơm điện</a></h3>
                                    <div class="post-time">01/11/2017</div>
                                </div>
                            </article>

                            <article class="blog-item blog-item-list col-md-12">
                                <a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh" class="panel-box-media">

                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/270/860/articles/lam-banh-pancake-toc-hanh-8.jpg?v=1509857723953" width="70" height="70" alt="Làm bánh pancake “tốc hành” bằng chảo chống dính" />

                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="/lam-banh-pancake-toc-hanh-bang-chao-chong-dinh" title="Làm bánh pancake “tốc hành” bằng chảo chống dính">Làm bánh pancake “tốc hành” bằng chảo chống dính</a></h3>
                                    <div class="post-time">01/11/2017</div>
                                </div>
                            </article>

                            <article class="blog-item blog-item-list col-md-12">
                                <a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat" class="panel-box-media">

                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/270/860/articles/kho-ca-dua.jpg?v=1509547868160" width="70" height="70" alt="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất" />

                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="/cach-nau-canh-chua-ca-basa-tuyet-ngon-tai-nha-de-nhat" title="Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất">Cách nấu canh chua cá basa tuyệt ngon tại nhà dễ nhất</a></h3>
                                    <div class="post-time">01/11/2017</div>
                                </div>
                            </article>

                            <article class="blog-item blog-item-list col-md-12">
                                <a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet" class="panel-box-media">

                                    <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/270/860/articles/dinh-duong-cho-be.jpg?v=1509547786227" width="70" height="70" alt="Mẹo vặt hay từ muối có thể bạn chưa biết?" />

                                </a>
                                <div class="blogs-rights">
                                    <h3 class="blog-item-name"><a href="/meo-vat-hay-tu-muoi-co-the-ban-chua-biet" title="Mẹo vặt hay từ muối có thể bạn chưa biết?">Mẹo vặt hay từ muối có thể bạn chưa biết?</a></h3>
                                    <div class="post-time">01/11/2017</div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>
@stop

@section('pageJs')

@stop
        