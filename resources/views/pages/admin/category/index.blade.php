@extends('layouts.admin.master')

@section('page')Quản lý danh mục
@stop

@section('pageCss')

@stop

@section('content')
    <div ng-controller="CategoryController" ng-init="loadInit()">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Quản lý danh mục
                <!-- <small>Optional description</small> -->
                <button ng-click="openModalAdd()" class="pull-right btn btn-success btn-sm">Thêm danh mục</button>
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
                                                <input ng-change="searchCategoryName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm...">
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
                                                    <th style="text-align:left !important;width:20%">Tên danh mục</th>
                                                    <th style="width: 20%">Danh mục cha</th>
                                                    <th style="width: 20%;">Tên slug</th>
                                                    <th style="width: 10%;">Trên menu</th>
                                                    <th style="width: 10%;">Thể loại</th>
                                                    <th style="width: 10%">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="cate in categories track by $index">
                                                    <td class="sorting_1">@{{ $index + 1 }}</td>
                                                    <td style="text-align:left !important">@{{ cate.name }}</td>
                                                    <td>@{{ (cate.parent) ? cate.parent : '' }}</td>
                                                    <td>@{{ cate.slug }}</td>
                                                    <td>@{{ (cate.on_menu) ? 'Hiển thị' : 'Ẩn' }}</td>
                                                    <td ng-if="cate.type == 1">Pháp thoại</td>
                                                    <td ng-if="cate.type == 2">Hỏi đáp</td>
                                                    <td ng-if="cate.type == 3">Tin tức</td>
                                                    <td ng-if="cate.type == 4">Sử liệu</td>
                                                    <td ng-if="cate.type == 5">Hùn phước</td>
                                                    <td ng-if="cate.type == 6">Sinh hoạt</td>
                                                    <td>
                                                        <button ng-click="openModalEdit(cate)" style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                        <button ng-click="delete(cate, $index)" style="margin-left:5px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div ng-cloak ng-if="loading">
                                            <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:46%;margin-top:0%">
                                        </div>
                                        <div ng-cloak ng-if="!loading && categories.length === 0">
                                            <h5 style="font-size:16px;color:#f00;">Oops! Không tìm thấy danh mục!</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-cloak ng-if="!loading && categories.length > 0">
                                    <div class="col-sm-5" style="padding-top:5px;">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ <strong>@{{ from }}</strong> đến <strong>@{{ to }}</strong> của <strong>@{{ total }}</strong> danh mục</div>
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
        <h3 class="modal-title">Thêm danh mục</h3>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" ng-model="modalAdd.cateName" class="form-control" placeholder="Tên danh mục...">
        </div>
        <div class="form-group">
            <label>Danh mục cha</label>
            <select ng-model="modalAdd.cateParent" class="form-control" ng-init="modalAdd.cateParent='0'">
                <option value="0" disabled>----- Chọn danh mục cha -----</option>
                <option value="@{{ item.id }}" style="font-weight:bold;" ng-repeat-start="item in modalAdd.parentCates">
                    @{{ item.name }}
                </option>
                <option value="@{{ child.id }}" ng-repeat-end ng-repeat="child in item.childs">-- @{{ child.name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tên slug</label>
            <input type="text" ng-model="modalAdd.cateSlug" class="form-control" placeholder="Tên slug...">
        </div>
        <div class="form-group">
            <label>Hiển thị trên menu</label>
            <select class="form-control" ng-model="modalAdd.selectedOptionStatus">
                <option ng-repeat="value in ['Hiển thị','Ẩn']">@{{ value }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Thể loại</label>
            <select class="form-control" ng-model="modalAdd.cateType" ng-init="modalAdd.cateType='0'">
                <option value="0" disabled>----- Chọn thể loại danh mục -----</option>
                <option value="@{{ value.id }}" ng-repeat="value in [
                    {id:1,name:'Pháp thoại'},
                    {id:2,name:'Hỏi đáp'},
                    {id:3,name:'Tin tức'},
                    {id:4,name:'Sử liệu'},
                    {id:5,name:'Hùn phước'},
                    {id:6,name:'Sinh hoạt'},
                ]">@{{ value.name }}</option>
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
        <h3 class="modal-title">Chỉnh sửa danh mục</h3>
    </div>
    <div class="modal-body">
        <input type="hidden" id="cateId" value="@{{ modalEdit.id }}">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" ng-model="modalEdit.name" class="form-control" placeholder="Tên danh mục...">
        </div>
        <div class="form-group">
            <label>Danh mục cha</label>
            <select id="parentCate" class="form-control">
                <option ng-selected="item.id == modalEdit.parent_id" value="@{{ item.id }}" style="font-weight:bold;" ng-repeat-start="item in modalEdit.parentCates">
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
            <label>Hiển thị trên menu</label>
            <select class="form-control" ng-model="modalEdit.selectedOptionStatus">
                <option ng-repeat="value in ['Hiển thị','Ẩn']">@{{ value }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Thể loại</label>
            <select class="form-control" id="cateType">
                <option ng-selected="value.id == modalEdit.type" value="@{{ value.id }}" ng-repeat="value in [
                    {id:1,name:'Pháp thoại'},
                    {id:2,name:'Hỏi đáp'},
                    {id:3,name:'Tin tức'},
                    {id:4,name:'Sử liệu'},
                    {id:5,name:'Hùn phước'},
                    {id:6,name:'Sinh hoạt'},
                ]">@{{ value.name }}</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button ng-click="update()" type="button" class="btn btn-primary">Cập nhật</button>
        <button ng-click="close()" type="button" class="btn btn-default">Đóng</button>
    </div>
</script>

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/category.controller.js') !!}
@stop
