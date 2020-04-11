<?php $__env->startSection('page'); ?>Cập nhật đánh giá
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div ng-controller="ReviewController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật đánh giá
            <a href="<?php echo e(route('reviews')); ?>" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                            	<input type="hidden" id="id" name="id" value="<?php echo e($review->id); ?>">
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select id="pro_id" name="pro_id" class="form-control">
                                		<?php if(count($products) > 0): ?>
	                                		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                			<option <?php echo e(($review->pro_id == $pro->id) ? 'selected' : ''); ?> value="<?php echo e($pro->id); ?>"><?php echo e($pro->name); ?></option>
	                                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                		<?php else: ?>
                                			<option value="">Không có sản phẩm nào</option>
                                		<?php endif; ?>
                                	</select>
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input value="<?php echo e($review->name); ?>" name="name" type="text" class="form-control" placeholder="Họ tên...">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input value="<?php echo e($review->email); ?>" name="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input value="<?php echo e($review->phone); ?>" name="phone" type="text" class="form-control" placeholder="Số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" placeholder="Nội dung..." name="content"><?php echo $review->content; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Sao đánh giá</label>
                                    <input value="<?php echo e($review->star); ?>" min="1" max="5" name="star" type="number" class="form-control" placeholder="Sao đánh giá...">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control status">
                                        <option <?php echo e(($review->status == 1) ? 'selected' : ''); ?> value="1">Đã duyệt</option>
                                        <option <?php echo e(($review->status == 0) ? 'selected' : ''); ?> value="0">Chưa duyệt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="<?php echo e(route('reviews')); ?>" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <?php echo Html::script('backend/js/angular/controllers/review.controller.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>