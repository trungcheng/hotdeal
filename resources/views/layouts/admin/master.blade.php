<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html data-ng-app="AutwatchCMS">
<head>
  	<meta charset="UTF-8">
  	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  	<meta name="csrf-token" content="{{ csrf_token() }}"/>

  	<title>AutwatchCMS | @yield('page')</title>
  	
  	<link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}" />
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  	<link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}" />
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="{{ asset('components/Ionicons/css/ionicons.min.css') }}" />
  	<!-- Theme style -->
  	<link rel="stylesheet" href="{{ asset('components/admin-lte/dist/css/AdminLTE.min.css') }}" />
  	<link rel="stylesheet" href="{{ asset('components/admin-lte/dist/css/skins/skin-blue.min.css') }}" />

  	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />

  	<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/apple-touch-icon.png') }}">
  	<!-- Google Font -->
  	<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />

    <script src="{{ asset('backend/plugins/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('backend/plugins/ckfinder/ckfinder.js') }}"></script>

    @section('pageCss')
  	@show

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

	  	@include('layouts.admin.header')
	  	@include('layouts.admin.sidebar')

	  	<!-- Content Wrapper. Contains page content -->
	  	<div class="content-wrapper">
	  		@yield('content')
	  	</div>
	  	<!-- /.content-wrapper -->

	  	@include('layouts.admin.footer')
	  	@include('layouts.admin.control-sidebar')
	  	<!-- Add the sidebar's background. This div must be placed
	  	immediately after the control sidebar -->
	  	<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 3 -->
	<script src="{{ asset('components/jquery/dist/jquery.min.js?').time() }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js?').time() }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('components/admin-lte/dist/js/adminlte.min.js?').time() }}"></script>

	<script src="{{ asset('backend/js/app/base.app.js?').time() }}"></script>

  	<script src="{{ asset('backend/js/toastr.min.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/angular.min.js?').time() }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-sanitize.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.min.js"></script>
  	<script src="{{ asset('backend/js/angular/angular-messages.min.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/angucomplete-alt.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/image-crop.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/app.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/directives.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/filters.js?').time() }}"></script>
  	<script src="{{ asset('backend/js/angular/helpers.js?').time() }}"></script>

  	<script type="text/javascript">
	    $.app.init({
	      	baseUrl		 : '{!! url("/admin") !!}',
	      	csrf   		 : '{!! csrf_token() !!}',
	      	user   		 : '{!! $authUser !!}',
      		currentRoute : '{!! $current_route_name !!}'
	    });
	    $(function () {
	      	toastr.options = {
	          	"debug": false,
	          	"positionClass": "toast-bottom-right",
	          	"onclick": null,
	          	"fadeIn": 300,
	          	"fadeOut": 1000,
	          	"timeOut": 5000,
	          	"extendedTimeOut": 1000
	      	};
	    });

  	</script>
	<script src="{{ asset('backend/js/app/app.js?').time() }}"></script>

	@section('pageJs')
	@show

</body>
</html>