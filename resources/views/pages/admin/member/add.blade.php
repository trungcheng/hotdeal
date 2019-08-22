@extends('layouts.admin.master')

@section('page')Thêm mới nhân vật bình chọn
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MemberController" ng-init="loadInitCreate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới nhân vật bình chọn
            <a href="{{ route('members') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input name="full_name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc khối</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input name="avatar" type="text" size="48" class="form-control" id="avatar" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup('avatar')">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <input name="video" type="text" size="48" class="form-control" id="video" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup('video')">Tải video lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Vị trí</label>
                                    <input name="intro" type="text" class="form-control" placeholder="Vị trí">
                                </div>
                                <div class="form-group">
                                    <label>Thông điệp</label>
                                    <textarea class="form-control" id="content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('members') }}" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>

@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/member.controller.js') !!}

    <script type="text/javascript">
        function openPopup(type) {
            CKFinder.popup({
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        document.getElementById(type).value = file.getUrl();
                    });
                    finder.on('file:choose:resizedImage', function(evt) {
                        document.getElementById(type).value = evt.data.resizedUrl;
                    });
                }
            });
        }
        CKEDITOR.replace('content', {height: 300});
    </script>
@stop
