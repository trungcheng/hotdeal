@extends('layouts.user.master')

@section('page'){{ trans('general.contact') }}
@stop

@section('description'){{ $setting->seo_desc }}
@stop

@section('keywords'){{ $setting->seo_keyword }}
@stop

@section('canonical'){{ route('contact') }}/
@stop

@section('alternate'){{ route('contact') }}/
@stop

@section('propName'){{ $setting->seo_title }}
@stop

@section('propDesc'){{ $setting->seo_desc }}
@stop

@section('ogTitle'){{ $setting->seo_title }}
@stop

@section('ogDesc'){{ $setting->seo_desc }}
@stop

@section('ogUrl'){{ route('contact') }}/
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
<div class="section hero">
    <div class="container align-center">
        <h1 class="heading center">Get in touch with us</h1>
    </div>
    <div class="lead">You can visit us at<br>National University of Civil Engineering (NUCE) - no 55, Giai Phong Road,
        Ha Noi Capital, Viet Nam.<br><br>Phone: <a href="#">+ 84 (0) 1 234 56 78<br></a>Email: <a
            href="#">support@visci.org</a><a href="#"><br></a></div>
</div>
<div class="w-layout-grid grid-team">
    <div class="team-selection">
        <div class="w-layout-grid accordion-grid">
            <div id="w-node-aca10fb7cbf8-51f3f7bb" data-w-id="0b7e7c0a-2100-b99c-15e0-aca10fb7cbf8"
                class="accordion-wrapper">
                <div class="accordion-line"></div>
                <div class="accordion-trigger">
                    <h6>How is the product is available?</h6>
                    <div class="expand-icon"><img src="{{ asset('frontend/images/chevron-down.svg') }}" alt=""></div>
                </div>
                <div class="accordion-content">
                    <div class="accordion-text">Our products are sold exclusively online on this website. If you
                        experience difficulty in proceeding with a purchase or you have questions about our products,
                        you can contact us using the contact form found in the contact us page. We will answer your
                        query within a few hours.</div>
                </div>
                <div style="-webkit-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hover-line"></div>
            </div>
            <div id="w-node-91b8d192ff38-51f3f7bb" data-w-id="2315ee41-5c5c-6932-157e-91b8d192ff38"
                class="accordion-wrapper">
                <div class="accordion-line"></div>
                <div class="accordion-trigger">
                    <h6>How is the product is available?</h6>
                    <div class="expand-icon"><img src="{{ asset('frontend/images/chevron-down.svg') }}" alt=""></div>
                </div>
                <div class="accordion-content">
                    <div class="accordion-text">Our products are sold exclusively online on this website. If you
                        experience difficulty in proceeding with a purchase or you have questions about our products,
                        you can contact us using the contact form found in the contact us page. We will answer your
                        query within a few hours.</div>
                </div>
                <div style="-webkit-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hover-line"></div>
            </div>
            <div id="w-node-a1f8f9ab3050-51f3f7bb" data-w-id="c2909d56-768c-89d9-114d-a1f8f9ab3050"
                class="accordion-wrapper">
                <div class="accordion-line"></div>
                <div class="accordion-trigger">
                    <h6>How is the product is available?</h6>
                    <div class="expand-icon"><img src="{{ asset('frontend/images/chevron-down.svg') }}" alt=""></div>
                </div>
                <div class="accordion-content">
                    <div class="accordion-text">Our products are sold exclusively online on this website. If you
                        experience difficulty in proceeding with a purchase or you have questions about our products,
                        you can contact us using the contact form found in the contact us page. We will answer your
                        query within a few hours.</div>
                </div>
                <div style="-webkit-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hover-line"></div>
            </div>
            <div id="w-node-110bf0d339ed-51f3f7bb" data-w-id="bb1806d3-720a-6d96-77c7-110bf0d339ed"
                class="accordion-wrapper">
                <div class="accordion-line"></div>
                <div class="accordion-trigger">
                    <h6>How is the product is available?</h6>
                    <div class="expand-icon"><img src="{{ asset('frontend/images/chevron-down.svg') }}" alt=""></div>
                </div>
                <div class="accordion-content">
                    <div class="accordion-text">Our products are sold exclusively online on this website. If you
                        experience difficulty in proceeding with a purchase or you have questions about our products,
                        you can contact us using the contact form found in the contact us page. We will answer your
                        query within a few hours.</div>
                </div>
                <div style="-webkit-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hover-line"></div>
            </div>
        </div>
    </div>
    <div class="team-selection">
        <h6>Start the conversation</h6>
        <div class="form-block w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
                <div class="horizontal">
                    <div class="item-bordered"><label for="name">Name</label><input type="text"
                            class="text-field-transparent w-input" maxlength="256" name="name" data-name="Name"
                            placeholder="Enter your name" id="name"></div>
                    <div class="item-bordered last"><label for="name-2">Email Address</label><input type="email"
                            class="text-field-transparent w-input" maxlength="256" name="name-2" data-name="Name 2"
                            placeholder="Enter your email address" id="name-2"></div>
                </div>
                <div class="item-bordered one last"><label for="name-3">Message</label><textarea
                        placeholder="Enter your message" maxlength="5000" id="field" name="field"
                        class="text-field-transparent w-input"></textarea></div><input type="submit" value="Submit"
                    data-wait="Please wait..." class="button-style w-button">
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
</div>
@stop

@section('pageJs')

@stop