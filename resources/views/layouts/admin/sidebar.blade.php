<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>

        <li><a data-route="/admin/access/dashboard" href="{{ url('/admin/access/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

        <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-info-circle"></i> <span>Quản lý thông tin chung</span></a></li>

        <li><a data-route="/admin/access/history" href="{{ url('/admin/access/setting') }}"><i class="fa fa-bar-chart"></i> <span>Quản lý lịch sử bình chọn</span></a></li>

        <li><a data-route="/admin/access/round" href="{{ url('/admin/access/setting') }}"><i class="fa fa-codiepie"></i> <span>Quản lý vòng thi</span></a></li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span>Quản lý khối (phòng ban)</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/categories" href="{{ url('/admin/access/categories') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/categories/create" href="{{ url('/admin/access/categories/create') }}"><i class="fa fa-pencil-square-o"></i> Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-dot-circle-o"></i> <span>Quản lý vòng thi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/rounds" href="{{ url('/admin/access/categories') }}">Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/rounds/create" href="{{ url('/admin/access/categories/create') }}">Thêm mới</a></li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý nhân vật bình chọn</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/members" href="{{ url('/admin/access/members') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/members/create" href="{{ url('/admin/access/members/create') }}"><i class="fa fa-pencil-square-o"></i> Thêm mới</a></li>
            </ul>
        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>