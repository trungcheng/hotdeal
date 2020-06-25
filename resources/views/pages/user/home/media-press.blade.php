@extends('layouts.user.master')

@section('page'){{ trans('general.media-press') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('media-press') }}/
@stop

@section('alternate'){{ route('media-press') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('media-press') }}/
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
<div class="section">
    <div class="section-container full-width">
        <section class="content-heading align-left">
            <h2 class="content-heading-home-black-bg">Media &amp; Press</h2>
        </section>
        <div class="w-layout-grid grid-full-big">
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading grid-full">Designing landing pages in hours vs. days: an interview with Jamie
                            Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
            <div class="holder-journal-big-columns full-grid">
                <a href="#" class="image-filled-featured full-grid w-inline-block"><img src="images/cover2.jpg"
                        width="1280"
                        srcset="images/cover2-p-500.jpeg 500w, images/cover2-p-800.jpeg 800w, images/cover2-p-1080.jpeg 1080w, images/cover2-p-1600.jpeg 1600w, images/cover2-p-2000.jpeg 2000w, images/cover2.jpg 2560w"
                        sizes="100vw" alt="" class="bg-image">
                    <div class="gradient-bottom"></div>
                    <div class="thumb-info-small-grid featured-card absolute">
                        <div class="category-wrapper">
                            <div>construction</div>
                            <div class="caption-dot">·</div>
                            <div>may 29 2019</div>
                        </div>
                        <h5 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h5>
                    </div><img src="images/Image-Square-Ratio.svg" alt="" class="image-ratio">
                    <div class="image-cover-shape"></div>
                </a>
            </div>
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