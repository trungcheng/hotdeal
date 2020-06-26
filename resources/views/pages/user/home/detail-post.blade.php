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
                <h2 class="heading">Designing landing pages in hours vs. days: an interview with Jamie Syke</h2>
                <p>Jamie Syke is an independent designer and art director with a passion for landing pages. He sat down
                    with me to talk about his experience with Webflow, his process, and some of his latest projects —
                    including a soon-to-be-published book.</p>
                <div class="category-wrapper">
                    <a href="#" class="link white-colour w-inline-block">
                        <div>construction</div>
                    </a>
                    <div class="caption-dot">·</div>
                    <div>21 min ago</div>
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
            <div class="w-richtext">
                <h4>Jamie — hello! Tell us a bit about yourself.</h4>
                <p>I’m Jamie Syke. I&#x27;ve been designing for about a decade. I got started back when Myspace was
                    still wonderfully popular and everybody was ... younger.</p>
                <p>I went from designing band pages on Myspace to working with Zynga (of Farmville fame). I worked with
                    them on some dating platforms, which eventually lead to running a studio called Brotherhood where I
                    worked with a whole bunch of clients, like Bumble. I&#x27;m currently more focused on freelance and
                    collaborations.</p>
                <h4>How do you use Webflow in your design process?</h4>
                <p>I use Webflow mostly to ship things. I&#x27;m a big believer in getting ideas out there and then
                    testing them. And for someone who doesn’t write code at all, Webflow is super useful.</p>
                <p>I&#x27;m trying to remember how I found Webflow. I think I saw a <a
                        href="https://www.youtube.com/channel/UCELSb-IYi_d5rYFOxWeOz5g/videos" target="_blank">YouTube
                        video</a> with <a href="https://twitter.com/thepixelgeek" target="_blank">the Pixel Geek</a>. He
                    was using Webflow to do something that I was trying to do in Sketch that turned out to be easier to
                    do in Webflow.</p>
                <p>I get bored and rebuild my website every few months. I&#x27;ve used Webflow to build my last three or
                    four web portfolios, a couple of sites for clients, and a few sites for friends.</p>
                <blockquote><strong>I get asked regularly to build sites because people know that what normally takes a
                        few days, I can do in an hour and a half with Webflow. </strong></blockquote>
                <p>So, it&#x27;s definitely sped things up significantly. Building things as I come up with them and
                    being able to see them in context is super important. When I’m just staring at a canvas, I get
                    locked in to that being exactly how a design will be presented. But everyone has all sorts of
                    different ways — screen sizes and devices — to access what you create. <br></p>
                <p>So it’s important to be able to create outside a typical, static canvas and have something that
                    functions. Something you can move around and adjust.</p>
                <h4>Speaking of portfolio redesigns, you just redesigned yours in Webflow. Tell me a bit about that.
                </h4>
                <p>When I ran Brotherhood, I had the idea of adding <a href="https://www.syke.co/" target="_blank">a
                        smoke effect</a> to a website. I don&#x27;t know why, but I always wanted smoke on a website.
                    <br></p>
                <p>I ended up building a side page on my old site to see if I could get the smoke effect to work. I
                    built in the mouse reaction stuff that moves it around, and it sort of got a bit out of control from
                    there. It&#x27;s mostly just me playing with as many of the crazy features as I can without making
                    the site unusable — it’s responsive and everything is where you expect it to be.<br></p>
                <figure style="max-width:1200pxpx" id="w-node-18e1a640102f-6cf3f7c0"
                    class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="../images/0694c858145989.5b884fc87cdaa.jpg" alt=""></div>
                    <figcaption>Rinkuskiai Beverage</figcaption>
                </figure>
                <p>It&#x27;s cool to have been able to be so creative with it and actually have it be live. When I tried
                    the smoke effect before, I would hit the wall and feel like I needed a frontend developer. And there
                    just wasn&#x27;t one available and I didn’t have the money to hire one.</p>
                <blockquote><strong>It’s amazing to be able to put my creativity out there and have it exist on the
                        internet without that help.</strong></blockquote>
                <h4>It&#x27;s a really cool landing page!</h4>
                <p>Thank you. I&#x27;m also going to be launching 12 more sites over the next 12 months — a product a
                    month starting in June. I&#x27;m starting this crazy experiment to see if I can work on my client
                    projects, keep up with new content, and launch a product a month. <br></p>
                <p>Webflow will be the fundamental platform to get those websites out, which is cool. It gives me an
                    interesting opportunity — as someone who doesn&#x27;t write a lot of code — to make my ideas happen
                    and learn what resonates with people while able to work quickly.</p>
                <h4>Is the ability to move quickly from idea to implementation with Webflow the biggest draw for you?
                </h4>
                <p>Yes. That and the fact that you can be really versatile with how you can create things. It&#x27;s not
                    like ages ago when website builders would drag four components in and everyone’s site looked exactly
                    the same. (Cough cough. Squarespace.) <br></p>
                <p>With Webflow, you can play around with a lot of different animations, trigger things off different
                    actions, and do all sorts of fun things that move away from the static nature of the web — designers
                    can express a level of polish that’s harder when they have to write 15,000 lines of code to make it
                    work. </p>
            </div>
            <div class="b-inline-banner">
                <div class="b-inline-call-out__content"></div>
            </div>
            <div class="w-richtext">
                <h4>Your project Pyrismic recently won Product of the Day award on Product Hunt. Tell me about that
                    project.</h4>
                <p>Nice. I did not know it won Product of the Day. That is wonderful.</p>
                <h4>Ha! Amazing. Well congratulations!</h4>
                <p>Thanks! That was another project I built and launched with Webflow. <a
                        href="https://www.producthunt.com/posts/pyrismic">Pyrismic</a> was born out of being surrounded
                    by a bunch of really talented designers who all have little gaps in their schedules — all these
                    two-week periods they have available. <br></p>
                <p>We set out to see if there was an interest on the client side and about 100 people got in touch,
                    which validated the idea.<br></p>
                <p>Webflow has been super useful in that project as well. I designed and built that site in about 36
                    hours — from blank canvas in Sketch to done.</p>
                <blockquote><strong>If you&#x27;re planning to build something in Webflow, my recommended process from a
                        designer&#x27;s perspective would probably be to build your design in Sketch the same way you’d
                        set up the CSS classes, rather than in a hundred different groups.</strong></blockquote>
                <p>If you set it up in the same way from top to bottom, it easy to just build it again in Webflow a
                    second time, because you&#x27;re just doing the same thing you already did. My style is maybe not
                    very conducive to productivity in some ways, but I work faster than most people, so I have more
                    time.</p>
                <h4>Your book, Digital Impressions, on the topic of landing page design. Tell us what we can expect from
                    it?</h4>
                <p>My book is almost finished, but I’ve been writing it for what seems like forever now. <br></p>
                <p><a href="https://dribbble.com/shots/6468071-Digital-Impressions-Concept" target="_blank">Digital
                        Impressions</a> is about inspiring action in those first couple of moments someone spends on
                    your page — making sure your messaging and how you communicate makes someone comfortable. But not so
                    comfortable they’re bored. <br></p>
                <p>It looks at framing things so people can understand exactly what you do and figuring out who to
                    target. You want a couple people — one ideal user. That one ideal user will probably be about 50
                    million people.</p>
                <figure style="max-width:1200px" id="w-node-c024d2bc375d-6cf3f7c0"
                    class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="../images/a0b40e71379877.5bc3af2dacb0e.jpg" alt=""></div>
                    <figcaption>The Conference of Design CTA18</figcaption>
                </figure>
                <p>I recently heard someone say, &quot;If you&#x27;re talking to everybody, you&#x27;re talking to
                    nobody.&quot;</p>
                <p>Exactly. It’s important to build things and create from the perspective of your audience rather than
                    yourself. It&#x27;s not about pushing your fancy agenda upon somebody. It&#x27;s about solving a
                    problem. If you can solve the problem and make it look hella cool, then great, but I think a lot of
                    people get way too selfish.</p>
                <h4>Tell me about your interest in landing pages?</h4>
                <p>I like the flexibility behind landing pages and small websites — they let you capture an entire
                    microcosm of the world inside one little niche. That&#x27;s more difficult to do with larger
                    projects that need more resources. <br></p>
                <p>Landing pages let you move quickly, test a lot of different things, and gather a lot of data. The
                    data is mega important to make the right decisions based on people using your product. A lot of
                    people end up creating for themselves instead of their audience. They create because the founder of
                    the company said this idea is the best idea.<br></p>
                <p>So many people don&#x27;t even <em>try</em> to gather information — they dive into designing
                    something because they saw this triangle pattern the other day and they want to use the triangle
                    pattern so the client is getting this f*cking triangle pattern. <br></p>
                <p>The book focuses on centering the people using our products.</p>
                <h4>Do you have any advice for someone just starting out with Webflow?</h4>
                <p>Watch all the YouTube videos — all of them. <a href="https://university.webflow.com/"
                        target="_blank">Webflow University</a>, but also just type Webflow into YouTube and watch
                    everything. There&#x27;s an incredible amount of stuff out there. Look through the showcase and
                    clone stuff, take it apart, and put it back together again.<br></p>
                <p>Just try building!</p>
            </div>
        </main>
    </div>
