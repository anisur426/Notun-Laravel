<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

@yield('head')
<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
  @include('backend.layouts.leftsidebar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
        @include('backend.layouts.topbar')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
            @yield('content')
                 <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
        @include('backend.Layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

  @yield('scripts')

</body>

</html>