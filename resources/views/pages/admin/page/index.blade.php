@extends('layouts.admin.master')

@section('page')Trang {{ strtolower($info->title) }}
@stop

@section('pageCss')

@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Trang {{ strtolower($info->title) }}
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form id="form_setting" onsubmit="return false;" action="{{ url('/admin/access/page/update') }}" enctype="multipart/form-data" method="post">

                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $info->id }}">

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" id="content">{!! $info->content !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input value="{{ $info->seo_title }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                    </div>

                    <div class="form-group">
                        <label>SEO Description</label>
                        <input value="{{ $info->seo_desc }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                    </div>

                    <div class="form-group">
                        <label>SEO Keyword</label>
                        <input value="{{ $info->seo_keyword }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                    </div>

                    <div class="form-group">
                        <label>SEO Content</label>
                        <textarea class="form-control" id="seo_content">{!! $info->seo_content !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Schema</label>
                        <textarea class="form-control" id="seo_schema">{!! $info->schema !!}</textarea>
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
        CKEDITOR.replace('seo_content', { height: 300 });
        CKEDITOR.replace('seo_schema', { height: 300 });

        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);
            formData.append('content', CKEDITOR.instances.content.document.getBody().getHtml());
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