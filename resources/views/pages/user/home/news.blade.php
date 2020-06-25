@extends('layouts.user.master')

@section('page'){{ trans('general.news') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('news') }}/
@stop

@section('alternate'){{ route('news') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('news') }}/
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
<section class="section-container">
    <div class="content-heading align-left no-padding">
        <h2 class="content-heading-home">News</h2>
        <div class="content-sapo">Our latest tips, tricks, insights, and resources, hot off the presses.</div>
    </div>
    <div class="content-wrap margin">
        <div class="w-layout-grid grid">
            <div class="_1st-column-journal pack-1---2">
                <div class="_1-column-2-on-mobile _2-col-pc">
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 87vw, (max-width: 767px) 45vw, (max-width: 991px) 42vw, 36vw"
                                        alt="" class="bg-image"><img src="../images/Image-16-10-Ratio.svg" alt=""
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
                <div class="_w-pagination-wrapper">
                    <a href="../news-events.html" class="button-style small w-inline-block">
                        <div class="button-style-w-icon"><img src="../images/chevron-left.svg" width="120" alt=""
                                class="b-archive-link__arrow cc-arrow-left">
                            <div class="button-label">Previous</div>
                        </div>
                        <div class="hover-shape"></div>
                    </a>
                    <div class="_w-page-count">2/18</div>
                    <a href="../news-events.html" class="button-style small w-inline-block">
                        <div class="button-style-w-icon">
                            <div class="button-label">Previous</div><img src="../images/chevron-right.svg" width="22"
                                alt="" class="b-archive-link__arrow cc-arrow-right">
                        </div>
                        <div class="hover-shape"></div>
                    </a>
                </div>
            </div>
            <div class="_3rd-column-journal">
                <div class="sticky-3rd-column">
                    <div class="holder-journal-columns">
                        <div class="thumb-info-large-grid">
                            <div class="title-xs">Explore Topic</div>
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
                            <div class="intro-brand-wrap"><img src="../images/visci-vector-web.svg" height="" alt=""
                                    class="brand-visci full"></div>
                            <div id="w-node-eb8358356fd5-66f3f7ba" class="post-summary-center">
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