@extends('layouts.admin.master')

@section('page')Cập nhật nhân vật bình chọn
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MemberController" ng-init="loadInitCreate()">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật nhân vật bình chọn
            <a href="{{ route('members') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $member->id }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input value="{{ $member->full_name }}" name="full_name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Thuộc khối</label>
                                    <select class="form-control cate" name="cat_id">
                                        <option ng-selected="item.id == {{ $member['cat_id'] }}" class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                            @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input type="file" name="avatar" value="{{ $member->avatar }}" class="form-control">
                                    <input value="{{ $member->avatar }}" name="avatar" type="hidden" size="48" class="form-control" id="avatar" />
                                </div>
                                <div class="form-group">
                                    <label>Video</label>
                                    <?php
                                        $search = 'youtube.com';
                                        if(preg_match("/{$search}/i", $member->video)) {
                                            $checked_video = '';
                                            $checked_youtube = 'checked';
                                            $video = '<input type="text" name="video" value="'.$member->video.'" class="form-control" placeholder="Link Youtube phải có dạng: https://www.youtube.com/watch?v=xxxxx">';
                                        }else{
                                            $checked_video = 'checked';
                                            $checked_youtube = '';
                                            $video = '<input type="file" name="video" value="'.$member->video.'" class="form-control">';
                                        }
                                    ?>
                                    <p>
                                        <input class="choose_video" name="cvideo" type="radio" value="1" {{ $checked_video }}> Upload Video &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input class="choose_video" name="cvideo" type="radio" value="2" {{ $checked_youtube }}> Video Youtube
                                    </p>
                                    <div class="box_video">
                                        {!! $video !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Vị trí</label>
                                    <input value="{{ $member->intro }}" name="intro" type="text" class="form-control" placeholder="Vị trí">
                                </div>
                                <div class="form-group">
                                    <label>Thông điệp</label>
                                    <textarea class="form-control" id="content">{!! $member['content'] !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($member->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                        <option {{ ($member->status == 0) ? 'selected' : '' }} value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('members') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/member.controller.js') !!}

    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose_video').change(function(){
                var video = selected_value = $("input[name='cvideo']:checked").val();
                if (video == 1) {
                    $('.box_video').html('<input type="file" name="video" value="" class="form-control">');
                }else{
                    $('.box_video').html('<input type="text" name="video" value="" class="form-control" placeholder="Link Youtube phải có dạng: https://www.youtube.com/watch?v=xxxxx">');
                }
            });
        });
        CKEDITOR.replace('content', {height: 300});
    </script>
@stop
