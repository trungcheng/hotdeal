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

        <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>