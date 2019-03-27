@extends('layouts.user.master')

@section('page')Thương hiệu đồng hồ nổi tiếng tại Autwatch
@stop

@section('description')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('keywords')đồng hồ chính hãng, thương hiệu đồng hồ, đồng hồ chất lượng, đồng hồ nam, đồng hồ nữ, đồng hồ đẳng cấp, đồng hồ thương hiệu, cửa hàng đồng hồ uy tín
@stop

@section('canonical'){{ route('brand') }}/
@stop

@section('alternate'){{ route('brand') }}/
@stop

@section('propName')Thương hiệu đồng hồ nổi tiếng tại Autwatch.
@stop

@section('propDesc')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogTitle')Thương hiệu đồng hồ nổi tiếng tại Autwatch.
@stop

@section('ogDesc')Autwatch - Thương hiệu đồng hồ chính hãng, uy tín, chất lượng, cập nhật những mẫu mã đa dạng, đẳng cấp và hot nhất trên thị trường.
@stop

@section('ogUrl'){{ route('brand') }}/
@stop

@section('pageCss')

@stop

@section('content')
    <h1 class="hide">Thương hiệu đồng hồ nổi tiếng tại Autwatch</h1>
    @if (count($brands) > 0)
    <section class="section py-0" style="display:flex;">
        <div class="container">
            <header style="margin-top:3rem;" class="section-header d-flex flex-column flex-md-row align-items-center">
                <h2 style="padding-left:15px;" class="section-heading mb-0">các thương hiệu nổi tiếng</h2>
            </header>
            @foreach ($brands as $brand)
            <div class="col-md-6 col-lg-4 mb-4" style="float:left">
                <a class="brands-item" href="{{ route('product-store', ['sex' => 'c', 'br[]' => $brand->id]) }}">
                    <img class="img-fluid" src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}">
                </a>
            </div>
            @endforeach
        </div>
    </section>
    @endif
    <section class="section section-newsletter section-background text-white mb-0" style="background-image:url({{ asset('frontend/images/bg-newsletter.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <p class="section-lead text-center mb-4">Đăng ký ngay để nhận những tin tức về những mẫu đồng hồ mới nhất từ chúng tôi</p>
                    <div class="input-group input-group-lg input-group-newsletter">
                        <input class="search-input form-control" type="text" placeholder="Địa chỉ email">
                        <div class="input-group-append">
                            <button class="search-btn btn btn-secondary" type="button">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')
    <script type="text/javascript">
        
    </script>
@stop