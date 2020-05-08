<?php $__env->startSection('page'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('signin')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('signin')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('signin')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(asset('frontend/images/logos/logo.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>  
    <section class="bread-crumb">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <li class="home">
                <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>
                <span><i class="fa fa-angle-right"></i></span>
              </li>
              <li><strong itemprop="title">Đăng nhập tài khoản</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="container mr-bottom-20">
      <h1 class="title-head text-center"><span>Đăng nhập tài khoản</span></h1>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(Session::has($key)): ?>
                <p class="alert alert-<?php echo e($key); ?>"><?php echo e(Session::get($key)); ?></p>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="list-style:none"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
            <?php endif; ?>
          <div class="page-login margin-bottom-30">
            <div id="login">
              
              <form accept-charset="UTF-8" action="" id="customer_login" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-signup clearfix">
                  <fieldset class="form-group">
                    <label>Email / Số điện thoại</label>
                    <input type="text" class="form-control form-control-lg" name="email" id="customer_email" placeholder="Email hoặc số điện thoại" required />
                  </fieldset>
                  <fieldset class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="customer_password" placeholder="Mật khẩu" required />
                  </fieldset>
                  <div class="pull-xs-left" style="margin-top: 15px;">
                    <input class="btn btn-style btn-blues" type="submit" value="Đăng nhập" />
                    <a href="<?php echo e(route('signup')); ?>" class="btn-link-style btn-register" style="margin-left: 20px;color:#e85997;text-decoration:underline;">Đăng ký</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
      function showRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'block';
        document.getElementById('login').style.display = 'none';
      }

      function hideRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'none';
        document.getElementById('login').style.display = 'block';
      }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>