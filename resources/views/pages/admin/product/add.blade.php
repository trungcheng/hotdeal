@extends('layouts.admin.master')

@section('page')Thêm mới sản phẩm
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="ProductController" ng-init="loadInitCate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới sản phẩm
            <a href="{{ route('products') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input name="name" type="text" class="form-control title" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-if="parentCates.length > 0" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                        <option value="" ng-if="parentCates.length == 0">Không có danh mục nào</option>
                                        <!-- <option class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat-start="item in parentCates">@{{ item.name }}</option>
                                        <option class="cateLevel cate-level-@{{ obj.depth }}" value="@{{ obj.id }}" ng-repeat-end="obj in item.childrens">@{{ obj.depth == 1 ? '----- ' : obj.depth == 2 ? '---------- ' : obj.depth == 3 ? '--------------- ' : '' }}@{{ obj.name }}</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input name="price" type="text" class="form-control title" placeholder="Giá sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Sale (%)</label>
                                    <select class="form-control" name="discount">
                                        <option ng-repeat="item in range(0, 100, 5)" value="@{{ item }}">@{{ item }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>List ảnh liên quan</label>      
                                    <div class="box-img">
                                        <input type="text" size="48" name="image_list[]" class="form-control list-img" id="xFilePath1" />
                                        <button class="btn btn-primary btn-upload" onclick="openPopupMulti(1)">Tải ảnh lên</button>
                                    </div>
                                    <button type="button" onclick="add_img();" class="btn btn-brand btn_img" style="margin-top: 8px;">Thêm Ảnh</button>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <textarea class="form-control" id="short_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chi tiết</label>
                                    <textarea class="form-control" id="full_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('add')" type="button" class="btn btn-primary">Thêm</button>
                                <a href="{{ route('products') }}" class="btn btn-default">Quay lại</a>
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
    CKEDITOR.replace('short_content', { height: 300 }); 
    CKEDITOR.replace('full_content'); 
</script>

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
    var i = 1;
    function add_img(){
        i++;
        var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="text" size="48" class="form-control list-img" name="image_list[]" id="xFilePath'+i+'" /><button class="btn btn-primary btn-upload-multi" onclick="openPopupMulti('+i+')">Tải ảnh lên</button><button onclick="del_accads('+i+');" type="button" class="btn btn-primary">Xóa</button></span></p>';
        $(insert).appendTo('.box-img');
    }
    function del_accads(id){
        $('.add_'+id).remove(); 
    }
</script>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/product.controller.js') !!}
@stop
