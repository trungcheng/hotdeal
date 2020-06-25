@extends('layouts.user.master')

@section('page'){{ trans('general.projects') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('projects') }}/
@stop

@section('alternate'){{ route('projects') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('projects') }}/
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
<section class="section">
    <div class="content-wrap project-featured-space">
        <section class="content-heading black-bg">
            <h2 class="heading">Recently Projects</h2>
        </section>
        <div class="w-layout-grid _2-columns">
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
                                alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper black-bg">
                                <div>construction</div>
                            </div>
                            <h5 class="heading white">Ecommerce shopping cart design ideas</h5>
                            <div class="post-summary quick-story full white">
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
                                alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper black-bg">
                                <div>construction</div>
                            </div>
                            <h5 class="heading white">Ecommerce shopping cart design ideas</h5>
                            <div class="post-summary quick-story full white">
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
                                alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper black-bg">
                                <div>construction</div>
                            </div>
                            <h5 class="heading white">Ecommerce shopping cart design ideas</h5>
                            <div class="post-summary quick-story full white">
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
                                alt="" class="bg-image"><img src="images/Image-16-10-Ratio.svg" alt=""
                                class="image-ratio">
                            <div class="image-cover-shape"></div>
                        </div>
                        <div>
                            <div class="category-wrapper black-bg">
                                <div>construction</div>
                            </div>
                            <h5 class="heading white">Ecommerce shopping cart design ideas</h5>
                            <div class="post-summary quick-story full white">
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="content-wrap project-space">
        <div class="w-layout-grid _3-columns">
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
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
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
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
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
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
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
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
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="holderjournal-small-columns full-sapo">
                <a href="#" class="cms-link w-inline-block">
                    <div class="thumb-info-small-grid">
                        <div class="image-4-to-3"><img src="images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg" width="960"
                                srcset="images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 98vw"
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
                                <div>Like so many things, the race was canceled. Soon after, gyms around the country
                                    were closed. Suddenly, running — a solo activity that can be done outdoors, away
                                    from other people — seems more important than ever, for both our health and our
                                    mood.<br></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
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