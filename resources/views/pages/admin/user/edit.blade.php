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
                                    <input disabled value="{{ $user->username }}" name="username" type="text" class="form-control" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($user->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                        <option {{ ($user->status == 0) ? 'selected' : '' }} value="0">Khóa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Quyền truy cập</label>
                                    <select name="role_id" class="form-control">
                                        <option {{ ($user->role_id == 3) ? 'selected' : '' }} value="3">User (Thành viên)</option>
                                        <option {{ ($user->role_id == 2) ? 'selected' : '' }} value="2">Admin</option>
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
