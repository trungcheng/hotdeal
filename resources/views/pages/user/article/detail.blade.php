@extends('layouts.user.master')

@section('page')Chi tiết tin tức
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li class="active">It’s  why there’s nothing else like Mac.</li>
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
					<article> <img class="img-responsive margin-bottom-20" src="{{ asset('frontend/images/blog-img-1.jpg') }}" alt="" > <span>By: <strong>Claudio Doe</strong></span> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span>
						<h5>It’s why there’s nothing else like Mac. </h5>
						<p>Ut eget dolor eu ex efficitur accumsan. Ut eros nibh, tincidunt nec imperdiet sit amet, aliquam eget leo. Ut finibus sollicitudin ultricies. Fusce a ex lectus. Donec sollicitudin mi leo, nec eleifend quam luctus vel. Morbi vel neque eu libero fermentum molestie. Nam posuere nunc id consequat tempus. Maecenas imperdiet maximus turpis at tincidunt. Phasellus fermentum turpis et libero feugiat, at porttitor eros vestibulum. Suspenisse enim dolor, semper eu ultricies id, tristique nec ipsum.</p>
						<blockquote> Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </blockquote>
						<p>Curabitur ante arcu, feugiat non ante nec, cursus fermentum ante. Proin imperdiet, sapien eget rhoncus convallis, neque ante placerat turpis, vitae dignissim mi ipsum a purus. Vivamus et diam tempus, elementum felis sed, sodales libero. Morbi sed sapien sed lectus volutpat mollis. Donec porttitor sapien est, eget porta nulla lobortis non. Maecenas leo massa, porttitor lobortis nibh sit amet, sodales interdum mauris. </p>
					</article>
					
					<!-- Comments -->
					<div class="comments">
						<h6 class="margin-0">Comments (01)</h6>
						<ul>
							<!-- Comments -->
							<li class="media">
								<div class="media-left"> <a href="#" class="avatar"> <img src="{{ asset('frontend/images/avatar.jpg') }}" alt=""> </a> </div>
								<div class="media-body padding-left-20">
									<h6>Lucian Black <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017 </span> </h6>
									<p>Suspendisse interdum lacus eget ligula posuere congue, suspendisse sodales cursus lorem vel Donec tincidunt aliquet lacus. Maecenas pulvinarefficiur.... </p>
								</div>
							</li>
						</ul>
					</div>
					
					<!-- ADD comments -->
					<div class="add-comments padding-top-20">
						<h6>Leave a Comment</h6>
						
						<!-- FORM -->
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
					</div>
				</div>
			</div>
			
			<!-- Side Bar -->
			<div class="col-md-3">
				<div class="shop-side-bar"> 
					
					<!-- Recent Posts -->
					<h6>Recent Posts</h6>
					<div class="recent-post"> 
						
						<!-- Recent Posts -->
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
						
						<!-- Recent Posts -->
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-3.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
						
						<!-- Recent Posts -->
						<div class="media">
							<div class="media-left"> <a href="#."><img class="img-responsive" src="{{ asset('frontend/images/blog-img-4.jpg') }}" alt=""> </a> </div>
							<div class="media-body"> <a href="#.">It’s why there’s
							nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
						</div>
					</div>
					
					<!-- Quote of the Day -->
					<h6>Quote of the Day</h6>
					<div class="quote-day"> <i class="fa fa-quote-left"></i>
						<p>Suspendisse sodales cursus lorem vel
						efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('pageJs')

@stop