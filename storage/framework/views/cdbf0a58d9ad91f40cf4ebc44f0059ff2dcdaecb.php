<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <li><a data-route="/access/dashboard" href="<?php echo e(url('/access/dashboard')); ?>"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-plus"></i> <span>Đăng ký dịch vụ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/categories" href="<?php echo e(url('/access/categories')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/access/categories/create" href="<?php echo e(url('/access/categories/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>
    
    <!-- <li><a data-route="/access/orders" href="<?php echo e(url('/access/orders')); ?>"><i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span></a></li> -->
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-suitcase"></i> <span>Quản lý dịch vụ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/products" href="<?php echo e(url('/access/products')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/access/products/create" href="<?php echo e(url('/access/products/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý khách hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/orders" href="<?php echo e(url('/access/orders')); ?>">Danh sách</a></li>
            <!-- <li><a style="margin-left:35px;" data-route="/access/orders/create" href="<?php echo e(url('/access/orders/create')); ?>">Thêm mới</a></li> -->
        </ul>
    </li>
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-history"></i> <span>Lịch sử giao dịch</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/articles" href="<?php echo e(url('/access/articles')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/access/articles/create" href="<?php echo e(url('/access/articles/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li><a data-route="/access/setting" href="<?php echo e(url('/access/setting')); ?>"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
    
    <!-- <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
        </ul>
    </li> -->
  
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>