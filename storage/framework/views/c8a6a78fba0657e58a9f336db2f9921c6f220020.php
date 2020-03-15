<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    
    <a href="<?php echo e(route('dashboard')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img style="width:40px" src="/backend/uploads/images/logo-lindo-home.png" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="text-transform: uppercase;">
        <img style="float:left;width:72px;margin-top:5px;" src="/backend/uploads/images/logo-lindo-home.png" /> 
        <span style="float:left;margin-top:3px;margin-left:10px;"><b>Lindo</b>CMS</span></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo e(($authAdminUser->avatar) ? $authAdminUser->avatar : asset('components/admin-lte/dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="Admin">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo e(($authAdminUser && $authAdminUser->username !== '' && $authAdminUser->username !== null) ? $authAdminUser->username : 'anonymous'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo e(($authAdminUser->avatar) ? $authAdminUser->avatar : asset('components/admin-lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="Admin">
                <p>
                  <?php echo e(($authAdminUser->full_name) ? $authAdminUser->full_name : $authAdminUser->username); ?> - Administrator
                  <!-- <small>Member since April. 2018</small> -->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo e(route('profile')); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                </div>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display:none;">
                    <?php echo e(csrf_field()); ?>

                </form>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
<!--           <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <style type="text/css">
    .skin-blue .main-header .logo{
      background: #c3050d;
    }
    .skin-blue .main-header .navbar{
      background: #d1232a;
    }
    .skin-blue .sidebar-menu>li.active>a {
      border-left-color: #d1232a;
    }
    .skin-blue .main-header li.user-header {
      background-color: #d1232a;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
      background-color: #c3050d;
    }
    .skin-blue .main-header .logo:hover {
      background-color: #d1232a;
    }
    .main-header .logo .logo-lg img {
      max-width: 200px;
      max-height: 50px;
    }
    .main-header .logo .logo-mini img {
      max-width: 50px;
      max-height: 50px;
    }
  </style>