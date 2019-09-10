@extends('layouts.admin.master')

@section('page')Thêm mới user
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="UserController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới user
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
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input name="full_name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input name="password" type="password" class="form-control" placeholder="Mật khẩu...">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('add')" type="button" class="btn btn-primary">Thêm</button>
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
