<header class="header">
	<div class="container">
		<div class="menu col-lg-4 col-xs-2">		
		  	<div class="dropdown">
			    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
			   		<i class="fa fa-bars" aria-hidden="true"></i>
			    </button>
			    <ul class="dropdown-menu">
				    <li><a class="transition" tabindex="-1" href="#">HTML</a></li>
				    <li><a class="transition" tabindex="-1" href="#">CSS</a></li>
				    <li class="dropdown-submenu transition">
				        <a class="test transition" tabindex="-1" href="#">Ngôn ngữ lập trình <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				        <ul class="dropdown-menu submenu">
				            <li><a class="transition" tabindex="-1" href="#">C#</a></li>
				            <li><a class="transition" tabindex="-1" href="#">PHP</a></li>
				        </ul>
				    </li>
				    <li><a class="transition" tabindex="-1" href="#">JS</a></li>
				    <li class="dropdown-submenu">
				        <a class="test transition" tabindex="-1" href="#">Khối Xây dựng <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				        <ul class="dropdown-menu submenu">
				            <li><a tabindex="-1" href="#">Phòng ban</a></li>
				            <li><a tabindex="-1" href="#">Nhân sự</a></li>
				        </ul>
				    </li>
				    <li><a class="transition" tabindex="-1" href="#">JS</a></li>
				</ul>			 
			</div>
		</div>
		<div class="logo col-lg-4 col-xs-8">
			<a href="#"><img src="{{ asset('frontend/images/logo.png') }}"></a>
		</div>
		<div class="box-user col-lg-4 col-xs-2">
			<!-- <a class="link-info">Nguyễn Hoàng Phương Anh &nbsp<i class="fa fa-angle-down" aria-hidden="true"></i></a>
			<div class="user">
				<a class="avatar"><img src="{{ asset('frontend/images/user.jpg') }}"></a>
				<ul class="user-dropdown box-menu">
					<li class="transition"><a class="nobb" href="#">Đăng xuất</a></li>
				</ul>
			</div> -->

			<a class="link-info">Đăng nhập &nbsp</a>
			<div class="user">
				<a class="avatar"><img src="{{ asset('frontend/images/login.jpg') }}"></a>
				<div class="user-dropdown box-menu">
					<div class="login">
						<form method="POST">
							<p>Username:</p>
							<input type="text" class="form-control" name="username" />
							<p>Password:</p>
							<input type="password" class="form-control" name="password" />
							<input type="submit" class="btn-vote btn-login transition" value="Đăng nhập">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>