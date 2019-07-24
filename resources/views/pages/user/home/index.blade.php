@extends('layouts.user.master')

@section('page')Home
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ route('home') }}/
@stop

@section('alternate'){{ route('home') }}/
@stop

@section('propName')Home
@stop

@section('propDesc')
@stop

@section('ogTitle')Home
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')

@stop

@section('home')
<header wp="frontend-editor" style="opacity:0" class="header">
        <div style="-webkit-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100VH, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hero-container">
            <div data-delay="8000" data-animation="outin" data-autoplay="1" data-easing="linear" data-duration="800" data-infinite="1" class="hero-slider w-slider">
                <div class="w-slider-mask">
                <figure class="hero-slider-image w-slide">
                    <div class="hero-slider-content-container">
                    <figure class="hero-slider-content">
                        <h1 class="hero-heading h1">Bringing about changes with <span class="hero-slider-content-sub-heading-text-span">VISCI</span></h1>
                        <a href="#" class="hero-slider-content-sub-heading w-inline-block w-clearfix">
                        <div class="subheading-hover-bar"></div>
                        <p class="paragraph hero-link">discover <span class="hero-slider-content-sub-heading-text-span">visci</span></p>
                        </a>
                    </figure>
                    </div>
                    <figure class="slider-image slider-1"></figure>
                </figure>
                <figure class="hero-slider-image w-slide">
                    <div class="hero-slider-content-container">
                    <div class="hero-slider-content">
                        <h1 class="hero-heading h1">Bringing about changes with <span class="hero-slider-content-sub-heading-text-span">VISCI</span></h1>
                        <a href="#" class="hero-slider-content-sub-heading w-inline-block w-clearfix">
                        <div class="subheading-hover-bar"></div>
                        <p class="paragraph hero-link">discover <span class="hero-slider-content-sub-heading-text-span">visci</span></p>
                        </a>
                    </div>
                    </div>
                    <figure class="slider-image slider-2"></figure>
                </figure>
                <figure class="hero-slider-image w-slide">
                    <div class="hero-slider-content-container">
                    <div class="hero-slider-content">
                        <h1 class="hero-heading h1">Bringing about changes with <span class="hero-slider-content-sub-heading-text-span">VISCI</span></h1>
                        <a href="#" class="hero-slider-content-sub-heading w-inline-block w-clearfix">
                        <div class="subheading-hover-bar"></div>
                        <p class="paragraph hero-link">discover <span class="hero-slider-content-sub-heading-text-span">visci</span></p>
                        </a>
                    </div>
                    </div>
                    <figure class="slider-image slider-3"></figure>
                </figure>
                </div>
                <div style="opacity:0" class="custom-button arrow previous w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
                <div class="custom-button-overlay"></div>
                </div>
                <div style="opacity:0" class="custom-button arrow next w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
                <div class="custom-button-overlay"></div>
                </div>
                <div class="hero-slider-nav w-slider-nav w-round"></div>
            </div>
            <div style="opacity:0" class="hero-button-overlay">
                <a href="#" class="custom-button w-inline-block">
                <div>A Custom Button</div>
                <div class="custom-button-overlay"></div>
                </a>
                <a href="#" class="custom-button w-inline-block">
                <div>A Custom Button</div>
                <div class="custom-button-overlay"></div>
                </a>
            </div>
        </div>
    </header>
@stop

