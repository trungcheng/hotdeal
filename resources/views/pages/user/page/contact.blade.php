@extends('layouts.user.master')

@section('page')Liên hệ
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <section class="map-block margin-bottom-40">
          <div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
          <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Smart Tech"></a> </div>
        </section>
        
        <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Dou You have a Question for Us ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>First Name
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Last Name
                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="proceed();">Send Message</button>
                    </li>
                  </ul>
                </div>
                
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>SmartTech</h5>
                    <p>The most powerful PSD for Digital & Electronic!</p>
                    <hr>
                    <h6> Address:</h6>
                    <p>45 Grand Central Terminal New York, NY 1017
                      United State USA</p>
                    <h6>Phone:</h6>
                    <p>(+100) 123 456 7890</p>
                    <p>(+100) 987 654 3210 </p>
                    <h6>Email:</h6>
                    <p>Support@smarttech.com
                      Support24/7@smarttech.com</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop