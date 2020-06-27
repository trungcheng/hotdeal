<footer class="footer">
    <div class="footer-container">
        <div id="w-node-e83f05af9d87-05af9d85" class="footer-content">
            <a href="#" class="footer-logo w-nav-brand"><img src="{{ asset('frontend/images/visci-vector-web-white.svg') }}" height="60" alt=""
                    class="brand-visci footer-logo"><img src="{{ asset('frontend/images/visci-tagline-vector-web-white.svg') }}" height="66"
                    alt="" class="tagline footer-logo"></a>
            <address class="footer-sub-content address">
                <h5 class="heading">{{ trans('general.address') }}</h5>
                <div class="paragraph address">{!! $setting->getTranslation(app()->getLocale())->address !!}</div>
            </address>
            <div class="footer-sub-content link">
                <a href="{{ $setting->facebook_url }}" id="w-node-e83f05af9d91-05af9d85" class="link white w-inline-block">
                    <div>Facebook</div>
                </a>
                <a href="#" id="w-node-e83f05af9d94-05af9d85" class="link white w-inline-block">
                    <div>{{ trans('general.download') }}</div>
                </a>
                <a href="{{ route('contact') }}" id="w-node-e83f05af9d97-05af9d85" class="link white w-inline-block">
                    <div>{{ trans('general.contact_us') }}</div>
                </a>
                <a href="{{ route('faqs') }}" id="w-node-e83f05af9d9a-05af9d85" class="link white w-inline-block">
                    <div>{{ trans('general.faqs') }}</div>
                </a>
            </div>
        </div>
        <div id="w-node-e83f05af9d9d-05af9d85" class="footer-content">
            @if (count($featureFooterArticles) > 0)
            <div class="footer-sub-content resources-content">
                <div class="content-heading justify-space">
                    <div>{{ trans('general.resources') }} 🔥</div><a href="{{ route('news') }}" class="link white small">{{ trans('general.see_all_post') }}</a>
                </div>
                <div>
                    @foreach ($featureFooterArticles as $article)
                    <a href="{{ route('detail-post', ['slug' => $article->slug]) }}" class="footer-feed-link w-inline-block">
                        <h5 class="heading">{{ $article->getTranslation(app()->getLocale())->title }}</h5>
                        <div class="b-thing-home-top-date cc-slim white">{{ $article->created_at }}</div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="footer-sub-content email">
                <div>{{ trans('general.find_out_mail') }}</div>
                <div class="email-form-block w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" class="email-fill-form"><input
                            type="email" class="email-fill-field w-input" maxlength="256" name="Email-2"
                            data-name="Email 2" placeholder="{{ trans('general.enter_email') }}" id="Email-2"
                            required=""><input type="submit" value="{{ trans('general.subscribe') }}" data-wait="Please wait..."
                            class="cta-button w-button"></form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-seperator"></div>
    <div class="footer-container copyright">
        <div id="w-node-e83f05af9dbc-05af9d85" class="footer-content horizontal">
            <div class="small-paragraph footer-copyright">
                <div>Copyrights @ 2019 VISCI. All rights reserved.</div>
            </div><a href="{{ route('term-policy') }}" class="small-paragraph footer-copyright">{{ trans('general.term_policy') }}</a>
        </div>
        <div id="w-node-e83f05af9dc2-05af9d85" class="footer-content align-opposite horizontal">
            <a href="{{ route('locale', ['locale' => 'en']) }}" class="small-paragraph footer-copyright link w-inline-block">
                <div>English</div>
            </a>
            <a href="{{ route('locale', ['locale' => 'vi']) }}" class="small-paragraph footer-copyright link w-inline-block">
                <div>Vietnamese</div>
            </a>
        </div>
    </div>
</footer>