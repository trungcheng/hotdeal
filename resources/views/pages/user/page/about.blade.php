@extends('layouts.user.master')

@section('page')Giới thiệu
@stop

@section('description'){{ $article->title }}
@stop

@section('keywords'){{ $article->title }}
@stop

@section('canonical'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('alternate'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('propName'){{ $article->title }}
@stop

@section('propDesc'){{ $article->title }}
@stop

@section('ogTitle'){{ $article->title }}
@stop

@section('ogDesc'){{ $article->title }}
@stop

@section('ogUrl'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Trang chủ</a></li>
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