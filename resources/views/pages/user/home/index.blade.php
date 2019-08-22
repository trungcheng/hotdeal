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
						<img class="bg-slogan" src="{{ asset('frontend/images/bg-home.png') }}">
					</div>
				</div>
			</div>

			<div class="box-button mg-t-50 pd-t-30 pd-b-20">
				<div class="container txt-center">
					<h3>Bình chọn ngay cho những gương mặt tiêu biểu đến từ các khối, phòng ban</h3>
					<div class="box-btn-vote">
						<a class="btn-vote btn-vote-2 wfm transition" onclick="open_group(1);">Khối vận hành</a>	
						<ul class="list-child list-1 transition">
							<li><a class="transition" href="#">Miền Bắc 1</a></li>
							<li><a class="transition" href="#">Miền Bắc 2</a></li>
							<li><a class="transition" href="#">Miền Bắc 3</a></li>
							<li><a class="transition" href="#">Miền Bắc 4</a></li>
							<li><a class="transition" href="#">Miền Bắc 5</a></li>
						</ul>
					</div>

					<div class="box-btn-vote">
						<a class="btn-vote btn-vote-2 wfm transition" onclick="open_group(2);">Khối xây dựng</a>	
						<ul class="list-child list-2 transition">
							<li><a class="transition" href="#">Miền Bắc 1</a></li>
							<li><a class="transition" href="#">Miền Bắc 2</a></li>
							<li><a class="transition" href="#">Miền Bắc 3</a></li>
							<li><a class="transition" href="#">Miền Bắc 4</a></li>
							<li><a class="transition" href="#">Miền Bắc 5</a></li>
						</ul>
					</div>

					<div class="box-btn-vote">
						<a class="btn-vote btn-vote-2 wfm transition" onclick="open_group(3);">Khối tài chính - hành chính</a>	
						<ul class="list-child list-3 transition">
							<li><a class="transition" href="#">Miền Bắc 1</a></li>
							<li><a class="transition" href="#">Miền Bắc 2</a></li>
							<li><a class="transition" href="#">Miền Bắc 3</a></li>
							<li><a class="transition" href="#">Miền Bắc 4</a></li>
							<li><a class="transition" href="#">Miền Bắc 5</a></li>
						</ul>
					</div>

					<div class="box-btn-vote">
						<a class="btn-vote btn-vote-2 wfm transition" onclick="open_group(4);">Các khối phòng ban khác</a>	
						<ul class="list-child list-4 transition">
							<li><a class="transition" href="#">Miền Bắc 1</a></li>
							<li><a class="transition" href="#">Miền Bắc 2</a></li>
							<li><a class="transition" href="#">Miền Bắc 3</a></li>
							<li><a class="transition" href="#">Miền Bắc 4</a></li>
							<li><a class="transition" href="#">Miền Bắc 5</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="content-home">
					<div class="img-content hidden-mobile"><img src="{{ asset('frontend/images/vn.png') }}"> </div>
					<h3>tiêu chí đánh giá</h3>
					<h4>1. Là tấm gương tiêu biểu trong công việc</h4>
					<ul>
						<li>- Cung cấp dịch vụ tốt ngoài mong đợi</li>
						<li>- Kết quả đánh giá Quý đạt 80% trở lên</li>
						<li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc</li>
					</ul>
					<h4>2. Là tấm gương tiêu biểu của tinh thần dịch vụ vincom</h4>
					<p>Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</p>
					<h4>3. ưu tiên các trường hợp được vinh danh trên truyền thông</h4>
					<p>Các trường hợp được vinh danh trên truyền thông sẽ được ưu tiên (VD: Vinh danh trên báo chí, Vinclub, quyết định khen thưởng như: Cứu người gặp nạn, nhặt được của rơi trả lại người mất, giúp đỡ khách hàng, phát hiện và ngăn chặn kịp thời các rủi ro xảy ra, phát hiện, báo cáo, đấu tranh, ngăn chặn các hành vi sai phạm, tiêu cực, hành vi vi phạm pháp luật, ...)</p>

					<h3>thể thức tham gia</h3>
					<ul>
						<li>- Thời gian tham gia bình chọn: 1/9/2019 - 30/9/2019</li>
						<li>- Đối tượng: Toàn thể CBNV công ty</li>
						<li>- Hình thức dự thi: Bình chọn online trên hệ thống</li>
						<li>- Cách thức tổ chức: Thi đấu bình chọn của CBNV theo vòng từ cấp bộ phận, cơ sở, vùng và toàn công ty. </li>
						Đến cấp vùng/công ty, mỗi ứng viên sẽ có các clip giới thiệu bản thân để CBNV toàn quốc có thể bình chọn dễ dàng. </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop

@section('pageJs')
	<script type="text/javascript">
	   $(document).ready(function(){
	    	$('.dropdown-submenu a.test').on("click", function(e){
	    		$('.submenu').css('display', 'none');
	        	$(this).next('ul').toggle();
	        	e.stopPropagation();
	        	e.preventDefault();
	        });

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