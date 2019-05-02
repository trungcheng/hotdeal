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
                <li><a style="margin-left:35px;" data-route="/admin/access/categories" href="{{ url('/admin/access/categories') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/categories/create" href="{{ url('/admin/access/categories/create') }}">Thêm mới</a></li>
            </ul>
        </li>
        
        <!-- <li><a data-route="/admin/access/orders" href="{{ url('/admin/access/orders') }}"><i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span></a></li> -->
        
        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-suitcase"></i> <span>Quản lý sản phẩm</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/products" href="{{ url('/admin/access/products') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/products/create" href="{{ url('/admin/access/products/create') }}">Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý đơn hàng</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/orders" href="{{ url('/admin/access/orders') }}">Danh sách</a></li>
                <!-- <li><a style="margin-left:35px;" data-route="/admin/access/orders/create" href="{{ url('/admin/access/orders/create') }}">Thêm mới</a></li> -->
            </ul>
        </li>
        
        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span>Quản lý bài viết</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/articles" href="{{ url('/admin/access/articles') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/articles/create" href="{{ url('/admin/access/articles/create') }}">Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-sliders"></i> <span>Quản lý slide</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/slides" href="{{ url('/admin/access/slides') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/slides/create" href="{{ url('/admin/access/slides/create') }}">Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý thành viên</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/members" href="{{ url('/admin/access/members') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/members/create" href="{{ url('/admin/access/members/create') }}">Thêm mới</a></li>
            </ul>
        </li>

        <!-- <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-cog"></i> <span>Thông tin công ty</span></a></li> -->

        <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
        
        <!-- <li><a data-route="/admin/access/advertises" href="{{ url('/admin/access/advertises') }}"><i class="fa fa-square-o"></i> <span>Quản lý quảng cáo</span></a></li>
        
        <li><a data-route="/admin/access/menu" href="{{ url('/admin/access/menu') }}"><i class="fa fa-server"></i> <span>Quản lý menu</span></a></li>
        
        <li><a data-route="/admin/access/location" href="{{ url('/admin/access/location') }}"><i class="fa fa-share-alt"></i> <span>Quản lý khu vực</span></a></li> -->
        
        <!-- <li><a data-route="/admin/access/users" href="{{ url('/admin/access/users') }}"><i class="fa fa-users"></i> <span>Quản lý user</span></a></li> -->
        
        <!-- <li><a data-route="/admin/access/company" href="{{ url('/admin/access/company') }}"><i class="fa fa-flag"></i> <span>Thông tin công ty</span></a></li>
        
        <li><a data-route="/admin/access/general-info" href="{{ url('/admin/access/general-info') }}"><i class="fa fa-info-circle"></i> <span>Thông tin chung</span></a></li> -->

        <!-- <li><a data-route="setting" href="#"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li> -->
        
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