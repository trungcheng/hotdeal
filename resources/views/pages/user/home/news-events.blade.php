@extends('layouts.user.master')

@section('page'){{ trans('general.news-events') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('news-events') }}/
@stop

@section('alternate'){{ route('news-events') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('news-events') }}/
@stop

@section('ogImage'){{ url('') }}{{ $setting->logo }}
@stop

@section('pageCss')
    <style>
        .navbar-container .nav-button, .navbar-container a {
            transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg) !important;
        }
    </style>
@stop

@section('home')

@stop

@section('content')
<div class="section-container full-width">
    <section class="content-heading align-left">
        <h2 class="heading">News</h2>
        <a href="#" class="hero-slider-link white-bg w-inline-block w-clearfix">
            <div class="hero-line white-bg"></div>
            <div>See all news</div>
        </a>
    </section>
    <div data-w-id="a4e9ad61-b012-545e-f00a-9f28c8e5c7fc" class="w-layout-grid grid-new">
        <div class="_1st-column-journal">
            <div class="absolute-parallax-section">
                <div class="w-layout-grid thumb-info-large-grid">
                    <h6 class="heading">Highlights</h6>
                    <div class="_1-column">
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block"><img src="images/cover2.jpg"
                                    width="1280"
                                    srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 82vw"
                                    alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h4 class="heading">Designing landing pages in hours vs. days: an interview with
                                        Jamie Syke</h4>
                                    <div class="post-summary">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block"><img src="images/cover2.jpg"
                                    width="1280"
                                    srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 82vw"
                                    alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h4 class="heading">Designing landing pages in hours vs. days: an interview with
                                        Jamie Syke</h4>
                                    <div class="post-summary">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block"><img src="images/cover2.jpg"
                                    width="1280"
                                    srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 82vw"
                                    alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h4 class="heading">Designing landing pages in hours vs. days: an interview with
                                        Jamie Syke</h4>
                                    <div class="post-summary">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block"><img src="images/cover2.jpg"
                                    width="1280"
                                    srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 82vw"
                                    alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h4 class="heading">Designing landing pages in hours vs. days: an interview with
                                        Jamie Syke</h4>
                                    <div class="post-summary">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                        <div class="holder-journal-big-columns">
                            <a href="#" class="image-filled-featured w-inline-block"><img src="images/cover2.jpg"
                                    width="1280"
                                    srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 82vw"
                                    alt="" class="bg-image">
                                <div class="gradient-bottom"></div>
                                <div class="thumb-info-small-grid featured-card">
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h4 class="heading">Designing landing pages in hours vs. days: an interview with
                                        Jamie Syke</h4>
                                    <div class="post-summary">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                                <div class="image-cover-shape"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_2nd-column-journal">
            <div class="w-layout-grid thumb-info-large-grid">
                <h6 class="heading">Recently</h6>
                <div id="w-node-44b4c142fd1b-4af3f7b4" class="_1-column-2-on-mobile">
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holderjournal-small-columns">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 92vw"
                                        alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                        class="image-ratio">
                                    <div class="image-cover-shape"></div>
                                </div>
                                <div>
                                    <div class="category-wrapper">
                                        <div>construction</div>
                                        <div class="caption-dot">·</div>
                                        <div>may 29 2019</div>
                                    </div>
                                    <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                                    <div class="post-summary quick-story">
                                        <div>Like so many things, the race was canceled. Soon after, gyms around the
                                            country were closed. Suddenly, running — a solo activity that can be done
                                            outdoors, away from other people — seems more important than
                                            ever, for both our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="_3rd-column-journal">
            <div class="sticky-3rd-column">
                <div class="holder-journal-columns">
                    <div class="thumb-info-large-grid">
                        <h6 class="heading">Explore Topic</h6>
                        <div class="horizontal">
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Substainable Living</div>
                                <div class="hover-shape"></div>
                            </a>
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Smart City</div>
                                <div class="hover-shape"></div>
                            </a>
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Furniture</div>
                                <div class="hover-shape"></div>
                            </a>
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Building</div>
                                <div class="hover-shape"></div>
                            </a>
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Smarthome</div>
                                <div class="hover-shape"></div>
                            </a>
                            <a href="#" class="tag-wrapper w-inline-block">
                                <div class="button-label">Construction</div>
                                <div class="hover-shape"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="holder-journal-columns">
                    <div class="grid-about-small">
                        <div class="intro-brand-wrap"><img src="images/visci-vector-web.svg" height="" alt=""
                                class="brand-visci full"></div>
                        <div id="w-node-13c80a42dcfe-4af3f7b4" class="post-summary-center">
                            <div>VISCI is a group that bringing about changes towards more substainable and smarter
                                cities.<br></div>
                            <a href="#" class="link-block w-inline-block">
                                <div>Read About us</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-container-black">
    <section class="content-heading black-bg">
        <h2 class="heading">Events</h2>
        <a href="#" class="hero-slider-link black-bg w-inline-block w-clearfix">
            <div class="hero-line"></div>
            <div>See all events</div>
        </a>
    </section>
    <div class="w-layout-grid grid-diamond">
        <div id="w-node-776f415d6651-4af3f7b4" data-w-id="18e1f44b-9194-6c29-3e64-776f415d6651"
            class="sticky-bottom z3">
            <div class="small-section">
                <div class="event-format-wrap">
                    <div class="event-format day">02</div>
                    <div class="event-format month">JUL</div>
                </div>
                <h5 class="heading">Live at the Green Bar</h5>
                <p>The Soho Live Studios Band performs weekly at the Green Bar featuring a wealth of talent from
                    tomorrow’s stars to today’s big names. The band salutes the greats of the jazz age, from early
                    ragtime and Harlem stride to mainstream
                    swing and bebop.<br><br>6.30pm - 7.15pm<br>8.00pm - 8.45pm<br>9.00pm - 9.45pm<br><br>‍<strong>Every
                        Thursday until late December</strong></p>
                <a href="#" class="button-style small w-inline-block">
                    <div class="button-label">Discover more</div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
        <div id="w-node-2827168a6415-4af3f7b4" class="section-parallax-images">
            <div class="image-size-parallax"><img src="images/buildings-city-city-lights-531360.jpg" width="1280"
                    srcset="images/buildings-city-city-lights-531360-p-500.jpeg 500w, images/buildings-city-city-lights-531360-p-1080.jpeg 1080w, images/buildings-city-city-lights-531360-p-1600.jpeg 1600w, images/buildings-city-city-lights-531360-p-2000.jpeg 2000w, images/buildings-city-city-lights-531360.jpg 2560w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, (max-width: 2876px) 89vw, 2560px"
                    data-w-id="b5b1d506-9575-37b7-0678-cff88df7a17b" alt="" class="image"></div>
        </div>
        <div id="w-node-37269e34cf8a-4af3f7b4" class="sticky-bottom z2">
            <div class="small-section">
                <div class="event-format-wrap">
                    <div class="event-format day">02</div>
                    <div class="event-format month">JUL</div>
                </div>
                <h5 class="heading">Exploring the Cafe Royal cocktail book</h5>
                <p>Published in 1937 by the head bartender of the Café Royal, William J Tarling, the Café Royal cocktail
                    book has since acted as a beacon for bartenders near and far. <br><br>Find out more about the Café
                    Royal cocktail book on our
                    blog. </p>
                <a href="#" class="button-style small w-inline-block">
                    <div class="button-label">Discover more</div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
        <div id="w-node-79f3cf1c8f53-4af3f7b4" class="section-parallax-images">
            <div class="image-size-parallax"><img src="images/a0b40e71379877.5bc3af2dacb0e.jpg" width="1280"
                    srcset="images/a0b40e71379877.5bc3af2dacb0e-p-500.jpeg 500w, images/a0b40e71379877.5bc3af2dacb0e.jpg 1200w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 89vw" alt=""
                    class="image"></div>
        </div>
        <div id="w-node-4e46a2139b77-4af3f7b4" class="sticky-bottom z1">
            <div class="small-section">
                <div class="event-format-wrap">
                    <div class="event-format day">02</div>
                    <div class="event-format month">JUL</div>
                </div>
                <h5 class="heading">Live at the Green Bar</h5>
                <p>The Soho Live Studios Band performs weekly at the Green Bar featuring a wealth of talent from
                    tomorrow’s stars to today’s big names. The band salutes the greats of the jazz age, from early
                    ragtime and Harlem stride to mainstream
                    swing and bebop.<br><br>6.30pm - 7.15pm<br>8.00pm - 8.45pm<br>9.00pm - 9.45pm<br><br>‍<strong>Every
                        Thursday until late December</strong></p>
                <a href="#" class="button-style small w-inline-block">
                    <div class="button-label">Discover more</div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
        <div id="w-node-f08c84287bb0-4af3f7b4" class="section-parallax-images">
            <div class="image-size-parallax"><img src="images/cover_qualite.jpg" width="1280"
                    srcset="images/cover_qualite-p-1080.jpeg 1080w, images/cover_qualite-p-1600.jpeg 1600w, images/cover_qualite.jpg 1920w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 89vw" alt=""
                    class="image"></div>
        </div>
    </div>
</div>
<div class="section shortlink">
    <div class="section-container">
        <div class="content-heading">
            <h4 class="heading">See more about VISCI</h4>
            <div class="content-sapo">We have helped and expanded more than 2000 projects around and are proud to be
                recommended as an effective business partner.</div>
        </div>
        <div class="b-category-listing content-sapo-large">
            <a href="#" class="button-style large-categories w-inline-block">
                <div class="button-label">About us</div>
                <div class="hover-shape"></div>
            </a>
            <a href="#" class="button-style large-categories w-inline-block">
                <div class="button-label">projects</div>
                <div class="hover-shape"></div>
            </a>
            <a href="#" class="button-style large-categories w-inline-block">
                <div class="button-label">partners</div>
                <div class="hover-shape"></div>
            </a>
            <a href="#" class="button-style large-categories w-inline-block">
                <div class="button-label">media &amp; press</div>
                <div class="hover-shape"></div>
            </a>
        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop