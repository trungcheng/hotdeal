<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-body py-3">
            <div class="row py-3 align-items-center">
                <div class="col-md-6 mb-3">
                    <a class="footer-logo mb-4" href="{{ route('home') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/logo-01.png') }}" alt="Logo donghoxachtay.store">
                    </a>
                    <ul class="list list-icons">
                        <li class="list-item">
                            <i class="list-icon fa fa-envelope text-secondary mr-2"></i>Email: <a href="mailto:{{ ($setting != '') ? $setting->email : '' }}">{{ ($setting != '') ? $setting->email : '' }}</a>
                        </li>
                        <!-- <li class="list-item">
                            <i class="list-icon fa fa-phone fa-flip-horizontal text-secondary mr-2"></i>Hotline: <a href="tel:{{ ($setting != '') ? $setting->hotline : '' }}">{{ ($setting != '') ? $setting->hotline. '(Zalo, Viber)' : '' }}</a>
                        </li> -->
                        <li class="list-item">
                            <i class="list-icon fa fa-map-marker-alt text-secondary mr-2"></i>Địa chỉ: {{ ($setting != '') ? $setting->address : '' }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="map-container" style="height: 250px">
                        <iframe frameborder="0" style="border:0; width: 100%; height: 100%;" src="https://maps.google.com/maps?q=s%E1%BB%91%201%20nguy%E1%BB%85n%20huy%20t%C6%B0%E1%BB%9Fng&t=&z=17&ie=UTF8&iwloc=&output=embed" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider my-0">
        <div class="footer-copyright">Copyright donghoxachtay.store. All Right Reserved.</div>
    </div>
</footer>