@extends('layouts.admin.master')

@section('page')Thêm mới slide khẩu hiệu
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MediaController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới slide khẩu hiệu
            <a href="{{ route('media-slogan-slides') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="user_id" name="user_id" value="{{ $authAdminUser->id }}">
                                <div class="form-group">
                                    <label>Tiêu đề (Vietnamese)</label>
                                    <input name="title" type="text" class="form-control slug" placeholder="Tiêu đề slide...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (English)</label>
                                    <input name="en_title" type="text" class="form-control slug" placeholder="Slide title...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (Koreanese)</label>
                                    <input name="ko_title" type="text" class="form-control slug" placeholder="슬라이드 제목...">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh slide</label>
                                    <input name="image" type="text" size="48" class="form-control" id="image" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup('image')">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (Vietnamese)</label>
                                    <textarea class="form-control" id="content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (English)</label>
                                    <textarea class="form-control" id="en_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (Koreanese)</label>
                                    <textarea class="form-control" id="ko_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="processSloganSlide('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('media-slogan-slides') }}" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>

<script>
    function openPopup(id) {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on('files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById(id).value = file.getUrl();
                } );
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById(id).value = evt.data.resizedUrl;
                });
            }
        });
    }
</script>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/media.controller.js') !!}
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('content', { height: 300 }); 
            CKEDITOR.replace('en_content', { height: 300 }); 
            CKEDITOR.replace('ko_content', { height: 300 }); 
        });
    </script>
@stop
