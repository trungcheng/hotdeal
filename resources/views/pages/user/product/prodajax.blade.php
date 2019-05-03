@foreach ($products as $pro)
    <div class="product">
        <article> 
            <a class="thumb" href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                <img class="img-responsive" src="{{ asset($pro->image) }}" alt="{{ asset($pro->image) }}" >
            </a>
            @if ($pro->discount > 0)
            <span class="sale-tag">-{{ $pro->discount }}%</span>
            @endif
            <!-- Content --> 
            <!-- <span class="tag">Latop</span> --> 
            <h3><a href="{{ route('product-detail', ['slug' => $pro->slug]) }}" class="tittle">{{ $pro->name }}</a></h3>
            <!-- Reviews -->
            <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
            <div class="price">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ
                @if ($pro->discount > 0)
                <span>{{ number_format($pro->price, 0, 0, '.') }} VNĐ</span>
                @endif
            </div>
            <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>  -->
        </article>
    </div>
@endforeach