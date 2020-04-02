@extends('layouts.admin.master')

@section('page')Cập nhật đánh giá
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="ReviewController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật đánh giá
            <a href="{{ route('reviews') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                            	<input type="hidden" id="id" name="id" value="{{ $review->id }}">
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select id="pro_id" name="pro_id" class="form-control">
                                		@if (count($products) > 0)
	                                		@foreach ($products as $key => $pro)
	                                			<option {{ ($review->pro_id == $pro->id) ? 'selected' : '' }} value="{{ $pro->id }}">{{ $pro->name }}</option>
	                                		@endforeach
                                		@else
                                			<option value="">Không có sản phẩm nào</option>
                                		@endif
                                	</select>
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input value="{{ $review->name }}" name="name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="{{ $review->email }}" name="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input value="{{ $review->phone }}" name="phone" type="text" class="form-control" placeholder="Số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" placeholder="Nội dung..." name="content">{!! $review->content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Sao đánh giá</label>
                                    <input value="{{ $review->star }}" min="1" max="5" name="star" type="number" class="form-control" placeholder="Sao đánh giá...">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option {{ ($review->status == 1) ? 'selected' : '' }} value="1">Đã duyệt</option>
                                        <option {{ ($review->status == 0) ? 'selected' : '' }} value="0">Chưa duyệt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('reviews') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/review.controller.js') !!}
@stop
