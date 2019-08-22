@extends('layouts.admin.master')

@section('page')Tổng quan
@stop

@section('pageCss')
@stop

@section('content')
    <div ng-controller="DashboardController" ng-init="">
    	<!-- Content Header (Page header) -->
	    <section class="content-header" style="padding-top:30px;">
	      	<h1>
	        	Tổng quan
	        	<!-- <small>Optional description</small> -->
	      	</h1>
	    </section>

    	<!-- Main content -->
    	<section class="content container-fluid">

            <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ $userCount }}</h3>
                            <p>Tổng số thành viên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ route('users') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ $memberCount }}</h3>
                            <p>Tổng số nhân vật</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ route('members') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ $categoryCount }}<sup style="font-size: 20px"></sup></h3>
                            <p>Tổng số khối (Phòng/Ban)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('categories') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ ($voteCount[0]['vote']) ? $voteCount[0]['vote'] : 0 }}</h3>
                            <p>Tổng lượt bình chọn hôm nay</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('statistical') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
    	</section>
    	<!-- /.content -->
    </div>
@stop

@section('pageJs')
    <script src="{{ asset('backend/js/angular/controllers/dashboard.controller.js?').time() }}"></script>
@stop