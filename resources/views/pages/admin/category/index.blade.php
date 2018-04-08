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
                                            <label>Show 
                                                <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search:
                                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="text-align:center" style="width: 20px;">STT</th>
                                                    <th style="width: 180px;">Tên danh mục</th>
                                                    <th style="text-align:center" style="width: 199px;">Tên slug</th>
                                                    <th style="text-align:center" style="width: 80px;">Trạng thái</th>
                                                    <th style="text-align:center" style="width: 100px;">Hiển thị khu vực</th>
                                                    <th style="text-align:center" style="width: 112px;">Ngày tạo</th>
                                                    <th style="text-align:center" style="width: 112px;">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="cate in categories track by $index">
                                                    <td style="text-align:center" class="sorting_1">@{{ $index + 1 }}</td>
                                                    <td>@{{ cate.name }}</td>
                                                    <td style="text-align:center">@{{ cate.slug }}</td>
                                                    <td style="text-align:center">@{{ (cate.status) ? 'Hiển thị' : 'Ẩn' }}</td>
                                                    <td style="text-align:center">@{{ (cate.is_filter_city) ? 'Có' : 'Không' }}</td>
                                                    <td style="text-align:center">@{{ cate.created_at }}</td>
                                                    <td style="text-align:center">
                                                        <button style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                        <button style="margin-left:5px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style="margin-top:-20px;float:right">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                                                </li>
                                                <li class="paginate_button active">
                                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                                                </li>
                                                <li class="paginate_button ">
                                                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                                                </li>
                                                <li class="paginate_button next" id="example1_next">
                                                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                                                </li>
                                            </ul>
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
    {!! Html::script('backend/js/angular/controllers/category.controller.js') !!}
@stop
