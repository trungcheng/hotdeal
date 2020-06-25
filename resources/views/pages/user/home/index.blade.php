@extends('layouts.user.master')

@section('page'){{ trans('general.home_page') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('ogImage'){{ url('') }}{{ $setting->logo }}
@stop

@section('pageCss')

@stop

@section('home')
<header wp="frontend-editor" style="opacity:0" class="section-hero">
    <div style="-webkit-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="hero-container">
        <div data-delay="8000" data-animation="outin" data-autoplay="1" data-easing="linear" data-duration="800"
            data-infinite="1" class="hero-slider w-slider">
            <div class="w-slider-mask">
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">Bringing about changes with <span class="text-span">VISCI</span>
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">discover <span
                                        class="hero-slider-content-sub-heading-text-span">visci</span></p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-1"></figure>
                    </div>
                </figure>
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">Bringing about changes with <span class="text-span">VISCI</span>
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">discover <span
                                        class="hero-slider-content-sub-heading-text-span">visci</span></p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-2"></figure>
                    </div>
                </figure>
                <figure class="hero-slider-wrap w-slide">
                    <div class="hero-content">
                        <figure class="hero-content-wrap">
                            <h1 class="hero-heading">Bringing about changes with <span class="text-span">VISCI</span>
                            </h1>
                            <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                <div class="hero-line"></div>
                                <p class="hero-link">discover <span
                                        class="hero-slider-content-sub-heading-text-span">visci</span></p>
                            </a>
                        </figure>
                    </div>
                    <div class="hero-image-wrap">
                        <figure class="slider-image slider-3"></figure>
                    </div>
                </figure>
            </div>
            <div style="opacity:0" class="button-style arrow previous w-slider-arrow-left">
                <div class="button-label w-icon-slider-left"></div>
                <div class="hover-shape"></div>
            </div>
            <div style="opacity:0" class="button-style arrow next w-slider-arrow-right">
                <div class="button-label w-icon-slider-right"></div>
                <div class="hover-shape"></div>
            </div>
            <div class="hero-slider-nav w-slider-nav"></div>
        </div>
    </div>
</header>
@stop

@section('content')
<section class="section">
    <div class="section-container full-slider">
        <section class="content-heading">
            <h2 class="heading">Smarthome Solutions</h2>
        </section>
        <div class="content-wrap show-grid">
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_1.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">Technology 4.0</h4>
                    <div class="content-sapo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius enim in eros elementum tristique.</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_2.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">Bring changes to your home</h4>
                    <div class="content-sapo">We provided the smart and subtainable just for you!</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_3.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">Subtainable Developments</h4>
                    <div class="content-sapo">We favour sustainable solutions. This goes hand in hand with our
                        commitment to long-term, cost-effective projects that promote a better quality of life.</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_4.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">A kid-safe home</h4>
                    <div class="content-sapo">Keep an eye out for these safety features as you assess a home&#x27;s
                        child friendliness.</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_5.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">Smart in everyway</h4>
                    <div class="content-sapo">VISCI bringing about changes towards more subtainable &amp; smarter
                        cities.</div>
                </div>
            </div>
            <div class="content"><img src="{{ asset('frontend/images/visci_icon_6.svg') }}" alt=""
                    class="content-wrap image-icon">
                <div class="content-subheading item">
                    <h4 class="heading-effect center">Understand to undertake</h4>
                    <div class="content-sapo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius enim in eros elementum tristique.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section gray-background">
    <div class="section-container full-slider">
        <section class="content-heading">
            <h2 class="heading center">Our Projects</h2>
            <div class="content-subheading">
                <h4 class="heading-effect center">19 Solutions<br>280+ Projects on the go</h4>
                <div class="content-sapo">We have helped and expanded more than 2000 projects around and are proud to be
                    recommended as an effective business partner.</div>
            </div>
        </section>
        <div class="content-wrap slider">
            <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
                <div class="w-slider-mask">
                    <div class="w-slide">
                        <div class="section-vertical-slider">
                            <div class="slide-vertical-move">
                                <h4 class="heading">Sustainability</h4>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua.</p>
                                <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                    <div class="hero-line white-bg"></div>
                                    <div class="card-link">Read more</div>
                                </a>
                            </div>
                            <img src="{{ asset('frontend/images/Buildings_HOMECOVER.jpg') }}" sizes="100vw" alt="" class="bg-image">
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="section-vertical-slider">
                            <div class="slide-vertical-move">
                                <h4 class="heading">Sustainability</h4>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua.</p>
                                <a href="#" class="hero-slider-link w-inline-block w-clearfix">
                                    <div class="hero-line white-bg"></div>
                                    <div class="card-link">Read more</div>
                                </a>
                            </div>
                            <img src="{{ asset('frontend/images/Buildings_HOMECOVER.jpg') }}" sizes="100vw" alt="" class="bg-image">
                        </div>
                    </div>
                </div>
                <div class="button-slider-style left-arrow w-slider-arrow-left">
                    <div class="button-label white w-icon-slider-left"></div>
                    <div class="hover-shape-left"></div>
                </div>
                <div class="button-slider-style right-arrow w-slider-arrow-right">
                    <div class="button-label white w-icon-slider-right"></div>
                    <div class="hover-shape-right"></div>
                </div>
                <div class="slide-nav w-slider-nav w-round"></div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-container logo-fix-height">
        <section class="content-heading">
            <h2 class="heading center">Our Partners</h2>
            <div class="content-subheading">
                <div class="content-sapo">We have helped and expanded more than 2000 projects around and are proud to be
                    recommended as an effective business partner.</div>
            </div>
        </section>
    </div>
    <section class="content-wrap slider-content">
        <section class="brand-slider-container">
            <div class="html-embed w-embed">
                <style>
                .parent {
                    width: 100vw;
                    height: 204px;
                    margin: 20px auto;
                    overflow: hidden
                }

                .parent .child {
                    width: 20000px;
                    display: inline-block;
                    animation: marquee 60s linear infinite;
                }

                @keyframes marquee {
                    0% {
                        margin-left: 0;
                    }

                    100% {
                        margin-left: calc(-1835px + 608px);
                    }
                }

                .parent .child:hover {
                    -webkit-animation-play-state: paused;
                    -moz-animation-play-state: paused;
                    -o-animation-play-state: paused;
                    animation-play-state: paused;
                }
                </style>
            </div>
            <div class="parent">
                <div class="child">
                    <a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img
                            src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img
                            src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img
                            src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img
                            src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img
                            src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img
                            src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img
                            src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img
                            src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img
                            src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img
                            src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img
                            src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img
                            src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img
                            src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img
                            src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                    <a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img
                            src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img
                            src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt=""
                            class="logo-image-slider"></a>
                    <a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img
                            src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a>
                </div>
            </div>
        </section>
    </section>
</section>
<section class="section gray-background">
    <div class="section-container">
        <div class="_2-columns-2-to-1">
            <div id="w-node-d6fcca430ea3-cef3f7a9" class="sticky-top-5vh">
                <a href="#" class="image-filled-featured w-inline-block">
                    <img src="{{ asset('frontend/images/cover2.jpg') }}" width="1280" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h4 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h4>
                        <div class="post-summary">
                            <div>Like so many things, the race was canceled. Soon after, gyms around the country were
                                closed. Suddenly, running — a solo activity that can be done outdoors, away from other
                                people — seems more important than ever, for
                                both our health and our mood.<br></div>
                        </div>
                    </div>
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div id="w-node-d6fcca430eae-cef3f7a9" class="_1-column-2-on-mobile">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3">
                            <img src="{{ asset('frontend/images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg') }}" width="960" alt="" class="bg-image">
                            <img src="{{ asset('frontend/images/Image-16-10-Ratio.svg') }}" alt="" class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper">
                                <div>construction</div>
                                <div class="caption-dot">·</div>
                                <div>may 29 2019</div>
                            </div>
                            <h6 class="heading small-post">Ecommerce shopping cart design ideas</h6>
                        </div>
                    </div>
                </a>
                <a href="news-events.html" class="button-style w-inline-block">
                    <div class="button-style-w-icon">
                        <div class="button-label">Browse news and events</div>
                            <img src="{{ asset('frontend/images/chevron-right.svg') }}" width="120" alt="" class="icon">
                        </div>
                    <div class="hover-shape"></div>
                </a>
            </div>
        </div>
    </div>
</section>
@stop

@section('pageJs')

@stop