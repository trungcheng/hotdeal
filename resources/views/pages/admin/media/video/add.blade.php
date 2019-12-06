@extends('layouts.admin.master')

@section('page')Thêm mới video
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MediaController" ng-init="loadInitCateVideo()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới video
            <a href="{{ route('media-videos') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                    <input name="title" type="text" class="form-control slug" placeholder="Tiêu đề video...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (Koreanese)</label>
                                    <input name="ko_title" type="text" class="form-control slug" placeholder="비디오 타이틀...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện video</label>
                                    <input name="image" type="text" size="48" class="form-control" id="image" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup('image')">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Link video (tải lên hoặc dán link youtube)</label>
                                    <input name="video" type="text" size="48" class="form-control" id="video" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup('video')">Tải video lên</button>
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
                                <button ng-click="processVideo('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('media-videos') }}" class="btn btn-default">Quay lại</a>
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
@stop
