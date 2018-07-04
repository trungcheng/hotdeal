@extends('layouts.admin.master')

@section('page')Quản lý Users
@stop

@section('pageCss')

@stop

@section('content')
    <div ng-controller="UsersController" ng-init="loadInit()">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Quản lý user
                <!-- <small>Optional description</small> -->
                <button ng-click="openModalAdd()" class="pull-right btn btn-success btn-sm">Thêm users</button>
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
                                                <select ng-change="getResultsPage(name, pullDownLists.selectedOption, pageNumber)" ng-model="pullDownLists.selectedOption" ng-options="item.value as item.name for item in pullDownLists.availableOption track by item.value" name="example_length" aria-controls="example" class="form-control input-sm" style="margin: 0 5px;width: 63px;">
                                                </select> chuyên mục
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search:
                                                <input ng-change="searchusergoryName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm...">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: 5%;">STT</th>
                                                    <th style="text-align:left !important;width:20%">Tên User</th>
                                                    <th style="width: 20%">Email</th>
                                                    <th style="width: 20%;">Số điện thoại</th>
                                                    <th style="width: 10%;">Trạng thái</th>
                                                    <th style="width: 10%">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="user in usergories track by $index">
                                                    <td class="sorting_1">@{{ $index + 1 }}</td>
                                                    <td style="text-align:left !important">@{{ user.name }}</td>
                                                    <td>@{{ user.email }}</td>
                                                    <td>@{{ user.phone }}</td>
                                                    <td>@{{ (user.status) ? 'Hiển thị' : 'Ẩn' }}</td>
                                                    <td>
                                                        <button ng-click="openModalEdit(user)" style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                        <button ng-click="delete(user, $index)" style="margin-left:5px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div ng-cloak ng-if="loading">
                                            <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:46%;margin-top:0%">
                                        </div>
                                        <div ng-cloak ng-if="!loading && usergories.length === 0">
                                            <h5 style="font-size:16px;color:#f00;">Oops! Không tìm thấy user!</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-cloak ng-if="!loading && usergories.length > 0">
                                    <div class="col-sm-5" style="padding-top:5px;">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ <strong>@{{ from }}</strong> đến <strong>@{{ to }}</strong> của <strong>@{{ total }}</strong> user</div>
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

<script type="text/ng-template" id="popup-add.html">
    <div class="modal-header">
        <button type="button" class="close" ng-click="close()">&times;</button>
        <h3 class="modal-title">Thêm user</h3>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Tên user</label>
            <input type="text" ng-model="modalAdd.userName" class="form-control" placeholder="Tên user...">
        </div>
        <div class="form-group">
            <label>user cha</label>
            <select ng-model="modalAdd.userParent" class="form-control" ng-init="modalAdd.userParent='0'">
                <option value="0" disabled>----- Chọn user cha -----</option>
                <option value="@{{ item.id }}" style="font-weight:bold;" ng-repeat-start="item in modalAdd.parentusers">
                    @{{ item.name }}
                </option>
                <option value="@{{ child.id }}" ng-repeat-end ng-repeat="child in item.childs">-- @{{ child.name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tên slug</label>
            <input type="text" ng-model="modalAdd.userSlug" class="form-control" placeholder="Tên slug...">
        </div>
        <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" ng-model="modalAdd.selectedOptionStatus">
                <option ng-repeat="value in ['Hiển thị','Ẩn']">@{{ value }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Hiển thị khu vực</label>
            <select class="form-control" ng-model="modalAdd.selectedOptionLocation">
                <option ng-repeat="value in ['Không','Có']">@{{ value }}</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button ng-click="add()" type="button" class="btn btn-primary">Thêm</button>
        <button ng-click="close()" type="button" class="btn btn-default">Đóng</button>
    </div>
</script>

<script type="text/ng-template" id="popup-edit.html">
    <div class="modal-header">
        <button type="button" class="close" ng-click="close()">&times;</button>
        <h3 class="modal-title">Chỉnh sửa user</h3>
    </div>
    <div class="modal-body">
        <input type="hidden" id="userId" value="@{{ modalEdit.id }}">
        <div class="form-group">
            <label>Tên user</label>
            <input type="text" ng-model="modalEdit.name" class="form-control" placeholder="Tên user...">
        </div>
        <div class="form-group">
            <label>user cha</label>
            <select id="parentuser" class="form-control">
                <option ng-selected="item.id == modalEdit.parent_id" value="@{{ item.id }}" style="font-weight:bold;" ng-repeat-start="item in modalEdit.parentusers">
                    @{{ item.name }}
                </option>
                <option ng-selected="child.id == modalEdit.parent_id" value="@{{ child.id }}" ng-repeat-end ng-repeat="child in item.childs">-- @{{ child.name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tên slug</label>
            <input type="text" ng-model="modalEdit.slug" class="form-control" placeholder="Tên slug...">
        </div>
        <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" ng-model="modalEdit.selectedOptionStatus">
                <option ng-repeat="value in ['Hiển thị','Ẩn']">@{{ value }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Hiển thị khu vực</label>
            <select class="form-control" ng-model="modalEdit.selectedOptionLocation">
                <option ng-repeat="value in ['Không','Có']">@{{ value }}</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button ng-click="update()" type="button" class="btn btn-primary">Cập nhật</button>
        <button ng-click="close()" type="button" class="btn btn-default">Đóng</button>
    </div>
</script>

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/users.controller.js') !!}
@stop
