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

@section('ogImage'){{ asset('frontend/images/visci-vector-web-white.svg') }}
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
        <h1 class="heading center">{{ trans('general.get_in_touch') }}</h1>
    </div>
    <div class="lead">{{ trans('general.you_can_visit') }}<br>{{ $setting->getTranslation(app()->getLocale())->address }}<br><br>Phone: <a href="#">{{ $setting->mobile }}<br></a>Email: <a
            href="#">{{ $setting->email }}</a><a href="#"><br></a></div>
</div>
<div class="w-layout-grid grid-team">
    @if (count(json_decode($setting['contact_questions'])) > 0)
    <div class="team-selection">
        <div class="w-layout-grid accordion-grid">
            @foreach (json_decode($setting['contact_questions']) as $question)
            <div id="w-node-aca10fb7cbf8-51f3f7bb" data-w-id="0b7e7c0a-2100-b99c-15e0-aca10fb7cbf8"
                class="accordion-wrapper">
                <div class="accordion-line"></div>
                <div class="accordion-trigger">
                    @if (app()->getLocale() == 'en')
                    <h6>{!! $question->question !!}</h6>
                    @else
                    <h6>{!! $question->vi_question !!}</h6>
                    @endif
                    <div class="expand-icon"><img src="{{ asset('frontend/images/chevron-down.svg') }}" alt=""></div>
                </div>
                <div class="accordion-content">
                    @if (app()->getLocale() == 'en')
                    <div class="accordion-text">{!! $question->answer !!}</div>
                    @else
                    <div class="accordion-text">{!! $question->vi_answer !!}</div>
                    @endif
                </div>
                <div style="-webkit-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-102%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hover-line"></div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <div class="team-selection">
        <h6>{{ trans('general.start_conversation') }}</h6>
        <div class="form-block w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
                <div class="horizontal">
                    <div class="item-bordered"><label for="name">{{ trans('general.name') }}</label><input type="text"
                            class="text-field-transparent w-input" maxlength="256" name="name" data-name="Name"
                            placeholder="{{ trans('general.enter_name') }}" id="name"></div>
                    <div class="item-bordered last"><label for="name-2">{{ trans('general.email') }}</label><input type="email"
                            class="text-field-transparent w-input" maxlength="256" name="name-2" data-name="Name 2"
                            placeholder="{{ trans('general.enter_email') }}" id="name-2"></div>
                </div>
                <div class="item-bordered one last"><label for="name-3">{{ trans('general.message') }}</label><textarea
                        placeholder="{{ trans('general.enter_message') }}" maxlength="5000" id="field" name="field"
                        class="text-field-transparent w-input"></textarea></div><input type="submit" value="{{ trans('general.submit') }}"
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