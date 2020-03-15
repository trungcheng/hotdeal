<!DOCTYPE html>
<html class="lockscreen">
<head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Đăng nhập | LindoCMS</title>
  	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  	<link rel="shortcut icon" href="<?php echo e(asset('backend/uploads/images/logo.png')); ?>" type="image/x-icon">
  	<!-- Bootstrap 3.3.2 -->
  	<link href="<?php echo e(asset('components/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet" />
  	<!-- Font Awesome Icons -->
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  	<!-- Ionicons -->
  	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" />
  	<!-- Theme style -->
  	<link href="<?php echo e(asset('components/admin-lte/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('components/admin-lte/dist/css/skins/skin-blue.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('backend/css/login.css')); ?>" rel="stylesheet" />
</head>
<body class="login-page">
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('components/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo e(asset('components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('components/admin-lte/dist/js/adminlte.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('custom_scripts'); ?>
</body>
</html>
