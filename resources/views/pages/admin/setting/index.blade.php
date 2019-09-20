@extends('layouts.admin.master')

@section('page')Thông tin chung
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thông tin chung
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

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
                    
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" value="{{ ($setting) ? $setting->logo : '' }}" class="form-control">
                        <input value="{{ ($setting) ? $setting->logo : '' }}" name="logo" type="hidden" size="48" class="form-control" id="logo" />
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
                        <input type="text" name="mobile" value="{{ ($setting != '') ? $setting->mobile : '' }}" class="form-control" placeholder="Điện thoại...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" value="{{ ($setting != '') ? $setting->address : '' }}" class="form-control" placeholder="Địa chỉ...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Giờ làm việc</label>
                        <input type="text" name="work_time" value="{{ ($setting != '') ? $setting->work_time : '' }}" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label>Ảnh trang chủ</label>
                        <input type="file" name="image_home_page" value="{{ ($setting) ? $setting->image_home_page : '' }}" class="form-control">
                        <input value="{{ ($setting) ? $setting->image_home_page : '' }}" name="image_home_page" type="hidden" size="48" class="form-control" id="image_home_page" />
                    </div>

                    <div class="form-group">
                        <label>Nội dung trang chủ (Thể lệ)</label>
                        <textarea class="form-control" id="content_home_page">{!! $setting->content_home_page !!}</textarea>
                    </div>

                    <div class="form-group">
                        <button style="float:right;margin-left:5px;" type="reset" class="btn btn-default">Đóng</button>
                        <button style="float:right" type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>

            </div>
        </div>

    </section>
@stop

@section('pageJs')
    <script type="text/javascript">
        CKEDITOR.replace('content_home_page', {height: 300});

        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);
            formData.append('content_home_page', CKEDITOR.instances.content_home_page.document.getBody().getHtml());

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
