<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body class="fixed-header menu-pin">

    <!-- BEGIN SIDEBPANEL-->
    @include('components.nav')
    <!-- END SIDEBPANEL-->

    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->

        @include('components.header')
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content">
                @yield('content')
                <!-- END CONTAINER FLUID -->
            </div>

            <!-- END PAGE CONTENT -->
            @include('components.footer')
            <!-- END COPYRIGHT -->

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- BEGIN VENDOR JS -->
    @include('components.scripts')
</body>

</html>
