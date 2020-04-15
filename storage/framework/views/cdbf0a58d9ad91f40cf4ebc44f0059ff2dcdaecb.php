<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <li><a data-route="/admin/access/dashboard" href="<?php echo e(url('/admin/access/dashboard')); ?>"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span>Quản lý danh mục</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/categories" href="<?php echo e(url('/admin/access/categories')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/categories/create" href="<?php echo e(url('/admin/access/categories/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-suitcase"></i> <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/products" href="<?php echo e(url('/admin/access/products')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/products/create" href="<?php echo e(url('/admin/access/products/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/orders" href="<?php echo e(url('/admin/access/orders')); ?>">Danh sách</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span>Quản lý bài viết</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/articles" href="<?php echo e(url('/admin/access/articles')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/articles/create" href="<?php echo e(url('/admin/access/articles/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý slide</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/slides" href="<?php echo e(url('/admin/access/slides')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/slides/create" href="<?php echo e(url('/admin/access/slides/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> <span>Quản lý page</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/page/about" href="<?php echo e(url('/admin/access/page/about')); ?>">Giới thiệu</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/page/policy" href="<?php echo e(url('/admin/access/page/policy')); ?>">Chính sách giá</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/page/certificate" href="<?php echo e(url('/admin/access/page/certificate')); ?>">Chứng nhận chất lượng</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/page/health-advice" href="<?php echo e(url('/admin/access/page/health-advice')); ?>">Tư vấn sức khỏe</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-star"></i> <span>Quản lý đánh giá</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/admin/access/reviews" href="<?php echo e(url('/admin/access/reviews')); ?>">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/admin/access/reviews/create" href="<?php echo e(url('/admin/access/reviews/create')); ?>">Thêm mới</a></li>
        </ul>
    </li>

    <li><a data-route="/admin/access/setting" href="<?php echo e(url('/admin/access/setting')); ?>"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
  
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>