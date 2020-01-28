@extends('layouts.user.master')

@section('page')Tất cả sản phẩm
@stop

@section('description')
@stop

@section('keywords')Tất cả sản phẩm, Ant Kitchen, ant-kitchen.mysapo.net
@stop

@section('canonical'){{ route('store') }}/
@stop

@section('alternate'){{ route('store') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('store') }}/
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


                        <li><strong><span itemprop="title">Tất cả sản phẩm</span></strong></li>



                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <aside class="sidebar left left-content col-md-3 col-sm-12 col-xs-12">

                {{--<script src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/search_filter.js?1576740881097" type="text/javascript"></script>--}}
                {{--<div class="aside-filter">
                    <h2 class="fiter-title">Lọc sản phẩm</h2>
                    <div class="aside-hidden-mobile">
                        <div class="filter-container">
                            <div class="filter-containers">
                                <div class="filter-container__selected-filter" style="display: none;">
                                    <div class="filter-container__selected-filter-header clearfix">
                                        <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            <aside class="aside-item filter-type">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Loại</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <div class="field-search input-group">
                                        <input type="text" placeholder="Tìm Loại" class="form-control filter-type-list" onkeyup="filterItemInList(jQuery('.filter-type-list'))">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                    <ul class="filter-type">




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="ấm nước" for="filter-am-nuoc" class="am-nuoc">
                                                <input type="checkbox" id="filter-am-nuoc" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Ấm nước" value="(Ấm nước)" data-operator="OR">
                                                <i class="fa"></i>
                                                Ấm nước
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="ấm siêu tốc" for="filter-am-sieu-toc" class="am-sieu-toc">
                                                <input type="checkbox" id="filter-am-sieu-toc" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Ấm siêu tốc" value="(Ấm siêu tốc)" data-operator="OR">
                                                <i class="fa"></i>
                                                Ấm siêu tốc
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="bát" for="filter-bat" class="bat">
                                                <input type="checkbox" id="filter-bat" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Bát" value="(Bát)" data-operator="OR">
                                                <i class="fa"></i>
                                                Bát
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="bát inox" for="filter-bat-inox" class="bat-inox">
                                                <input type="checkbox" id="filter-bat-inox" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Bát Inox" value="(Bát Inox)" data-operator="OR">
                                                <i class="fa"></i>
                                                Bát Inox
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="bình pha cafe" for="filter-binh-pha-cafe" class="binh-pha-cafe">
                                                <input type="checkbox" id="filter-binh-pha-cafe" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Bình pha cafe" value="(Bình pha cafe)" data-operator="OR">
                                                <i class="fa"></i>
                                                Bình pha cafe
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="cặp lồng cơm" for="filter-cap-long-com" class="cap-long-com">
                                                <input type="checkbox" id="filter-cap-long-com" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Cặp lồng cơm" value="(Cặp lồng cơm)" data-operator="OR">
                                                <i class="fa"></i>
                                                Cặp lồng cơm
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="chảo chống dính" for="filter-chao-chong-dinh" class="chao-chong-dinh">
                                                <input type="checkbox" id="filter-chao-chong-dinh" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Chảo chống dính" value="(Chảo chống dính)" data-operator="OR">
                                                <i class="fa"></i>
                                                Chảo chống dính
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="điện thoại" for="filter-dien-thoai" class="dien-thoai">
                                                <input type="checkbox" id="filter-dien-thoai" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Điện thoại" value="(Điện thoại)" data-operator="OR">
                                                <i class="fa"></i>
                                                Điện thoại
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="hộp bảo quản" for="filter-hop-bao-quan" class="hop-bao-quan">
                                                <input type="checkbox" id="filter-hop-bao-quan" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Hộp bảo quản" value="(Hộp bảo quản)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hộp bảo quản
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="hộp thủy tinh" for="filter-hop-thuy-tinh" class="hop-thuy-tinh">
                                                <input type="checkbox" id="filter-hop-thuy-tinh" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Hộp thủy tinh" value="(Hộp thủy tinh)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hộp thủy tinh
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy đánh trứng" for="filter-may-danh-trung" class="may-danh-trung">
                                                <input type="checkbox" id="filter-may-danh-trung" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy đánh trứng" value="(Máy đánh trứng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy đánh trứng
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy làm bánh" for="filter-may-lam-banh" class="may-lam-banh">
                                                <input type="checkbox" id="filter-may-lam-banh" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy làm bánh" value="(Máy làm bánh)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy làm bánh
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy làm bắp rang bơ" for="filter-may-lam-bap-rang-bo" class="may-lam-bap-rang-bo">
                                                <input type="checkbox" id="filter-may-lam-bap-rang-bo" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy làm bắp rang bơ" value="(Máy làm bắp rang bơ)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy làm bắp rang bơ
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy làm kem" for="filter-may-lam-kem" class="may-lam-kem">
                                                <input type="checkbox" id="filter-may-lam-kem" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy làm kem" value="(Máy làm kem)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy làm kem
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy nướng" for="filter-may-nuong" class="may-nuong">
                                                <input type="checkbox" id="filter-may-nuong" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy nướng" value="(Máy nướng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy nướng
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy pha cà phê" for="filter-may-pha-ca-phe" class="may-pha-ca-phe">
                                                <input type="checkbox" id="filter-may-pha-ca-phe" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy pha cà phê" value="(Máy pha cà phê)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy pha cà phê
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy tính" for="filter-may-tinh" class="may-tinh">
                                                <input type="checkbox" id="filter-may-tinh" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy tính" value="(Máy tính)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy tính
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy tính bảng" for="filter-may-tinh-bang" class="may-tinh-bang">
                                                <input type="checkbox" id="filter-may-tinh-bang" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy tính bảng" value="(Máy tính bảng)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy tính bảng
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="máy xay, ép, trộn" for="filter-may-xay-ep-tron" class="may-xay-ep-tron">
                                                <input type="checkbox" id="filter-may-xay-ep-tron" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Máy xay, ép, trộn" value="(Máy xay, ép, trộn)" data-operator="OR">
                                                <i class="fa"></i>
                                                Máy xay, ép, trộn
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="nồi áp suất" for="filter-noi-ap-suat" class="noi-ap-suat">
                                                <input type="checkbox" id="filter-noi-ap-suat" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Nồi áp suất" value="(Nồi áp suất)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nồi áp suất
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="nồi chiên" for="filter-noi-chien" class="noi-chien">
                                                <input type="checkbox" id="filter-noi-chien" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Nồi chiên" value="(Nồi chiên)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nồi chiên
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="nồi cơm điện" for="filter-noi-com-dien" class="noi-com-dien">
                                                <input type="checkbox" id="filter-noi-com-dien" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Nồi cơm điện" value="(Nồi cơm điện)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nồi cơm điện
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="nồi nhôm" for="filter-noi-nhom" class="noi-nhom">
                                                <input type="checkbox" id="filter-noi-nhom" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Nồi nhôm" value="(Nồi nhôm)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nồi nhôm
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="rổ" for="filter-ro" class="ro">
                                                <input type="checkbox" id="filter-ro" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Rổ" value="(Rổ)" data-operator="OR">
                                                <i class="fa"></i>
                                                Rổ
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tivi" for="filter-tivi" class="tivi">
                                                <input type="checkbox" id="filter-tivi" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Tivi" value="(Tivi)" data-operator="OR">
                                                <i class="fa"></i>
                                                Tivi
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tô" for="filter-to" class="to">
                                                <input type="checkbox" id="filter-to" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Tô" value="(Tô)" data-operator="OR">
                                                <i class="fa"></i>
                                                Tô
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="tủ lạnh" for="filter-tu-lanh" class="tu-lanh">
                                                <input type="checkbox" id="filter-tu-lanh" onchange="toggleFilter(this)" data-group="Loại" data-field="product_type" data-text="Tủ lạnh" value="(Tủ lạnh)" data-operator="OR">
                                                <i class="fa"></i>
                                                Tủ lạnh
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </aside>


                            <aside class="aside-item filter-vendor">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Thương hiệu</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <div class="field-search input-group">
                                        <input type="text" placeholder="Tìm Thương hiệu" class="form-control filter-vendor-list" onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                    <ul class="filter-vendor">




                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="acer" for="filter-acer" class="acer">
                                                <input type="checkbox" id="filter-acer" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Acer" value="(Acer)" data-operator="OR">
                                                <i class="fa"></i>
                                                Acer

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="app a" for="filter-app-a" class="app-a">
                                                <input type="checkbox" id="filter-app-a" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="App a" value="(App a)" data-operator="OR">
                                                <i class="fa"></i>
                                                App a

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="apple" for="filter-apple" class="apple">
                                                <input type="checkbox" id="filter-apple" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Apple" value="(Apple)" data-operator="OR">
                                                <i class="fa"></i>
                                                Apple

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="blackberry" for="filter-blackberry" class="blackberry">
                                                <input type="checkbox" id="filter-blackberry" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="BlackBerry" value="(BlackBerry)" data-operator="OR">
                                                <i class="fa"></i>
                                                BlackBerry

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="blacker" for="filter-blacker" class="blacker">
                                                <input type="checkbox" id="filter-blacker" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Blacker" value="(Blacker)" data-operator="OR">
                                                <i class="fa"></i>
                                                Blacker

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="cuckoo" for="filter-cuckoo" class="cuckoo">
                                                <input type="checkbox" id="filter-cuckoo" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Cuckoo" value="(Cuckoo)" data-operator="OR">
                                                <i class="fa"></i>
                                                Cuckoo

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="elmich" for="filter-elmich" class="elmich">
                                                <input type="checkbox" id="filter-elmich" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Elmich" value="(Elmich)" data-operator="OR">
                                                <i class="fa"></i>
                                                Elmich

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="eurohome" for="filter-eurohome" class="eurohome">
                                                <input type="checkbox" id="filter-eurohome" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Eurohome" value="(Eurohome)" data-operator="OR">
                                                <i class="fa"></i>
                                                Eurohome

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="fujishi" for="filter-fujishi" class="fujishi">
                                                <input type="checkbox" id="filter-fujishi" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Fujishi" value="(Fujishi)" data-operator="OR">
                                                <i class="fa"></i>
                                                Fujishi

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="goldsun" for="filter-goldsun" class="goldsun">
                                                <input type="checkbox" id="filter-goldsun" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Goldsun" value="(Goldsun)" data-operator="OR">
                                                <i class="fa"></i>
                                                Goldsun

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="hitachi" for="filter-hitachi" class="hitachi">
                                                <input type="checkbox" id="filter-hitachi" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Hitachi" value="(Hitachi)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hitachi

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="hot air popper" for="filter-hot-air-popper" class="hot-air-popper">
                                                <input type="checkbox" id="filter-hot-air-popper" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Hot air popper" value="(Hot air popper)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hot air popper

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="htc" for="filter-htc" class="htc">
                                                <input type="checkbox" id="filter-htc" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="HTC" value="(HTC)" data-operator="OR">
                                                <i class="fa"></i>
                                                HTC

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="hurom" for="filter-hurom" class="hurom">
                                                <input type="checkbox" id="filter-hurom" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Hurom" value="(Hurom)" data-operator="OR">
                                                <i class="fa"></i>
                                                Hurom

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="interlock" for="filter-interlock" class="interlock">
                                                <input type="checkbox" id="filter-interlock" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Interlock" value="(Interlock)" data-operator="OR">
                                                <i class="fa"></i>
                                                Interlock

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="iruka" for="filter-iruka" class="iruka">
                                                <input type="checkbox" id="filter-iruka" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Iruka" value="(Iruka)" data-operator="OR">
                                                <i class="fa"></i>
                                                Iruka

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="kenwood" for="filter-kenwood" class="kenwood">
                                                <input type="checkbox" id="filter-kenwood" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Kenwood" value="(Kenwood)" data-operator="OR">
                                                <i class="fa"></i>
                                                Kenwood

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="lenovo" for="filter-lenovo" class="lenovo">
                                                <input type="checkbox" id="filter-lenovo" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Lenovo" value="(Lenovo)" data-operator="OR">
                                                <i class="fa"></i>
                                                Lenovo

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="lg" for="filter-lg" class="lg">
                                                <input type="checkbox" id="filter-lg" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="LG" value="(LG)" data-operator="OR">
                                                <i class="fa"></i>
                                                LG

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="lock&lock" for="filter-lock-lock" class="lock-lock">
                                                <input type="checkbox" id="filter-lock-lock" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Lock&Lock" value="(Lock&Lock)" data-operator="OR">
                                                <i class="fa"></i>
                                                Lock&Lock

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="magic" for="filter-magic" class="magic">
                                                <input type="checkbox" id="filter-magic" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Magic" value="(Magic)" data-operator="OR">
                                                <i class="fa"></i>
                                                Magic

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="midea" for="filter-midea" class="midea">
                                                <input type="checkbox" id="filter-midea" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Midea" value="(Midea)" data-operator="OR">
                                                <i class="fa"></i>
                                                Midea

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="nikai" for="filter-nikai" class="nikai">
                                                <input type="checkbox" id="filter-nikai" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Nikai" value="(Nikai)" data-operator="OR">
                                                <i class="fa"></i>
                                                Nikai

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="omi" for="filter-omi" class="omi">
                                                <input type="checkbox" id="filter-omi" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Omi" value="(Omi)" data-operator="OR">
                                                <i class="fa"></i>
                                                Omi

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="samsung" for="filter-samsung" class="samsung">
                                                <input type="checkbox" id="filter-samsung" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Samsung" value="(Samsung)" data-operator="OR">
                                                <i class="fa"></i>
                                                Samsung

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="sanaky" for="filter-sanaky" class="sanaky">
                                                <input type="checkbox" id="filter-sanaky" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Sanaky" value="(Sanaky)" data-operator="OR">
                                                <i class="fa"></i>
                                                Sanaky

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="scanpan" for="filter-scanpan" class="scanpan">
                                                <input type="checkbox" id="filter-scanpan" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Scanpan" value="(Scanpan)" data-operator="OR">
                                                <i class="fa"></i>
                                                Scanpan

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="sharp" for="filter-sharp" class="sharp">
                                                <input type="checkbox" id="filter-sharp" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Sharp" value="(Sharp)" data-operator="OR">
                                                <i class="fa"></i>
                                                Sharp

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="sinbo" for="filter-sinbo" class="sinbo">
                                                <input type="checkbox" id="filter-sinbo" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Sinbo" value="(Sinbo)" data-operator="OR">
                                                <i class="fa"></i>
                                                Sinbo

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="sony" for="filter-sony" class="sony">
                                                <input type="checkbox" id="filter-sony" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Sony" value="(Sony)" data-operator="OR">
                                                <i class="fa"></i>
                                                Sony

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="tanaka shuzo" for="filter-tanaka-shuzo" class="tanaka-shuzo">
                                                <input type="checkbox" id="filter-tanaka-shuzo" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Tanaka Shuzo" value="(Tanaka Shuzo)" data-operator="OR">
                                                <i class="fa"></i>
                                                Tanaka Shuzo

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="tiross" for="filter-tiross" class="tiross">
                                                <input type="checkbox" id="filter-tiross" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Tiross" value="(Tiross)" data-operator="OR">
                                                <i class="fa"></i>
                                                Tiross

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="welhome pro" for="filter-welhome-pro" class="welhome-pro">
                                                <input type="checkbox" id="filter-welhome-pro" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Welhome Pro" value="(Welhome Pro)" data-operator="OR">
                                                <i class="fa"></i>
                                                Welhome Pro

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="xpress" for="filter-xpress" class="xpress">
                                                <input type="checkbox" id="filter-xpress" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Xpress" value="(Xpress)" data-operator="OR">
                                                <i class="fa"></i>
                                                Xpress

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="yonauas" for="filter-yonauas" class="yonauas">
                                                <input type="checkbox" id="filter-yonauas" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Yonauas" value="(Yonauas)" data-operator="OR">
                                                <i class="fa"></i>
                                                Yonauas

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="zebra" for="filter-zebra" class="zebra">
                                                <input type="checkbox" id="filter-zebra" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Zebra" value="(Zebra)" data-operator="OR">
                                                <i class="fa"></i>
                                                Zebra

                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="zwilling" for="filter-zwilling" class="zwilling">
                                                <input type="checkbox" id="filter-zwilling" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor" data-text="Zwilling" value="(Zwilling)" data-operator="OR">
                                                <i class="fa"></i>
                                                Zwilling

                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </aside>

                            <link href="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/jquery-ui.min.css?1576740881097" rel="stylesheet" type="text/css" />
                            <script src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/jquery-ui.min.js?1576740881097" type="text/javascript"></script>
                            <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
                            <aside class="aside-item filter-price">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Giá sản phẩm</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <div id='slider'></div>
                                    <div id='start'><input value="0"></div>
                                    <div id='stop'><input value="10000000"></div>
                                    <div class="clearfix"></div>
                                    <a id="old-value" href="javascript:;"></a>
                                    <a id="filter-value" class="btn btn-gray" href="javascript:;" onclick="_toggleFilterdqdt(this);" data-value="(>-1 AND <10000001)">Lọc giá</a>

                                    <script>
                                        var maxx = 10000000 / 10;
                                        $('#slider').slider({
                                            min: '0',
                                            max: maxx,
                                            range: true,
                                            values: [0, 10000000],
                                            slide: function(event, ui) {
                                                if (ui.values[0] >= ui.values[1]) {
                                                    if (ui.handle == $("#slider a")[0]) {
                                                        $("#slider").slider("values", 1, ui.value);
                                                        ui.values[0] = ui.value;
                                                        ui.values[1] = ui.value;
                                                    } else {
                                                        $("#slider").slider("values", 0, ui.value);
                                                        ui.values[0] = ui.value;
                                                        ui.values[1] = ui.value;
                                                    }
                                                }
                                                var uimax = ui.values[1] + 1;
                                                $('#start input').val(ui.values[0]);
                                                $('#stop input').val(ui.values[1] + 1);
                                                var uimin = ui.values[0] - 1;
                                                var uimax = ui.values[1] + 2;
                                                $('#filter-value').attr('data-value', '(>' + uimin + ' AND <' + uimax + ')');
                                            }
                                        });
                                        $(document).on('change', '#start', function(e) {
                                            var val = parseInt($('#start input').val()) - 1;
                                            var val2 = parseInt($('#stop input').val()) + 1;

                                            $("#slider").slider("values", 0, parseInt(val));
                                            $('#filter-value').attr('data-value', '(>' + val + ' AND <' + val2 + ')');
                                        });
                                        $(document).on('change', '#stop', function(e) {
                                            var val = parseInt($('#start input').val()) - 1;
                                            var val2 = parseInt($('#stop input').val()) + 1;

                                            $("#slider").slider("values", 1, parseInt(val2));
                                            $('#filter-value').attr('data-value', '(>' + val + ' AND <' + val2 + ')');
                                        });
                                    </script>
                                </div>
                            </aside>

                            <aside class="aside-item filter-tag-style-1">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Màu sắc</span></h2>
                                </div>
                                <div class="aside-content filter-group clearfix">
                                    <ul style="overflow: visible;">

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-vang">
                                                    <input type="checkbox" id="filter-vang" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
                                                    <i class="fa vang" style="background-color:#F4FA58;"></i>
                                                    Vàng
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-do">
                                                    <input type="checkbox" id="filter-do" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
                                                    <i class="fa do" style="background-color:#FF0000;"></i>
                                                    Đỏ
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-trang">
                                                    <input type="checkbox" id="filter-trang" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Trắng" value="(Trắng)" data-operator="OR">
                                                    <i class="fa trang" style="background-color:#FFFFFF;border:1px solid #ebebeb;"></i>
                                                    Trắng
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nau">
                                                    <input type="checkbox" id="filter-nau" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Nâu" value="(Nâu)" data-operator="OR">
                                                    <i class="fa nau" style="background-color:#DF3A01;"></i>
                                                    Nâu
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-da-cam">
                                                    <input type="checkbox" id="filter-da-cam" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Da cam" value="(Da cam)" data-operator="OR">
                                                    <i class="fa da-cam" style="background-color:#FF4000;"></i>
                                                    Da cam
                                                </label>
                                            </span>
                                        </li>

                                        <li class="filter-item color filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-hong">
                                                    <input type="checkbox" id="filter-hong" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Hồng" value="(Hồng)" data-operator="OR">
                                                    <i class="fa hong" style="background-color:#FA58AC;"></i>
                                                    Hồng
                                                </label>
                                            </span>
                                        </li>


                                    </ul>
                                </div>
                            </aside>

                            <aside class="aside-item filter-tag-style-1 tag-filtster">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0"><span>Công suất</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-lon">
                                                    <input type="checkbox" id="filter-lon" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="Lớn" value="(Lớn)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Lớn
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nho">
                                                    <input type="checkbox" id="filter-nho" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="Nhỏ" value="(Nhỏ)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nhỏ
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-vua">
                                                    <input type="checkbox" id="filter-vua" onchange="toggleFilter(this)" data-group="tag2" data-field="tags" data-text="Vừa" value="(Vừa)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Vừa
                                                </label>
                                            </span>
                                        </li>


                                    </ul>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>--}}

                <aside class="aside-item collection-category hidden-xs hidden-sm">
                    <div class="aside-title">
                        <h3 class="title-head margin-top-0"><span>Danh mục</span></h3>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">



                                <li class="nav-item ">
                                    <a href="/tivi-loa-am-thanh" class="nav-link">Tivi, Loa, Âm thanh</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">



                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/tivi">Tivi</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/tivi-tra-gop-0-1">Tivi trả góp 0-1%</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/doi-moi-2017">Đời mới 2017</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/sony">Sony</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/samsung">Samsung</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lg">LG</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/tu-32-43-inch">Từ 32-43 inch</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/tu-44-55-inch">Từ 44-55 inch</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/duoi-5-trieu">Dưới 5 triệu</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/tivi-cao-cap">Tivi cao cấp</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/loa-am-thanh">Loa, Âm thanh</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/loa-thanh-soundbar">Loa thanh (Soundbar)</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/dan-am-thanh">Dàn âm thanh</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/dau-dvd">Đầu DVD</a>
                                                </li>




                                                <li class="nav-item">
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



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/doi-moi-2017-1">Đời mới 2017</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/toshiba">Toshiba</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lg-1">LG</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/panasonic">Panasonic</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/samsung-1">Samsung</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/electrolux">Electrolux</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-giat-cao-cap">Máy giặt cao cấp</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/may-say-quan-ao">Máy sấy quần áo</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/gia-duoi-5-trieu">Giá dưới 5 triệu</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/gia-tu-5-10-trieu">Giá từ 5 - 10 triệu</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/electrolux-1">Electrolux</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/beko">Beko</a>
                                                </li>




                                                <li class="nav-item">
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



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/bep-gas">Bếp gas</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/bep-tu">Bếp từ</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/bep-hong-ngoai">Bếp hồng ngoại</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lo-nuong">Lò nướng</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lo-vi-song">Lò vi sóng</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lau-dien">Lẩu điện</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/noi-ap-suat">Nồi áp suất</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/noi-com-dien">Nồi cơm điện</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/thiet-bi-gia-dinh">Thiết bị gia đình</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/ban-ui">Bàn ủi</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-hut-mui">Máy hút mùi</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-hut-bui">Máy hút bụi</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-say-toc">Máy sấy tóc</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/quat">Quạt</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/dien-nha-bep">Điện nhà bếp</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/binh-dun-sieu-toc">Bình đun siêu tốc</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/binh-thuy-dien">Bình thủy điện</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-danh-trung">Máy đánh trứng</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-ep-trai-cay">Máy ép trái cây</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-lam-sua-dau-nanh">Máy làm sữa đậu nành</a>
                                                </li>




                                                <li class="nav-item">
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



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/dua-muong">Đũa muỗng</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/ly-bo-ly">Ly - Bộ ly</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/binh-giu-nhiet">Bình giữ nhiệt</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/binh-dung-nuoc">Bình đựng nước</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/do-dung-nha-bep">Đồ dùng nhà bếp</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/va-san-chien-xao">Vá - Sạn chiên xào</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/thau-ro">Thau - Rổ</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/hop-dung-thuc-pham">Hộp đựng thực phẩm</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/bo-noi">Bộ nồi</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/chao-chong-dinh">Chảo chống dính</a>
                                                </li>




                                                <li class="nav-item">
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



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/iphone">iPhone</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/samsung-2">Samsung</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/oppo">Oppo</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/sony-1">Sony</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/nokia">Nokia</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/dien-thoai-tu-1-den-3-trieu">Điện thoại từ 1 đến 3 triệu</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/laptop">Laptop</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/dell">Dell</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/asus">Asus</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/macbook">Macbook</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/hp">HP</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/laptop-duoi-10-trieu">Laptop dưới 10 triệu</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/laptop-tu-10-den-15-trieu">Laptop từ 10 đến 15 triệu</a>
                                                </li>


                                            </ul>
                                        </li>




                                        <li class="dropdown-submenu nav-item">
                                            <a class="nav-link" href="/tablet">Tablet</a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">



                                                <li class="nav-item">
                                                    <a class="nav-link" href="/ipad">iPad</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/samsung-2">Samsung</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/asus-1">Asus</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/lenovo">Lenovo</a>
                                                </li>




                                                <li class="nav-item">
                                                    <a class="nav-link" href="/may-tinh-bang-duoi-3-trieu">Máy tính bảng dưới 3 triệu</a>
                                                </li>




                                                <li class="nav-item">
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

            </aside>
            
            <section class="main_container collection col-md-9 col-sm-12 col-xs-12">
                {{--<div class="category-gallery">

                    <div class="image pd-bt30">


                        <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/cat-banner-1.jpg?1576740881097" alt="Tất cả sản phẩm" class="img-responsive center-block" />


                    </div>

                </div>--}}
                
                <div class="pottion">
                    <h1 class="title-head margin-top-0">Tất cả sản phẩm</h1>
                    <div class="category-products products clearfix">

                        <div class="sortPagiBar">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 text-xs-left text-sm-right">
                                    <div id="sort-by">
                                        <label class="left hidden-xs">Sắp xếp: </label>
                                        <ul>
                                            <li><span>Thứ tự</span>
                                                <ul>
                                                    <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                                    <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="products-view products-view-grid clearfix">

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-aca14940-b6ff-43cc-8306-ee4fc888caea.jpg?v=1510583505000" alt="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994391" enctype="multipart/form-data">


                                                <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-toggle="tooltip" data-placement="top" class="fa fa-link" title="Chọn sản phẩm"></a>



                                                <a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-handle="chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/chao-nhom-chong-dinh-zwilling-madura-plus-66290-286-28-cm" title="Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm">Chảo nhôm chống dính Zwilling Madura Plus 66290-286 28 cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">1.000.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    5.000.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="product-image-flip">
                                            <a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" title="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-28fb42cd-eb85-453c-a78f-b42789a45204.jpg?v=1510583367770" alt="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994383" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14330732" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" data-handle="chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/chao-sau-long-chong-dinh-e-cook-deco-lock-lock-led2285y-28cm" title="Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm">Chảo sâu lòng chống dính E-Cook Deco Lock&Lock LED2285Y 28cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">235.000₫</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="product-image-flip">
                                            <a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" title="Chảo chống dính Scanpan IQ 64002800 28cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1-882380bc-bf7c-479a-9241-e680ae3600fa.jpg?v=1510583234780" alt="Chảo chống dính Scanpan IQ 64002800 28cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994379" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14330728" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" data-handle="chao-chong-dinh-scanpan-iq-64002800-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/chao-chong-dinh-scanpan-iq-64002800-28cm" title="Chảo chống dính Scanpan IQ 64002800 28cm">Chảo chống dính Scanpan IQ 64002800 28cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">3.610.000₫</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" title="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/chao-1.jpg?v=1510583146027" alt="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8994369" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14330718" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" data-handle="chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/chao-chong-dinh-elmich-day-tu-co-vung-kinh-eda-43128-28cm" title="Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm">Chảo chống dính Elmich đáy từ có vung kính EDA-43128 - 28cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">219.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    360.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/cap-long-com-inox-3-tang-lock-lock-620ml" title="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-6b2104e1-4aca-4333-b626-31d4a1e3bf27.jpg?v=1509876064447" alt="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900861" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14171371" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/cap-long-com-inox-3-tang-lock-lock-620ml" data-handle="cap-long-com-inox-3-tang-lock-lock-620ml" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/cap-long-com-inox-3-tang-lock-lock-620ml" title="Cặp lồng cơm inox 3 tầng Lock&Lock 620ml">Cặp lồng cơm inox 3 tầng Lock&Lock 620ml</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">308.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    441.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" title="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-3a8aa53e-5af4-4c62-bf72-e93fbfd8b065.jpg?v=1509875934507" alt="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900852" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14171332" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" data-handle="bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/bo-hop-bao-quan-thuc-pham-interlock-inl301s4-nap-xanh" title="Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)">Bộ hộp bảo quản thực phẩm Interlock INL301S4 (Nắp xanh)</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">277.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    325.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" title="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-a0a2cfcc-d8b9-48b4-9568-ade768b6e828.jpg?v=1509875775257" alt="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900826" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14171302" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" data-handle="bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/bat-nhua-mau-den-hoa-tiet-hoa-anh-dao-tanaka-shuzo-11-5-x-6-2cm" title="Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm">Bát nhựa màu đen họa tiết hoa anh đào Tanaka Shuzo 11,5 x 6,2cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">40.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    41.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" title="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat-1bc1236e-8fd9-42ef-be0c-136aa8e740ca.jpg?v=1509875659003" alt="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900822" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14171298" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" data-handle="bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/bo-bat-mau-lock-lock-hpp511s5-rainbow-138-x-131-x-106-mm" title="Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm">Bộ bát màu Lock&Lock HPP511S5 Rainbow 138 x 131 x 106 mm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">105.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    117.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="sale-flash">SALE</div>

                                        <div class="product-image-flip">
                                            <a href="/bat-inox-hai-lop-zebra-124002-11cm" title="Bát inox hai lớp Zebra 124002 11cm">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/bat.jpg?v=1509875540417" alt="Bát inox hai lớp Zebra 124002 11cm" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8900814" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14171290" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/bat-inox-hai-lop-zebra-124002-11cm" data-handle="bat-inox-hai-lop-zebra-124002-11cm" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/bat-inox-hai-lop-zebra-124002-11cm" title="Bát inox hai lớp Zebra 124002 11cm">Bát inox hai lớp Zebra 124002 11cm</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">48.000₫</span>
                                            </div>

                                            <div class="old-price">
                                                <span class="price product-price-old">
                                                    51.000₫
                                                </span>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="product-image-flip">
                                            <a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1-a6e423f0-382c-4789-aff6-2a98c42a31da.jpg?v=1509852063367" alt="Nồi cơm điện tử đa năng Philips HD3060" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898349" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14166625" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/noi-com-dien-tu-da-nang-philips-hd3060" data-handle="noi-com-dien-tu-da-nang-philips-hd3060" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/noi-com-dien-tu-da-nang-philips-hd3060" title="Nồi cơm điện tử đa năng Philips HD3060">Nồi cơm điện tử đa năng Philips HD3060</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">1.739.000₫</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="product-image-flip">
                                            <a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" title="Nồi cơm điện Cuckoo 040101CR-0331 0.5L">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1-72a4ebf4-48ab-4f3c-a9ca-3da97abd0d9f.jpg?v=1509851989550" alt="Nồi cơm điện Cuckoo 040101CR-0331 0.5L" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898347" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14166623" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" data-handle="noi-com-dien-cuckoo-040101cr-0331-0-5l" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/noi-com-dien-cuckoo-040101cr-0331-0-5l" title="Nồi cơm điện Cuckoo 040101CR-0331 0.5L">Nồi cơm điện Cuckoo 040101CR-0331 0.5L</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">1.483.000₫</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-4 col-md-3 no-padding">

                                <div class="product-box">
                                    <div class="product-thumbnail">

                                        <div class="product-image-flip">
                                            <a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" title="Nồi cơm điện tử Sharp KS-COM10V 625W 1L">

                                                <img src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/loaders.svg?1576740881097" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/270/860/products/noi-com-1.jpg?v=1509851872427" alt="Nồi cơm điện tử Sharp KS-COM10V 625W 1L" class="img-responsive center-block" />

                                            </a>
                                        </div>
                                        <!-- <div class="prod-icons">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8898343" enctype="multipart/form-data">


                                                <input type="hidden" name="variantId" value="14166619" />
                                                <a class="fa fa-shopping-basket add_to_cart" data-toggle="tooltip" data-placement="top" title="Mua ngay"></a>



                                                <a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" data-handle="noi-com-dien-tu-sharp-ks-com10v-625w-1l" data-toggle="tooltip" data-placement="bottom" title="Xem nhanh" class="fa fa-search quick-view"></a>

                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="/noi-com-dien-tu-sharp-ks-com10v-625w-1l" title="Nồi cơm điện tử Sharp KS-COM10V 625W 1L">Nồi cơm điện tử Sharp KS-COM10V 625W 1L</a></h3>


                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">1.740.000₫</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </section>

                        <div class="clearfix"></div>
                        <div class="text-xs-right text-center pagging-css margin-bottom-0">
                            <nav>
                                <ul class="pagination clearfix">

                                    <li class="page-item disabled"><a class="page-link" href="#">«</a></li>





                                    <li class="active page-item disabled"><a class="page-link" href="javascript:;"><span class="pss">Trang</span> 1</a></li>




                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;"><span class="pss">Trang</span> 2</a></li>



                                    <li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;"><span class="pss">Trang</span> 3</a></li>



                                    <li class="page-item"><a class="page-link" onclick="doSearch(4)" href="javascript:;"><span class="pss">Trang</span> 4</a></li>



                                    <li class="page-item"><a class="page-link" onclick="doSearch(5)" href="javascript:;"><span class="pss">Trang</span> 5</a></li>



                                    <li class="page-item"><a class="page-link" onclick="doSearch(6)" href="javascript:;"><span class="pss">Trang</span> 6</a></li>




                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">»</a></li>

                                </ul>
                            </nav>
                        </div>



                    </div>
                </div>
                <div class="collections_des_and_menu margin-top-10">
                    <div class="collections_des_and_menu-content">
                        Hàng hoá tại <strong>Ant Kitchen</strong> vô cùng đa dạng, từ các nhóm hàng lớn như Tivi, Tủ Lạnh, Máy Giặt, Máy Lạnh… đến các nhóm hàng Gia dụng như: Nồi Cơm Điện, Bếp Ga, Bếp Điện Từ… <strong>Ant Kitchen</strong> cũng kinh doanh các mặt hàng như: Điện Thoại, Máy Tính Bảng, Laptop, Phụ Kiện…
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop

@section('pageJs')
    {{--<script>
        var filter = new Bizweb.SearchFilter();
        
        function clearAllFiltered() {
            filter = new Bizweb.SearchFilter();
            $(".filter-container__selected-filter-list ul").html("");
            $(".filter-container input[type=checkbox]").attr('checked', false);
            $(".filter-container__selected-filter").hide();
            doSearch(1);
        }
    </script>--}}
    {{--<script src="//bizweb.dktcdn.net/100/270/860/themes/606449/assets/col.js?1576740881097" type="text/javascript"></script>--}}
@stop