@foreach ($products as $pro)
    <div class="col-6 col-lg-4 d-flex mb-5 mb-md-4">
        <div class="card card-product">
            <a class="thumbnail" href="{{ route('product-detail', ['slug' => $pro->slug]) }}">
                <img class="thumbnail-img" src="{{ asset($pro->image) }}" alt="{{ $pro->name }}">
            </a>
            <div class="card-body">
                <a class="d-inline-block mb-1" href="#">
                    <img class="card-logo img-fluid" src="{{ asset($pro->category->icon) }}" alt="{{ $pro->category->name }}">
                </a>
                <h3 class="card-title mb-2">
                    <a href="{{ route('product-detail', ['slug' => $pro->slug]) }}">{{ $pro->name }}</a>
                </h3>
                <div class="d-flex flex-wrap align-items-center mb-2">
                    <span class="card-price mr-2">{{ number_format($pro->price_sale, 0, 0, '.') }} VNĐ</span>
                    <del class="card-price card-price-old mr-2">{{ number_format($pro->price, 0, 0, '.') }} VNĐ</del>
                    <span class="card-sale">{{ $pro->discount }}%</span>
                </div>
                <div class="card-status text-{{ ($pro->status == 1) ? 'success' : 'primary' }}">
                    <i class="fa fa-check mr-1"></i>{{ ($pro->status == 1) ? 'Còn hàng' : 'Hết hàng' }}
                </div>
            </div>
        </div>
    </div>
@endforeach