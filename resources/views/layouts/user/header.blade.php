<header id="header">
    <div class="header_top w_gr clearfix">
        <div class="header_logo">
            <a href="{{ url('') }}"><img src="{{ url('') }}{{ $setting->logo }}" alt="{{ $setting->name }}" class="img-responsive"></a>
        </div>
        <div class="header_slg">
            <div class="tlt">
                <ul class="texts" style="display: none">
                    <li>{{ $setting->getTranslation(app()->getLocale())->name }}</li>
                </ul>
            </div>
        </div>
        <div class="header_searchw">
            <div class="header_search">
                <form method="get" action="{{ url('') }}">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="{{ trans('general.search') }}">
                        <button type="submit" class="btn btn-primary">
                            <i style="position:relative;top:2px;" class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="header_language">
                <a title="Vietnamese" href="{{ route('locale', ['locale' => 'vi']) }}"><img style="box-shadow: 2px 2px #dcdcdc;margin-right:3px" src="{{ asset('frontend/themes/default/images/vietnam.png') }}" alt="vi"></a>
                <a title="Koreanese" href="{{ route('locale', ['locale' => 'ko']) }}"><img style="box-shadow: 2px 2px #dcdcdc;" src="{{ asset('frontend/themes/default/images/korean.png') }}" alt="ko"></a>
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
                            <a href="#">{{ $cate->getTranslation(app()->getLocale())->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu_ed">
                                @foreach ($cate->childrens as $child)
                                <li>
                                    <a href="{{ route('detail', ['slug' => $child->slug]) }}">{{ $child->getTranslation(app()->getLocale())->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        <li><a href="{{ route('contact') }}">{{ trans('general.contact') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>