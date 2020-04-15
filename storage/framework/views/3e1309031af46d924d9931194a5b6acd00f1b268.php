<?php $__env->startSection('content'); ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger" style="position:absolute;width:100%;top:0px;text-align:center;">
    <ul class="fa-ul">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li style="list-style:none"><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo url('admin'); ?>">
            <h3>ThuymoctraCMS</h3>
        </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <form action="" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <!-- <?php echo Form::email('email', null, ['placeholder' => 'Username']); ?> -->
                <?php echo Form::email('email', '', ['placeholder' => 'Enter email', 'autocomplete' => 'off', 'required', 'class' => 'form-control']); ?>

                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <?php echo Form::password('password', ['placeholder' => 'Password', 'autocomplete' => 'off', 'required', 'class'=>'form-control']); ?>

                <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt20">Sign In</button>
        </form>
    </div><!-- /.login-box-body -->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_scripts'); ?>
  <script type="text/javascript">
    
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>