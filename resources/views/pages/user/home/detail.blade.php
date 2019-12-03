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
    @if ($category->image)
    <div class="carousel slide" id="carousel_main">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img alt="slide3" src="{{ $category->image }}">
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
    @endif
    <div class="bread">
        <ol class="breadcrumb">
            <li><a href="{{ url('') }}">Trang chủ</a></li>
            @if ($parentCate)
                @if ($parentCate->parent_id == 0)
                    <li><a href="{{ url('') }}">{{ $parentCate->name }}</a></li>
                @else
                    <li><a href="{{ route('detail', ['slug' => $parentCate->slug]) }}">{{ $parentCate->name }}</a></li>
                @endif
            @endif
            <li class="active">{{ $category->name }}</li>
        </ol>
    </div>
    <div class="main">
        <div class="main_col4">
            <div class="main_list_news">
                <ul>
                    <li>
                        <a class="panel_img" href="https://taseco.vn/gioi-thieu/gioi-thieu.html"><img alt="" src="https://taseco.vn/upload/tintuc/1535080534Untitled-1.jpg"></a>
                        <div class="panel_txt">
                            <h2 class="panel_tlt"><a href="https://taseco.vn/gioi-thieu/gioi-thieu.html">Thông điệp của Ban lãnh đạo

                                </a></h2>
                            <p>Trải qua hơn một thập kỷ hình thành và phát triển, TASECO tự hào đã và đang đạt được nhiều thành công trên các lĩnh vực hoạt động của mình. Từ một doanh nghiệp khi thành lập có quy mô nhỏ, kinh doanh dịch vụ phi hàng không tại Cảng hàng không quốc tế Nội Bài. Công ty đã có quá trình phát triển vững chắc...</p>
                            <!--<a class="btn btn-primary" href="https://taseco.vn/gioi-thieu/gioi-thieu.html">Xem thêm</a>-->
                        </div>
                    </li>
                    <li>
                        <a class="panel_img" href="https://taseco.vn/gioi-thieu/thong-thieu-cong-ty.html"><img alt="" src="https://taseco.vn/upload/tintuc/1460427681Untitled-1.jpg"></a>
                        <div class="panel_txt">
                            <h2 class="panel_tlt"><a href="https://taseco.vn/gioi-thieu/thong-thieu-cong-ty.html">Giới thiệu Công ty

                                </a></h2>
                            <p>CÔNG TY CỔ PHẦN DỊCH VỤ HÀNG KHÔNG THĂNG LONG</p>
                            <!--<a class="btn btn-primary" href="https://taseco.vn/gioi-thieu/thong-thieu-cong-ty.html">Xem thêm</a>-->
                        </div>
                    </li>
                    <li>
                        <a class="panel_img" href="https://taseco.vn/gioi-thieu/qua-trinh-hinh-thanh-va-phat-trien.html"><img alt="" src="https://taseco.vn/upload/tintuc/1457405646phattrien.png"></a>
                        <div class="panel_txt">
                            <h2 class="panel_tlt"><a href="https://taseco.vn/gioi-thieu/qua-trinh-hinh-thanh-va-phat-trien.html">Quá trình hình thành và phát triển

                                </a></h2>
                            <p>Công ty Cổ phần Dịch vụ hàng không Thăng Long (TASECO) được thành lập với vốn điều lệ 5 tỉ đồng, kinh doanh dịch vụ phi hàng không tại Sân bay quốc tế Nội Bà</p>
                            <!--<a class="btn btn-primary" href="https://taseco.vn/gioi-thieu/qua-trinh-hinh-thanh-va-phat-trien.html">Xem thêm</a>-->
                        </div>
                    </li>
                    <li>
                        <a class="panel_img" href="https://taseco.vn/gioi-thieu/linh-vuc-kinh-doanh.html"><img alt="" src="https://taseco.vn/upload/tintuc/1457541277kd1.jpg"></a>
                        <div class="panel_txt">
                            <h2 class="panel_tlt"><a href="https://taseco.vn/gioi-thieu/linh-vuc-kinh-doanh.html">Lĩnh vực kinh doanh

                                </a></h2>
                            <p>Các ngành nghề kinh doanh của TASECO bao gồm:

                                - Dịch vụ hàng không

                                - Kinh doanh bất động sản

                                - Kinh doanh dịch vụ nhà hàng - khách sạn

                                - Đầu tư tài chính

                                - Quảng cáo thương mại

                                - Kinh doanh hàng mỹ nghệ, bách hoá, lưu niệm

                                - Đại lý cung cấp dịch vụ bưu chính viễn thông

                                - Đại lý thu đổi ngoại tệ

                                - Vận tải hàng hoá, vận chuyển hành khách bằng ôtô

                                - Dịch vụ lữ hành nội địa

                                -...</p>
                            <!--<a class="btn btn-primary" href="https://taseco.vn/gioi-thieu/linh-vuc-kinh-doanh.html">Xem thêm</a>-->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="pagi">
                <ul class="pagination">
                    <link href="https://taseco.vn/lib/paging/style.css" rel="stylesheet" type="text/css"><span class="paging_div">&nbsp;<span class="span_select_class">&nbsp;1&nbsp;</span>&nbsp;</span>
                </ul>
            </div>
        </div>
        <div class="main_col3">
            <div class="sidebar">
                <div class="panel panel-success">
                    <div class="panel_icon" style="background: url({{ asset('frontend/themes/default/images/col_left_detail.png') }}) no-repeat top">
                        <h1>Danh mục</h1>
                    </div>
                    <div class="panel-body">
                        <div class="sidebar_ul">
                            @if (count($childCates) > 0)
                            <ul>
                                @foreach ($childCates as $cate)
                                <li>
                                    <a href="{{ route('detail', ['slug' => $cate->slug]) }}">
                                        {{ $cate->name }}
                                    </a>
                                    @if (count($cate->childrens) > 0)
                                    <ul>
                                        @foreach ($cate->childrens as $child)
                                            <li><a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
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