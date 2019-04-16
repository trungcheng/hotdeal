@extends('layouts.user.master')

@section('page')Giới thiệu
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Trang chủ</a></li>
			<li class="active">Giới thiệu</li>
		</ol>
	</div>
</div>

<!-- About Sec -->
<section class="about-sec padding-top-60 padding-bottom-60">
	<div class="container"> 
		<!-- About Adds -->
		<div class="about-adds">
			<div class="position-center-center">
				<h2>SmartTech <small> Digital & Electronic PSD Template!</small></h2>
				<a href="#." class="btn-round">Shop with Us</a> 
			</div>
		</div>
	</div>
</section>

<!-- Skills -->
<section class="skills padding-top-60">
	<div class="container"> 

		<!-- heading -->
		<div class="heading">
			<h2>Our Awesome Skills</h2>
			<hr>
		</div>

		<!-- progress-bars -->
		<div class="progress-bars"> 
			<!-- PHOTOSHOP -->
			<div class="bar">
				<div class="row">
					<div class="col-sm-2">
						<p>Adobe/Photoshop </p>
					</div>
					<div class="col-sm-10">
						<div class="progress" data-percent="90%">
							<div class="progress-bar"> <span class="progress-bar-tooltip">90%</span></div>
						</div>
					</div>
				</div>
			</div>

			<!-- HTML -->
			<div class="bar">
				<div class="row">
					<div class="col-sm-2">
						<p>UI Design</p>
					</div>
					<div class="col-sm-10">
						<div class="progress" data-percent="70%">
							<div class="progress-bar"><span class="progress-bar-tooltip">70%</span> </div>
						</div>
					</div>
				</div>
			</div>

			<!-- ILLUSTRATION -->
			<div class="bar">
				<div class="row">
					<div class="col-sm-2">
						<p>Layout & Frame</p>
					</div>
					<div class="col-sm-10">
						<div class="progress" data-percent="80%">
							<div class="progress-bar"><span class="progress-bar-tooltip">80%</span> </div>
						</div>
					</div>
				</div>
			</div>

			<!-- ILLUSTRATION -->
			<div class="bar">
				<div class="row">
					<div class="col-sm-2">
						<p>Typography</p>
					</div>
					<div class="col-sm-10">
						<div class="progress" data-percent="80%">
							<div class="progress-bar"><span class="progress-bar-tooltip">80%</span> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Team -->
<section class="padding-top-60 padding-bottom-60">
	<div class="container"> 
		<!-- heading -->
		<div class="heading">
			<h2>Meet Our Team</h2>
			<hr>
		</div>
		<div class="team">
			<div class="row">
				<div class="col-md-3"> <img class="img-responsive" src="{{ asset('frontend/images/team-img-1.jpg') }}" alt="" >
					<h3>Tom Doe</h3>
					<span>Ceo/Founder SmartTech</span> 
				</div>
				<div class="col-md-3"> <img class="img-responsive" src="{{ asset('frontend/images/team-img-2.jpg') }}" alt="" >
					<h3>Tom Doe</h3>
					<span>Ceo/Founder SmartTech</span> 
				</div>
				<div class="col-md-3"> <img class="img-responsive" src="{{ asset('frontend/images/team-img-3.jpg') }}" alt="" >
					<h3>Tom Doe</h3>
					<span>Ceo/Founder SmartTech</span> 
				</div>
				<div class="col-md-3"> <img class="img-responsive" src="{{ asset('frontend/images/team-img-4.jpg') }}" alt="" >
					<h3>Tom Doe</h3>
					<span>Ceo/Founder SmartTech</span> 
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('pageJs')

@stop