@extends('layouts.user.master')

@section('page')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp
@stop

@section('description')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('keywords')tin tức, thiết bị vệ sinh, phong thủy nhà bếp, tin tức thiết bị vệ sinh
@stop

@section('canonical'){{ route('article') }}
@stop

@section('alternate'){{ route('article') }}
@stop

@section('propName')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('propDesc')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogTitle')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogDesc')Tin tức về thiết bị vệ sinh, nhà bếp, phong thủy nhà bếp.
@stop

@section('ogUrl'){{ route('article') }}
@stop

@section('pageCss')
  <style type="text/css">
    .blog-post article img {
      height: auto;
    }
  </style>
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
<section class="blog-page padding-top-20 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-md-9"> 

        <!-- Blog Post -->
        @foreach ($articles as $article)
        <div class="blog-post">
            <article class="row">
                <div class="col-xs-7"> <img class="img-responsive" src="{{ asset($article->image) }}" alt="{{ asset($article->image) }}" > </div>
                <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> {{ $article->created_at }}</span> <a href="{{ route('article-detail', ['slug' => $article->slug]) }}" class="tittle">{{ $article->title }}</a>
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
          <div class="media-left"> <a href=""><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="">It’s why there’s
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
  <script type="text/javascript">
      $(function () {
        // $('.blog-post p').each(function (v, k) {
        //     var trim = trimText($(k).text(), 30);
        //     $(k).text(trim);
        // });
      });
  </script>
@stop