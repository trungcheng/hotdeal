<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <li><a data-route="/admin/access/dashboard" href="{{ url('/admin/access/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span>Quản lý danh mục</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/categories" href="{{ url('/admin/access/categories') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/categories/create" href="{{ url('/admin/access/categories/create') }}">Thêm mới</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-suitcase"></i> <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/products" href="{{ url('/admin/access/products') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/products/create" href="{{ url('/admin/access/products/create') }}">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/orders" href="{{ url('/admin/access/orders') }}">Danh sách</a></li>
        </ul>
    </li>
    
    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span>Quản lý bài viết</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/articles" href="{{ url('/admin/access/articles') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/articles/create" href="{{ url('/admin/access/articles/create') }}">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý slide</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/slides" href="{{ url('/admin/access/slides') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/slides/create" href="{{ url('/admin/access/slides/create') }}">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý thành viên</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/members" href="{{ url('/admin/access/members') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/members/create" href="{{ url('/admin/access/members/create') }}">Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> <span>Quản lý page</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/page/about" href="{{ url('/admin/access/page/about') }}">Giới thiệu</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/page/payment-method" href="{{ url('/admin/access/page/payment-method') }}">PT Thanh toán</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/page/delivery-method" href="{{ url('/admin/access/page/delivery-method') }}">PT vận chuyển</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/page/policy" href="{{ url('/admin/access/page/policy') }}">Chính sách chung</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/page/recruitment" href="{{ url('/admin/access/page/recruitment') }}">TT tuyển dụng</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/page/saleoff" href="{{ url('/admin/access/page/saleoff') }}">CT khuyến mãi</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-star"></i> <span>Quản lý đánh giá</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:20px;" data-route="/admin/access/reviews" href="{{ url('/admin/access/reviews') }}">Danh sách</a></li>
            <li><a style="margin-left:20px;" data-route="/admin/access/reviews/create" href="{{ url('/admin/access/reviews/create') }}">Thêm mới</a></li>
        </ul>
    </li>

    <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
    
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>