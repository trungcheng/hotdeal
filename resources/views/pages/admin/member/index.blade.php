@extends('layouts.admin.master')

@section('page')Quản lý nhân vật bình chọn
@stop

@section('pageCss')

@stop

@section('content')
    <div ng-controller="MemberController" ng-init="loadInit();loadInitCreate()">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Quản lý nhân vật bình chọn
                <!-- <small>Optional description</small> -->
                <a href="{{ route('member-create') }}" class="pull-right btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> 
                    Thêm mới
                </a>
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
                                        <div id="example_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search
                                                <input my-enter="searchMemberName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm nhân vật, vị trí...">
                                            </label>
                                        </div>
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;margin-right:10px;">
                                            <label>Sắp xếp
                                                <select ng-change="getResultsPage(name, cateId, order, perPage, pageNumber)" class="form-control input-sm" ng-model="order">
                                                    <option value="default">Mặc định</option>
                                                    <option value="total_vote-desc">Lượt bình chọn giảm dần</option>
                                                    <option value="total_vote-asc">Lượt bình chọn tăng dần</option>
                                                    <option value="cat_id">Alphabet khối</option>
                                                    <option value="full_name">Alphabet nhân vật</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div ng-cloak id="example2_filter" class="dataTables_filter" style="float:right;margin-right:10px;">
                                            <label>Khối
                                                <select ng-change="getResultsPage(name, cateId, order, perPage, pageNumber)" class="form-control input-sm" ng-model="cateId">
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
                                                    <th>Ảnh</th>
                                                    <th>Khối (Phòng/Ban)</th>
                                                    <th>Nhân vật</th>
                                                    <th>Vị trí</th>
                                                    <th>Tổng lượt bình chọn</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="mem in items track by $index">
                                                    <td style="text-align:center !important">
                                                        <img src="@{{ mem.avatar }}" style="width:70px;height:65px;border-radius:50%" />
                                                    </td>
                                                    <td style="text-align:center !important">@{{ (mem.parentCate) ? mem.category.name+' ('+mem.parentCate+')' : mem.category.name }}</td>
                                                    <td style="text-align:center !important">@{{ mem.full_name }}</td>
                                                    <td style="text-align:center !important">@{{ mem.intro }}</td>
                                                    <td style="text-align:center !important">@{{ mem.total_vote }}</td>
                                                    <td>@{{ (mem.status) ? 'Hoạt động' : 'Khóa' }}</td>
                                                    <td>
                                                        <a title="Sửa" href="/admin/access/members/edit/@{{ mem.id }}" style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                        @role('SuperAdmin')
                                                        <a title="Xóa" ng-click="delete(mem, $index)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                        @end
                                                    </td>
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
    {!! Html::script('backend/js/angular/controllers/member.controller.js') !!}
@stop
