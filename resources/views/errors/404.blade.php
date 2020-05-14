@extends('layouts.user.master')

@section('page')404 - Page Not Found
@stop

@section('description')
@stop

@section('keywords')
@stop

@section('canonical'){{ URL::current() }}
@stop

@section('alternate'){{ URL::current() }}
@stop

@section('propName')
@stop

@section('propDesc')
@stop

@section('ogTitle')
@stop

@section('ogDesc')
@stop

@section('ogUrl'){{ route('home') }}/
@stop

@section('pageCss')
    
@stop

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row content" style="text-align: center; font-size: 20px; line-height: 35px; padding-top: 50px;">
                <p class="s404-tb">Lỗi <span>404</span> Không tìm thấy trang</p>
                <p class="s404-tm">Không tìm thấy trang bạn đang truy cập.</p>
                <a class="btn-vote-item transition" style="width: 250px; margin: 10px auto 50px; float: none;" href="{{ url('/') }}">Về Trang chủ</a>
            </div>
        </div>
    </div>
@stop

@section('pageJs')
    <script type="text/javascript">
        $(function() {
            var height = window.innerHeight;
            $('.content').css('min-height', height-220);
        });
    </script>
@stop