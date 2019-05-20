@extends('layouts.user.master')

@section('page'){{ $article->seo_title }}
@stop

@section('description'){{ $article->seo_desc }}
@stop

@section('keywords'){{ $article->seo_keyword }}
@stop

@section('canonical'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('alternate'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('propName'){{ $article->seo_title }}
@stop

@section('propDesc'){{ $article->seo_desc }}
@stop

@section('ogTitle'){{ $article->seo_title }}
@stop

@section('ogDesc'){{ $article->seo_desc }}
@stop

@section('ogUrl'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('pageCss')
	<style type="text/css">
		.blog-post article img {
	        height: auto;
	    }
	    .cs-flex {
	        display: flex;
	    }
	    .list-view {
	        background: #fbfbfb;
	        border-radius: 3px;
	        width: 100%;
	    }
	    .list-view .item {
	        border: 1px solid #e5e5e5;
	        margin-bottom: -1px;
	        padding: 5px 0;
	    }
	    .list-view .item .image {
	        width: 60px;
	        height: 70px;
	        background: #fafafa;
	    }
	    .list-view .item .about {
	        padding: 0 10px;
	        width: 190px;
	    }
	    .list-view .item .about .title {
	        font-size: 14px;
	        margin: 0;
	        padding: 15px 0 2px;
	        font-weight: 700;
	    }
	    .list-view .item .about .description {
	        font-size: 14px;
	    }

	    .hotline-footer {
	        width: 100%;
	        margin-top: 0px;
	    }
	    .hotline-footer strong {
	        line-height: 25px;
	        text-align: left;
	    }
	    .hotline-right {
	        line-height: 25px;
	        text-align: left;
	    }
	    .hotline-right a {
	        position: relative;
	        background: #804d00;
	        color: #fff!important;
	        font-size: 16px;
	        border-radius: 50px;
	        padding: 8px 8px 8px 0px;
	        display: block;
	        width: 100%;
	    }
	    .phone {
	        position: absolute;
	        top: 1px;
	        left: 1px;
	    }
	    .phone span {
	        position: absolute;
	        top: 7px;
	        left: 6px;
	        width: 25px;
	        height: 25px;
	        background: url(/frontend/images/phone0.png) no-repeat top;
	    }
	    .phone+div {
	        border: 1px solid #fff;
	        width: 38px;
	        height: 38px;
	        position: absolute;
	        border-radius: 126px;
	        left: 2px;
	        top: 2px;
	    }
	    ol {
	    	margin-left: 15px;
	    	font-weight: bold;
	    }
	</style>
@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Trang chủ</a></li>
			<li><a href="{{ route('article') }}">Tin tức</a></li>
			<li class="active">{{ $article->title }}</li>
		</ol>
	</div>
</div>

<!-- Blog -->
<section class="blog-single padding-top-20 padding-bottom-60">
	<div class="container">
		<div class="row">
			<div class="col-md-9"> 
				
				<!-- Blog Post -->
				<div class="blog-post">
					<article> 
						<!-- <img style="width:100%" class="img-responsive margin-bottom-20" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}" />  -->
						<h1 style="font-size:25px;margin-top:0px;margin-bottom:5px;">{{ $article->title }}</h1>
						<span style="display:block;margin-bottom:15px;"><i style="margin-right:5px;" class="fa fa-bookmark-o"></i> {{ $article->created_at }}</span>
						{!! $article->intro !!}
						{!! $article->fulltext !!}
						<div class="fb-like" data-href="{{ route('article-detail', ['slug' => $article->slug]) }}" data-width="850" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</article>
					
					<!-- Comments -->
					<div class="comments">
						<!-- <h6 class="margin-0">Bình luận</h6> -->
						<div class="fb-comments" data-href="{{ route('article-detail', ['slug' => $article->slug]) }}" data-width="850" data-numposts="10"></div>
						<!-- <ul>
							<li class="media">
								<div class="media-left"> <a href="#" class="avatar"> <img src="{{ asset('frontend/images/avatar.jpg') }}" alt=""> </a> </div>
								<div class="media-body padding-left-20">
									<h6>Lucian Black <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017 </span> </h6>
									<p>Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </p>
								</div>
							</li>
						</ul> -->
					</div>
					
					<!-- ADD comments -->
					<!-- <div class="add-comments padding-top-20">
						<h6>Gửi bình luận</h6>
						<form>
							<ul class="row">
								<li class="col-sm-6">
									<label>Họ tên
										<input type="text" class="form-control" name="name" placeholder="">
									</label>
								</li>
								<li class="col-sm-6">
									<label>Email
										<input type="text" class="form-control" name="email" placeholder="">
									</label>
								</li>
								<li class="col-sm-12">
									<label>Tin nhắn
										<textarea class="form-control" rows="5" placeholder=""></textarea>
									</label>
								</li>
								<li class="col-sm-12 text-left">
									<button type="submit" class="btn-round">Gửi bình luận</button>
								</li>
							</ul>
						</form>
					</div> -->
				</div>
			</div>
			
			<!-- Side Bar -->
			<div class="col-md-3">
				<div class="shop-side-bar"> 
					
					<div class="hotline-footer">
				          <div class="chattuvan" style="margin-bottom: 15px;">
				              <strong class="hotline-right">
				                  <a href="http://zalo.me/0943180888" style="background:#0C599C;padding-left:35px;" rel="nofollow">
				                      <img style="width:41px;border-radius:126px;position:absolute;left:0px;top:0;" src="{{ asset('frontend/images/zalo.png') }}" alt="Chat với Thạch Vũ"> &emsp;Chat zalo với chúng tôi
				                  </a>
				              </strong>
				          </div>
				          <div class="gopy-phananh" style="margin-bottom: 15px;">
				              <strong class="hotline-right">
				                  <a href="tel:0943180888" style="padding-left:30px;" rel="nofollow"> 
				                      <div class="phone"><span>&nbsp;</span></div><div></div> &emsp; Hotline: 0943 180 888
				                  </a>
				              </strong>
				          </div>
				      </div>

				      <div class="cs-flex">
				        <!-- List View. -->
				        <div class="list-view">
				            <div class="item cs-flex" style="padding-bottom: 15px;">
				                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/shiper1.png) no-repeat center">
				                </div>
				                <div class="about">
				                    <h3 class="title">Giao hàng toàn quốc</h3>
				                    <span class="description">Nhận hàng &amp; thanh toán tiền tại nhà, ship hàng siêu nhanh</span>
				                </div>
				            </div>
				            <div class="item cs-flex" style="padding-bottom: 15px;">
				                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/change1.png) no-repeat center">
				                </div>
				                <div class="about">
				                    <h3 class="title">Đổi trả nhanh gọn</h3>
				                    <span class="description">Đổi trả hàng trong vòng 30 ngày, chấp nhận bất kỳ lý do</span>
				                </div>
				            </div>
				            <div class="item cs-flex" style="padding-bottom: 15px;">
				                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/phone.png) no-repeat center">
				                </div>
				                <div class="about">
				                    <h3 class="title">Tư vấn nhiệt tình</h3>
				                    <span class="description">Đội ngũ chuyên viên tư vấn có kiến thức chuẩn và body đẹp</span>
				                </div>
				            </div>
				            <div class="item cs-flex" style="padding-bottom: 15px;">
				                <div class="image" style="background: url(https://www.wheystore.vn/upload/service/gift-icon.png) no-repeat center">
				                </div>
				                <div class="about">
				                    <h3 class="title">Giá tốt kèm quà tặng</h3>
				                    <span class="description">Nhiều chương trình giảm giá, tặng quà cực giá trị</span>
				                </div>
				            </div>
				        </div>
				        <!-- End List View -->
				    </div>

				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('pageJs')

@stop