</div>
<section class="section-container bg-colour-alternative">
    <div class="content-heading align-left no-padding">
        <h2 class="heading">Related news</h2>
    </div>
    <div class="content-wrap margin">
        <div class="w-layout-grid grid _2-col">
            <div class="_1st-column-journal pack-1---2 full">
                <div class="_1-column-2-on-mobile _2-col-pc">
                    <div class="holderjournal-small-columns full-sapo">
                        <a href="#" class="cms-link w-inline-block">
                            <div class="thumb-info-small-grid">
                                <div class="image-4-to-3"><img src="../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg"
                                        width="960"
                                        srcset="../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-500.jpeg 500w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-800.jpeg 800w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1080.jpeg 1080w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4-p-1600.jpeg 1600w, ../images/fd0a94172d3fbd0715ba66ebbc255dd4.jpg 1920w"
                                        sizes="(max-width: 479px) 90vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 37vw"
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
                                            outdoors, away from other people — seems more important than ever, for both
                                            our health and our mood.<br></div>
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
                                        sizes="(max-width: 479px) 90vw, (max-width: 767px) 46vw, (max-width: 991px) 44vw, 37vw"
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
                                            outdoors, away from other people — seems more important than ever, for both
                                            our health and our mood.<br></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('pageJs')

@stop