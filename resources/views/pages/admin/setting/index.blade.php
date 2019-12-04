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
                        <label class="control-label">Logo</label>
                        <input name="logo" type="text" value="{{ ($setting != '') ? $setting->logo : '' }}" size="48" class="form-control" id="xFilePath" />
                        <button type="button" class="btn btn-primary btn-upload" onclick="openPopup('xFilePath')">Tải logo lên</button>
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
                        <label class="control-label">Website</label>
                        <input type="text" name="website" value="{{ ($setting != '') ? $setting->website : '' }}" class="form-control" placeholder="Website...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" value="{{ ($setting != '') ? $setting->email : '' }}" class="form-control" placeholder="Địa chỉ email...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Điện thoại</label>
                        <input type="text" name="mobile" value="{{ ($setting != '') ? $setting->mobile : '' }}" class="form-control" placeholder="Điện thoại...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Fax</label>
                        <input type="text" name="fax" value="{{ ($setting != '') ? $setting->fax : '' }}" class="form-control" placeholder="Fax...">
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
                        <label class="control-label">SEO Title</label>
                        <input type="text" name="seo_title" value="{{ ($setting != '') ? $setting->seo_title : '' }}" class="form-control" placeholder="SEO Title...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">SEO Description</label>
                        <input type="text" name="seo_desc" value="{{ ($setting != '') ? $setting->seo_desc : '' }}" class="form-control" placeholder="SEO Description...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">SEO Keyword</label>
                        <input type="text" name="seo_keyword" value="{{ ($setting != '') ? $setting->seo_keyword : '' }}" class="form-control" placeholder="SEO Keyword...">
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
        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);
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

    <script type="text/javascript">
        function openPopup() {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath' ).value = file.getUrl();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
        
        function openPopupMulti(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath'+id ).value = file.getUrl();
                    });
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath'+id ).value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
@stop
