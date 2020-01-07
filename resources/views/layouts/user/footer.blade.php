<div class="box_dttaseco clearfix w_gr" style="margin-top:40px;">
    <h3>{{ trans('general.partners') }}</h3>
    <div id="owl_carousel" class="owl-carousel owl-theme">
        @foreach (json_decode($setting['partner_logos']) as $logo)
        <div class="item">
            <div class="item_w">
                <a href="{{ $logo->link }}" class="owlitem_img"><img src="{{ $logo->image }}"></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<footer id="footer">
    <div class="footer_w w_gr">

        <div class="addcpn clearfix">
            <div class="add">
                <p>
                    <h3>
                        <span style="font-size:14px;"><strong><span style="font-family:arial,helvetica,sans-serif;">
                            {!! $setting->getTranslation(app()->getLocale())->name !!}
                        </span></strong></span></h3>
                    <p>
                        ---------------------------------------------------------------------------------------------------------------------------</p>
                    <h3>
                        {!! $setting->getTranslation(app()->getLocale())->address !!}</h3>
                    <p>
                        <span style="font-family:arial,helvetica,sans-serif;">
                            <span style="font-size:12px;">{{ trans('general.mobile') }}: 
                                <a href="tel:{!! $setting->mobile !!}">{!! $setting->mobile !!}</a>@if ($setting->fax != '')&nbsp;-&nbsp;{{ trans('general.fax') }}:&nbsp;{!! $setting->fax !!}@endif
                            </span>
                        </span>
                    </p>
                    <p>
                        <span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:12px;">{{ trans('general.website') }}:&nbsp;<a href="{{ url('') }}">{!! $setting->website !!}</a>&nbsp;-&nbsp;{{ trans('general.email') }}:&nbsp;<a href="mailto:{!! $setting->email !!}">{!! $setting->email !!}</a></span></span></p>
                    <h2 id="kumop" style="position: fixed;right:-900px; top: -800px; overflow: hidden;width:250px">
                </p>
            </div>
            <div class="footer_tkct">
                <div class="tkct clearfix">
                    <ul>
                        <li><a href="{{ url('') }}">{{ trans('general.home_page') }}</a></li>
                        <li><a href="{{ url('') }}/thong-tin-tuyen-dung.html">{{ trans('general.recruiter_page') }}</a></li>
                        <li><a style="border:none" href="{{ route('contact') }}">{{ trans('general.contact') }}</a></li>
                    </ul>
                </div>
                <p><span class="tkct_txt">{{ trans('general.user_access_count') }}</span><span style="color:#fff;display:inline-block;margin:0 5px;font-weight:bold;">{{ $user_online_data[2] }}</span></p>
                <p>{{ trans('general.designed_by') }} <a href="https://utico.vn">Utico</a></p>
                <a href="//www.dmca.com/Protection/Status.aspx?ID=c6d1e29f-f244-40c8-abdf-49c11e5f1653" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_1_120.png?ID=c6d1e29f-f244-40c8-abdf-49c11e5f1653"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>
        </div>
        
    </div>
</footer>