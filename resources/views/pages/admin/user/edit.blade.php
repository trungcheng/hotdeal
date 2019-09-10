@extends('layouts.admin.master')

@section('page')Cập nhật user
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="UserController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật user
            <a href="{{ route('users') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                            	<input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input value="{{ $user->username }}" name="username" type="text" class="form-control" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="{{ $user->email }}" name="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input value="{{ $user->full_name }}" name="full_name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input value="" name="password" type="password" class="form-control" placeholder="Mật khẩu...">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($user->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                        <option {{ ($user->status == 0) ? 'selected' : '' }} value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('users') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/user.controller.js') !!}
@stop
