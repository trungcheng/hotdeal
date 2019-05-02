@extends('layouts.user.master')

@section('page')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('description')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('keywords')Tìm kiếm, từ khóa "{{ $key }}"
@stop

@section('canonical'){{ route('search') }}
@stop

@section('alternate'){{ route('search') }}
@stop

@section('propName')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('propDesc')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('ogTitle')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('ogDesc')Tìm kiếm với từ khóa "{{ $key }}"
@stop

@section('ogUrl'){{ route('search') }}
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
    </style>
@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Trang chủ</a></li>
			<li class="active">Tìm kiếm</li>
		</ol>
	</div>
</div>
<section class="padding-bottom-60">
  	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
                <h5 class="text-uppercase padding-bottom-10">Tìm kiếm với từ khóa "{{ $key }}"</h5>
    			@if (count($results) > 0)
	    			<div class="item-col-4" style="display:inline-block;"> 
		                <!-- Product -->
		                @foreach ($results as $result)
		                <div class="product">
		                    <article> 
		                        <a class="thumb" href="{{ route('product-detail', ['slug' => $result->slug]) }}">
		                            <img class="img-responsive" src="{{ asset($result->image) }}" alt="{{ asset($result->image) }}">
		                        </a> 
		                        <!-- <span class="sale-tag">-25%</span>  -->
		                        <!-- Content --> 
		                        <!-- <span class="tag">Tablets</span> --> 
		                        <a href="{{ route('product-detail', ['slug' => $result->slug]) }}" class="tittle">{{ $result->name }}</a> 
		                        <!-- Reviews -->
		                        <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
		                        <div class="price">{{ number_format($result->price_sale, 0, 0, '.') }} VNĐ<span>{{ number_format($result->price, 0, 0, '.') }} VNĐ</span></div>
		                        <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> -->
		                    </article>
		                </div>
		                @endforeach
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