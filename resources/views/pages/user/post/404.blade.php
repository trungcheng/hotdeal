@extends('layouts.user.master')

@section('page') 404 Page
@stop

@section('image') {{ url('/') }}/{{ $setting->logo }}
@stop

@section('description') {{ $setting->metades }}
@stop

@section('keywords') {{ $setting->metakey }}
@stop

@section('pageCss')
@stop

@section('content')

<div id=Col41 class=col-md-9>
    <div class=startchange></div>
    <div class=margin-left-right-15>
        <div class="tdHeader">
            <div class="pull-left">
                <a class="TitleLink" href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ</a>
                <a class="TitleLink" href="#"> / 404</a> 
            </div>
        </div>

        <div class="row content" style="text-align: center; font-size: 20px; line-height: 35px;">
            <p class="s404-tb">Ooops... Error 404</p>
            <p class="s404-tm">Sorry, but the page you are looking for doesn't exist.</p>
            <a class="btn btn-danger" data-animation="animated  delay4s swing" href="{{ url('/') }}">
            	<i class="fa fa-home"></i> &nbsp Về Trang chủ
            </a>
        </div>
    </div>    
</div>

@stop

@section('pageJs')
@stop