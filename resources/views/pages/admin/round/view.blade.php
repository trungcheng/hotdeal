@extends('layouts.admin.master')

@section('page')Danh sách nhân vật đề cử
@stop

@section('pageCss')
    <style type="text/css">
        input[type="checkbox"] {
            zoom: 1.5;
        }
        .bottom-bar {
            margin-bottom: 20px;
        }
        hr {
            clear: both;
            border: 1px solid #ccc;
            width: 97%;
        }
        select {
            font-weight: bold;
        }
    </style>
@stop

@section('content')
    <div ng-controller="RoundController" ng-init="loadInitCreate();loadInitView({{ $round->id }})">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Danh sách nhân vật đề cử - {{ $round->name }}
                <!-- <small>Optional description</small> -->
                <a href="{{ route('rounds') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
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
                                    <div class="col-sm-3">
                                        <div class="dataTables_length" id="example1_length">
                                            <label>
                                                Hiển thị
                                                <select ng-change="setPage(pullDownLists.selectedOption, pageNumber)" ng-model="pullDownLists.selectedOption" ng-options="item.value as item.name for item in pullDownLists.availableOption track by item.value" name="example_length" aria-controls="example" class="form-control input-sm" style="margin: 0 5px;width: 63px;">
                                                </select> nhân vật
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search
                                                <input my-enter="searchUserRoundName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm nhân vật, vị trí...">
                                            </label>
                                        </div>
                                        <div ng-cloak id="example1_filter" class="dataTables_filter" style="float:right;margin-right:10px;">
                                            <label>Khối
                                                <select ng-change="getResultsViewPage(roundId, name, cateId, perPage, pageNumber)" class="form-control input-sm" ng-model="cateId">
                                                    <option value="all-cate">Tất cả các khối</option>
                                                    <option class="cateLevel cate-level-@{{ item.depth }}" value="@{{ item.id }}" ng-repeat="item in parentCates">
                                                        @{{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}@{{ item.name }}
                                                    </option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" style="overflow-x:auto;">
                                        <table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        <input title="Chọn/Bỏ chọn tất cả" type="checkbox" ng-model="isAllChecked" ng-change="handleChosenAllMember()" />
                                                    </th>
                                                    <th>Ảnh</th>
                                                    <th>Nhân vật</th>
                                                    <th>Thuộc khối</th>
                                                    <th>Vị trí</th>
                                                    <th>Số vote</th>
                                                    <th>Chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="mem in items track by mem.id">
                                                    <td>
                                                        <input ng-checked="mem.isChecked" type="checkbox" ng-change="handleChosenMember(mem)" ng-model="mem.isChecked" />
                                                    </td>
                                                    <td style="text-align:center !important">
                                                        <img src="@{{ mem.user.avatar }}" style="width:70px;height:65px;border-radius:50%" />
                                                    </td>
                                                    <td style="text-align:center !important">@{{ mem.user.full_name }}</td>
                                                    <td style="text-align:center !important">@{{ (mem.user.category) ? mem.user.category.name : 'Không' }}</td>
                                                    <td style="text-align:center !important">@{{ mem.user.intro }}</td>
                                                    <td style="text-align:center !important">@{{ mem.vote }}</td>
                                                    <td style="text-align:center !important">@{{ (mem.is_selected) ? 'Có' : 'Không' }}</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div ng-cloak ng-if="loading">
                                            <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:46%;margin-top:0%">
                                        </div>
                                        <div ng-cloak ng-if="!loading && items.length === 0">
                                            <h5 style="font-size:16px;color:#f00;">Oops! Không tìm thấy nhân vật nào!</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-cloak ng-if="!loading && items.length > 0">
                                    <div class="col-sm-5" style="padding-top:5px;">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ <strong>@{{ from }}</strong> đến <strong>@{{ to }}</strong> của <strong>@{{ total }}</strong> nhân vật</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style="margin-top:-20px;float:right">
                                            <items-pagination></items-pagination>
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row" ng-cloak ng-if="!loading">
                                    <hr>
                                    <div class="col-sm-12 text-center bottom-bar" style="margin-bottom:10px !important">
                                        <p style="font-weight:bold;">Số nhân vật đã chọn: <strong style="color:red;">@{{ selectedMembers.length }}</strong></p>
                                    </div>
                                    @if ($runningRound)
                                    <div class="col-sm-12 text-center bottom-bar">
                                        <form class="form-inline" action="">
                                            <div class="form-group">
                                                <select class="form-control" ng-change="toggleModeSelectMember()" ng-model="modeSelectMember" ng-init="modeSelectMember='1'">
                                                    <option value="1">
                                                        Chuyển nhân vật đã chọn ở trên sang {{ $runningRound->name }}
                                                    </option>
                                                    <option value="2">
                                                        Chuyển mặc định {{ $round->user_select_count }} nhân vật có lượt bình chọn cao nhất sang {{ $runningRound->name }}
                                                    </option>
                                                </select>
                                            </div>
                                            <button ng-disabled="modeSelectMember == '1' && selectedMembers.length == 0" type="button" ng-click="submitSelectModeMember({{ $round->id }}, {{ $runningRound->id }}, modeSelectMember)" class="btn btn-primary">Xác nhận</button>
                                        </form>
                                    </div>
                                    @endif
                                    @if ($round->is_running)
                                        @role('SuperAdmin')
                                        <div class="col-sm-12 text-center bottom-bar">
                                            <button ng-click="removeSelectedMember({{ $round->id }})" ng-disabled="selectedMembers.length == 0" class="btn btn-danger text-center">Xóa nhân vật đã chọn</button>
                                        </div>
                                        @end
                                    @endif
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
    {!! Html::script('backend/js/angular/controllers/round.controller.js') !!}
@stop
