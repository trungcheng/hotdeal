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
      <li><a href="#">Home</a></li>
      <li class="active">Blog</li>
  </ol>
</div>
</div>

<!-- Blog -->
<section class="blog-page padding-top-30 padding-bottom-60">
  <div class="container">
    <div class="row">
      <div class="col-md-9"> 
        
        <!-- Blog Post -->
        <div class="blog-post">
          <article class="row">
            <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-1.jpg') }}" alt="" > </div>
            <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
              Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
              <a href="{{ route('article-detail') }}">Readmore</a></div>
          </article>
      </div>
      
      <!-- Blog Post -->
      <div class="blog-post">
          <article class="row">
            <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt="" > </div>
            <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">Get the power to take your business to the
            next level. </a>
            <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
            Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
            <a href="{{ route('article-detail') }}">Readmore</a> </div>
        </article>
    </div>
    
    <!-- Blog Post -->
    <div class="blog-post">
      <article class="row">
        <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-3.jpg') }}" alt="" > </div>
        <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
          <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
          Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
          <a href="{{ route('article-detail') }}">Readmore</a></div>
      </article>
  </div>
  
  <!-- Blog Post -->
  <div class="blog-post">
      <article class="row">
        <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-4.jpg') }}" alt="" > </div>
        <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
          <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
          Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
          <a href="{{ route('article-detail') }}">Readmore</a></div>
      </article>
  </div>
  
  <!-- Blog Post -->
  <div class="blog-post">
      <article class="row">
        <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-5.jpg') }}" alt="" > </div>
        <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">Get the power to take your business to the
        next level. </a>
        <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
        Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
        <a href="{{ route('article-detail') }}">Readmore</a> </div>
    </article>
</div>

<!-- Blog Post -->
<div class="blog-post">
  <article class="row">
    <div class="col-xs-7"> <img class="img-responsive" src="{{ asset('frontend/images/blog-img-6.jpg') }}" alt="" > </div>
    <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="{{ route('article-detail') }}" class="tittle">It’s why there’s nothing else like Mac. </a>
      <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi.<br>
      Maecenas sed pulvinar metus. Integer suscipit ac odio vulputate vehicula. Pellentesque consectetur viverra accumsan. Mauris varius convallis nisl [...] </p>
      <a href="{{ route('article-detail') }}">Readmore</a></div>
  </article>
</div>

<!-- pagination -->
<ul class="pagination">
  <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
  <li><a class="active" href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
</ul>
</div>

<!-- Side Bar -->
<div class="col-md-3">
    <div class="shop-side-bar"> 
      
      <!-- Recent Posts -->
      <h6>Recent Posts</h6>
      <div class="recent-post"> 
        
        <!-- Recent Posts -->
        <div class="media">
          <div class="media-left"> <a href="{{ route('article-detail') }}"><img class="img-responsive" src="{{ asset('frontend/images/blog-img-2.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="{{ route('article-detail') }}">It’s why there’s
          nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
      </div>
      
      <!-- Recent Posts -->
      <div class="media">
          <div class="media-left"> <a href="{{ route('article-detail') }}"><img class="img-responsive" src="{{ asset('frontend/images/blog-img-3.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="{{ route('article-detail') }}">It’s why there’s
          nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
      </div>
      
      <!-- Recent Posts -->
      <div class="media">
          <div class="media-left"> <a href="{{ route('article-detail') }}"><img class="img-responsive" src="{{ asset('frontend/images/blog-img-4.jpg') }}" alt=""> </a> </div>
          <div class="media-body"> <a href="{{ route('article-detail') }}">It’s why there’s
          nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
      </div>
  </div>
  
  <!-- Quote of the Day -->
  <h6>Quote of the Day</h6>
  <div class="quote-day"> <i class="fa fa-quote-left"></i>
    <p>Suspendisse sodales cursus lorem vel
    efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
</div>
</div>
</div>
</div>
</div>
</section>
@stop

@section('pageJs')

@stop