@extends('layouts.admin.master')

@section('page')Thống kê số lượt bình chọn
@stop

@section('pageCss')
    <style type="text/css">
        .form-control {
            height: 35px !important;
        }
        .box-calendar {
            border: 1px solid #ccc;
            float: right;
            padding: 0;
            width: 19%;
            margin-left: 10px;
        }
        #daterange {
            border: none;
            box-shadow: none;
        }
        #daterange-icon {
            position: absolute;
            right: 10px;
            top: 10px;
        }
        #chart-container {
            margin-top: 10px;
        }
        .group-title {
            color: #f00 !important;
        }
        .category-title {
            font-size: 20px;
            font-weight: bold;
            padding-top: 10px;
        }
        .no-data {
            line-height: 300px;
        }
        .chart-row {
            width: 100%;
            min-height: 300px;
            border: 1px solid #ccc;
            display: inline-block;
        }
        .highcharts-credits {
            display: none;
        }
        .box-body {
            min-height: 520px;
        }
        .select2-container .select2-selection--multiple {
            min-height: 34px !important;
            border-radius: 0px !important;
            border: none !important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #555 !important;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
@stop

@section('content')
    <div ng-controller="StatisticalController" ng-init="loadInit({{ $rounds[0]['id'] }}, {{ $categories[0]['id'] }})">

        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-top:30px;">
            <h1>
                Thống kê số lượt bình chọn
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
                            <div style="width:100%;height:90px;">
                                <div class="col-sm-3 box-calendar" style="width:5%;border-radius:5px;">
                                    <button ng-click="filter()" class="btn btn-sm btn-success" style="height:35px;font-size:15px;width:100%;">LỌC</button>
                                </div>
                                <div class="col-sm-3 box-calendar">
                                    <input id="daterange" type="text" class="form-control" name="daterange" value="" />
                                    <i id="daterange-icon" class="fa fa-calendar"></i>
                                </div>
                                <div class="col-sm-3 box-calendar" style="width:40%;">
                                    <select class="form-control" name="cate[]" id="category-filter" multiple="multiple">
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 box-calendar" style="border:none !important">
                                    <select class="form-control" name="round" id="round-filter">
                                        @foreach ($rounds as $round)
                                            <option value="{{ $round->id }}">{{ $round->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div ng-cloak ng-if="loading">
                                <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:47%;margin-top:17%">
                            </div>
                            <div style="padding-top:17%" ng-cloak ng-if="!loading && parents.length == 0">
                                <p class="text-center">Không có dữ liệu</p>
                            </div>
                            <div ng-if="parents.length > 0 && !loading" ng-cloak id="chart-container">
                                <div ng-repeat="child in parents" style="text-align:center">
                                    <h3 class="group-title text-center">@{{ child.name }}</h3>
                                    <div class="chart-row">
                                        <div ng-if="child.childrens.length == 1" id="@{{ item.slug }}" class="col-md-12" ng-repeat="item in child.childrens">
                                            
                                        </div>
                                        <div ng-if="child.childrens.length > 1" id="@{{ item.slug }}" class="col-md-6" ng-repeat="item in child.childrens">
                                            
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
    {!! Html::script('backend/js/angular/controllers/statistical.controller.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript">
    $(function () {
        var selectVal = "{{ $categories[0]['id'] }}";
        $('#category-filter').select2({
            placeholder: 'Chọn khối...',
            tags: true
        }).val(selectVal).trigger("change");
        $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            startDate: '2019/09/02',
            endDate: '2019/10/31',
            locale: {
                format: 'YYYY/MM/DD',
                applyLabel: "Chọn",
                cancelLabel: "Trở lại"
            }
        });
    })
</script>
@stop
