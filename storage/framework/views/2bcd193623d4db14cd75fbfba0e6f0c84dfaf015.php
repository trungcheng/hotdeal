<?php $__env->startSection('page'); ?>404 Not Found
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(URL::current()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(URL::current()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('home')); ?>/
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="container">
            <div class="row content" style="text-align: center; font-size: 20px; line-height: 35px; padding-top: 50px;">
                <p class="s404-tb">Lỗi <span>404</span> Không tìm thấy trang</p>
                <p class="s404-tm">Không tìm thấy trang bạn đang truy cập.</p>
                <a class="btn-vote-item transition" style="width: 250px; margin: 10px auto 50px; float: none;" href="<?php echo e(url('/')); ?>">Về Trang chủ</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $(function() {
            var height = window.innerHeight;
            $('.content').css('min-height', height-220);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\thachvu\resources\views/errors/404.blade.php ENDPATH**/ ?>