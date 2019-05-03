@extends('layouts.user.master')

@section('page'){{ $cate->seo_title }}
@stop

@section('description'){{ $cate->seo_desc }}
@stop

@section('keywords'){{ $cate->seo_keyword }}
@stop

@section('canonical'){{ route('product-detail', ['slug' => $cate->slug]) }}
@stop

@section('alternate'){{ route('product-detail', ['slug' => $cate->slug]) }}
@stop

@section('propName'){{ $cate->seo_title }}
@stop

@section('propDesc'){{ $cate->seo_desc }}
@stop

@section('ogTitle'){{ $cate->seo_title }}
@stop

@section('ogDesc'){{ $cate->seo_desc }}
@stop

@section('ogUrl'){{ route('product-detail', ['slug' => $cate->slug]) }}
@stop

@section('pageCss')
	<style type="text/css">
        article {
            display: block !important;
            justify-content: space-between;
            flex-grow: 1;
            border-radius: 0;
            border-color: transparent;
            position: relative;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
        }
        article .thumb {
            padding-top: 100%;
            position: relative;
            display: block;
            z-index: 0;
        }
        .thumb .img-responsive {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            max-width: 100%;
            transition: all .2s ease-in-out;
            vertical-align: middle;
        }
        .product {
            display: flex;
        }
        article h3 {
            margin: 0px !important;
        }
    </style>
@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Trang chủ</a></li>
			<li class="active">{{ $cate->name }}</li>
		</ol>
	</div>
</div>
<section class="padding-bottom-60">
  	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
                <h1 style="font-size:25px;" class="text-uppercase padding-bottom-10">{{ $cate->name }}</h1>
    			@if (count($results) > 0)
	    			<div class="item-col-4" style="display:inline-block;"> 
		                <!-- Product -->
		                @foreach ($results as $result)
		                <div class="product">
		                    <article> 
		                        <a class="thumb" href="{{ route('product-detail', ['slug' => $result->slug]) }}">
		                            <img class="img-responsive" src="{{ asset($result->image) }}" alt="{{ asset($result->image) }}">
		                        </a>
                                @if ($result->discount > 0)
		                        <span class="sale-tag">-{{ $result->discount }}%</span>
                                @endif 
		                        <!-- Content --> 
		                        <!-- <span class="tag">Tablets</span> --> 
		                        <h3><a href="{{ route('product-detail', ['slug' => $result->slug]) }}" class="tittle">{{ $result->name }}</a></h3>
		                        <!-- Reviews -->
		                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
		                        <div class="price">{{ number_format($result->price_sale, 0, 0, '.') }} VNĐ
                                    @if ($result->discount > 0)
                                    <span>{{ number_format($result->price, 0, 0, '.') }} VNĐ</span>
                                    @endif
                                </div>
		                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
		                    </article>
		                </div>
		                @endforeach
		            </div>
                    <div class="margin-top-10">
                        {!! $cate->seo_content !!}
                    </div>
	            @else
		            <p>Không có sản phẩm nào !</p>
		        @endif
    		</div>
    	</div>
    </div>
</section>
@stop

@section('pageJs')

@stop