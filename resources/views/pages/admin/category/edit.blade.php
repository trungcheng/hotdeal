@extends('layouts.admin.master')

@section('page')Cập nhật danh mục
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="CategoryController" ng-init="loadInitCreate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật danh mục
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
                                    <label>Tên danh mục (Vietnamese)</label>
                                    <input value="{{ $category->getTranslation('vi')->name }}" name="vi_name" type="text" class="form-control title" placeholder="Tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label>Tên danh mục (English)</label>
                                    <input value="{{ $category->name }}" name="name" type="text" class="form-control title" placeholder="Category name...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="parent_id">
                                        <option ng-selected="{{ $category['parent_id'] }} == 0" value="0">Không thuộc danh mục nào</option>
                                        <option ng-selected="item.id == {{ $category['parent_id'] }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả (Vietnamese)</label>
                                    <textarea style="height: 100px;" name="vi_description" class="form-control description" placeholder="Mô tả...">{{ $category->getTranslation('vi')->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả (English)</label>
                                    <textarea style="height: 100px;" name="description" class="form-control description" placeholder="Description...">{{ $category->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input value="{{ ($category != '') ? $category['image'] : '' }}" name="image" type="text" size="48" class="form-control" id="image" />
                                    <button type="button" class="btn btn-primary btn-upload" onclick="openPopup('image')">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <select class="form-control status" name="order">
                                        <option {{ ($category['order'] == 1) ? 'selected' : '' }} value="1">1</option>
                                        <option {{ ($category['order'] == 2) ? 'selected' : '' }} value="2">2</option>
                                        <option {{ ($category['order'] == 3) ? 'selected' : '' }} value="3">3</option>
                                        <option {{ ($category['order'] == 4) ? 'selected' : '' }} value="4">4</option>
                                        <option {{ ($category['order'] == 5) ? 'selected' : '' }} value="5">5</option>
                                        <option {{ ($category['order'] == 6) ? 'selected' : '' }} value="6">6</option>
                                        <option {{ ($category['order'] == 7) ? 'selected' : '' }} value="7">7</option>
                                        <option {{ ($category['order'] == 8) ? 'selected' : '' }} value="8">8</option>
                                        <option {{ ($category['order'] == 9) ? 'selected' : '' }} value="9">9</option>
                                        <option {{ ($category['order'] == 10) ? 'selected' : '' }} value="10">10</option>
                                    </select>
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
        function openPopup(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById(id).value = file.getUrl();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById(id).value = evt.data.resizedUrl;
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
            var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="text" size="48" class="form-control list-img" name="sliders[]" id="xFilePath'+i+'" /><button class="btn btn-primary btn-upload-multi" onclick="openPopupMulti('+i+')">Tải ảnh lên</button><button onclick="del_accads('+i+');" type="button" class="btn btn-danger">Xóa</button></span></p>';
            $(insert).appendTo('.box-img');
        }
        
        function del_accads(id) {
            $('.add_'+id).remove(); 
        }
    </script>
@stop
