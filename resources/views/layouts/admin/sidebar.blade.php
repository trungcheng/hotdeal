<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <li><a data-route="/access/dashboard" href="{{ url('/access/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-plus"></i> <span>Đăng ký dịch vụ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/services/web-design/create" href="{{ url('/access/services/web-design/create') }}">Thiết kế website</a></li>
            <!-- <li><a style="margin-left:35px;" data-route="/access/services/domain/create" href="{{ url('/access/services/domain/create') }}">Tên miền</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/hosting/create" href="{{ url('/access/services/hosting/create') }}">Hosting</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/vps/create" href="{{ url('/access/services/vps/create') }}">VPS</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/other/create" href="{{ url('/access/services/other/create') }}">Khác</a></li> -->
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-server"></i> <span>Quản lý dịch vụ</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/services/web-design" href="{{ url('/access/services/web-design') }}">Thiết kế website</a></li>
            <!-- <li><a style="margin-left:35px;" data-route="/access/services/domain" href="{{ url('/access/services/domain') }}">Tên miền</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/hosting" href="{{ url('/access/services/hosting') }}">Hosting</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/vps" href="{{ url('/access/services/vps') }}">VPS</a></li>
            <li><a style="margin-left:35px;" data-route="/access/services/other" href="{{ url('/access/services/web-design') }}">Khác</a></li> -->
        </ul>
    </li>

    <li class="treeview">
        <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý khách hàng</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a style="margin-left:35px;" data-route="/access/customers" href="{{ url('/access/customers') }}">Danh sách</a></li>
            <li><a style="margin-left:35px;" data-route="/access/customers/create" href="{{ url('/access/customers/create') }}">Thêm mới</a></li>
        </ul>
    </li>
    
    <li><a data-route="/access/setting" href="{{ url('/access/setting') }}"><i class="fa fa-cog"></i> <span>Cấu hình chung</span></a></li>
    
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