@extends('layouts.user.master')

@section('page'){{ $article->title }}
@stop

@section('pageCss')

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
<section class="blog-single padding-top-30 padding-bottom-60">
	<div class="container">
		<div class="row">
			<div class="col-md-9"> 
				
				<!-- Blog Post -->
				<div class="blog-post">
					<article> 
						<!-- <img style="width:100%" class="img-responsive margin-bottom-20" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}" />  -->
						<span>By: <strong>{{ $article->user->fullname }}</strong></span> <span><i class="fa fa-bookmark-o"></i> {{ $article->created_at }}</span> <span><i class="fa fa-comment-o"></i> 0 Bình luận</span>
						<h5>{{ $article->title }}</h5>
						{!! $article->intro !!}
						{!! $article->fulltext !!}
					</article>
					
					<!-- Comments -->
					<!-- <div class="comments">
						<h6 class="margin-0">Comments (01)</h6>
						<ul>
							<li class="media">
								<div class="media-left"> <a href="#" class="avatar"> <img src="{{ asset('frontend/images/avatar.jpg') }}" alt=""> </a> </div>
								<div class="media-body padding-left-20">
									<h6>Lucian Black <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017 </span> </h6>
									<p>Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </p>
								</div>
							</li>
						</ul>
					</div> -->
					
					<!-- ADD comments -->
					<!-- <div class="add-comments padding-top-20">
						<h6>Leave a Comment</h6>
						<form>
							<ul class="row">
								<li class="col-sm-6">
									<label>Name
										<input type="text" class="form-control" name="name" placeholder="">
									</label>
								</li>
								<li class="col-sm-6">
									<label>Email
										<input type="text" class="form-control" name="email" placeholder="">
									</label>
								</li>
								<li class="col-sm-12">
									<label>Message
										<textarea class="form-control" rows="5" placeholder=""></textarea>
									</label>
								</li>
								<li class="col-sm-12 text-left">
									<button type="submit" class="btn-round">Send Message</button>
								</li>
							</ul>
						</form>
					</div> -->
				</div>
			</div>
			
			<!-- Side Bar -->
			<!-- <div class="col-md-3">
				<div class="shop-side-bar"> 
					
					<h6>Recent Posts</h6>
					<div class="recent-post"> 
						
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
						
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-3.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
						
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-4.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
					</div>
					
					<h6>Quote of the Day</h6>
					<div class="quote-day"> <i class="fa fa-quote-left"></i>
						<p>Suspendisse sodales cursus lorem vel
						efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
@stop

@section('pageJs')

@stop