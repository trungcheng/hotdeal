@extends('layouts.user.master')

@section('page'){{ trans('general.coming-events') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('coming-events') }}/
@stop

@section('alternate'){{ route('coming-events') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('coming-events') }}/
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
<div class="section-container-black">
    <section class="content-heading black-bg">
        <h2 class="heading">Running and Coming Events</h2>
    </section>
    <div class="w-layout-grid grid-diamond">
        <div id="w-node-656c873e831e-86d65b49" class="sticky-bottom z3">
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
        <div id="w-node-656c873e8339-86d65b49" class="section-parallax-images">
            <div class="image-size-parallax"><img src="../images/buildings-city-city-lights-531360.jpg" width="1280"
                    srcset="../images/buildings-city-city-lights-531360-p-500.jpeg 500w, ../images/buildings-city-city-lights-531360-p-1080.jpeg 1080w, ../images/buildings-city-city-lights-531360-p-1600.jpeg 1600w, ../images/buildings-city-city-lights-531360-p-2000.jpeg 2000w, ../images/buildings-city-city-lights-531360.jpg 2560w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, (max-width: 2876px) 89vw, 2560px"
                    alt="" class="image"></div>
        </div>
        <div id="w-node-656c873e833c-86d65b49" class="sticky-bottom z2">
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
        <div id="w-node-656c873e834e-86d65b49" class="section-parallax-images">
            <div class="image-size-parallax"><img src="../images/a0b40e71379877.5bc3af2dacb0e.jpg" width="1280"
                    srcset="../images/a0b40e71379877.5bc3af2dacb0e-p-500.jpeg 500w, ../images/a0b40e71379877.5bc3af2dacb0e.jpg 1200w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 89vw" alt=""
                    class="image"></div>
        </div>
        <div id="w-node-656c873e8351-86d65b49" class="sticky-bottom z1">
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
        <div id="w-node-656c873e836c-86d65b49" class="section-parallax-images">
            <div class="image-size-parallax"><img src="../images/cover_qualite.jpg" width="1280"
                    srcset="../images/cover_qualite-p-1080.jpeg 1080w, ../images/cover_qualite-p-1600.jpeg 1600w, ../images/cover_qualite.jpg 1920w"
                    sizes="(max-width: 479px) 90vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 89vw" alt=""
                    class="image"></div>
        </div>
    </div>
    <div class="icon-container">
        <a href="../news-events-2/past-events.html" class="button-style w-inline-block">
            <div class="button-style-w-icon">
                <div class="button-label">Browse past events</div><img src="../images/chevron-right.svg" width="150"
                    alt="" class="icon">
            </div>
            <div class="hover-shape"></div>
        </a>
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