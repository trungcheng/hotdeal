@extends('layouts.admin.master')

@section('page')Cập nhật vòng thi
@stop

@section('pageCss')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@stop

@section('content')
<div ng-controller="RoundController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật vòng thi
            <a href="{{ route('rounds') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                        	<input type="hidden" id="id" name="id" value="{{ $round->id }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tên vòng</label>
                                    <input value="{{ $round->name }}" name="name" type="text" class="form-control slug" placeholder="Tên khối...">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea style="height: 100px;" name="description" class="form-control description" placeholder="Mô tả...">{{ $round->description }}</textarea>
                                </div>
                                <div class="row">
	                                <div class="form-group col-md-6">
				                        <label for="email">Ngày bắt đầu</label>
				                        <div class='input-group date' id="from_date">
				                            <span class="input-group-addon">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                            <input value="{{ $round->from_date }}" name="from_date" id="start_time_value" type='text' class="form-control" />
				                        </div>
				                    </div>
				                    <div class="form-group col-md-6">
				                        <label for="pwd">Ngày kết thúc</label>
				                        <div class='input-group date' id="to_date">
				                            <span class="input-group-addon">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                            <input value="{{ $round->to_date }}" name="to_date" id="end_time_value" type='text' class="form-control" />
				                        </div>
				                    </div>
			                    </div>
                                <div class="form-group">
                                    <label>Số người lựa chọn</label>
                                    <input name="user_select_count" value="{{ $round->user_select_count }}" type="number" min="1" max="1000" class="form-control slug" placeholder="Số người lựa chọn...">
                                </div>
                                <div class="form-group">
                                    <label>Reset số lần vote</label>
                                    <select class="form-control status" name="is_reset_vote">
                                        <option {{ ($round['is_reset_vote'] == 1) ? 'selected' : '' }} value="1">Có</option>
                                        <option {{ ($round['is_reset_vote'] == 0) ? 'selected' : '' }} value="0">Không</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Hiện menu</label>
                                    <select class="form-control status" name="visible_menu">
                                        <option {{ ($round['visible_menu'] == 1) ? 'selected' : '' }} value="1">Có</option>
                                        <option {{ ($round['visible_menu'] == 0) ? 'selected' : '' }} value="0">Không</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái (Khởi động)</label>
                                    <select class="form-control status" name="is_running">
                                        <option {{ ($round['is_running'] == 0) ? 'selected' : '' }} value="0">Tắt</option>
                                        <option {{ ($round['is_running'] == 1) ? 'selected' : '' }} value="1">Bật</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('rounds') }}" class="btn btn-default">Quay lại</a>
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
    {!! Html::script('backend/js/angular/controllers/round.controller.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		$(function () {
	        $('#from_date, #to_date').datetimepicker({
	            format: 'YYYY-MM-DD HH:mm:ss'
	        });
		});
	</script>
@stop
