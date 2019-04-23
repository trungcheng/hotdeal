@extends('layouts.user.master')

@section('page')Giới thiệu
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Trang chủ</a></li>
			<li class="active">Giới thiệu</li>
		</ol>
	</div>
</div>
<div class="container margin-bottom-50">
	<h5 class="text-center">{{ $article->title }}</h5>
	{!! $article->intro !!}
	{!! $article->fulltext !!}
</div>
@stop

@section('pageJs')

@stop