@extends('layouts.admin.master')

@section('page')Chi tiết đơn hàng
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="OrderController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Chi tiết đơn hàng
            <a href="{{ route('orders') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th colspan="2">Thông tin khách hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tên người đặt hàng</td>
                                <td>{{ $order->user->fullname }}</td>
                            </tr>
                            <tr>
                                <td>Ngày đặt hàng</td>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Tên khách hàng</td>
                                <td>{{ $customerInfo->customer_name }}</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>{{ $customerInfo->customer_phone }}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ giao hàng</td>
                                <td>{{ $customerInfo->customer_address }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $customerInfo->customer_email }}</td>
                            </tr>
                            <tr>
                                <td>Phương thức thanh toán</td>
                                <td>{{ $order->payment_method }}</td>
                            </tr>
                            <tr>
                                <td>Phương thức vận chuyển</td>
                                <td>{{ $order->delivery_method }}</td>
                            </tr>
                            <tr>
                                <td>Ghi chú đơn hàng</td>
                                <td>{{ $order->note }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br />
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting col-md-1">STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                            </thead>
                            <tbody>
                            @foreach($orderDetails as $key => $orderItem)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $orderItem->product->name }}</td>
                                    <td>{{ $orderItem->quantity }}</td>
                                    <td>{{ number_format($orderItem->amount, 0, 0, '.') }} VNĐ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red">{{ number_format($order->amount, 0, 0, '.') }} VNĐ</b></td>
                            </tr>
                            </tbody>
                        </table>

                        <form style="float:right;margin-top:20px;margin-bottom:20px;" class="form-inline" id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <div class="form-group">
                                <label>Trạng thái: </label>
                                <select name="status" class="form-control" style="width:200px">
                                    <option {{ ($order->status == 0) ? 'selected' : '' }} value="0">Chờ xử lý</option>
                                    <option {{ ($order->status == 1) ? 'selected' : '' }} value="1">Đang giao đang xử lý</option>
                                    <option {{ ($order->status == 2) ? 'selected' : '' }} value="2">Đã giao chưa thanh toán</option>
                                    <option {{ ($order->status == 3) ? 'selected' : '' }} value="3">Đã giao đã thanh toán</option>
                                    <option {{ ($order->status == 4) ? 'selected' : '' }} value="4">Bị trả lại</option>
                                </select>
                            </div>
                        </form>

                    </div>
                    <!-- /.box-body -->
                    <div class="modal-footer">
                        <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                        <a href="{{ route('orders') }}" class="btn btn-default">Quay lại</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</div>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/order.controller.js') !!}
@stop
