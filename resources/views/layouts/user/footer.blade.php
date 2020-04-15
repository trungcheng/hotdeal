<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-body py-3">
            <div class="row py-3 align-items-center">
                <div class="col-md-6 mb-3">
                    <a class="footer-logo mb-4" href="{{ route('home') }}">
                        <img class="img-fluid" src="{{ asset('frontend/images/logo.png') }}" alt="Logo donghoxachtay.store">
                    </a>
                    <ul class="list list-icons">
                        <li class="list-item">
                            <i class="list-icon fa fa-envelope text-secondary mr-2"></i>Email: <a href="mailto:{{ ($setting != '') ? $setting->email : '' }}">{{ ($setting != '') ? $setting->email : '' }}</a>
                        </li>
                        <!-- <li class="list-item">
                            <i class="list-icon fa fa-phone fa-flip-horizontal text-secondary mr-2"></i>Hotline: <a href="tel:{{ ($setting != '') ? $setting->hotline : '' }}">{{ ($setting != '') ? $setting->hotline. '(Zalo, Viber)' : '' }}</a>
                        </li> -->
                        <li class="list-item">
                            <i class="list-icon fa fa-map-marker-alt text-secondary mr-2"></i>Địa chỉ: {!! ($setting != '') ? $setting->address : '' !!}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="map-container" style="height: 250px">
                        <!-- <iframe frameborder="0" style="border:0; width: 100%; height: 100%;" src="https://maps.google.com/maps?q=s%E1%BB%91%201%20nguy%E1%BB%85n%20huy%20t%C6%B0%E1%BB%9Fng&t=&z=17&ie=UTF8&iwloc=&output=embed" allowfullscreen=""></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8186350747883!2d105.8055853153318!3d20.99990599413769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9787f94819%3A0x74cdc488349c9e1c!2zMSBOZ3V54buFbiBIdXkgVMaw4bufbmcsIFRoYW5oIFh1w6JuIFRydW5nLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1582711574827!5m2!1svi!2s"
                                style="border:0; width: 100%; height: 100%;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider my-0">
        <div class="footer-copyright">Copyright donghoxachtay.store. All Right Reserved.</div>
    </div>
</footer>