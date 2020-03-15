@extends('layouts.admin.master')

@section('page')Quản lý bài viết
@stop

@section('pageCss')

@stop

@section('content')
    <div ng-controller="ArticleController" ng-init="loadInit()">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Quản lý bài viết
                <!-- <small>Optional description</small> -->
                <a href="{{ route('article-create') }}" class="pull-right btn btn-success btn-sm">Thêm bài viết</a>
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
                                                </select> bài viết
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="example1_filter" class="dataTables_filter" style="float:right;">
                                            <label>Search:
                                                <input my-enter="searchArticleName()" ng-model="searchText" type="search" class="form-control input-sm" placeholder="Tìm kiếm...">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" style="overflow-x:auto;">
                                        <table id="example1" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width:5%;">STT</th>
                                                    <th>Ảnh</th>
                                                    <th style="text-align:center !important;width:20%">Tiêu đề</th>
                                                    <th style="width:30%">Mô tả ngắn</th>
                                                    <th>Đăng bởi</th>
                                                    <th>Trạng thái</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody ng-cloak>
                                                <tr role="row" class="@{{ ($odd) ? 'odd' : 'even' }}" ng-repeat="article in items track by $index">
                                                    <td class="sorting_1">@{{ $index + 1 }}</td>
                                                    <td style="text-align:center !important">
                                                        <img ng-src="@{{ article.image }}" style="width:70px;height:60px;">
                                                    </td>
                                                    <td>@{{ article.title }}</td>
                                                    <td style="width:30%">@{{ article.intro }}</td>
                                                    <td>@{{ article.user.username }}</td>
                                                    <td>@{{ (article.status == 0) ? 'Ẩn' : 'Hiển thị' }}</td>
                                                    <td>@{{ article.created_at }}</td>
                                                    <td>
                                                        <a href="/access/articles/edit/@{{ article.id }}" style="margin-right:5px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                        <a ng-click="delete(article, $index)" style="margin-left:5px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div ng-cloak ng-if="loading">
                                            <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:46%;margin-top:0%">
                                        </div>
                                        <div ng-cloak ng-if="!loading && items.length === 0">
                                            <h5 style="font-size:16px;color:#f00;">Oops! Không tìm thấy bài viết!</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" ng-cloak ng-if="!loading && items.length > 0">
                                    <div class="col-sm-5" style="padding-top:5px;">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ <strong>@{{ from }}</strong> đến <strong>@{{ to }}</strong> của <strong>@{{ total }}</strong> bài viết</div>
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
    {!! Html::script('backend/js/angular/controllers/article.controller.js') !!}

    <script type="text/javascript">
        function trimText(str ,wordCount) {
            var strArray = str.split(' ');
            var subArray = strArray.slice(0, wordCount);
            var result = subArray.join(" ");
            if (strArray.length < wordCount) {
                return result;
            } else {
                return result + '...';
            }
        }
    </script>
@stop
