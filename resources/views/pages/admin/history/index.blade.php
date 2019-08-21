@extends('layouts.admin.master')

@section('page')Xem lịch sử bình chọn
@stop

@section('pageCss')

@stop

@section('content')
    <div ng-controller="HistoryController" ng-init="loadInit()">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Lịch sử bình chọn
                <!-- <small>Optional description</small> -->
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
        
                    <div class="box">
                        <!-- <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div> -->
                        <!-- /.box-header -->

                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="example1_length">
                                            <label>
                                                Hiển thị
                                                <select ng-change="setPage(pullDownLists.selectedOption, pageNumber)" ng-model="pullDownLists.selectedOption" ng-options="item.value as item.name for item in pullDownLists.availableOption track by item.value" name="example_length" aria-controls="example" class="form-control input-sm" style="margin: 0 5px;width: 63px;">
                                                </select> bản ghi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search
                                                <input my-enter="searchMemberName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm nhân vật...">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" style="overflow-x:auto;">
                                        <table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                	<th>Ảnh</th>
                                                    <th>Vòng</th>
                                                    <th>Nhân vật</th>
                                                    <th>Khối</th>
                                                    <th>Tổng số vote</th>
                                                    <th>Xem chi tiết</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="item in items track by $index">
                                                	<td style="text-align:center !important">
                                                        <img src="@{{ item.member.avatar }}" style="width:70px;height:65px;border-radius:50%" />
                                                    </td>
                                                    <td style="text-align:center !important">@{{ item.round.name }}</td>
                                                    <td>@{{ item.member.full_name }}</td>
                                                    <td>@{{ item.member.category.name }}</td>
                                                    <td>@{{ item.totalVote }}</td>
                                                    <td>
                                                        <a title="Xem chi tiết" href="/admin/access/history/view/@{{ item.round_id }}/@{{ item.vote_for }}" style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div ng-cloak ng-if="loading">
                                            <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:46%;margin-top:0%">
                                        </div>
                                        <div ng-cloak ng-if="!loading && items.length === 0">
                                            <h5 style="font-size:16px;color:#f00;">Oops! Không tìm thấy bản ghi nào!</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-cloak ng-if="!loading && items.length > 0">
                                    <div class="col-sm-5" style="padding-top:5px;">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ <strong>@{{ from }}</strong> đến <strong>@{{ to }}</strong> của <strong>@{{ total }}</strong> bản ghi</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style="margin-top:-20px;float:right">
                                            <items-pagination></items-pagination>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

            </div>
        </section>

    </div>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/history.controller.js') !!}
@stop
