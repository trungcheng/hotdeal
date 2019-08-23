@extends('layouts.user.master')

@section('page')Trang chủ | Vincom Retail
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    
@stop

@section('content')
    <div class="wrapper">
		<div class="pd-t-60 pd-b-60">
			<div class="container box-top">
				<div class="row">
					<div class="col-lg-5 col-xs-12">
						<div class="box-slogan">
							<img src="{{ asset('frontend/images/slogan.png') }}">
						</div>
						<div class="txt-slogan mg-t-50">
							<h3>Bình chọn</h3>
							<h4>Đại sứ trái tim</h4>
							<p>Bình chọn 15 gương mặt đại sứ dịch vụ tiêu biểu nhận danh hiệu "Đại sứ trái tim"</p>
							<a style="margin-left: 0;" class="btn-vote transition" href="#">Bình chọn ngay</a>
						</div>
					</div>
					<div class="col-lg-7 col-xs-12 inner-bg">
						<img class="bg-slogan" src="{{ $setting->image_home_page }}">
					</div>
				</div>
			</div>

			<div class="box-button mg-t-50 pd-t-30 pd-b-20">
				<div class="container txt-center">
					<h3>Bình chọn ngay cho những gương mặt tiêu biểu đến từ các khối, phòng ban</h3>
					<?php $i = 0; ?>
					@foreach ($categories as $cate)
						<?php $i++; ?>
						<div class="box-btn-vote">
							<a class="btn-vote btn-vote-2 wfm transition" onclick="open_group({{ $i }});">{{ $cate['name'] }}</a>
                        @if (isset($cate['childrens']))
                        	<ul class="list-child list-{{ $i }} transition">
                        		@foreach ($cate['childrens'] as $child)
                        			<li><a class="transition" href="/{{ $child['slug'] }}">{{ $child['name'] }}</a></li>
                                @endforeach
							</ul>
                        @else
                        <a class="btn-vote btn-vote-2 wfm transition" onclick="open_group({{ $i }});">{{ $cate['name'] }}</a>
                        @endif
                        </div>
                    @endforeach
				</div>
			</div>

			<div class="container">
				<div class="content-home">
					<div class="img-content hidden-mobile"><img src="{{ asset('frontend/images/vn.png') }}"> </div>
					{!! $setting->content_home_page !!}
				</div>
			</div>
		</div>
	</div>
@stop

@section('pageJs')
	<script type="text/javascript">
	   $(document).ready(function(){
	        cal_img();
	    });

	   	function cal_img() {
	   		var width = window.innerWidth;
			var divWidth = document.getElementsByClassName("box-top")[0].clientWidth;
			var boxbg = document.getElementsByClassName("inner-bg")[0].clientWidth;
			var cal = (width - divWidth)/2;
	        $('.bg-slogan').css('max-width', (boxbg+cal)-5);

	        var height = document.getElementsByClassName("bg-slogan")[0].clientHeight;
	        $('.inner-bg').css('height', height+10);
	   	}

	   	window.onresize = function(event) {
		    cal_img();
		};
	</script>
@stop