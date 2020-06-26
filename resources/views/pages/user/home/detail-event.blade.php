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
<header class="post-hero">
    <figure class="post-hero-wrap">
        <div class="hero-content post">
            <figure class="hero-content-wrap">
                <div class="event-format-container">
                    <div class="event-format-wrap post-hero">
                        <div class="event-format day">02</div>
                        <div class="caption-dot">·</div>
                        <div class="event-format day">JULY 2020</div>
                    </div>
                    <div class="event-format-wrap event-category">
                        <a href="#" class="link white-colour w-inline-block">
                            <div class="text-block">Lectures and seminars</div>
                        </a>
                    </div>
                </div>
                <h2 class="post-hero-heading">Live Event: Homi K. Bhabha ‘On Being Unprepared&#x27;</h2>
                <p>Join Homi K. Bhabha for a discussion ‘On Being Unprepared (For Our Own Times)&#x27;Moderated by
                    Professor Wes Williams, TORCH Knowledge Exchange Champion</p>
                <div class="category-wrapper">
                    <a href="#" class="link white-colour w-inline-block">
                        <div>Big Tent! Live Events!</div>
                    </a>
                </div>
            </figure>
        </div>
    </figure>
</header>
@stop

@section('content')
<div class="section-container">
    <div class="b-sticky-share__wrap">
        <div class="share-tool-box"><a href="#" class="share-sticky-icon w-inline-block"><img
                    src="../images/facebook-with-circle-black.svg" width="32" alt=""></a><a href="#"
                class="share-sticky-icon w-inline-block"><img src="../images/twitter-with-circle-black.svg" width="32"
                    alt=""></a><a href="#" class="share-sticky-icon w-inline-block"><img
                    src="../images/youtube-with-circle-black.svg" width="32" alt=""></a><a href="#"
                class="share-sticky-icon w-inline-block"><img src="../images/mail-with-circle-black.svg" width="32"
                    alt=""></a></div>
    </div>
    <div class="content-wrap">
        <main class="post-content">
            <div class="event-infomation">
                <div class="w-layout-grid event-table">
                    <div class="event-table-type-item">Event date</div>
                    <div>2 Jul 2020</div>
                    <div class="event-table-type-item">Event time</div>
                    <div>17:00 - 18:00</div>
                    <div class="event-table-type-item">Venue</div>
                    <div>The Oxford Research Centre in the Humanities - Online EventOnline</div>
                    <div class="event-table-type-item">Event Type</div>
                    <div>Lectures and seminars</div>
                    <div class="event-table-type-item">Speaker</div>
                    <div>Join Homi K. Bhabha (Anne F. Rothenberg Professor of the Humanities at Harvard University);
                        Anthony Russo, Prof. Tran Dai Nghia</div>
                    <div class="event-table-type-item">Detailed Information</div><a
                        href="#">https://landingpage.visci.org</a>
                </div>
            </div>
            <div class="w-richtext">
                <p>Join Homi K. Bhabha for a discussion ‘On Being Unprepared (For Our Own Times)&#x27;</p>
                <p>Moderated by Professor Wes Williams, TORCH Knowledge Exchange Champion</p>
                <p><strong>Biography: </strong>Homi K. Bhabha is the Anne F. Rothenberg Professor of the Humanities at
                    Harvard University.</p>
                <p>He is one of the most important figures in contemporary post-colonial studies. Bhabha is the author
                    of numerous works exploring colonial and postcolonial theory, cultural change and power, and
                    cosmopolitanism, among other themes. In 2012, he received the Padma Bhushan award in the field of
                    literature and education from the Indian government.</p>
                <figure style="max-width:678px" id="w-node-f049ea89a942-1ee570ef"
                    class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="../images/2020-05-06_13-49-55.png" alt=""></div>
                </figure>
                <p>Some of his works include Nation and Narration and The Location of Culture, which was reprinted as a
                    Routledge Classic in 2004 and has been translated into Korean, Spanish, Italian, Arabic, Serbian,
                    German and Portuguese. A selection of his work was recently published in a Japanese volume. Harvard
                    University Press will publish his forthcoming book A Global Measure, and Columbia University Press
                    will publish his next book The Right to Narrate.</p>
            </div>
        </main>
    </div>
</div>
@stop

@section('pageJs')

@stop