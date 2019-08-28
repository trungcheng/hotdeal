@extends('layouts.admin.master')

@section('page')Thống kê số lượt bình chọn
@stop

@section('pageCss')
    <style type="text/css">
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
            margin-top: 50px;
        }
        .highcharts-credits {
            display: none;
        }
        .box-body {
            min-height: 520px;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
@stop

@section('content')
    <div ng-controller="StatisticalController" ng-init="loadInit()">

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

                            <div class="col-sm-3 box-calendar">
                                <input id="daterange" type="text" class="form-control" name="daterange" value="" />
                                <i id="daterange-icon" class="fa fa-calendar"></i>
                            </div>
                            <div class="col-sm-3 box-calendar">
                                <select class="form-control" name="cate[]" id="category-filter" multiple="multiple">
                                    <option>Khối 1</option>
                                    <option>Khối 2</option>
                                </select>
                            </div>
                            <div class="col-sm-3 box-calendar">
                                <select class="form-control" name="round" id="round-filter">
                                    <option>Vòng 1</option>
                                    <option>Vòng 2</option>
                                </select>
                            </div>
                            
                            <div ng-cloak ng-if="loading">
                                <img src="{{ asset('backend/img/ajax_loader.gif') }}" style="width:3%;margin-left:47%;margin-top:20%">
                            </div>
                            <div style="padding-top:20%" ng-cloak ng-if="!loading && data.length == 0">
                                <p class="text-center">Không có dữ liệu</p>
                            </div>
                            <div id="chart-container"></div>
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
        $('#category-filter').select2();
        $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            startDate: '2019/09/02',
            endDate: '2019/10/31',
            locale: {
                format: 'YYYY/MM/DD',
                applyLabel: "Lọc",
                cancelLabel: "Trở lại"
            }
        });
    })
</script>
@stop
