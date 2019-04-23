@extends('layouts.admin.master')

@section('page')Thêm mới thành viên
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="MemberController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Thêm mới thành viên
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
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input name="fullname" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Quyền truy cập</label>
                                    <select name="role_id" class="form-control">
                                        <option value="3">Thành viên</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input name="mobile" type="text" class="form-control" placeholder="Số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input name="address" type="text" class="form-control" placeholder="Địa chỉ...">
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
@stop
