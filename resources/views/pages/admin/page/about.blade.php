@extends('layouts.admin.master')

@section('page')Trang giới thiệu
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Trang giới thiệu
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form id="form_setting" onsubmit="return false;" action="{{ url('/admin/access/page/update') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" id="content">{!! $info->introduce !!}</textarea>
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
        CKEDITOR.replace('content', { height: 400 }); 

        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);
            formData.append('introduce', CKEDITOR.instances.content.document.getBody().getHtml());

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
