<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="link-fx font-w600 font-size-lg text-white" href="{{ route('home') }}">
                <span class="smini-visible">
                    <span class="text-white-75">D</span><span class="text-white">x</span>
                </span>
                <span class="smini-hidden">
                    <span class="text-white-75">Dash</span><span class="text-white">mix</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler" data-theme="/css/theme/xwork.css"></i>
                <!-- END Toggle Sidebar Style -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('home') }}">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-heading">Pages</li>
            <li class="nav-main-item{{ request()->is('dashboard/users') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Users</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('...') ? ' active' : '' }}" href="{{ route('users.index') }}">
                            <span class="nav-main-link-name">List - Edit - Delete</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item{{ request()->is('dashboard/roles') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-lock"></i>
                    <span class="nav-main-link-name">Roles</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('...') ? ' active' : '' }}" href="{{ route('roles.index') }}">
                            <span class="nav-main-link-name">List - Edit - Delete</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">More</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="/">
                    <i class="nav-main-link-icon si si-globe"></i>
                    <span class="nav-main-link-name">Website</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>