<!DOCTYPE html>
<html lang="en">
@yield('head')

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        @if (Auth::guard('web')->check())
            @include('backend.layout.header')
        @elseif(Auth::guard('admin')->check())
            @include('backend.layout.admin_header')
        @elseif(Auth::guard('employe')->check())
            @include('backend.layout.employe_header')
        @endif
        <!-- Left side column. contains the logo and sidebar -->
        @if (Auth::guard('web')->check())
            @include('backend.layout.leftsidebar')
        @elseif(Auth::guard('admin')->check())
            @include('backend.layout.admin_leftsidebar')
        @elseif(Auth::guard('employe')->check())
            @include('backend.layout.employe_leftsidebar')
        @endif
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

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
        {{-- <div class="control-sidebar-bg"></div> --}}
    </div>
    @include('backend.layout.footer')
    <!-- ./wrapper -->
    @yield('script')
    <!-- jQuery 3 -->

    <!--End of Tawk.to Script-->
</body>

</html>
