<?php $__env->startSection('page'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('signup')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('signup')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('signup')); ?>

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

              <li><strong itemprop="title">Đăng ký tài khoản</strong></li>

            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="container mr-bottom-20">
      <h1 class="title-head text-center">Đăng ký tài khoản</h1>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="page-login">
            <div id="login">
              
              <form accept-charset="UTF-8" action="" id="customer_register" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-signup clearfix">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <?php if(count($errors) > 0): ?>
                      <div class="alert alert-danger">
                        <ul>
                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li style="list-style:none"><?php echo e($error); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                      <?php endif; ?>
                      <div class="row">
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control form-control-lg" value="" name="fullname" id="fullname" placeholder="Họ tên" required>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required />
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="Số điện thoại" required />
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Mật khẩu" required>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset class="form-group">
                            <label>Xác nhận mật khẩu</label>
                            <input type="password" class="form-control form-control-lg" name="repassword" id="repassword" placeholder="Xác nhận mật khẩu" required>
                          </fieldset>
                        </div>
                      </div>
                      <div class="col-xs-12 text-center" style="margin-top:15px; padding: 0">
                        <button type="submit" value="Đăng ký" class="btn btn-style btn-blues">Đăng ký</button>
                        <a href="<?php echo e(route('signin')); ?>" class="btn-link-style btn-register" style="margin-left: 20px;color:#e85997;text-decoration:underline;">Đăng nhập</a>
                      </div>
                    </div>
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>