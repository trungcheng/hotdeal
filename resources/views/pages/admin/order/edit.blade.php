@extends('layouts.admin.master')

@section('page')Cập nhật đơn hàng
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="OrderController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật đơn hàng
            <a href="{{ route('orders') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                <input type="hidden" id="id" name="id" value="{{ $order->id }}">
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select id="pro_id" name="pro_id" class="form-control">
                                        @if (count($products) > 0)
                                            @foreach ($products as $obj)
                                                <option {{ ($order->pro_id == $obj->id) ? 'selected' : '' }} value="{{ $obj->id }}">{{ $obj->name }}</option>
                                            @endforeach
                                        @else
                                            <option value="">Không có sản phẩm nào</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tên khách</label>
                                    <input value="{{ $order->name }}" name="name" type="text" class="form-control title" placeholder="Tên khách...">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input value="{{ $order->phone }}" name="phone" type="text" class="form-control title" placeholder="Số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input value="{{ $order->address }}" name="address" type="text" class="form-control title" placeholder="Địa chỉ...">
                                </div>
                                <div class="form-group">
                                	<label>Liên hệ</label>
                                	<select name="is_contact" class="form-control">
                                		<option {{ ($order->is_contact == 1) ? 'selected' : '' }} value="1">Đã liên hệ</option>
                                        <option {{ ($order->is_contact == 0) ? 'selected' : '' }} value="0">Chưa liên hệ</option>
                                	</select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('orders') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/order.controller.js') !!}
@stop
