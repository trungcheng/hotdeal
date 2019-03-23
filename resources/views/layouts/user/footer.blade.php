<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-body py-3">
            <div class="row py-3 align-items-center">
                <div class="col-md-6 mb-3">
                    <a class="footer-logo mb-4" href="{{ route('home') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/logo.png') }}" alt="">
                    </a>
                    <ul class="list list-icons">
                        <li class="list-item">
                            <i class="list-icon fa fa-envelope text-secondary mr-2"></i>Email: <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </li>
                        <li class="list-item">
                            <i class="list-icon fa fa-phone fa-flip-horizontal text-secondary mr-2"></i>Hotline: <a href="tel:{{ $setting->tel }}">{{ $setting->hotline }}</a> (Zalo, Viber)
                        </li>
                        <li class="list-item">
                            <i class="list-icon fa fa-map-marker-alt text-secondary mr-2"></i>Địa chỉ: {{ $setting->address }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="map-container" style="height: 250px">
                        <iframe frameborder="0" style="border:0; width: 100%; height: 100%;" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuxOsSakodTERI-eF-2gRKT4&amp;key=AIzaSyDWoPkVqd_ZfDGY5wXkjsGevSuZ91yPQbw" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider my-0">
        <div class="footer-copyright">Copyright AutWatches. All Right Reserved.</div>
    </div>
</footer>