<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img style="max-width:50px"
                src="{{ asset('frontend/images/visci-vector-web-white.svg') }}" /></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" style="text-transform: uppercase;">
            <img style="float:left;max-width:50px" src="{{ asset('frontend/images/visci-vector-web-white.svg') }}" />
            <span style="float:left;margin-top:3px;margin-left:10px;"><b>VISCI </b> CMS</span></span>
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
                        <img src="{{ ($authAdminUser->avatar) ? $authAdminUser->avatar : asset('backend/img/logo.jpg') }}"
                            class="user-image" alt="Admin">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span
                            class="hidden-xs">{{ ($authAdminUser && $authAdminUser->username !== '' && $authAdminUser->username !== null) ? $authAdminUser->username : 'anonymous' }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ ($authAdminUser->avatar) ? $authAdminUser->avatar : asset('backend/img/logo.jpg') }}"
                                class="img-circle" alt="Admin">
                            <p>
                                {{ ($authAdminUser->full_name) ? $authAdminUser->full_name : $authAdminUser->username }}
                                - Administrator
                                <!-- <small>Member since April. 2018</small> -->
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    class="btn btn-default btn-flat">Sign out</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                {{ csrf_field() }}
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