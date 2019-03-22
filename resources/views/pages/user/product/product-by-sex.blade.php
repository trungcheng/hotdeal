@foreach ($products as $fea)
    <div class="col-md-6 col-lg-4 d-flex mb-4">
        <div class="card card-product">
            <a class="thumbnail mb-4" href="{{ route('product-detail', ['slug' => $fea->slug]) }}">
                <img class="thumbnail-img" src="{{ asset($fea->image) }}" alt="{{ $fea->name }}">
            </a>
            <div class="card-body">
                <a class="d-inline-block mb-1" href="#">
                    <img class="card-logo img-fluid" src="{{ asset($fea->category->icon) }}" alt="{{ $fea->category->name }}">
                </a>
                <h3 class="card-title mb-2">
                    <a href="{{ route('product-detail', ['slug' => $fea->slug]) }}">{{ $fea->name }}</a>
                </h3>
                <div class="d-flex flex-wrap align-items-center mb-2">
                    <span class="card-price mr-2">{{ number_format($fea->price_sale, 0, 0, '.') }} VND</span>
                    <del class="card-price card-price-old mr-2">{{ number_format($fea->price, 0, 0, '.') }} VND</del>
                    <span class="card-sale">{{ $fea->discount }}%</span>
                </div>
                <div class="card-status text-primary">
                    <i class="fa fa-check mr-1"></i>{{ ($fea->status == 1) ? 'Còn hàng' : 'Hết hàng' }}
                </div>
            </div>
        </div>
    </div>
@endforeach