<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <h3 style="color:#016de4;    font-family: monospace;font-weight: bold;">Mz Tracking</h3>
        {{-- <img src="{{asset('/')}}assets/img/logo.png" alt="logo" class="brand" data-src="{{asset('/')}}assets/img/logo.png" data-src-retina="{{asset('/')}}assets/img/logo_2x.png" width="78" height="22"> --}}
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
            
            <li class="{{ (strpos(Route::currentRouteName(), 'live_tracking') !== false) ? 'active' : '' }}">
                <a href="{{route('live_tracking')}}">
                    <span class="title">live tracking</span>
                </a>
                <span class="icon-thumbnail"><i data-feather="map-pin"></i></span>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>
