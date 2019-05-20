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
                                <input type="hidden" id="user_id" name="user_id" value="{{ $authAdminUser->id }}">
                                <div class="form-group">
                                    <label>Tên sản phẩm (*)</label>
                                    <input name="name" type="text" class="form-control title" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input name="sku_id" type="text" class="form-control title" placeholder="Mã sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-if="parentCates.length > 0" class="cateLevel" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.name }}
                                        </option>
                                        <option value="" ng-if="parentCates.length == 0">Không có danh mục nào</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm (*)</label>
                                    <input id="price" name="price" type="text" class="form-control title" placeholder="Giá sản phẩm...">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Sale (%)</label>
                                    <select class="form-control" name="discount">
                                        <option ng-repeat="item in range(0, 100, 1)" value="@{{ item }}">@{{ item }}</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Giá sale</label>
                                    <input id="price_sale" name="price_sale" type="text" class="form-control title" placeholder="Giá khuyến mãi...">
                                </div>
                                
                                <div class="form-group">
                                    <label>Ảnh sản phẩm (*)</label>
                                    <input type="file" name="image" accept="image/*" />
                                </div>
                                <div class="form-group">
                                    <label>List ảnh liên quan (có thể chọn nhiều ảnh cùng lúc)</label>
                                    <table id="table" class="table table-hover table-bordered">
                                        <tbody>
                                            <tr class="add_row">
                                                <td width="75%"><input class="file" name='image_list[]' type='file' accept="image/*" multiple /></td>
                                                <td width="20%"></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">
                                                    <button class="btn btn-success btn-sm" type="button" id="add" title='Thêm ảnh'/>Thêm ảnh</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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

                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <select name="is_feature" class="form-control status">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sản phẩm hot</label>
                                    <select name="is_hot" class="form-control status">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Keyword</label>
                                    <input name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
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
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/product.controller.js') !!}

    <script type="text/javascript">
        $(function() {
            CKEDITOR.replace('short_content', { height: 100 }); 
            CKEDITOR.replace('full_content'); 
            $('#price, #price_sale').on("keyup", function(event) {
                var selection = window.getSelection().toString();
                if (selection !== '') {
                    return;
                }
                if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                    return;
                }
                var $this = $(this);
                var input = $this.val();
                var input = input.replace(/[\D\s\._\-]+/g, "");
                input = input ? parseInt(input, 10 ) : 0;
                $this.val(function() {
                    return (input === 0) ? "" : input.toLocaleString("en-US");
                });
            });
            $("#discount").on('keypress', function (e) {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    $("#errmsg").html("Chỉ được nhập số").show().fadeOut("slow");
                       return false;
                }
            });
        });
        $('#table').on('click', "#add", function(e) {
            $('tbody').append('<tr class="add_row"><td><input name="image_list[]" type="file" accept="image/*" multiple /></td><td class="text-center"><button type="button" class="btn btn-danger btn-sm" id="delete" title="Xóa ảnh">Xóa ảnh</button></td><tr>');
            e.preventDefault();
        });
        // Delete row
        $('#table').on('click', "#delete", function(e) {
            $(this).closest('tr').remove();
            e.preventDefault();
        });
    </script>
@stop
