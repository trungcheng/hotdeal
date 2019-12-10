@extends('layouts.admin.master')

@section('page')Thêm mới album ảnh
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MediaController" ng-init="loadInitCatePhoto()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới album ảnh
            <a href="{{ route('media-photos') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                    <input name="title" type="text" class="form-control slug" placeholder="Tiêu đề album...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (English)</label>
                                    <input name="en_title" type="text" class="form-control slug" placeholder="Album name...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (Koreanese)</label>
                                    <input name="ko_title" type="text" class="form-control slug" placeholder="앨범 제목...">
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
                                    <label>Ảnh đại diện album</label>
                                    <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>List ảnh album</label>      
                                    <button type="button" onclick="add_img();" class="btn btn-success btn-sm btn_img" style="margin-top: 8px;"><i class="fa fa-plus"></i> Thêm Ảnh</button>

                                    <div class="box-img">
                                        <input type="text" size="48" name="photos[]" class="form-control list-img" id="xFilePath1" />
                                        <button class="btn btn-primary btn-upload" onclick="openPopupMulti(1)">Tải ảnh lên</button>
                                    </div>
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
                                <button ng-click="processPhoto('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('media-photos') }}" class="btn btn-default">Quay lại</a>
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

<script>
    var i = 50;
    function add_img(){
        i++;
        var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="text" size="48" class="form-control list-img" name="photos[]" id="xFilePath'+i+'" /><button class="btn btn-primary btn-upload-multi" onclick="openPopupMulti('+i+')">Tải ảnh lên</button><button onclick="del_accads('+i+');" type="button" class="btn btn-danger">Xóa</button></span></p>';
        $(insert).appendTo('.box-img');
    }
    
    function del_accads(id) {
        $('.add_'+id).remove(); 
    }
</script>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/media.controller.js') !!}
@stop
