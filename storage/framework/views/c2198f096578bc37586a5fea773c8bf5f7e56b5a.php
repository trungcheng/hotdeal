<?php $__env->startSection('page'); ?>Thông tin giao hàng / thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>Thông tin giao hàng / thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('keywords'); ?>Thông tin giao hàng, thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('canonical'); ?><?php echo e(route('step2')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('alternate'); ?><?php echo e(route('step2')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('propName'); ?>Thông tin giao hàng / thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('propDesc'); ?>Thông tin giao hàng, thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogTitle'); ?>Thông tin giao hàng / thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogDesc'); ?>Thông tin giao hàng, thanh toán
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogUrl'); ?><?php echo e(route('step2')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ogImage'); ?><?php echo e(asset('frontend/images/logos/logo.png')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>
    <style>
        .pay-method {
            border: 1px solid #e8e8e8;
            padding: 30px;
        }

        .pay-method .heading {
            margin-bottom: 40px;
        }

        .pay-method .heading h2 {
            color: #222222;
            font-size: 18px;
            margin: 0px;
            margin-bottom: 20px;
        }

        .pay-method .heading hr {
            border: none;
            position: relative;
            margin: 0px;
            height: 1px;
            width: 100%;
            background: #e5e5e5;
        }

        .pay-method label {
            font-weight: normal;
            width: 100%;
            color: #555555;
            font-size: 14px;
        }

        .pay-method input, .pay-method textarea {
            border: 1px solid #e2e2e2;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .transportation .charges {
            border: 2px solid #e2e2e2;
            padding: 15px 20px;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .transportation .charges.select, .transportation .charges:hover {
            border: 2px solid #0088cc;
        }

        .transportation .charges h6 {
            margin: 0px;
            margin-bottom: 5px;
            font-weight: 600;
            display: inline-block;
            font-size: 16px;
            color: #555555;
        }

        .transportation .charges span {
            color: #888888;
        }

        .transportation span.deli-charges {
            color: #f00;
            font-size: 14px;
            font-weight: 600;
            border-left: 1px solid #e5e5e5;
            padding-left: 10px;
            margin-left: 10px;
        }

        .pro-btn {
            text-align: center;
            margin-top: 30px;
        }

        .pro-btn .btn-light {
            background: #bbbbbb;
        }

        .pro-btn a {
            margin: 0 10px;
            text-decoration: none;
        }

        .pro-btn a:hover {
            text-decoration: none;
        }

        .btn-round {
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: #0088cc;
            color: #fff;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
            padding: 15px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="full-width" style="margin-bottom:50px">

    <div class="box-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-ld-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcum">
                        <li><a href="/">Trang chủ</a><span>»</span></li>
                        <li><a class="active">Thông tin giao hàng / thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="body-right col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-news">
                <div class="box-news-sub">
                    <div class="cate-header sub-top">
                        <div class="txt-name-sub">
                            <h2>Thông tin giao hàng / thanh toán</h2>
                        </div>
                    </div>
                    <div class="box-body homepage clearfix" style="margin-top:20px;">

                        <form role="form" action="<?php echo e(route('postStep2')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="user_id" value="1">
                            <!-- Payout Method -->
                            <div class="pay-method">
                                <div class="row">
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
                                    <div class="col-md-6">

                                        <!-- Your information -->
                                        <div class="heading">
                                            <h2>Thông tin giao hàng</h2>
                                            <hr>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <label> Họ tên khách hàng
                                                    <input name="customer_name" class="form-control" type="text" placeholder="Họ tên đầy đủ...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Email
                                                    <input name="customer_email" class="form-control" type="email" placeholder="Địa chỉ email...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Địa chỉ giao hàng
                                                    <input name="customer_address" class="form-control" type="text" placeholder="Địa chỉ giao hàng chính xác...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <label> Số điện thoại
                                                    <input name="customer_phone" class="form-control" type="text" placeholder="Số điện thoại...">
                                                </label>
                                            </div>

                                            <div class="col-sm-12" style="margin-bottom:30px;">
                                                <label> Ghi chú thêm
                                                    <textarea name="note" class="form-control" placeholder="Ghi chú về đơn hàng..."></textarea>
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Select Your Transportation -->
                                    <div class="col-md-6">
                                        <div class="heading">
                                            <h2>Thông tin thanh toán</h2>
                                            <hr>
                                        </div>
                                        <div class="transportation">
                                            <div class="row">
                                                <p style="font-size:15px;padding-left:15px;margin-bottom:5px;">Phương thức vận chuyển</p>
                                                <!-- Free Delivery -->
                                                <select id="delivery" class="hide" name="delivery_method">
                                                    <option value="Vận chuyển miễn phí">Vận chuyển miễn phí</option>
                                                    <option value="Vận chuyển nhanh">Vận chuyển nhanh</option>
                                                </select>
                                                <div class="col-sm-6">
                                                    <div class="deli-method charges select">
                                                        <h6>Vận chuyển miễn phí</h6>
                                                        <br>
                                                        <span>7 - 12 ngày</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="deli-method charges">
                                                        <h6>Vận chuyển nhanh</h6>
                                                        <br>
                                                        <span>4 - 7 ngày</span>
                                                        <span class="deli-charges"> +25k </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p style="font-size:15px;padding-left:15px;margin-bottom:5px;">Hình thức thanh toán</p>
                                                <select id="payment" class="hide" name="payment_method">
                                                    <option selected value="Thanh toán tiền mặt khi nhận hàng">Thanh toán tiền mặt khi nhận hàng</option>
                                                </select>
                                                <div class="col-sm-6">
                                                    <div class="charges select">
                                                        <h6>Thanh toán tiền mặt khi nhận hàng</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="pro-btn">
                                    <a href="<?php echo e(route('cart')); ?>" class="btn-round btn-light">Trở lại</a>
                                    <button style="border:none" type="submit" class="btn-round">Tiến hành đặt hàng</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <script type="text/javascript">
        $('.deli-method').on('click', function () {
            $('.deli-method').removeClass('select');
            $(this).addClass('select');
            $('#delivery').val($(this).find('h6').text());
        });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>