@section('content')
    <section class="b-section seperate-line">
        <div class="section-container homepage">
            <section class="section-heading">
            <div class="section-heading-decor">
                <div class="decor-green"></div>
            </div>
            <h6 class="section-heading-content">Smarthome Solutions</h6>
            </section>
            <div class="b-container padding-content grid-3-2">
            <div class="content">
                <h4>Technology 4.0</h4>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</div>
            </div>
            <div class="content">
                <h4>Bring changes to your home</h4>
                <div>We provided the smart and subtainable just for you!</div>
            </div>
            <div class="content">
                <h4>Subtainable Developments</h4>
                <div>We favour sustainable solutions. This goes hand in hand with our commitment to long-term, cost-effective projects that promote a better quality of life.</div>
            </div>
            <div class="content">
                <h4>A kid-safe home</h4>
                <div>Keep an eye out for these safety features as you assess a home&#x27;s child friendliness.</div>
            </div>
            <div class="content">
                <h4>Smart in everyway</h4>
                <div>VISCI bringing about changes towards more subtainable &amp; smarter cities.</div>
            </div>
            <div class="content">
                <h4>Understand to undertake</h4>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</div>
            </div>
            </div>
        </div>
    </section>
    <section class="b-section seperate-line">
        <div class="section-container homepage-nobottomborder">
            <section class="section-heading">
            <div class="section-heading-decor">
                <div class="decor-green"></div>
            </div>
            <h6 class="section-heading-content">our projects</h6>
            </section>
            <div class="b-container padding-content grid-2-1 margin">
            <div class="content">
                <h4>19 Solutions<br>280+ Projects on the go</h4>
                <div>We have helped and expanded more than 2000 projects around and are proud to be recommended as an effective business partner.</div>
            </div>
            </div>
            <div class="b-container">
            <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
                <div class="w-slider-mask">
                <div class="w-slide">
                    <div class="home-slider-box">
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="home-slider-box">
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="home-slider-box">
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="home-slider-box">
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    <div class="featured-project-container">
                        <a href="#" class="custom-button inside w-inline-block">
                        <div>A Custom Button</div>
                        <div class="custom-button-overlay"></div>
                        </a>
                        <div class="featured-project-content-container">
                        <h4 class="featured-project-heading">Passion or profit</h4>
                        <p class="s-paragraph limited">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                        <figure class="slider-image featured-project"></figure>
                    </div>
                    </div>
                </div>
                </div>
                <div class="custom-button-white left w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
                <div class="custom-button-overlay-left-side"></div>
                </div>
                <div class="custom-button-white right w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
                <div class="custom-button-overlay-right-side"></div>
                </div>
                <div class="slide-nav w-slider-nav w-round"></div>
            </div>
            </div>
        </div>
    </section>
    <section class="b-section seperate-line">
        <div class="section-container homepage-nobottomborder">
            <section class="section-heading">
                <div class="section-heading-decor">
                    <div class="decor-green"></div>
                </div>
                <h6 class="section-heading-content">our partners</h6>
            </section>
            <div class="b-container padding-content grid-2-1">
                <div id="w-node-4e937eab5bea-cef3f7a9" class="content">
                    <div>We have helped and expanded more than 2000 projects around and are proud to be recommended as an effective business partner.</div>
                </div>
            </div>
        </div>
        <section class="b-container slider-content">
            <section class="brand-slider-container">
            <div class="html-embed w-embed">
                
            </div>
            <div class="parent">
                <div class="child"><a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt="" class="logo-image-slider"></a><a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt="" class="logo-image-slider"></a><a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt="" class="logo-image-slider"></a><a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.washington.edu" target="_blank" class="logo-washington w-inline-block"><img src="{{ asset('frontend/images/logo-w-university2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.nasa.gov" target="_blank" class="logo-nasa w-inline-block"><img src="{{ asset('frontend/images/logo-nasa2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="http://www.adpc.net/" target="_blank" class="logo-adpc w-inline-block"><img src="{{ asset('frontend/images/logo-adpc2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://nawapi.gov.vn" target="_blank" class="logo-nawapi w-inline-block"><img src="{{ asset('frontend/images/logo-nawapi2x.png') }}" width="180" height="180" alt="" class="logo-image-slider"></a><a href="https://servir.adpc.net" target="_blank" class="logo-servirmekong w-inline-block"><img src="{{ asset('frontend/images/logo-sevirmekong2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a><a href="https://www.usaid.gov" target="_blank" class="logo-usaid w-inline-block"><img src="{{ asset('frontend/images/logo-usaid2x.png') }}" width="200" height="200" alt="" class="logo-image-slider"></a></div>
            </div>
            </section>
        </section>
    </section>
    <section class="b-section cc-100-100 gray-background">
        <div class="b-container cc-home-grid">
            <div class="b-thing__wrap cc-hero-featured">
            <a href="#" class="b-thing-link w-inline-block">
                <div class="b-thing__inner cc-text-over-image">
                <div class="b-thing-home-top-date cc-thumbnail">may 29 2019</div>
                <div class="b-thing__title cc-large">Designing landing pages in hours vs. days: an interview with Jamie Syke<br></div>
                <div class="b-thing__desc">Jamie Syke shares how Webflow has transformed his design process.<br></div>
                </div>
            </a>
            </div>
            <div class="b-hp-hero__list-wrap">
            <div class="b-latest-top">
                <h3 id="news" class="hp-hero__list-title cc-padded">News</h3><a href="#" class="b-title-bar__link cc-all">View all</a></div>
            <div class="_w-dyn-list">
                <div class="b-hp-hero__list-items">
                <article class="b-thing__wrap">
                    <a href="#" class="b-thing__inner cc-slim w-inline-block">
                    <div class="b-thing-home-top-date cc-slim">may 30 2019</div>
                    <div class="b-thing__title">Ecommerce shopping cart design ideas</div>
                    </a>
                </article>
                </div>
                <div class="b-hp-hero__list-items">
                <article class="b-thing__wrap">
                    <a href="#" class="b-thing__inner cc-slim w-inline-block">
                    <div class="b-thing-home-top-date cc-slim">may 29 2019</div>
                    <div class="b-thing__title">Infinite scroll: how to keep your audience engaged in 2019</div>
                    </a>
                </article>
                </div>
                <div class="b-hp-hero__list-items">
                <article class="b-thing__wrap">
                    <a href="#" class="b-thing__inner cc-slim w-inline-block">
                    <div class="b-thing-home-top-date cc-slim">may 23 2019</div>
                    <div class="b-thing__title">CSS grid: release 2.0</div>
                    </a>
                </article>
                </div>
                <div class="b-hp-hero__list-items">
                <article class="b-thing__wrap">
                    <a href="#" class="b-thing__inner cc-slim w-inline-block">
                    <div class="b-thing-home-top-date cc-slim">may 17 2019</div>
                    <div class="b-thing__title">How BugHerd used Webflow to give marketers development powers and increase conversion rates by 65%</div>
                    </a>
                </article>
                </div>
                <div class="b-hp-hero__list-items">
                <article class="b-thing__wrap">
                    <a href="#" class="b-thing__inner cc-slim w-inline-block">
                    <div class="b-thing-home-top-date cc-slim">may 14 2019</div>
                    <div class="b-thing__title">16 incredibly useful wireframe and UI kits for web designers</div>
                    </a>
                </article>
                </div>
            </div>
            </div>
        </div>
    </section>
@stop

@section('pageJs')
    
@stop