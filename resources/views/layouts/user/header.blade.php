<header class="header header-sticky" id="header">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col col-auto d-flex align-items-center">
                <button class="hamburger hamburger--slider d-lg-none" id="navbar-main-toggle" data-toggle="collapse" data-target="#header-navbar-main-collapse" aria-controls="header-navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box d-block">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <a class="header-logo" href="{{ route('home') }}">
                    <img class="header-logo-img" src="{{ asset('frontend/images/logo-01.png') }}" alt="Logo donghoxachtay.store">
                </a>
            </div>
            <div class="col col-auto">
                <nav class="navbar navbar-expand-lg navbar-light header-navbar-main navbar-main navbar-main-effect-1 navbar-main-trigger-hover">
                    <div class="collapse navbar-collapse" id="header-navbar-main-collapse">
                        <div class="nav mr-auto">
                            <div class="nav-item home">
                                <a class="nav-link" href="{{ route('brand') }}">Thương hiệu</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('product-store', ['sex' => 'm']) }}">Đồng hồ nam</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('product-store', ['sex' => 'f']) }}">Đồng hồ nữ</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Về chúng tôi</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col col-auto">
                <div class="header-search input-group deactive" id="header-search">
                    <input class="search-input form-control" name="key" type="text" placeholder="Tìm kiếm">
                    <div class="input-group-append">
                        <button class="btn header-search-btn-send" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                        <button class="btn header-search-btn-close" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>