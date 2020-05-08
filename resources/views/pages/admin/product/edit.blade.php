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
                                <input type="hidden" id="user_id" name="user_id" value="{{ $authAdminUser->id }}">
                                <input type="hidden" id="id" name="id" value="{{ $pro->id }}">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input value="{{ $pro->name }}" name="name" type="text" class="form-control title" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input value="{{ $pro->sku_id }}" name="sku_id" type="text" class="form-control title" placeholder="Mã sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-selected="item.id == {{ $pro['cat_id'] }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input id="price" value="{{ number_format($pro->price, 0, 0, ',') }}" name="price" type="text" class="form-control title" placeholder="Giá sản phẩm...">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Sale (%)</label>
                                    <select class="form-control" name="discount">
                                        <option ng-selected="item == {{ $pro->discount }}" ng-repeat="item in range(0, 100, 1)" value="@{{ item }}">@{{ item }}</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Giá sale</label>
                                    <input id="price_sale" value="{{ number_format($pro->price_sale, 0, 0, ',') }}" name="price_sale" type="text" class="form-control title" placeholder="Giá khuyến mãi...">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung khuyến mãi</label>
                                    <input value="{{ $pro->sale_text }}" name="sale_text" type="text" class="form-control title" placeholder="Nội dung khuyến mãi... (Phân cách bởi dấu chấm phẩy)">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh sản phẩm (*)</label><br>
                                    @if(isset($pro->image) && is_file(public_path($pro->image)))
                                        <img src="{{url($pro->image)}}" width="100" height="100" />
                                    @endif
                                    <input type="file" name="image" class="form-control" accept="image/*" />
                                </div>
                                <div class="form-group list-image">
                                    <label>List ảnh liên quan</label>
                                    @if (count($pro->image_list) > 0)
                                        <div class="col-md-12" style="border:1px solid #ccc;margin-bottom:15px;padding:10px;">
                                            @foreach ($pro->image_list as $key => $image)
                                                @if (!empty($image))
                                                    <div class="col-md-3 frame-list" style="text-align:center;margin-top:10px;">
                                                        @if (isset($pro->image_list[$key]) && is_file(public_path($pro->image_list[$key])))
                                                            <img src="{{ url($pro->image_list[$key]) }}" width="100" height="100" />
                                                        @endif
                                                        <div class="form-group" style="margin-bottom:5px;">
                                                            <label>Hình ảnh liên quan {{ $key+1 }}</label>
                                                            <input type="file" class="form-control" name="update_image[{{ $key }}]" accept="image/*" />
                                                        </div>
                                                        <a href="javascript:void(0)" class="remove-image" style="text-decoration:underline;">Xóa ảnh</a>
                                                    </div>
                                                    <input value="0" type="hidden" name="delete_image[{{ $key }}]">
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                    <table id="table" class="table table-hover table-bordered">
                                        <tbody>
                                            <tr class="add_row">
                                                <td width="75%"><input class="file" name='add_image[]' type='file' accept="image/*" multiple /></td>
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

                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <select name="is_feature" class="form-control status">
                                        <option {{ ($pro->is_feature == 1) ? 'selected' : '' }} value="1">Có</option>
                                        <option {{ ($pro->is_feature == 0) ? 'selected' : '' }} value="0">Không</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Sản phẩm hot</label>
                                    <select name="is_hot" class="form-control status">
                                        <option {{ ($pro->is_hot == 1) ? 'selected' : '' }} value="1">Có</option>
                                        <option {{ ($pro->is_hot == 0) ? 'selected' : '' }} value="0">Không</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input value="{{ $pro->seo_title }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input value="{{ $pro->seo_desc }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Keyword</label>
                                    <input value="{{ $pro->seo_keyword }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Schema</label>
                                    <textarea class="form-control" id="seo_schema">{!! $pro->seo_schema !!}</textarea>
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

@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/product.controller.js') !!}

    <script type="text/javascript">
        $(function() {
            CKEDITOR.replace('seo_schema', { height: 300 }); 
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
        $(document).on('click', '.remove-image', function () {
            $(this).parents('.frame-list').next().val(1);
            $(this).parents('.frame-list').remove();
        });
        $('#table').on('click', "#add", function(e) {
            $('tbody').append('<tr class="add_row"><td><input name="add_image[]" type="file" accept="image/*" multiple /></td><td class="text-center"><button type="button" class="btn btn-danger btn-sm" id="delete" title="Xóa ảnh">Xóa ảnh</button></td><tr>');
            e.preventDefault();
        });
        // Delete row
        $('#table').on('click', "#delete", function(e) {
            $(this).closest('tr').remove();
            e.preventDefault();
        });
    </script>
@stop
