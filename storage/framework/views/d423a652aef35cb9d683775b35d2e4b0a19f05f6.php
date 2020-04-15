<?php $__env->startSection('page'); ?>Cấu hình chung
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cấu hình chung
            <!-- <small>Optional description</small> -->
        </h1>
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

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
                    <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                <?php endif; ?>

                <form id="form_setting" onsubmit="return false;" action="<?php echo e(url('/admin/access/setting/update')); ?>" enctype="multipart/form-data" method="post">

                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <label class="control-label">Tên công ty</label>
                        <input type="text" name="name" value="<?php echo e(($setting != '') ? $setting->name : ''); ?>" class="form-control" placeholder="Tên công ty...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Slogan</label>
                        <input type="text" name="slogan" value="<?php echo e(($setting != '') ? $setting->slogan : ''); ?>" class="form-control" placeholder="Slogan...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" value="<?php echo e(($setting != '') ? $setting->email : ''); ?>" class="form-control" placeholder="Địa chỉ email...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Điện thoại</label>
                        <input type="text" name="phone" value="<?php echo e(($setting != '') ? $setting->phone : ''); ?>" class="form-control" placeholder="Điện thoại...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" value="<?php echo e(($setting != '') ? $setting->address : ''); ?>" class="form-control" placeholder="Địa chỉ...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Giờ làm việc</label>
                        <input type="text" name="time_work" value="<?php echo e(($setting != '') ? $setting->time_work : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Google map link</label>
                        <input type="text" name="google_map_url" value="<?php echo e(($setting != '') ? $setting->google_map_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Facebook fanpage link</label>
                        <input type="text" name="facebook_url" value="<?php echo e(($setting != '') ? $setting->facebook_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Twitter profile link</label>
                        <input type="text" name="twitter_url" value="<?php echo e(($setting != '') ? $setting->twitter_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Youtube channel link</label>
                        <input type="text" name="youtube_url" value="<?php echo e(($setting != '') ? $setting->youtube_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Google plus link</label>
                        <input type="text" name="google_url" value="<?php echo e(($setting != '') ? $setting->google_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Instagram profile link</label>
                        <input type="text" name="instagram_url" value="<?php echo e(($setting != '') ? $setting->instagram_url : ''); ?>" class="form-control" placeholder="Giờ làm việc...">
                    </div>

                    <div class="form-group">
                        <label>Facebook Pixel Code</label>
                        <textarea style="height: 100px;" name="fb_pixel_code" class="form-control" placeholder="Facebook Pixel Code..."><?php echo e(($setting != '') ? $setting->fb_pixel_code : ''); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input value="<?php echo e(($setting != '') ? $setting->seo_title : ''); ?>" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                    </div>

                    <div class="form-group">
                        <label>SEO Description</label>
                        <input value="<?php echo e(($setting != '') ? $setting->seo_desc : ''); ?>" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                    </div>

                    <div class="form-group">
                        <label>SEO Keyword</label>
                        <input value="<?php echo e(($setting != '') ? $setting->seo_keyword : ''); ?>" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                    </div>

                    <div class="form-group" style="margin-top:50px;margin-bottom:50px;text-align:center">
                        <button type="reset" class="btn btn-default">Đóng</button>
                        <button style="margin-left:10px" type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>

                </form>

            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $('#form_setting').on('submit', function () {
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "JSON",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                success: function (response) {
                    if (response.status) {
                        swal('Updated!', response.message, "success");
                    } else {
                        swal('Error!', response.message, "error");
                    }
                },
                error: function (response) {
                    swal('Error!', response.message, "error");
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>