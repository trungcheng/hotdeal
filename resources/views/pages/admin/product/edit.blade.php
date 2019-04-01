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
                                    <label>Mã sản phẩm</label>
                                    <input value="{{ $pro->sku_id }}" name="sku_id" type="text" class="form-control title" placeholder="Mã sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-if="parentCates.length > 0" ng-selected="item.id == {{ $pro->cat_id }}" class="cateLevel" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.name }}
                                        </option>
                                        <option value="" ng-if="parentCates.length == 0">Không có danh mục nào</option>
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
                                    <label>Ảnh sản phẩm (*)</label><br>
                                    @if(isset($pro->image) && is_file(public_path($pro->image)))
                                        <img src="{{url($pro->image)}}" width="100" height="100" />
                                    @endif
                                    <input type="file" name="image" class="form-control" accept="image/*" />
                                </div>
                                @if (count($pro->image_list) > 0)
                                    <div class="form-group list-image">
                                        <label>List ảnh liên quan</label>
                                        <div class="col-md-12" style="border:1px solid #ccc;margin-bottom:15px;padding:10px;">
                                            @foreach ($pro->image_list as $key => $image)
                                                @if (!empty($image))
                                                    <div class="col-md-3 frame-list" style="text-align:center;">
                                                        @if (isset($pro->image_list[$key]) && is_file(public_path($pro->image_list[$key])))
                                                            <img src="{{ url($pro->image_list[$key]) }}" width="100" height="100" />
                                                        @endif
                                                        <div class="form-group" style="margin-bottom:5px;">
                                                            <label>Hình ảnh liên quan {{ $key+1 }}</label>
                                                            <input type="file" class="form-control" name="update_image[{{ $key }}]" accept="image/*" />
                                                        </div>
                                                        <a href="javascript:void(0)" class="remove-image" style="text-decoration:underline;">Xóa</a>
                                                    </div>
                                                    <input value="0" type="hidden" name="delete_image[{{ $key }}]">
                                                @endif
                                            @endforeach
                                            <div class="form-group">
                                                <div class="col-md-3" style="margin-top:100px;text-align:center;">
                                                    <div class="form-group">
                                                        <label>Thêm ảnh liên quan</label>
                                                        <input type="file" class="form-control" name="add_image[]" accept="image/*" multiple />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label>List ảnh liên quan</label>
                                        <input type="file" class="form-control" name="add_image[]" accept="image/*" multiple />
                                    </div>
                                @endif

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
                                    <label>Giới tính</label>
                                    <select name="sex" class="form-control status">
                                        <option {{ ($pro->sex == 'm') ? 'selected' : '' }} value="m">Nam</option>
                                        <option {{ ($pro->sex == 'f') ? 'selected' : '' }} value="f">Nữ</option>
                                    </select>
                                </div>

                                <!-- <fieldset style="margin-top:30px;margin-bottom:30px;">
                                    <legend style="height:30px;line-height:30px;background: #f1f0f0;padding-left:15px;font-size:15px;font-weight:bold;">Thông số kỹ thuật</legend>
                                    <table class="preview-table-upload">
                                        <tr>
                                            <td class="col1">Between lugs (mm):</td>
                                            <td>
                                                <input value="{{ $pro->between_lug }}" type="text" id="between_lug" name="between_lug" class="form-control" placeholder="Khoảng cách giữa 2 tai trên vỏ đồng hồ để lắp dây..." />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Bracelet:</td>
                                            <td>
                                                <input value="{{ $pro->bracelet }}" type="text" id="bracelet" name="bracelet" class="form-control" placeholder="Vòng đeo" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Case:</td>
                                            <td>
                                                <input value="{{ $pro->case }}" type="text" id="case" name="case" class="form-control" placeholder="Vỏ" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Case diameter (mm):</td>
                                            <td>
                                                <input value="{{ $pro->case_diameter }}" type="text" id="case_diameter" name="case_diameter" class="form-control" placeholder="Đường kính vỏ" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Dial colour:</td>
                                            <td>
                                                <input value="{{ $pro->dial_color }}" type="text" id="dial_color" name="dial_color" class="form-control" placeholder="Màu kim số" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Crystal:</td>
                                            <td>
                                                <input value="{{ $pro->crystal }}" type="text" id="crystal" name="crystal" class="form-control" placeholder="Mặt kính" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Water resistance:</td>
                                            <td>
                                                <input value="{{ $pro->water_resistance }}" type="text" id="water_resistance" name="water_resistance" class="form-control" placeholder="Khả năng chịu nước" />
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset> -->

                                <div class="form-group">
                                    <label>Chất liệu dây</label>
                                    <select name="wire_material" class="form-control status">
                                        @foreach ($wires as $wire)
                                        <option {{ ($pro->wire_material == $wire->id) ? 'selected' : '' }} value="{{ $wire->id }}">{{ $wire->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Chất liệu mặt kính</label>
                                    <select name="glass_material" class="form-control status">
                                        @foreach ($glasses as $glass)
                                        <option {{ ($pro->glass_material == $glass->id) ? 'selected' : '' }} value="{{ $glass->id }}">{{ $glass->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Bộ máy & Năng lượng</label>
                                    <select name="energy_type" class="form-control status">
                                        @foreach ($energies as $energy)
                                        <option {{ ($pro->energy_type == $energy->id) ? 'selected' : '' }} value="{{ $energy->id }}">{{ $energy->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Phiên bản đặc biệt</label>
                                    <select name="version" class="form-control status">
                                        @foreach ($versions as $version)
                                        <option {{ ($pro->version == $version->id) ? 'selected' : '' }} value="{{ $version->id }}">{{ $version->name }}</option>
                                        @endforeach
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
    CKEDITOR.replace('short_content', { height: 100 }); 
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

    <script type="text/javascript">
        $(function() {
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
    </script>
@stop
