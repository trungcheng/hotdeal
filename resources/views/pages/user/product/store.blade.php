@extends('layouts.user.master')

@section('page'){{ $cate ? $cate->seo_title : $setting->seo_title }}
@stop

@section('description'){{ $cate ? $cate->seo_desc : $setting->seo_desc }}
@stop

@section('keywords'){{ $cate ? $cate->seo_keyword : $setting->seo_keyword }}
@stop

@section('robots')noodp,index,follow
@stop

@section('canonical'){{ $cate ? route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $cate->slug]) : route('search') }}/
@stop

@section('alternate'){{ $cate ? route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $cate->slug]) : route('search') }}/
@stop

@section('propName'){{ $cate ? $cate->seo_title : $setting->seo_title }}
@stop

@section('propDesc'){{ $cate ? $cate->seo_desc : $setting->seo_desc }}
@stop

@section('ogTitle'){{ $cate ? $cate->seo_title : $setting->seo_title }}
@stop

@section('ogDesc'){{ $cate ? $cate->seo_desc : $setting->seo_desc }}
@stop

@section('ogUrl'){{ $cate ? route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $cate->slug]) : route('search') }}/
@stop

@section('ogImage'){{ $cate ? $cate->image : $setting->logo }}
@stop

@section('schema'){{ $cate ? $cate->seo_schema : $setting->seo_schema }}
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
                        <li><strong><span itemprop="title">
                            {{ $cateName }}
                        </span></strong></li>
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
                                @foreach ($categories as $cat)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('cate-detail', ['slug' => $cat->slug]) }}">{{ $cat->name }}</a>
                                        @if (isset($cat->childrens))
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-menu">
                                                @foreach ($cat->childrens as $child)
                                                <li class="dropdown-submenu nav-item">
                                                    <a class="nav-link" href="{{ route('cate-detail', ['slug' => $child->slug]) }}">{{ $child->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </aside>

            </aside>
            
            <section class="main_container collection col-md-9 col-sm-12 col-xs-12">                
                <div class="pottion">
                    <h1 class="title-head margin-top-0">
                        {{ $cateName }}
                    </h1>
                    @if (count($results) > 0)
                        <div class="category-products products clearfix">
                            <form role="form" id="storeForm" method="get" action="">
                                <div class="sortPagiBar">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 text-xs-left text-sm-right">
                                            <div id="sort-by">
                                                <input id="order-input" type="hidden" name="order" value="">
                                                <label class="left hidden-xs">Sắp xếp: </label>
                                                <ul>
                                                    <li>
                                                        <span id="order-text">Thứ tự</span>
                                                        <ul>
                                                            <li><a class="order" href="javascript:;" data-order="name-asc">A &rarr; Z</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="name-desc">Z &rarr; A</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="price_sale-asc">Giá tăng dần</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="price_sale-desc">Giá giảm dần</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="created_at-desc">Hàng mới nhất</a></li>
                                                            <li><a class="order" href="javascript:;" data-order="created_at-asc">Hàng cũ nhất</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <section class="products-view products-view-grid clearfix">
                                @foreach ($results as $pro)
                                <?php
                                    if (!$cate) {
                                        $category = \App\Models\Category::where('id', $pro->cat_id)->first();
                                        if ($category) {
                                            if ($category->parent_id == 0) {
                                                $cateRoot = $category;
                                            } else {
                                                $cateRoot = \App\Models\Category::find($category->parent_id);
                                            }
                                        }
                                    }
                                ?>
                                <div class="col-xs-6 col-sm-4 col-md-3 no-padding">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            @if ($pro->discount > 0)
                                            <div class="sale-flash">SALE</div>
                                            @endif
                                            <div class="product-image-flip">
                                                <a href="{{ route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $pro->slug]) }}" title="{{ $pro->name }}">
                                                    <img src="{{ asset('frontend/images/icons/loaders.svg') }}" data-lazyload="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive center-block" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"><a href="{{ route('product-detail', ['cate' => $cateRoot->slug, 'slug' => $pro->slug]) }}" title="{{ $pro->name }}">{{ $pro->name }}</a></h3>
                                            <div class="price-box clearfix">
                                                <div class="special-price">
                                                    <span class="price product-price">
                                                        {{ number_format($pro->price_sale, 0, 0, '.') }}đ
                                                    </span>
                                                </div>
                                                @if ($pro->discount > 0)
                                                <div class="old-price">
                                                    <span class="price product-price-old">
                                                        {{ number_format($pro->price, 0, 0, '.') }}đ
                                                    </span>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </section>

                            <div class="clearfix"></div>
                            @if ($results->total() > 12)
                            <div class="text-xs-right text-center pagging-css margin-bottom-0">
                                <nav>
                                    {{ $results->appends(request()->query())->links() }}
                                </nav>
                            </div>
                            @endif
                        </div>
                    @else
                        <p style="position:absolute;top:43px">Không có sản phẩm nào!</p>
                    @endif
                </div>
                <div class="collections_des_and_menu margin-top-20">
                    <div class="collections_des_and_menu-content">
                        {!! $cate ? $cate->seo_content : '' !!}
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
        $(document).on('click', '.order', function() {
            $('#order-text').text($(this).text());
            $('#order-input').val($(this).data('order'));
            $('#storeForm').submit();
        });
        var query = get_query(window.location.href);
        if (query.order !== undefined) {
            $('.order').each(function (v, k) {
                if ($(k).data('order') == query.order) {
                    $('#order-input').val(query.order);
                    $('#order-text').text($(k).text());
                }
            });
        }
        // if (query.num !== undefined) {
        //     $('#num').val(query.num);
        // }
    </script>
@stop