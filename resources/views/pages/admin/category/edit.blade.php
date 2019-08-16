@extends('layouts.admin.master')

@section('page')Cập nhật khối
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="CategoryController" ng-init="loadInitCreate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật khối
            <a href="{{ route('categories') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                <input type="hidden" id="id" name="id" value="{{ $category->id }}">
                                <div class="form-group">
                                    <label>Tên khối</label>
                                    <input value="{{ $category->name }}" name="name" type="text" class="form-control title" placeholder="Tên khối...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc khối</label>
                                    <select class="form-control cate" name="parent_id">
                                        <option ng-selected="{{ $category['parent_id'] }} == 0" value="0">Không thuộc khối nào</option>
                                        <option ng-selected="item.id == {{ $category['parent_id'] }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea style="height: 100px;" name="description" class="form-control description" placeholder="Mô tả...">{{ $category['description'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input value="{{ $category->image }}" name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control status" name="status">
                                        <option {{ ($category['status'] == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                        <option {{ ($category['status'] == 0) ? 'selected' : '' }} value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('categories') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/category.controller.js') !!}

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
