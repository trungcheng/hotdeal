@extends('layouts.admin.master')

@section('page')Cập nhật sản phẩm
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="ProductController" ng-init="loadInitCate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật sản phẩm
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
                                <input type="hidden" id="id" name="id" value="{{ $pro->id }}">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input value="{{ $pro->name }}" name="name" type="text" class="form-control title" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-selected="item.id == {{ $pro->cat_id }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input value="{{ number_format($pro->price, 0, '', '') }}" name="price" type="text" class="form-control title" placeholder="Giá sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Sale (%)</label>
                                    <select class="form-control" name="discount">
                                        <option ng-selected="item == {{ $pro->discount }}" ng-repeat="item in range(0, 100, 5)" value="@{{ item }}">@{{ item }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input value="{{ $pro->image }}" name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>List ảnh liên quan</label> 
                                    @if ($pro->image_list !== '' && !empty($pro->image_list))
                                        <div class="box-img">
                                            @foreach ($pro->image_list as $key => $item)
                                                <p class="item-img add_{{ $key + 1 }}" style="margin:3px 0; height: 40px; padding:0;">
                                                    <span style="display:block;">
                                                        <input value="{{ $item }}" type="text" size="48" name="image_list[]" class="form-control list-img" id="xFilePath{{ $key + 1 }}" />
                                                        <button class="btn btn-primary btn-upload" onclick="openPopupMulti({{ $key + 1 }})">Tải ảnh lên</button>
                                                        <button onclick="del_accads({{ $key + 1 }});" type="button" class="btn btn-primary">Xóa</button>
                                                    </span>
                                                </p>
                                            @endforeach 
                                        </div>
                                    @else
                                        <input type="text" size="48" name="image_list[]" class="form-control list-img" id="xFilePath50" />
                                        <button class="btn btn-primary btn-upload" onclick="openPopupMulti(50)">Tải ảnh lên</button>
                                    @endif
                                    <button type="button" onclick="add_img();" class="btn btn-brand btn_img" style="margin-top: 8px;">Thêm Ảnh</button>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <textarea class="form-control" id="short_content">{!! $pro->short_desc !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chi tiết</label>
                                    <textarea class="form-control" id="full_content">{!! $pro->full_desc !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($pro->status == 1) ? 'selected' : '' }} value="1">Còn hàng</option>
                                        <option {{ ($pro->status == 0) ? 'selected' : '' }} value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
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
    var i = 50;
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
