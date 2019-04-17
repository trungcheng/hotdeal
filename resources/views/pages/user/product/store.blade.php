@extends('layouts.user.master')

@section('page')Cửa hàng
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Cửa hàng</li>
      </ol>
    </div>
  </div>

  <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
              
              <!-- Categories -->
              <h6>Danh mục</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="cate1" class="styled" type="checkbox">
                    <label for="cate1">Chậu rửa bát đá nhân tạo</label>
                  </li>
                  <li>
                    <input id="cate2" class="styled" type="checkbox">
                    <label for="cate2">Chậu rửa bát inox 201</label>
                  </li>
                  <li>
                    <input id="cate3" class="styled" type="checkbox">
                    <label for="cate3">Kệ tủ bếp</label>
                  </li>
                  <li>
                    <input id="cate4" class="styled" type="checkbox">
                    <label for="cate4">Tủ lavabo</label>
                  </li>
                  <li>
                    <input id="cate5" class="styled" type="checkbox">
                    <label for="cate5">Vòi hoa sen</label>
                  </li>
                </ul>
              </div>
              
              <!-- Categories -->
              <h6>Giá sản phẩm</h6>
              <!-- PRICE -->
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="price1" class="styled" type="checkbox" >
                    <label for="price1"> 0 đ - 500.000 đ </label>
                  </li>
                  <li>
                    <input id="price2" class="styled" type="checkbox" >
                    <label for="price2"> 500.000 đ - 1.000.000 đ </label>
                  </li>
                  <li>
                    <input id="price3" class="styled" type="checkbox" >
                    <label for="price3"> 1.000.000 đ - 5.000.000 đ </label>
                  </li>
                  <li>
                    <input id="price4" class="styled" type="checkbox" >
                    <label for="price4"> 5.000.000 đ+ </label>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
          
          <!-- Products -->
          <div class="col-md-9"> 
            
            <!-- Short List -->
            <div class="short-lst">
              <h2 class="text-uppercase">Cửa hàng</h2>
              <ul>
                <!-- Short List -->
                <li>
                  <p>Hiển thị 1–12 của 756 sản phẩm</p>
                </li>
                <!-- Short  -->
                <li >
                  <select class="selectpicker">
                    <option>Hiển thị 12 </option>
                    <option>Hiển thị 24 </option>
                    <option>Hiển thị 32 </option>
                  </select>
                </li>
                <!-- by Default -->
                <li>
                  <select class="selectpicker">
                    <option>Mới nhất</option>
                    <option>Giá thấp đến cao</option>
                    <option>Giá cao đến thấp</option>
                  </select>
                </li>
                
              </ul>
            </div>
            
            <!-- Items -->
            <div class="item-col-3"> 
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-1.jpg') }}" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <!-- <span class="tag">Tablets</span> --> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ <span>350.000 VNĐ</span></div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-2.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-3.jpg') }}" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <!-- <span class="tag">Accessories</span> --> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-4.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-5.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-6.jpg') }}" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <!-- <span class="tag">Accessories</span> --> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-7.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-8.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-9.jpg') }}" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-10.jp') }}g" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <!-- <span class="tag">Accessories</span> --> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-11.jp') }}g" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{ asset('frontend/images/item-img-1-12.jp') }}g" alt="" > 
                  <!-- Content --> 
                  <!-- <span class="tag">Appliances</span> --> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <!-- <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p> -->
                  <div class="price">350.000 VNĐ</div>
                  <!-- <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article> -->
              </div>
            </div>
            <!-- pagination -->
              <ul class="pagination">
                <li><a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop