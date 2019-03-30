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
                                    <label>Ảnh (*)</label>
                                    <input name="image" type="file" class="form-control" id="xFilePath" accept="image/*" />
                                    <!-- <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button> -->
                                </div>
                                <div class="form-group">
                                    <label>List ảnh liên quan</label>      
                                    <div class="box-img">
                                        <input type="file" name="image_list[]" class="form-control list-img" id="xFilePath1" accept="image/*" />
                                        <!-- <button class="btn btn-primary btn-upload" onclick="openPopupMulti(1)">Tải ảnh lên</button> -->
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
                                    <label>Giới tính</label>
                                    <select name="sex" class="form-control status">
                                        <option selected value="m">Nam</option>
                                        <option value="f">Nữ</option>
                                    </select>
                                </div>

                                <!-- <fieldset style="margin-top:30px;margin-bottom:30px;">
                                    <legend style="height:30px;line-height:30px;background: #f1f0f0;padding-left:15px;font-size:15px;font-weight:bold;">Thông số kỹ thuật</legend>
                                    <table class="preview-table-upload">
                                        <tr>
                                            <td class="col1">Between lugs (mm):</td>
                                            <td>
                                                <input type="text" id="between_lug" name="between_lug" class="form-control" placeholder="Khoảng cách giữa 2 tai trên vỏ đồng hồ để lắp dây..." />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Bracelet:</td>
                                            <td>
                                                <input type="text" id="bracelet" name="bracelet" class="form-control" placeholder="Vòng đeo" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Case:</td>
                                            <td>
                                                <input type="text" id="case" name="case" class="form-control" placeholder="Vỏ" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Case diameter (mm):</td>
                                            <td>
                                                <input type="text" id="case_diameter" name="case_diameter" class="form-control" placeholder="Đường kính vỏ" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Dial colour:</td>
                                            <td>
                                                <input type="text" id="dial_color" name="dial_color" class="form-control" placeholder="Màu kim số" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Crystal:</td>
                                            <td>
                                                <input type="text" id="crystal" name="crystal" class="form-control" placeholder="Mặt kính" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col1">Water resistance:</td>
                                            <td>
                                                <input type="text" id="water_resistance" name="water_resistance" class="form-control" placeholder="Khả năng chịu nước" />
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset> -->

                                <div class="form-group">
                                    <label>Chất liệu dây</label>
                                    <select name="wire_material" class="form-control status">
                                        @foreach ($wires as $wire)
                                        <option value="{{ $wire->id }}">{{ $wire->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Chất liệu mặt kính</label>
                                    <select name="glass_material" class="form-control status">
                                        @foreach ($glasses as $glass)
                                        <option value="{{ $glass->id }}">{{ $glass->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Bộ máy & Năng lượng</label>
                                    <select name="energy_type" class="form-control status">
                                        @foreach ($energies as $energy)
                                        <option value="{{ $energy->id }}">{{ $energy->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Phiên bản đặc biệt</label>
                                    <select name="version" class="form-control status">
                                        @foreach ($versions as $version)
                                        <option value="{{ $version->id }}">{{ $version->name }}</option>
                                        @endforeach
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
    CKEDITOR.replace('short_content', { height: 100 }); 
    CKEDITOR.replace('full_content'); 
</script>

<script>
    // function openPopup() {
    //     CKFinder.popup( {
    //         chooseFiles: true,
    //         onInit: function( finder ) {
    //             finder.on( 'files:choose', function( evt ) {
    //                 var file = evt.data.files.first();
    //                 document.getElementById( 'xFilePath' ).value = file.getUrl();
    //             } );
    //             finder.on( 'file:choose:resizedImage', function( evt ) {
    //                 document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
    //             } );
    //         }
    //     } );
    // }
    
    // function openPopupMulti(id) {
    //     CKFinder.popup( {
    //         chooseFiles: true,
    //         onInit: function( finder ) {
    //             finder.on( 'files:choose', function( evt ) {
    //                 var file = evt.data.files.first();
    //                 document.getElementById( 'xFilePath'+id ).value = file.getUrl();
    //             });
    //             finder.on( 'file:choose:resizedImage', function( evt ) {
    //                 document.getElementById( 'xFilePath'+id ).value = evt.data.resizedUrl;
    //             });
    //         }
    //     });
    // }
</script>

<script>
    var i = 1;
    function add_img(){
        i++;
        var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="file" class="form-control list-img" name="image_list[]" id="xFilePath'+i+'" accept="image/*" /><button onclick="del_accads('+i+');" type="button" class="btn btn-primary">Xóa</button></span></p>';
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
    </script>
@stop
