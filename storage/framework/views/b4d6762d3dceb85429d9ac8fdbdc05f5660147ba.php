<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html data-ng-app="KingbepCMS">
<head>
  	<meta charset="UTF-8">
  	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

  	<title><?php echo $__env->yieldContent('page'); ?> | King Bếp CMS</title>
  	
  	<link rel="stylesheet" href="<?php echo e(asset('components/bootstrap/dist/css/bootstrap.min.css')); ?>" />
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="<?php echo e(asset('components/font-awesome/css/font-awesome.min.css')); ?>" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  	<link rel="stylesheet" href="<?php echo e(asset('backend/css/toastr.min.css')); ?>" />
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="<?php echo e(asset('components/Ionicons/css/ionicons.min.css')); ?>" />
  	<!-- Theme style -->
  	<link rel="stylesheet" href="<?php echo e(asset('components/admin-lte/dist/css/AdminLTE.min.css')); ?>" />
  	<link rel="stylesheet" href="<?php echo e(asset('components/admin-lte/dist/css/skins/skin-blue.min.css')); ?>" />
  	<link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>" />
  	<link rel="shortcut icon" href="<?php echo e(asset('frontend/images/icons/favicon.png')); ?>" type="image/x-icon">
  	<!-- Google Font -->
  	<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />

    <script src="<?php echo e(asset('backend/plugins/ckeditor/ckeditor.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/plugins/ckfinder/ckfinder.js')); ?>"></script>

    <?php $__env->startSection('pageCss'); ?>
  	<?php echo $__env->yieldSection(); ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

	  	<?php echo $__env->make('layouts.admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  	<?php echo $__env->make('layouts.admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	  	<!-- Content Wrapper. Contains page content -->
	  	<div class="content-wrapper">
	  		<?php echo $__env->yieldContent('content'); ?>
	  	</div>
	  	<!-- /.content-wrapper -->

	  	<?php echo $__env->make('layouts.admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  	<?php echo $__env->make('layouts.admin.control-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  	<!-- Add the sidebar's background. This div must be placed
	  	immediately after the control sidebar -->
	  	<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 3 -->
	<script src="<?php echo e(asset('components/jquery/dist/jquery.min.js?').time()); ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo e(asset('components/bootstrap/dist/js/bootstrap.min.js?').time()); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('components/admin-lte/dist/js/adminlte.min.js?').time()); ?>"></script>

	<script src="<?php echo e(asset('backend/js/app/base.app.js?').time()); ?>"></script>

  	<script src="<?php echo e(asset('backend/js/toastr.min.js?').time()); ?>"></script>
  	<script src="https://code.highcharts.com/highcharts.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
  	<script src="<?php echo e(asset('backend/js/angular/angular.min.js?').time()); ?>"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-sanitize.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.min.js"></script>

  	<script src="<?php echo e(asset('backend/js/angular/angular-messages.min.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/angucomplete-alt.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/app.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/factories.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/directives.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/filters.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/helpers.js?').time()); ?>"></script>
  	<script src="<?php echo e(asset('backend/js/angular/image-crop.js?').time()); ?>"></script>

  	<script type="text/javascript">
	    $.app.init({
	      	baseUrl		 : '<?php echo url("/admin/access"); ?>',
	      	csrf   		 : '<?php echo csrf_token(); ?>',
	      	user   		 : '<?php echo $authAdminUser; ?>',
      		currentRoute : '<?php echo $current_route_name; ?>'
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
	<script src="<?php echo e(asset('backend/js/app/app.js?').time()); ?>"></script>

	<?php $__env->startSection('pageJs'); ?>
	<?php echo $__env->yieldSection(); ?>

</body>
</html>