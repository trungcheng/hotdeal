@extends('layouts.admin.master')

@section('page')Cập nhật bài viết
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="ArticleController" ng-init="loadInitCate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật bài viết
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
                                <input type="hidden" id="id" name="id" value="{{ $article->id }}">
                                <div class="form-group">
                                    <label>Tiêu đề bài viết (Vietnamese)</label>
                                    <input value="{{ $article->title }}" name="title" type="text" class="form-control title" placeholder="Tiêu đề bài viết...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề bài viết (English)</label>
                                    <input value="{{ $article->getTranslation('en')->title }}" name="en_title" type="text" class="form-control title" placeholder="Article title...">
                                </div>
                                <div class="form-group">
                                    <label>Tiêu đề bài viết (Koreanese)</label>
                                    <input value="{{ $article->getTranslation('ko')->title }}" name="ko_title" type="text" class="form-control title" placeholder="기사 제목...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-selected="{{ $article['cat_id'] }} == 0" value="0">Không thuộc danh mục nào</option>
                                        <option ng-selected="item.id == {{ $article['cat_id'] }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <input value="{{ $article->image }}" name="image" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn (Vietnamese)</label>
                                    <textarea class="form-control" id="short_content">{!! $article->intro !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn (English)</label>
                                    <textarea class="form-control" id="en_short_content">{!! $article->getTranslation('en')->intro !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả ngắn (Koreanese)</label>
                                    <textarea class="form-control" id="ko_short_content">{!! $article->getTranslation('ko')->intro !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chi tiết (Vietnamese)</label>
                                    <textarea class="form-control" id="full_content">{!! $article->fulltext !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chi tiết (English)</label>
                                    <textarea class="form-control" id="en_full_content">{!! $article->getTranslation('en')->fulltext !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chi tiết (Koreanese)</label>
                                    <textarea class="form-control" id="ko_full_content">{!! $article->getTranslation('ko')->fulltext !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tin mới</label>
                                    <select name="is_feature" class="form-control">
                                        <option {{ ($article->is_feature == 0) ? 'selected' : '' }} value="0">Không</option>
                                        <option {{ ($article->is_feature == 1) ? 'selected' : '' }} value="1">Có</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($article->status == 1) ? 'selected' : '' }} value="1">Hiển thị</option>
                                        <option {{ ($article->status == 0) ? 'selected' : '' }} value="0">Ẩn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input value="{{ $article->seo_title }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input value="{{ $article->seo_desc }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Keyword</label>
                                    <input value="{{ $article->seo_keyword }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
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
            CKEDITOR.replace('short_content', { height: 300 }); 
            CKEDITOR.replace('en_short_content', { height: 300 }); 
            CKEDITOR.replace('ko_short_content', { height: 300 }); 
            CKEDITOR.replace('full_content'); 
            CKEDITOR.replace('en_full_content'); 
            CKEDITOR.replace('ko_full_content'); 
        });
    </script>
@stop
