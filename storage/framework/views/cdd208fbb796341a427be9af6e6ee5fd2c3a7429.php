<?php $__env->startSection('page'); ?>Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    <style type="text/css">
        .alert {
            width: 50%;
            height: 40px;
            text-align: center;
            margin: 0 auto;
            position: absolute;
            top: 15px;
            left: 26.3%;
            line-height: 9px;
        }
        .alert ul li {
            list-style: none;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header" style="padding-top:30px;">
      <h1>
        Profile
      </h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <?php if(Session::has('message')): ?>
            <p class="alert alert-success">Cập nhật thành công</p>
        <?php endif; ?>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo e($user->avatar); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e(($authAdminUser->fullname != '') ? $authAdminUser->fullname : $authAdminUser->username); ?></h3>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#setting" data-toggle="tab">Thông tin</a></li>
              <li><a href="#change-pass" data-toggle="tab">Đổi mật khẩu</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="setting">
                <form method="POST" enctype="multipart/form-data" class="form-horizontal" action="<?php echo e(route('profile')); ?>">
                    <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input value="<?php echo e($user->username); ?>" disabled type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input value="<?php echo e($user->email); ?>" disabled type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Họ tên</label>

                    <div class="col-sm-10">
                      <input value="<?php echo e($user->fullname); ?>" type="text" name="fullname" class="form-control" placeholder="Họ tên">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Ảnh đại diện</label>
                      <div class="col-sm-10">
                        <input type="file" name="avatar" value="<?php echo e($user->avatar); ?>" class="form-control">
                        <input value="<?php echo e($user->avatar); ?>" name="avatar" type="hidden" size="48" class="form-control" id="avatar" />
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
                      <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="change-pass">
                <form class="form-horizontal" method="post" action="<?php echo e(route('change-pass')); ?>">
                    <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Mật khẩu cũ</label>

                    <div class="col-sm-9">
                      <input type="password" name="old_password" class="form-control" placeholder="Mật khẩu cũ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Mật khẩu mới</label>

                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" placeholder="Mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Xác nhận mật khẩu mới</label>

                    <div class="col-sm-9">
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9" style="text-align: center;">
                      <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $('.alert').delay(3000).fadeOut();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>