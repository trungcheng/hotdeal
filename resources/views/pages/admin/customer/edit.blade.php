@extends('layouts.admin.master')

@section('page')Cập nhật khách hàng
@stop

@section('pageCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@stop

@section('content')
<div ng-controller="CustomerController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật khách hàng
            <a href="{{ route('customers') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $customer->id }}">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Họ tên người đại diện</label>
                                            <input value="{{ $customer->fullname }}" name="fullname" type="text" class="form-control" placeholder="Nhập họ tên người đại diện...">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên đại lý/tổ chức</label>
                                            <input value="{{ $customer->organize_name }}" name="organize_name" type="text" class="form-control" placeholder="Nhập tên đại lý hoặc tổ chức...">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{ $customer->email }}" name="email" type="email" class="form-control" placeholder="Nhập email...">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input value="{{ $customer->mobile }}" name="mobile" type="text" class="form-control" placeholder="Nhập số điện thoại...">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <input value="{{ $customer->address }}" name="address" type="text" class="form-control" placeholder="Nhập địa chỉ...">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu truy cập</label>
                                            <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu truy cập...">
                                        </div>
                                    </div> 

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ngày sinh</label>
                                            <input value="{{ $customer->birthday }}" name="birthday" type="text" class="form-control" placeholder="Nhập ngày sinh...">
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>
                                            <select name="sex" class="form-control">
                                                <option {{ ($customer->sex == 'Nam') ? 'selected' : '' }} value="Nam">Nam</option>
                                                <option {{ ($customer->sex == 'Nữ') ? 'selected' : '' }} value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>CMT/Hộ chiếu</label>
                                            <input value="{{ $customer->identity_card }}" name="identity_card" type="text" class="form-control" placeholder="Nhập chứng minh thư...">
                                        </div>
                                        <div class="form-group">
                                            <label>Mã số thuế</label>
                                            <input value="{{ $customer->tax_code }}" name="tax_code" type="text" class="form-control" placeholder="Nhập mã số thuế...">
                                        </div>
                                        <div class="form-group">
                                            <label>Quyền truy cập</label>
                                            <select name="role_id" class="form-control">
                                                <option {{ ($customer->role_id == 3) ? 'selected' : '' }} value="3">Đại lý</option>
                                                <option {{ ($customer->role_id == 4) ? 'selected' : '' }} value="4">Khách lẻ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái hoạt động</label>
                                            <select name="status" class="form-control status">
                                                <option {{ ($customer->status == 1) ? 'selected' : '' }} value="1">Hoạt động</option>
                                                <option {{ ($customer->status == 0) ? 'selected' : '' }} value="0">Khóa</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('customers') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/customer.controller.js') !!}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });
        })
    </script>
@stop
