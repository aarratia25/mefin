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
        <x-navigation>
            <x-navigation-item icon="cursor" route="home" separator="Dashboard">
                Dashboard
            </x-item>

            <x-navigation-item icon="users" route="users.index">
                Users
            </x-item>

            <x-navigation-item icon="lock" route="roles.index" separator="Pages">
                Roles
            </x-item>

            <x-navigation-item icon="globe">
                Website
            </x-item>

            <x-navigation-item icon="wrench" prefix="users.index" :dropdown="['items' => ['name' => 'Item 1', 'route'=> 'users.index']]">
                Dropdown
            </x-item>

        </x-navigation>
    </div>
    <!-- END Side Navigation -->
</nav>