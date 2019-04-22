@extends('layouts.user.master')

@section('page')Tin tức
@stop

@section('pageCss')

@stop

@section('content')
<!-- Linking -->
<div class="linking">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}">Trang chủ</a></li>
      <li class="active">Tin tức</li>
  </ol>
</div>
</div>

<!-- Blog -->
@if (count($articles) > 0)
<section class="blog-page padding-top-30 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-md-9"> 

        <!-- Blog Post -->
        @foreach ($articles as $article)
        <div class="blog-post">
            <article class="row">
                <div class="col-xs-7"> <img class="img-responsive" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}" > </div>
                <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> {{ $article->created_at }}</span> <span><i class="fa fa-comment-o"></i> 0 Bình luận</span> <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="tittle">{{ $article->title }}</a>
                {!! $article->intro !!}
                <a href="{{ route('article-detail', ['slug' => $article->slug]) }}">Đọc thêm</a></div>
            </article>
        </div>
        @endforeach
      
      <!-- pagination -->
      {{ $articles->appends(request()->query())->links() }}
  </div>

  <!-- Side Bar -->
  <!-- <div class="col-md-3">
    <div class="shop-side-bar"> 

      <h6>Recent Posts</h6>
      <div class="recent-post"> 

        <div class="media">
          <div class="media-left"> <a href="{{ route('article-detail') }}"><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="{{ route('article-detail') }}">It’s why there’s
          nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
      </div>
  </div> -->
  
  <!-- Quote of the Day -->
  <!-- <h6>Quote of the Day</h6>
  <div class="quote-day"> <i class="fa fa-quote-left"></i>
    <p>Suspendisse sodales cursus lorem vel
    efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
</div> -->
</div>
</div>
</div>
</div>
</section>
@endif
@stop

@section('pageJs')

@stop