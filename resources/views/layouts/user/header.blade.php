<header class="header">
	<div class="container">
		<div class="menu col-lg-4 col-xs-2">		
		  	<div class="dropdown">
			    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
			   		<i class="fa fa-bars" aria-hidden="true"></i>
			    </button>
			    <ul class="dropdown-menu">
			    	@if($round->visible_menu == 1)
				    	@foreach ($categories as $cate)
	                        @if (isset($cate['childrens']))
	                            <li class="dropdown-submenu transition">
							        <a class="test transition" tabindex="-1">{{ $cate['name'] }} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							        <ul class="dropdown-menu submenu">
							        	@foreach ($cate['childrens'] as $child)
	                                        <li><a class="transition" tabindex="-1" href="/{{ $cate['slug'] }}/{{ $child['slug'] }}.html">{{ $child['name'] }}</a></li>
	                                    @endforeach
							        </ul>
							    </li>
	                        @else
	                        <li><a class="transition" tabindex="-1" href="/{{ $cate['slug'] }}.html">{{ $cate['name'] }}</a></li>
	                        @endif
	                    @endforeach
	                @else
	                	<li><a class="transition" tabindex="-1" href="{{ url('/') }}">Trang chủ</a></li>
	                	<li><a class="transition" tabindex="-1" href="/vong-thi/{{ $round->slug }}.html">{{ $round->name }}</a></li>
	                @endif
				</ul>			 
			</div>
		</div>
		<div class="logo col-lg-4 col-xs-8">
			<a href="{{ url('/') }}"><img src="{{ $setting->logo }}"></a>
		</div>
		<div class="box-user col-lg-4 col-xs-2">
			@if(Auth::guard('user')->check())
			<a class="link-info">{{ Auth::guard('user')->user()->username }} &nbsp<i class="fa fa-angle-down" aria-hidden="true"></i></a>
			<div class="user">
				<a class="avatar"><img src="{{ asset('frontend/images/user.jpg') }}"></a>
				<ul class="user-dropdown box-menu">
					<li class="transition"><a class="nobb" href="/logout">Đăng xuất</a></li>
				</ul>
			</div>
			@else
			<a class="link-info">Đăng nhập &nbsp</a>
			<div class="user">
				<a class="avatar"><img src="{{ asset('frontend/images/login.jpg') }}"></a>
				<div class="user-dropdown box-menu">
					<div class="login">
						<form method="POST" id="formLogin" name="formLogin" onsubmit="return false;" enctype="multipart/form-data">
							{{ csrf_field() }}
							<p>Tên đăng nhập:</p>
							<input type="text" required class="form-control" name="username" />
							<p>Mật khẩu:</p>
							<input type="password" required class="form-control" name="password" />
							<input type="submit" class="btn-vote btn-login transition" value="Đăng nhập">
						</form>
						<span class="err-login"></span>
					</div>
				</div>
			</div>
			@endif		
		</div>
	</div>
</header>