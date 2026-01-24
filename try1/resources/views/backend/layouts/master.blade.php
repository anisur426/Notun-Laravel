<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

@yield("head")

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
         @include("backend.layouts.leftsideber")
        

      

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
           @include("backend.layouts.topbar")
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
               @yield("content")
            </div> <!-- content -->

            <!-- Footer Start -->
        @include("backend.Layouts.footer")
            <!-- end Footer -->

        </div>

      
    </div>
    <!-- END wrapper -->
     @yield("scripts")

    
</body>

</html>