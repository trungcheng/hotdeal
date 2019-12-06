<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-transform: uppercase;">Administrator</li>

        <li><a data-route="/admin/access/dashboard" href="{{ url('/admin/access/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng quan</span></a></li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span>Quản lý danh mục</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/categories" href="{{ url('/admin/access/categories') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/categories/create" href="{{ url('/admin/access/categories/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-newspaper-o"></i> <span>Quản lý bài viết</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/articles" href="{{ url('/admin/access/articles') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/articles/create" href="{{ url('/admin/access/articles/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-picture-o"></i> <span>Quản lý media</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/media/photos" href="{{ url('/admin/access/media/photos') }}"><i class="fa fa-list-ol"></i> Album ảnh</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/media/videos" href="{{ url('/admin/access/media/videos') }}"><i class="fa fa-list-ol"></i> Video</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/media/partner-logos" href="{{ url('/admin/access/media/partner-logos') }}"><i class="fa fa-list-ol"></i> Logo đối tác</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/media/slides" href="{{ url('/admin/access/media/slides') }}"><i class="fa fa-list-ol"></i> Slide trang chủ</a></li>
            </ul>
        </li>

        @superadmin
        <li class="treeview">
            <a href="javascript:void(0)"><i class="fa fa-users"></i> <span>Quản lý user</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a style="margin-left:35px;" data-route="/admin/access/users" href="{{ url('/admin/access/users') }}"><i class="fa fa-list-ol"></i> Danh sách</a></li>
                <li><a style="margin-left:35px;" data-route="/admin/access/users/create" href="{{ url('/admin/access/users/create') }}"><i class="fa fa-plus"></i> Thêm mới</a></li>
            </ul>
        </li>
        @end

        <li><a data-route="/admin/access/setting" href="{{ url('/admin/access/setting') }}"><i class="fa fa-info-circle"></i> <span>Cấu hình chung</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>