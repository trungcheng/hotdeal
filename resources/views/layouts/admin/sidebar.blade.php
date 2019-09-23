<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-transform: uppercase;">Administrator</li>

        <li><a data-route="/vcr19dtbcdscms=rotartsinimda/access/dashboard" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span>Quản lý khối (phòng ban)</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/categories" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/categories') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/categories/create" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/categories/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-codiepie"></i> <span>Quản lý vòng thi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a> 
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/rounds" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/rounds') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/rounds/create" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/rounds/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý nhân vật bình chọn</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/members" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/members') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/vcr19dtbcdscms=rotartsinimda/access/members/create" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/members/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>

        <li><a data-route="/vcr19dtbcdscms=rotartsinimda/access/statistical" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/statistical') }}"><i class="fa fa-bar-chart"></i> <span>Thống kê số lượt bình chọn</span></a></li>

        <li><a data-route="/vcr19dtbcdscms=rotartsinimda/access/history" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/history') }}"><i class="fa fa-history"></i> <span>Xem lịch sử bình chọn</span></a></li>

        <li><a data-route="/vcr19dtbcdscms=rotartsinimda/access/setting" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/setting') }}"><i class="fa fa-info-circle"></i> <span>Quản lý thông tin chung</span></a></li>

        @superadmin
        <li><a data-route="/vcr19dtbcdscms=rotartsinimda/access/users" href="{{ url('/vcr19dtbcdscms=rotartsinimda/access/users') }}"><i class="fa fa-users"></i> <span>Quản lý user</span></a></li>
        @end

        <!-- <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý user</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/users" href="{{ url('/admin/access/users') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
            </ul>
        </li> -->
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>