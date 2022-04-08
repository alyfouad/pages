<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <img src="assets/img/logo.png" alt="logo" class="brand" data-src="assets/img/logo.png"
            data-src-retina="assets/img/logo_2x.png" width="78" height="22">
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
            <li class="m-t-10 {{ (strpos(Route::currentRouteName(), 'dashboard') !== false) ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="title">Dashboard</span>
                </a>
                <span class="icon-thumbnail"><i data-feather="shield"></i></span>
            </li>
            
            <li class="{{ (strpos(Route::currentRouteName(), 'products.index') !== false) ? 'active' : '' }}">
                <a href="{{route('products.index')}}">
                    <span class="title">Products</span>
                </a>
                <span class="icon-thumbnail"><i data-feather="box"></i></span>
            </li>

            <li class="{{ (strpos(Route::currentRouteName(), 'categories.index') !== false) ? 'active' : '' }}">
                <a href="{{route('categories.index')}}">
                    <span class="title">Categories</span>
                </a>
                <span class="icon-thumbnail"><i data-feather="menu"></i></span>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>
