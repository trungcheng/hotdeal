@extends('layouts.admin.master')

@section('page')Thêm mới bài viết
@stop

@section('pageCss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@stop

@section('content')
<div ng-controller="ArticleController" ng-init="loadInitCate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới bài viết
            <a href="{{ route('articles') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                    <input name="vi_title" type="text" class="form-control slug" placeholder="Tiêu đề bài viết...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề (English)</label>
                                    <input name="title" type="text" class="form-control slug" placeholder="Article title...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option value="0">Không thuộc danh mục nào</option>
                                        <option class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Loại bài viết</label>
                                    <select class="form-control cate" name="type" id="type">
                                        <option value="new">Tin thường</option>
                                        <option value="event">Tin sự kiện</option>
                                    </select>
                                </div>
                                <div id="event-option" class="hide">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Event date from</label>
                                            <div class='input-group date' id="from_date">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                                <input name="event_date_from" id="start_time_value" type='text' class="form-control" placeholder="Event date from..." />
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Event date to</label>
                                            <div class='input-group date' id="to_date">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                                <input name="event_date_to" id="end_time_value" type='text' class="form-control" placeholder="Event date to..." />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Event venue</label>
                                            <input type="text" class="form-control" name="event_venue" placeholder="Event venue...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Event type</label>
                                            <input type="text" class="form-control" name="event_type" placeholder="Event type...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Event speaker</label>
                                            <input type="text" class="form-control" name="event_speaker" placeholder="Event speaker...">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Event detail information</label>
                                            <input type="text" class="form-control" name="event_detail_information" placeholder="Event detail information...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn (Vietnamese)</label>
                                    <textarea class="form-control" id="vi_short_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn (English)</label>
                                    <textarea class="form-control" id="short_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (Vietnamese)</label>
                                    <textarea class="form-control" id="vi_full_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (English)</label>
                                    <textarea class="form-control" id="full_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tin nổi bật</label>
                                    <select name="is_feature" class="form-control">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
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
                                <a href="{{ route('articles') }}" class="btn btn-default">Quay lại</a>
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
        var insert = '<p class="item-img add_'+i+'" style="margin:3px 0; height: 40px; padding:0;"><span style="display:block;"><input type="text" size="48" class="form-control list-img" name="image_list[]" id="xFilePath'+i+'" /><button class="btn btn-primary btn-upload-multi" onclick="openPopupMulti('+i+')">Tải ảnh lên</button><button onclick="del_accads('+i+');" type="button" class="btn btn-primary">Xóa</button></span></p>';
        $(insert).appendTo('.box-img');
    }
    function del_accads(id){
        $('.add_'+id).remove(); 
    }
</script>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/article.controller.js') !!}
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('short_content', { height: 200 }); 
            CKEDITOR.replace('vi_short_content', { height: 200 }); 
            CKEDITOR.replace('full_content'); 
            CKEDITOR.replace('vi_full_content'); 
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		$(function () {
	        $('#from_date, #to_date').datetimepicker({
	            format: 'YYYY-MM-DD HH:mm:ss'
            });
            $('#type').on('change', function () {
                if ($(this).val() == 'event') {
                    $('#event-option').removeClass('hide');
                } else {
                    $('#event-option').addClass('hide');
                }
            }); 
		});
	</script>
@stop
