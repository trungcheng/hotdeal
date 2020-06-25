<div class="navigation-menu">
    <div class="menu-wrapper">
        <div class="w-layout-grid grid-navigation">
            <a href="{{ route('home') }}" aria-current="page" class="brand-logo w-nav-brand w--current">
                <img src="{{ asset('frontend/images/visci-vector-web-white.svg') }}" height="60" alt="" class="brand-visci">
                <img src="{{ asset('frontend/images/visci-tagline-vector-web-white.svg') }}" height="66" alt="" class="tagline">
            </a>
            <form action="{{ route('search') }}" method="get" class="search w-form">
                <input type="search" class="text-field-filled w-input" maxlength="256" name="query" placeholder="Search…" id="search" required="">
                <input type="submit" value="Search" class="search-button w-button">
            </form>
            <div class="grid-navbar">
                <div data-hover="1" data-delay="300" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('contact') }}" class="navbar-toggle-link w-inline-block">
                            <div>About us</div>
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list"></nav>
                </div>
                <div data-hover="1" data-delay="0" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('news-events') }}" class="navbar-toggle-link w-inline-block">
                            <div>news &amp; events</div><img src="{{ asset('frontend/images/chevron-down.svg') }}" width="20" alt=""
                                class="icon-nav">
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list">
                        <div class="droplist-wrap">
                            <a href="{{ route('news') }}" class="dropdown-link w-dropdown-link">News</a>
                            <a href="{{ route('newsletter') }}" class="dropdown-link w-dropdown-link">Newsletter</a>
                            <a href="{{ route('coming-events') }}" class="dropdown-link w-dropdown-link">Coming Events</a>
                            <a href="{{ route('past-events') }}" class="dropdown-link w-dropdown-link">Past Events</a>
                        </div>
                    </nav>
                </div>
                <div class="droplist-mobile">
                    <a href="{{ route('news') }}" class="dropdown-link">News</a>
                    <a href="{{ route('newsletter') }}" class="dropdown-link">Newsletter</a>
                    <a href="{{ route('coming-events') }}" class="dropdown-link">Coming events</a>
                    <a href="{{ route('past-events') }}" class="dropdown-link">Past events</a>
                </div>
                <div data-hover="1" data-delay="0" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('projects') }}" class="navbar-toggle-link w-inline-block">
                            <div>Projects</div>
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list"></nav>
                </div>
                <div data-hover="1" data-delay="0" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('partners') }}" class="navbar-toggle-link w-inline-block">
                            <div>Partners</div>
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list"></nav>
                </div>
                <div data-hover="1" data-delay="0" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('media-press') }}" class="navbar-toggle-link w-inline-block">
                            <div>media &amp; press</div><img src="{{ asset('frontend/images/chevron-down.svg') }}" width="20" alt=""
                                class="icon-nav">
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list">
                        <div class="droplist-wrap"><a href="{{ route('media-press') }}" class="dropdown-link w-dropdown-link">Media</a><a
                                href="{{ route('media-press') }}" class="dropdown-link w-dropdown-link">Press</a></div>
                    </nav>
                </div>
                <div class="droplist-mobile"><a href="{{ route('media-press') }}" class="dropdown-link">media</a><a
                        href="{{ route('media-press') }}" class="dropdown-link">press</a></div>
                <div data-hover="1" data-delay="0" class="navbar-link w-dropdown">
                    <div class="navbar-toggle w-dropdown-toggle">
                        <a href="{{ route('contact') }}" class="navbar-toggle-link w-inline-block">
                            <div>contact us</div>
                        </a>
                        <div class="hover-line"></div>
                    </div>
                    <nav class="navbar-droplist w-dropdown-list"></nav>
                </div>
            </div>
            <div class="bottom-nav">
                <div class="align-center">{!! $setting->getTranslation(app()->getLocale())->address !!}</div>
                <a data-w-id="a6122c70-9b5b-bdaa-a6d2-83ebf17b58d7" href="#" class="close-search w-inline-block"><img
                        src="{{ asset('frontend/images/Icon---Close.svg') }}" alt="" class="close-button-label"></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar">
    <div class="navbar-container">
        <div class="nav-button">
            <div class="nav-button-line-top"></div>
            <div class="nav-button-line-middle"></div>
            <div class="nav-button-line-bottom"></div>
        </div>
        <a href="{{ route('home') }}" aria-current="page" class="header-logo w-nav-brand w--current">
            <img src="{{ asset('frontend/images/visci-vector-web.svg') }}" height="60" alt="" class="brand-visci">
            <img src="{{ asset('frontend/images/visci-tagline-vector-web.svg') }}" height="66" alt="" class="tagline">
        </a>
    </div>
</nav>