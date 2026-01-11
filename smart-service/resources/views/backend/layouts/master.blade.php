<!DOCTYPE html>
<html lang="en">
@yield("head")

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
<!--Header include -->
   @if(Auth::guard('web')->check())
    @include('backend.layouts.header')

@elseif(Auth::guard('admin')->check())
    @include('backend.layouts.adminHeader')

@endif

        <!-- Left side column. contains the logo and sidebar -->
            @if(Auth::guard('web')->check())
        @include('backend.layouts.leftbar')
         @elseif(Auth::guard('admin')->check())
         @include('backend.layouts.adminleft')
         @endif

        <!-- Content Wrapper. Contains page content -->
        @yield("content")

        <!-- /.content-wrapper -->
        @include("backend.layouts.footer")
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab"></div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    @yield("scripts")

    <!--End of Tawk.to Script-->
</body>

</html>