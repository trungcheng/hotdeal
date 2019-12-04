<header id="header">
    <div class="header_top w_gr clearfix">
        <div class="header_logo">
            <a href="{{ url('') }}"><img src="{{ url('') }}{{ $setting->logo }}" alt="{{ $setting->name }}" class="img-responsive"></a>
        </div>
        <div class="header_slg">
            <div class="tlt">
                <ul class="texts" style="display: none">
                    <li>{{ $setting->slogan }}</li>
                </ul>
            </div>
        </div>
        <div class="header_searchw">
            <div class="header_search">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="p" class="form-control" placeholder="Tìm kiếm">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="header_language">
                <a href="#"><img src="{{ asset('frontend/themes/default/images/vn.jpg') }}" alt="vn"></a>
                <a href="#"><img src="{{ asset('frontend/themes/default/images/emn.jpg') }}" alt="en"></a>
            </div>
        </div>
    </div>
    <div class="nav_w">
        <div class="navbar navbar-default navbar_ed">
            <div class="w_gr">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_rps">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="menu_rps">
                    <ul class="navbar-nav nav">
                        <li class="menu_ichome"><a href="{{ url('') }}" style="border:none"><i class="fa fa-home fa-2x"></i></a></li>
                        @foreach ($categories as $cate)
                        <li>
                            <a href="#">{{ $cate->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu_ed">
                                @foreach ($cate->childrens as $child)
                                <li>
                                    <a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>