@extends('layouts.admin.master')

@section('page')Cấu hình chung
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cấu hình chung
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                <form id="form_setting" onsubmit="return false;" action="{{ url('/admin/access/setting/update') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label">Logo</label>
                        <input value="{{ $setting->logo }}" name="logo" type="text" size="48" class="form-control" id="xFilePath" placeholder="Logo công ty..." />
                        <button type="button" class="btn btn-primary btn-upload" onclick="openPopup()">Tải logo lên</button>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Tên công ty</label>
                        <input type="text" name="name" value="{{ ($setting != '') ? $setting->name : '' }}" class="form-control" placeholder="Tên công ty...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Slogan</label>
                        <input type="text" name="slogan" value="{{ ($setting != '') ? $setting->slogan : '' }}" class="form-control" placeholder="Slogan...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" value="{{ ($setting != '') ? $setting->email : '' }}" class="form-control" placeholder="Địa chỉ email...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Điện thoại</label>
                        <input type="text" name="phone" value="{{ ($setting != '') ? $setting->phone : '' }}" class="form-control" placeholder="Điện thoại...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" value="{{ ($setting != '') ? $setting->address : '' }}" class="form-control" placeholder="Địa chỉ...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Giờ làm việc</label>
                        <input type="text" name="time_work" value="{{ ($setting != '') ? $setting->time_work : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Google map link</label>
                        <input type="text" name="google_map_url" value="{{ ($setting != '') ? $setting->google_map_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Facebook fanpage link</label>
                        <input type="text" name="facebook_url" value="{{ ($setting != '') ? $setting->facebook_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Twitter profile link</label>
                        <input type="text" name="twitter_url" value="{{ ($setting != '') ? $setting->twitter_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Youtube channel link</label>
                        <input type="text" name="youtube_url" value="{{ ($setting != '') ? $setting->youtube_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Google plus link</label>
                        <input type="text" name="google_url" value="{{ ($setting != '') ? $setting->google_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Instagram profile link</label>
                        <input type="text" name="instagram_url" value="{{ ($setting != '') ? $setting->instagram_url : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label>Facebook Pixel Code</label>
                        <textarea style="height: 100px;" name="fb_pixel_code" class="form-control" placeholder="Facebook Pixel Code...">{{ ($setting != '') ? $setting->fb_pixel_code : '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input value="{{ ($setting != '') ? $setting->seo_title : '' }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                    </div>

                    <div class="form-group">
                        <label>SEO Description</label>
                        <input value="{{ ($setting != '') ? $setting->seo_desc : '' }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                    </div>

                    <div class="form-group">
                        <label>SEO Keyword</label>
                        <input value="{{ ($setting != '') ? $setting->seo_keyword : '' }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                    </div>

                    <div class="form-group">
                        <label>SEO Content</label>
                        <textarea class="form-control" id="seo_content">{!! $setting->seo_content !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Schema</label>
                        <textarea class="form-control" id="seo_schema">{!! $setting->seo_schema !!}</textarea>
                    </div>

                    <div class="form-group" style="margin-top:50px;margin-bottom:50px;text-align:center">
                        <button type="reset" class="btn btn-default">Đóng</button>
                        <button style="margin-left:10px" type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>

            </div>
        </div>

    </section>
@stop

@section('pageJs')
    <script type="text/javascript">
        CKEDITOR.replace('seo_content', { height: 300 });
        CKEDITOR.replace('seo_schema', { height: 300 });

        function openPopup() {
            CKFinder.popup({
                chooseFiles: true,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        document.getElementById('xFilePath').value = file.getUrl();
                    } );
                    finder.on('file:choose:resizedImage', function(evt) {
                        document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
                    });
                }
            });
        }

        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);
            formData.append('seo_content', CKEDITOR.instances.seo_content.document.getBody().getHtml());
            formData.append('seo_schema', CKEDITOR.instances.seo_schema.document.getBody().getHtml());

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "JSON",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                success: function (response) {
                    if (response.status) {
                        swal('Updated!', response.message, "success");
                    } else {
                        swal('Error!', response.message, "error");
                    }
                },
                error: function (response) {
                    swal('Error!', response.message, "error");
                }
            });
        });
    </script>
@stop