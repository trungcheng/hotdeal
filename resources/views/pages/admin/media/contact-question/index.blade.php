@extends('layouts.admin.master')

@section('page')Cập nhật câu hỏi liên hệ
@stop

@section('pageCss')
    <style>
        .item-img {
            margin-bottom: 10px;
        }
    </style>
@stop

@section('content')
<div ng-controller="MediaController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật câu hỏi liên hệ
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
                                <div class="form-group">
                                    <label>List câu hỏi liên hệ</label>      
                                    <button type="button" onclick="add_img();" class="btn btn-success btn-sm btn_img" style="margin-top: 8px;"><i class="fa fa-plus"></i> Thêm câu hỏi</button>

                                    <div class="box-img">
                                        <?php $i = 1; ?>
                                        @if ($setting['contact_questions'] != "" && $setting['contact_questions'] != null)
                                            @foreach(json_decode($setting['contact_questions']) as $question) 
                                                <div class="item-img add_<?php echo $i; ?>">
                                                    <p class="image">
                                                        <span style="display:block;">
                                                            <input placeholder="Câu hỏi (English)..." type="text" value="{{ $question->question }}" size="48" name="contact_questions[]" class="form-control list-img" id="xFilePath<?php echo $i; ?>" />
                                                            <button onclick="del_accads(<?php echo $i; ?>);" type="button" class="btn btn-danger">Xóa</button>
                                                        </span>
                                                    </p>
                                                    <p class="image">
                                                        <span style="display:block;">
                                                            <input placeholder="Câu hỏi (Vietnamese)..." type="text" value="{{ $question->vi_question }}" size="48" name="vi_questions[]" class="form-control list-img" id="xFilePath<?php echo $i; ?>" style="margin-bottom:10px" />
                                                        </span>
                                                    </p>
                                                    <p class="link">
                                                        <span style="display:block;">
                                                            <textarea placeholder="Trả lời (English)..." size="48" name="answer[]" class="form-control list-img">{{ $question->answer }}</textarea>
                                                        </span>
                                                    </p>
                                                    <p class="link">
                                                        <span style="display:block;">
                                                            <textarea placeholder="Trả lời (Vietnamese)..." size="48" name="vi_answer[]" class="form-control list-img">{{ $question->vi_answer }}</textarea>
                                                        </span>
                                                    </p>
                                                </div>
                                                <?php $i++; ?>
                                            @endforeach
                                        @endif                                 
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button style="float:right;margin-left:5px;" type="reset" class="btn btn-default">Đóng</button>
                                <button ng-click="updateContactQuestions()" type="button" class="btn btn-primary">Cập nhật</button>
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
    function add_img() {
        i++;
        var insert = '<div class="item-img add_'+i+'">'+
            '<p class="image"><span style="display:block;"><input placeholder="Câu hỏi (English)..." type="text" size="48" class="form-control list-img" name="contact_questions[]" id="xFilePath'+i+'" /><button onclick="del_accads('+i+');" type="button" class="btn btn-danger">Xóa</button></span></p>'+
            '<p class="image"><span style="display:block;"><input placeholder="Câu hỏi (Vietnamese)..." type="text" size="48" class="form-control list-img" name="vi_questions[]" id="xFilePath'+i+'" style="margin-bottom:10px" />'+
            '<p class="link"><span style="display:block;"><textarea placeholder="Trả lời (English)..." name="answer[]" class="form-control list-img"></textarea></span></p>'+
            '<p class="link"><span style="display:block;"><textarea placeholder="Trả lời (Vietnamese)..." name="vi_answer[]" class="form-control list-img"></textarea></span></p>'+
        '</div>';
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
